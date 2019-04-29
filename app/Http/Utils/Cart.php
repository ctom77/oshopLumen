<?php
namespace App\Http\Utils;

class Cart{

    public function load($id){

        $_SESSION['cart'][$id] = array();

    }

    public function add($articleId, $articleName, $articlePrice){

        

        if (!isset($_SESSION["cart"][$articleId])){

            $this->load($articleId);
            $_SESSION["cart"][$articleId]['qty'] = 1;
            $_SESSION["cart"][$articleId]['name'] = $articleName;
            $_SESSION["cart"][$articleId]['price'] = $articlePrice;
            $_SESSION["cart"][$articleId]['id'] = $articleId;

        }else{

            $_SESSION["cart"][$articleId]['qty'] += 1;
            $_SESSION["cart"][$articleId]['name'] = $articleName;
            $_SESSION["cart"][$articleId]['price'] = $articlePrice;
            $_SESSION["cart"][$articleId]['id'] = $articleId;

        }

    }

    public function remove($articleId, $articleName, $articlePrice){

        
            if($_SESSION["cart"][$articleId]['qty'] > 1){
            $_SESSION["cart"][$articleId]['qty'] -= 1;
            $_SESSION["cart"][$articleId]['name'] = $articleName;
            $_SESSION["cart"][$articleId]['price'] = $articlePrice;
            $_SESSION["cart"][$articleId]['id'] = $articleId;
            }else{
                unset($_SESSION["cart"][$articleId]);
            }

    }




}