<?php

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class Identicon extends Facade {
	protected static function getFacadeAccessor() { return 'Identicon'; }
}
