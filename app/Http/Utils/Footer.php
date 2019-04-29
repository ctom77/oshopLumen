<?php
namespace App\Http\Utils;
use Illuminate\Support\Facades\DB;


Class Footer{

    public static function brandsFooter(){

    $brandsFooter = DB::select('SELECT * from brand WHERE footer_order != 0 ORDER BY footer_order');

    return $brandsFooter;
}

public static function typesFooter(){

    $typesFooter = DB::select('SELECT * from `type` WHERE footer_order != 0 ORDER BY footer_order');

    return $typesFooter;
}
}