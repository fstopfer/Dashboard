<!-- ____________ *** CUSTOMERS *** ______________ -->
<?php

    echo "<table class='table'>";
	echo "<tr>";
		echo "<th>Customers</th>";
		echo "<th><input type='search' name='customer_search' value='search'></th>";
	echo "</tr>";

	echo "<tr>";
		echo "<td>Customer Number</td>";
		echo "<td>First Name</td>";
		echo "<td>Last Name</td>";
		echo "<td>Billing Address</td>";
		echo "<td>Company</td>";
		echo "<td>Email</td>";
		echo "<td>Password</td>";
		echo "<td>Phone Number</td>";
		echo "<td>Edit / Delete</td>";
	echo "</tr>";
    
    foreach($customers as $cust){
        
        $customer = $cust['customer_nr'];
        $firstname = $cust['firstname'];
        $lastname = $cust['lastname'];
        $billing_add = $cust['billing_address'];
        $company = $cust['company'];
        $email = $cust['email'];
        $password = $cust['password'];
        $phone_nr = $cust['phone_nr'];
        
        echo "<tr>";
        echo "<td>$customer</td>";
        echo "<td>$firstname</td>";
        echo "<td>$lastname</td>";
        echo "<td>$billing_add</td>";
        echo "<td>$company</td>";
        echo "<td>$email</td>";
        echo "<td>$password</td>";
        echo "<td>$phone_nr</td>";
        
        echo "<td>";
        echo "<a href='#' class='custtable' id='$customer'>Edit</a>";
        echo "<a href='#' class='custtable' id='$customer'>Delete</a>";
        echo "</td>";
        echo"</tr>";
    }
    echo "</table>";
    
?>