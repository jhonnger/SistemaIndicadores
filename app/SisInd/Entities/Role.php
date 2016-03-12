<?php

namespace SisInd\Entities;

class Role extends \Eloquent {

	const ADMIN = 'ADMIN';

	protected $fillable = [];

	public static function adminRoleId() {
		return self::where('name', '=', self::ADMIN)->firstOrFail()->id;
	}
}