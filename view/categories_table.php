<!-- ____________ *** CATEGORIES *** ______________ -->
<?php

    echo "<table class='table'>";
	echo "<tr>";
		echo "<th>Categories</th>";
		echo "<th><input type='search' name='categories_search' value='search'></th>";
    echo "</tr>";
    
    echo "<tr>";
        echo "<td>Category name</td>";
        echo "<td>Description</td>";
        echo "<td>";
			echo "<a href='#' class='cattable' id='#'>Add Category</a>";
        echo "</td>";
	echo "</tr>";
    
    foreach($categories as $cat){
        
        $id = $cat['id'];
        $category = $cat['cat_name'];
        $description = $cat['cat_description'];
        
        echo "<tr>";
        echo "<td>$category</td>";
        echo "<td>$description</td>";
        echo "<td>";
        echo "<a href='#' class='cattable' id='$id'>Edit</a>";
        echo "<a href='#' class='cattable' id='$id'>Delete</a>";
        echo "</td>";
        echo"</tr>";
    }
    echo "</table>";

?>
