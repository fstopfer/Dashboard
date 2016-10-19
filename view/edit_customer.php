<?php
    
    foreach($customer as $cust){
        
        $id = $cust['customer_nr'];
        $fname = $cust['firstname'];
        $lname = $cust['lastname'];
        $address = $cust['billing_address'];
        $company = $cust['company'];
        $email = $cust['email'];
        $phone = $cust['phone_nr'];
    }

    echo "<div class='customer_form'>";
        echo "<form class='forms' id='editcustomer' method='post' action='javascript:submitForm();' enctype='multipart/form-data'>";

            echo "<label>Customer number</label><br>";
            echo "<input type='text' name='customer_nr' value='$id' readonly><br><br>";

            echo "<label>First name</label><br>";
            echo "<input type='text' name='firstname' value='$fname' required><br><br>";

            echo "<label>Last name</label><br>";
            echo "<input type='text' name='lastname' value='$lname' required><br><br>";

            echo "<label>Billing Address</label><br>";
            echo "<input type='text' name='billing_address' value='$address' required><br><br>";

            echo "<label>Company</label><br>";
            echo "<input type='text' name='company' value='$company' required><br><br>";

            echo "<label>Email</label><br>";
            echo "<input type='text' name='email' value='$email' required><br><br>";

            echo "<label>Phone number</label><br>";
            echo "<input type='text' name='phone_nr' value='$phone' required><br><br>";

            echo "<input type='submit' value='Save' name='save'>";

        echo "</form>";
    echo "</div>";

?>