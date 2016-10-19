<?php

    foreach($product as $prod){
        
        $pcode = $prod['product_code'];
        $pcat = $prod['category'];
        $pname = $prod['product_name'];
        $stock = $prod['stock'];
        $warranty = $prod['warranty'];
        $price = $prod['price'];
        $manufacturer = $prod['manufacturer'];
        $scode = $prod['supplier_code'];
        $description = $prod['description'];
        $img = $prod['images'];
    }

    echo "<div class='product'>";
        echo "<form class='forms' id='editproduct' method='post' action='javascript:submitForm();' enctype='multipart/form-data'>";

            echo "<label>Product code</label><br>";
            echo "<input type='text' name='product_code' value='$pcode' readonly required><br><br>";

            echo "<label>Product category</label><br>";
            echo "<input type='text' name='category' value='$pcat' required><br><br>";

            echo "<label>Product name</label><br>";
            echo "<input type='text' name='product_name' value='$pname' required><br><br>";

            echo "<label>Stock</label><br>";
            echo "<input type='text' name='stock' value='$stock' required><br><br>";

            echo "<label>Warranty</label><br>";
            echo "<input type='text' name='warranty' value='$warranty' required><br><br>";

            echo "<label>Price</label><br>";
            echo "<input type='text' name='price' value='$price' required><br><br>";

            echo "<label>Manufacturer</label><br>";
            echo "<input type='text' name='manufacturer' value='$manufacturer' required><br><br>";

            echo "<label>Supplier code</label><br>";
            echo "<input type='text' name='supplier_code' value='$scode' required><br><br>";

            echo "<label>Select an image</label><br>";
            echo "<input type='file' name='image' value='$img' required><br><br>";

            echo "<label>Description</label><br>";
            echo "<input type='text' name='description' value='$description' required><br><br>";

            echo "<input type='submit' value='Save' name='save'>";

        echo "</form>";
    echo "</div>";

?>