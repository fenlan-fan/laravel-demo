<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';

    protected $fillable = ['userID', 'bookID', 'amount'];

    protected $primaryKey = 'id';

    public $timestamps = true;
}
