<?php
	use Illuminate\Auth\UserInterface;
	use Illuminate\Auth\Reminders\RemindableInterface;
	use Illuminate\Database\Eloquent\SoftDeletingTrait;

	class Gallery extends Eloquent
	{
		use SoftDeletingTrait;
	    protected $table = 'galleries';
	    protected $fillable = ['name','slug','summary','description','image','meta_title','meta_description','meta_keyword','meta_image','type','start_date','status'];
	    protected $dates = ['deleted_at'];

	}
?>