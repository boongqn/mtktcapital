<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use \File, Carbon\Carbon;

class Customer extends Model
{
	public $tables   = 'customers';
	
	public $fillable = [
    	'full_name', 'first_name', 'last_name', 'email', 'phone', 'file', 'business', 
    	'industry', 'q_money','q_fund', 'q_credit', 'note', 'role_id', 'state', 'active'
    ];

    protected $timestamp = true;


    public function active() {
    	$this->active = true; $this->save();
    	return true;
    }
  	
    public function fixFullName($request) {

        $this->full_name = $request->get('last_name').' '.$request->get('first_name');

        $this->save();

        return true;
    }

    public function setFullNameAttribute($value) {
        $this->attributes['full_name'] = ucwords($value);
    }


    public function setUploadFile(UploadedFile $uploadedFile) {
        $fileName = Carbon::now()->timestamp.'-'.strtolower($uploadedFile->getClientOriginalName());
       
        if(!File::isDirectory(public_path('stuff/file'))) {
            File::makeDirectory(public_path('stuff/file'));
        }

        $uploadedFile->move(public_path('stuff/file'), $fileName);

        $this->file = 'stuff/file/'.$fileName;

        $this->save();

        return true;
    }
}
