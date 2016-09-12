<?php
	use Illuminate\Auth\UserInterface;
	use Illuminate\Auth\Reminders\RemindableInterface;
	use Illuminate\Database\Eloquent\SoftDeletingTrait;

	class PostType extends Eloquent
	{
		use SoftDeletingTrait;
	    protected $table = 'post_types';
	    protected $fillable = ['name','slug','summary','description','image','meta_title','meta_description','meta_keyword','meta_image','status'];
	    protected $dates = ['deleted_at'];

	}
?>