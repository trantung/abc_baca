<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class TypeProject extends Eloquent
{
	use SoftDeletingTrait;
    protected $table = 'type_projects';
    protected $fillable = ['name','weight_number','status'];
    protected $dates = ['deleted_at'];


    
}
