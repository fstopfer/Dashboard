<!-- ____________ *** PRODUCTS *** ______________ -->
<?php

    echo "<table class='table'>";
	echo "<tr>";
		echo "<th>Products</th>";
		echo "<th><input type='search' name='products_search' value='search'></th>";
	echo "</tr>";

	echo "<tr>";
		echo "<td>Product Code</td>";
		echo "<td>Category</td>";
		echo "<td>Product Name</td>";
		echo "<td>Description</td>";
		echo "<td>Image</td>";
		echo "<td>Price</td>";
		echo "<td>Warranty</td>";
		echo "<td>Stock</td>";
		echo "<td>";
			echo "<a href='#' class='ptable' id='#'>Add Product</a>";
		echo "</td>";
	echo "</tr>";
    
    foreach($products as $product){
        
        $code = $product['product_code'];
        $category = $product['category'];
        $name = $product['product_name'];
        $description = $product['description'];
        $image = $product['images'];
        $price = $product['price'];
        $warranty = $product['warranty'];
        $stock = $product['stock'];
        
        echo "<tr>";
        echo "<td>$code</td>";
        echo "<td>$category</td>";
        echo "<td>$name</td>";
        echo "<td>$description</td>";
        echo "<td>$image</td>";
        echo "<td>$price</td>";
        echo "<td>$warranty</td>";
        echo "<td>$stock</td>";
        
        echo "<td>";
        echo "<a href='#' class='ptable' id='$code'>Edit</a>";
        echo "<a href='#' class='ptable' id='$code'>Delete</a>";
        echo "</td>";
        echo"</tr>";
    }
    echo "</table>";
    
?>