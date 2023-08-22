<?php

namespace ACME\HelloWorld\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyUser extends Model //implements \ACME\HelloWorld\Contracts\MyUser
{

    use HasFactory;

    protected $table = 'my_user'; // Set the custom table name


    protected $fillable = ['email'];

    // Define relationship with carts
    public function carts()
    {
        return $this->hasMany(MyCart::class, 'user_id', 'id');
    }
}
