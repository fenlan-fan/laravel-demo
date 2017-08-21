<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $table = 'books';

    protected $fillable = ['name', 'author', 'amount', 'brief', 'price', 'image', 'keywords'];

    protected $primaryKey = 'id';

    public $timestamps = true;

}
