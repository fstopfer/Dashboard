<?php

    include "../model/connect.php";
	include "../model/functions.php";

    if(isset($_GET['table'])){
        $table = $_GET['table'];
        
        switch($table){
            
            case("Products"):
                $products = getAllProducts();
                include "../view/products_table.php";
                break;
            
            case("Categories"):
                $categories = getAllCategories();
                include "../view/categories_table.php";
                break;
            
            case("Customers"):
                $customers = getAllCustomers();
                include "../view/customers_table.php";
                break;
                
            case("Sales"):
                $sales = getAllSales();
                include "../view/sales_table.php";
                break;
            
            //Revenue table will be added on a need to basis
            //case("Revenue"):
                //function
                //include "";
                //break;
                
            default:
                
        }
    }
    else{
        echo "An error ocurred";
    }

?>