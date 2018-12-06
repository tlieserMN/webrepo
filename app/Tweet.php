<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    //Table Name
    protected $table = 'tweets';

    // Primary Key
    protected $primaryKey = 'id';
}
