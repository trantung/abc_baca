<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class RelationProject extends Eloquent
{
    protected $table = 'relation_projects';
    protected $fillable = ['post_id','type_project_id'];

}
