<?php

    include "../model/connect.php";
	include "../model/functions.php";

    if(isset($_GET['table'])){
        $table = $_GET['table'];
        
        switch($table){
                
            case("ptable"):
                
                if(isset($_GET['action'])){
                    $action = $_GET['action'];

                    switch($action){

                        case("Add Product"):
                            include "../view/add_product.php";
                            break;

                        case("Edit"):
                            $id = $_GET['id'];
                            $product = getProduct($id);
                            include "../view/edit_product.php";
                            break;

                        case("Delete"):
                            $id = $_GET['id'];
                            deleteProduct($id);
                            $products = getAllProducts();
                            include "../view/products_table.php";
                            break;

                        default:
                                
                    }
                }
                break;
                
            case("cattable"):
                if(isset($_GET['action'])){
                    $action = $_GET['action'];

                    switch($action){

                        case("Add Category"):
                            include "../view/add_category.php";
                            break;

                        case("Edit"):
                            $id = $_GET['id'];
                            $category = getCategory($id);
                            include "../view/edit_category.php";
                            break;

                        case("Delete"):
                            $id = $_GET['id'];
                            deleteCategory($id);
                            $categories = getAllCategories();
                            include "../view/categories_table.php";
                            break;

                        default:
                                
                    }
                }
                break;
                
            case("custtable"):
                if(isset($_GET['action'])){
                    $action = $_GET['action'];

                    switch($action){
                        
                        case("Edit"):
                            $id = $_GET['id'];
                            $customer = getCustomer($id);
                            include "../view/edit_customer.php";
                            break;

                        case("Delete"):
                            $id = $_GET['id'];
                            deleteCustomer($id);
                            $customers = getAllCustomers();
                            include "../view/customers_table.php";
                            break;

                        default: 
                    }
                }
                break;
                
            case("stable"):
                $id = $_GET['id'];
                deleteSale($id);
                $sales = getAllSales();
                include "../view/sales_table.php";
                break;
                
            default:
                
        }
    }
    else{
        echo "An error ocurred";
    }

?>