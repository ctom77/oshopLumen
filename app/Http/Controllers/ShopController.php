<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Brand;
use App\Category;
use App\Product;
use App\Type;
use Illuminate\Http\Request;
Class ShopController extends Controller {

    
    public function listCategories(){

        $products = Product::all();
        $categories = DB::select('SELECT * from category WHERE home_order != 0 ORDER BY home_order');

        

        return view('home',
    [
        'categories' => $categories,
    ]);

    }

    public function listProductsByCategory($id){
        $productsByCategory = DB::select("SELECT * FROM product WHERE category_id = $id");

        return view('category',
        [
            'productsByCategory' => $productsByCategory
        ]);
    }

    public function listProductsByBrand($id){
        $productsByBrand = DB::select("SELECT * FROM product WHERE brand_id = $id");

        return view('brand',
        [
            'productsByBrand' => $productsByBrand
        ]);
    }

    public function listProductsByType($id){
        $productsByType = DB::select("SELECT * FROM product WHERE type_id = $id");

        return view('type',
        [
            'productsByType' => $productsByType
        ]);
    }
   
    public function oneProduct($id){
        $oneProduct = DB::select("SELECT * FROM product WHERE `id` = $id");

        return view('product',
        [
            'oneProduct' => $oneProduct
        ]);
    }

}

