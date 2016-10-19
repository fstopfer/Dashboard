<?php
    
    // Products table
    function getAllProducts(){
        global $connection;
        
        $query_string = "SELECT * FROM products";
        
        $result = $connection->query($query_string);
        
        $result = $result->fetch_all(MYSQLI_ASSOC);
        
        return $result;
    }

    // Categories table
    function getAllCategories(){
        global $connection;
        
        $query_string = "SELECT * FROM categories";
        
        $result = $connection->query($query_string);
        
        $result = $result->fetch_all(MYSQLI_ASSOC);
        
        return $result;
    }

    // Customers table
    function getAllCustomers(){
        global $connection;
        
        $query_string = "SELECT * FROM customers";
        
        $result = $connection->query($query_string);
        
        $result = $result->fetch_all(MYSQLI_ASSOC);
        
        return $result;
    }

    // Sales table
    function getAllSales(){
        global $connection;
        
        $query_string = "SELECT * FROM sales";
        
        $result = $connection->query($query_string);
        
        $result = $result->fetch_all(MYSQLI_ASSOC);
        
        return $result;
    }

    // Add product form (add_product.php)
    function addProduct(){
        global $connection;
        
        $pcode = $_POST['product_code'];
        $pcat = $_POST['category'];
        $pname = $_POST['product_name'];
        $stock = $_POST['stock'];
        $warranty = $_POST['warranty'];
        $price = $_POST['price'];
        $manufacturer = $_POST['manufacturer'];
        $scode = $_POST['supplier_code'];
        $description = $_POST['description'];
        
        $img = $_FILES['image'];
        $target_dir = "../images/";
        $target_path = $target_dir . $img['name'];
            
        if(file_exists($target_path)){
            echo "Sorry, file already exists ";
        }
        else{
            $filetype = pathinfo($img['name'], PATHINFO_EXTENSION);
            
            if($filetype == "jpg" || $filetype == "jpeg" || $filetype == "png" || $filetype == "gif"){
                
                move_uploaded_file($img['tmp_name'], $target_path);
                
                createThumb($img['name'], $target_path);
            }
        }
        
        $query_string = "INSERT INTO products (product_code, price, category, description, stock, warranty, product_name, images, manufacturer, supplier_code) VALUES ('$pcode', '$price', '$pcat', '$description', '$stock', '$warranty', '$pname', '$target_path', '$manufacturer', '$scode')";
        
        $result = $connection->query($query_string);
        
        if(!$result){
            
            echo "Unable to add product to the db : " . $connection->error;
        }
        else{
            echo "Product $pname was added to the database.";
        }
    }

    // Add/Edit product form - part of addProduct and updateProduct function (add_product.php)
    function createThumb($img_name, $target_path){
        
        $thumbname = "../images/thumb_" . $img_name;
        $filetype = pathinfo($img_name, PATHINFO_EXTENSION);
        
        switch($filetype){
                
            case "jpeg":
            case "jpg":
                
                $image = imagecreatefromjpeg($target_path);
                break;
                
            case "png":
                $image = imagecreatefrompng($target_path);
                break;
                
            case "gif":
                $image = imagecreatefromgif($target_path);
                break;
                
            default:
                
        }
        
        $imageWidth = imagesx($image);
        $imageHeight = imagesy($image);
        
        $thumbnailWidth = 150;
        $thumbnailHeight = 150;
        $thumb = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);
        
        imagecopyresized($thumb, $image, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $imageWidth, $imageHeight);
        
        imagejpeg($thumb, $thumbname);
        
        imagedestroy($image);
        imagedestroy($thumb);
    }

    // Get product from the db so that it can be edited
    function getProduct($id){
        global $connection;
        
        $query_string = "SELECT * FROM products WHERE product_code=$id ";
        
        $result = $connection->query($query_string);
        
        $result = $result->fetch_all(MYSQLI_ASSOC);
        
        return $result;
    }

    // Save edited product (edit_product.php)
    function updateProduct($pcode){
        global $connection;
        
        $pcode = $_POST['product_code'];
        $pcat = $_POST['category'];
        $pname = $_POST['product_name'];
        $stock = $_POST['stock'];
        $warranty = $_POST['warranty'];
        $price = $_POST['price'];
        $manufacturer = $_POST['manufacturer'];
        $scode = $_POST['supplier_code'];
        $description = $_POST['description'];
        
        $img = $_FILES['image'];
        $target_dir = "../images/";
        $target_path = $target_dir . $img['name'];
            
        if(file_exists($target_path)){
            echo "Sorry, file already exists ";
        }
        else{
            $filetype = pathinfo($img['name'], PATHINFO_EXTENSION);
            
            if($filetype == "jpg" || $filetype == "jpeg" || $filetype == "png" || $filetype == "gif"){
                
                move_uploaded_file($img['tmp_name'], $target_path);
                
                createThumb($img['name'], $target_path);
            }
        }
        
        $query_string = "UPDATE products SET price=$price, category='$pcat', description='$description', stock=$stock, warranty=$warranty, product_name='$pname', images='$target_path', manufacturer='$manufacturer', supplier_code=$scode WHERE product_code=$pcode ";
        
        $result = $connection->query($query_string);
        
        if(!$result){
            
            echo "Unable to update product : " . $connection->error;
        }
        else{
            echo "Product $pname was updated.";
        }
    }

    // Delete a product from the db (from the products_table.php)
    function deleteProduct($id){
        global $connection;
        
        $query_string = "DELETE FROM products WHERE product_code=$id ";
        
        $result = $connection->query($query_string);
        
        if(!$result){
            echo "An error ocurred : " . $connection->error;
        }
        else{
            echo "Product $id was deleted from the database.";
        }
    }

    // Add a new category form (add_category.php)
    function addCategory(){
        global $connection;
        
        $name = $_POST['cat_name'];
        $description = $_POST['cat_description'];
        
        $query_string = "INSERT INTO categories (cat_name, cat_description) VALUES ('$name', '$description')";
        
        $result = $connection->query($query_string);
        
        if(!$result){
            
            echo "Unable to add category to the db : " . $connection->error;
        }
        else{
            echo "Category $name was added to the database.";
        }
    }

    // Get category from the db so that it can be edited
    function getCategory($id){
        global $connection;
        
        $query_string = "SELECT * FROM categories WHERE id=$id ";
        
        $result = $connection->query($query_string);
        
        $result = $result->fetch_all(MYSQLI_ASSOC);
        
        return $result;
    }

    // Save edited category (edit_category.php)
    function updateCategory($id){
        global $connection;
        
        $name = $_POST['cat_name'];
        $description = $_POST['cat_description'];
        
        $query_string = "UPDATE categories SET cat_name='$name', cat_description='$description' WHERE id=$id ";
        
        $result = $connection->query($query_string);
        
        if(!$result){
            
            echo "Unable to update category : " . $connection->error;
        }
        else{
            echo "Category $name was updated.";
        }
    }

    // Delete a category from the db (from the categories_table.php)
    function deleteCategory($id){
        global $connection;
        
        $category = getCategory($id);
        foreach($category as $cat){
        $name = $cat['cat_name'];
        }
        
        $query_string = "DELETE FROM categories WHERE id=$id ";
        
        $result = $connection->query($query_string);
        
        if(!$result){
            echo "An error ocurred : " . $connection->error;
        }
        else{
            echo "Category $name was deleted from the database.";
        }
    }
    
    // Get customer from the db so that it can be edited
    function getCustomer($id){
        global $connection;
        
        $query_string = "SELECT * FROM customers WHERE customer_nr=$id ";
        
        $result = $connection->query($query_string);
        
        $result = $result->fetch_all(MYSQLI_ASSOC);
        
        return $result;
    }

    // Save edited customer (edit_customer.php)
    function updateCustomer($id){
        global $connection;
        
        $id = $_POST['customer_nr'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $address = $_POST['billing_address'];
        $company = $_POST['company'];
        $email = $_POST['email'];
        $phone = $_POST['phone_nr'];
        
        $query_string = "UPDATE customers SET firstname='$fname', lastname='$lname', billing_address='$address', company='$company', email='$email', phone_nr=$phone WHERE customer_nr=$id ";
        
        $result = $connection->query($query_string);
        
        if(!$result){
            
            echo "Unable to update customer entry : " . $connection->error;
        }
        else{
            echo "Customer entry number $id was updated.";
        }
    }

    // Delete customer entry from the db (from the customer_table.php)
    function deleteCustomer($id){
        global $connection;
        
        $query_string = "DELETE FROM customers WHERE customer_nr=$id ";
        
        $result = $connection->query($query_string);
        
        if(!$result){
            echo "An error ocurred : " . $connection->error;
        }
        else{
            echo "Customer under number $id was deleted from the database.";
        }
    }

    // Delete sale entry from the db (from the sales_table.php)
    function deleteSale($id){
        global $connection;
        
        $query_string = "DELETE FROM sales WHERE sales_nr=$id ";
        
        $result = $connection->query($query_string);
        
        if(!$result){
            echo "An error ocurred : " . $connection->error;
        }
        else{
            echo "Sale entry number $id was deleted from the database.";
        }
    }

?>