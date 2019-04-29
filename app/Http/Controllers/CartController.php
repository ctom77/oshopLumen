<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Utils\Cart;

Class CartController extends Controller{

    

    public function listCart()
    {
        return view('cart');
    }

    public function addCart()
    {
        $cart = new Cart();

        if ($_POST['action'] === "plus" || $_POST['action'] ==="Ajouter au panier") {

           $cart->add($_POST['productId'], $_POST['productName'], $_POST['productPrice']); 

        } elseif ($_POST['action'] === "moins") {

            $cart->remove($_POST['productId'], $_POST['productName'], $_POST['productPrice']); 

        }

        $root = explode('/', $_SERVER["HTTP_REFERER"] ); 
        $count = count($root);
        $LastIndex = $root[$count -1];


        if ($LastIndex !== "cart") {

            return redirect()->route('product',['id' => $_POST['productId']]);
            echo "salut";
        
            
      
            
        }else {

            return redirect()->route('cart');
            echo "salut 1";
        
            
            
        
        

        }
        


    }


}