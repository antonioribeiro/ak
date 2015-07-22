<?php

use \DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use PragmaRX\Sdk\Services\Clipping\Data\Entities\ClippingAuthor;
use PragmaRX\Sdk\Services\Clipping\Data\Entities\Clipping;
use PragmaRX\Sdk\Services\Clipping\Data\Entities\ClippingCategory;
use PragmaRX\Sdk\Services\Clipping\Data\Entities\ClippingFile;
use PragmaRX\Sdk\Services\Clipping\Data\Entities\ClippingFileType;
use PragmaRX\Sdk\Services\Clipping\Data\Entities\ClippingLocality;
use PragmaRX\Sdk\Services\Clipping\Data\Entities\ClippingTag;
use PragmaRX\Sdk\Services\Clipping\Data\Entities\ClippingVehicle;
use PragmaRX\Sdk\Services\Tags\Data\Entities\Tag;

class ClippingTableSeeder extends Seeder
{
	private $country;

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->seedClipping();

		Model::reguard();
	}

	private function seedClipping()
	{
		DB::table('clipping')->delete();
		DB::table('clipping_authors')->delete();
		DB::table('clipping_vehicles')->delete();
		DB::table('clipping_categories')->delete();
		DB::table('clipping_localities')->delete();
		DB::table('clipping_tags')->delete();
		DB::table('clipping_files')->delete();
		DB::table('clipping_files_types')->delete();
		DB::table('tags')->delete();

		$clippings = $this->loadClipping();

		foreach ($clippings as $clipping)
		{
			$parts = explode("\t", $clipping);

			$created_at = Carbon::createFromFormat('m/d/Y H:i:s', $parts[0]);
			$published_at = Carbon::createFromFormat('m/d/Y', $parts[1]);

			if ($author = $parts[7])
			{
				$author = ClippingAuthor::firstOrCreate(['name' => $author]);
			}

			if ($vehicle = $parts[6])
			{
				$vehicle = ClippingVehicle::firstOrCreate(['name' => $vehicle]);
			}

			if ($category = $parts[6])
			{
				$category = ClippingCategory::firstOrCreate(['name' => $category]);
			}

			if ($locality = $parts[8])
			{
				$locality = ClippingLocality::firstOrCreate(['name' => $locality]);
			}

			$clipping = Clipping::create([
				'heading' => $parts[2],
				'subheading' => $parts[3],
				'body' => $parts[4],
				'author_id' => $author ? $author->id : null,
				'vehicle_id' => $vehicle ? $vehicle->id : null,
				'category_id' => $category ? $category->id : null,
				'locality_id' => $locality ? $locality->id : null,
			    'url' => $parts[10],
			    'article_preview_url' => isset($parts[17]) ? $parts[17] : null,
				'published_at' => $published_at,
				'created_at' => $created_at,
			]);

			foreach ($tags = explode(',', $parts[9]) as $key => $tag)
			{
				if ($tag = Tag::findOrCreateTag($tag))
				{
					ClippingTag::firstOrCreate([
						'clipping_id' => $clipping->id,
						'tag_id' => $tag->id
					]);
				}
			}

			$clippingFile = app()->make(ClippingFile::class);

			if (isset($parts[11]) && ! empty($parts[11]))
			{
				$clippingFile->createFor(
					$clipping,
					false,
					false,
					$parts[11],
					ClippingFileType::firstorCreate(['name' => 'video'])
				);
			}

			$isMainFile = true;

			for ($counter = 11; $counter <= 16; $counter++)
			{
				if (isset($parts[$counter]) && ! empty($parts[$counter]))
				{
					$clippingFile->createFor(
						$clipping,
						$isMainFile,
						false,
						$parts[$counter],
						ClippingFileType::firstorCreate(['name' => 'image'])
					);

					$isMainFile = false;
				}
			}

			if (isset($parts[17]) && ! empty($parts[17]))
			{
				$file = str_replace('?dl=0', '?dl=1', $parts[17]);

				$clippingFile->createFor(
					$clipping,
					false,
					true, /// this is the snapshot
					$file,
					ClippingFileType::firstorCreate(['name' => 'image'])
				);
			}
		}
	}

	private function loadClipping()
	{
		$clippings = file(__DIR__.DIRECTORY_SEPARATOR.'clipping.tsv');

		unset($clippings[0]);

		return $clippings;
	}

	private function findCityByName($city)
	{
		if ( ! $found = City::where('name', '~*', $city)->first())
		{
			dd($city);
		}

		return $found;
	}
}
