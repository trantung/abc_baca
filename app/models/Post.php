<?php
	use Illuminate\Auth\UserInterface;
	use Illuminate\Auth\Reminders\RemindableInterface;

	class Post extends Eloquent
	{
	    protected $table = 'posts';
	    protected $fillable = ['name','slug','summary','description','image','meta_title','meta_description','meta_keyword','meta_image','type','gallery_id','embed','start_date','status'];
	}
?>