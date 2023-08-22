<?php

namespace ACME\HelloWorld\Http\Controllers\Shop;

use ACME\HelloWorld\Http\Controllers\Controller;
use ACME\HelloWorld\Repository\PostRepository;

class ProductController extends Controller
{
    /**
     * Create a controller instance.
     *
     * @param  \ACME\HelloWorld\Repository\PostRepository  $postRepository
     * @return void
     */
    public function __construct(protected PostRepository $postRepository)
    {
    }

    /**
     * Index. add product
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

    }

}
