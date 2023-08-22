<?php

namespace ACME\HelloWorld\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyCart extends Model
{
    use HasFactory;

    protected $table = 'my_cart'; // Set the custom table name

    protected $fillable = ['user_id', 'product_id', 'quantity'];

    // Define relationships
    public function user()
    {
        return $this->belongsTo(MyUser::class,'user_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(MyProduct::class,'product_id', 'id');
    }
}
