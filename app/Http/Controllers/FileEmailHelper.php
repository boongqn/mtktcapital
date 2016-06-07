<?php 

namespace App\Http\Controllers;

use File;

class FileEmailHelper
{	
	const CHECK  = 'resources\views\partials\email_confirm.blade.php';

	// show all content
	public static function show() {
		return self::check(base_path(self::CHECK));
	}

	// get file from systems
	public static function get($file) {
		return File::get($file);
	}

	// update file
	public static function put($file) {
		return File::put(base_path(self::CHECK), $file);
	}

	// check file exists
	public static function check($file = null) {
		if(File::exists($file) && File::isFile($file)) {
			return self::get($file);
		}
		return $file;
	}

}