<?php

namespace ACME\HelloWorld\Repository;

use Webkul\Core\Eloquent\Repository;

class UserRepository extends Repository
{
    /**
     * Specify the Model class name
     *
     * @return string
     */
    function model(): string
    {
        return 'ACME\HelloWorld\Contracts\MyUser';
    }
}
