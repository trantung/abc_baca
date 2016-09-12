<?php
	use Illuminate\Auth\UserInterface;
	use Illuminate\Auth\Reminders\RemindableInterface;

	class GalleryImage extends Eloquent
	{
		use SoftDeletingTrait;
	    protected $table = 'gallery_images';
	    protected $fillable = ['name','summary','url','image','gallery_id','status'];

	}
?>