<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class CityProject extends Eloquent
{
    protected $table = 'city_projects';
    protected $fillable = ['post_id','city_id'];

}
