<?php

namespace App\Http\Controllers;
use App\Http\Utils\Footer;

use App\Brand;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //

    public function __construct(){
        view()->share('brandsFooter', Footer::brandsFooter());
        view()->share('typesFooter', Footer::typesFooter());
        }
    

       
}
