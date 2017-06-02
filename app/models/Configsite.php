<?php
	use Illuminate\Auth\UserInterface;
	use Illuminate\Auth\Reminders\RemindableInterface;
	use Illuminate\Database\Eloquent\SoftDeletingTrait;

	class Configsite extends Eloquent
	{
		use SoftDeletingTrait;
	    protected $table = 'configsite';
	    protected $fillable = ['meta_title','meta_description','meta_keyword',
	    	'meta_image','code','address','phone',
	    	'email','company_name','company_information',
	    	'company_contact','map','form_manual'];
	    protected $dates = ['deleted_at'];
	}
?>