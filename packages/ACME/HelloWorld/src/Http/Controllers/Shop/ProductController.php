<?php

namespace ACME\HelloWorld\Http\Controllers\Shop;

use ACME\HelloWorld\Http\Controllers\Controller;
use ACME\HelloWorld\Models\MyProduct;
use ACME\HelloWorld\Repository\CartRepository;
use ACME\HelloWorld\Repository\PostRepository;
use ACME\HelloWorld\Repository\ProductRepository;
use ACME\HelloWorld\Repository\UserRepository;
use Laravel\Socialite\One\User;

class ProductController extends Controller
{

    public function __construct(
    )
    {
    }

    public function getproduct()
    {
       return MyProduct::all();
    }

}
