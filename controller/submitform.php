<?php

    include "../model/connect.php";
    include "../model/functions.php";

    if(isset($_POST['formAction'])) {
        $formAction = $_POST['formAction'];
    
        switch($formAction){
            
            case("addproduct"):
                addProduct();
                $products = getAllProducts();
                include "../view/products_table.php";
                break;
                
            case("editproduct"):
                updateProduct($_POST['product_code']);
                $products = getAllProducts();
                include "../view/products_table.php";
                break;
                
            case("addcategory"):
                addCategory();
                $categories = getAllCategories();
                include "../view/categories_table.php";
                break;
                
            case("editcategory"):
                updateCategory($_POST['cat_id']);
                $categories = getAllCategories();
                include "../view/categories_table.php";
                break;
                
            case("editcustomer"):
                updateCustomer($_POST['customer_nr']);
                $customers = getAllCustomers();
                include "../view/customers_table.php";
                break;
                
            default:
                
        }
    }
    else{
        $products = getAllProducts();
        include "../view/products_table.php";
    }

?>