<?php

namespace ACME\HelloWorld\Http\Controllers\Admin;

use ACME\HelloWorld\Repository\CartRepository;
use ACME\HelloWorld\Repository\ProductRepository;
use ACME\HelloWorld\Repository\UserRepository;
use Illuminate\Http\Request;
use ACME\HelloWorld\Http\Controllers\Controller;
use ACME\HelloWorld\Repository\PostRepository;

class CartController extends Controller
{
    /**
     * Create a controller instance.
     *
     * @param  ACME\HelloWorld\Repository\ProductRepository  $ProductRepository
     * @param  ACME\HelloWorld\Repository\CartRepository $cartRepository
     * @param  ACME\HelloWorld\Repository\UserRepository $userRepository
     * @return void
     */
    public function __construct(protected ProductRepository $productRepository,
                                protected CartRepository $cartRepository,
                                protected UserRepository $userRepository)
    {

    }

    /**
     * Index.
     *
     * @return \Illuminate\View\View
     */
    public function index() {

    }

    /**
     * Create.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        //
    }

    /**
     * Store.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function store(Request $request) {
        //
    }
}
