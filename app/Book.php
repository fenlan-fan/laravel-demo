<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $table = 'book';

    protected $fillable = ['name', 'author', 'amount', 'brief', 'price', 'image'];

    protected $primaryKey = 'id';

    public $timestamps = true;

}
