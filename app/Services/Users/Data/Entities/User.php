<?php

namespace App\Services\Users\Data\Entities;

use Illuminate\Auth\Passwords\CanResetPassword;
use PragmaRX\Sdk\Core\Data\Attributes\BusinessHours;
use App\Services\Users\Data\Presenters\User as UserPresenter;
use PragmaRX\Sdk\Services\Users\Data\Entities\User as SdkUserModel;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends SdkUserModel implements AuthenticatableContract, CanResetPasswordContract
{
	use CanResetPassword, BusinessHours;

	protected $presenter = UserPresenter::class;
}
