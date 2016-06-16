<?php 

namespace App\Http\Controllers;

use File;

class FileEmailHelper
{	
	const EMAIL_CONFIRM = 'resources/views/partials/email_confirm.blade.php';
	const EMAIL_NOTIFY  = 'resources/views/partials/email_notify.blade.php';

	// show all content
	public static function showMailConfirm() {
		return self::check(base_path(self::EMAIL_CONFIRM));
	}

	public static function showMailNotify() {
		return self::check(base_path(self::EMAIL_NOTIFY));
	}

	// get file from systems
	public static function get($file) {
		return File::get($file);
	}


	// check file exists
	public static function check($file = null) {
		if(File::exists($file) && File::isFile($file)) {
			return self::get($file);
		}
		return $file;
	}
	
	// update file
	public static function put($file) {
		return File::put(base_path(self::EMAIL_CONFIRM), $file);
	}

	// update file
	public static function delete($path) {
		return File::delete(public_path($path));
	}
}