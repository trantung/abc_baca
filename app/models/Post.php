<?php
	use Illuminate\Auth\UserInterface;
	use Illuminate\Auth\Reminders\RemindableInterface;
	use Illuminate\Database\Eloquent\SoftDeletingTrait;

	class Post extends Eloquent
	{
		use SoftDeletingTrait;
	    protected $table = 'posts';
	    protected $fillable = ['name','slug','summary','description','image','meta_title','meta_description','meta_keyword','meta_image','type','slide_id','start_date','status'];
	    protected $dates = ['deleted_at'];

	}
?>