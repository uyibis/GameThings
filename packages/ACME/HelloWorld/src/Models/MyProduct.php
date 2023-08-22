<?php

namespace ACME\HelloWorld\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyProduct extends Model //implements \ACME\HelloWorld\Contracts\MyProduct
{
    use HasFactory;

    protected $table = 'my_product'; // Set the custom table name

    protected $fillable = ['name', 'description', 'price', 'quantity', 'image'];

    // Define relationship with carts
    public function carts()
    {
        return $this->hasMany(MyCart::class, 'product_id', 'id');
    }
}
