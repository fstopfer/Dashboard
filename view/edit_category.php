<?php
    
    foreach($category as $cat){
        
        $id = $cat['id'];
        $name = $cat['cat_name'];
        $description = $cat['cat_description'];
    }

    echo "<div class='category_form'>";
        echo "<form class='forms' id='editcategory' method='post' action='javascript:submitForm();' enctype='multipart/form-data'>";

            echo "<input type='text' name='cat_id' value='$id' hidden><br><br>";

            echo "<label>Category name</label><br>";
            echo "<input type='text' name='cat_name' value='$name' required><br><br>";

            echo "<label>Category Description</label><br>";
            echo "<input type='text' name='cat_description' value='$description' required><br><br>";

            echo "<input type='submit' value='Save' name='save'>";

        echo "</form>";
    echo "</div>";

?>