<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use PragmaRX\Sdk\Services\Clipping\Data\Entities\ClippingAuthor;
use PragmaRX\Sdk\Services\Clipping\Data\Entities\Clipping;
use PragmaRX\Sdk\Services\Clipping\Data\Entities\ClippingCategory;
use PragmaRX\Sdk\Services\Clipping\Data\Entities\ClippingLocality;
use PragmaRX\Sdk\Services\Clipping\Data\Entities\ClippingVehicle;

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
		Clipping::truncate();

		$clippings = $this->loadClipping();

		foreach ($clippings as $clipping)
		{
			$parts = explode("\t", $clipping);

			$created_at = Carbon::createFromFormat('m/d/Y H:i:s', $parts[0]);
			$published_at = Carbon::createFromFormat('m/d/Y', $parts[1]);

			$author = ClippingAuthor::firstOrCreate(['name' => $parts[7]]);
			$vehicle = ClippingVehicle::firstOrCreate(['name' => $parts[6]]);
			$category = ClippingCategory::firstOrCreate(['name' => $parts[5]]);
			$locality = ClippingLocality::firstOrCreate(['name' => $parts[8]]);

			Clipping::create([
				'heading' => $parts[2],
				'subheading' => $parts[3],
				'body' => $parts[4],
				'author_id' => $author->id,
				'vehicle_id' => $vehicle->id,
				'category_id' => $category->id,
				'locality_id' => $locality->id,
				'tags' => $parts[9],
			    'url' => $parts[10],
			    'article_preview_url' => isset($parts[17]) ? $parts[17] : null,
				'published_at' => $published_at,
				'created_at' => $created_at,
			]);
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
