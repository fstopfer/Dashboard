<?php

    /*********************** Login functions ***********************/

    if(isset($_GET['logout'])){

		session_unset();
		session_destroy();
	}
    
    function login(){
        global $connection;
        
        $password = $_POST['password'];
        $email = $_POST['email'];
        
        $query_string = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
        
        $result = $connection->query($query_string);

            if($row = $result->fetch_assoc()){
                $_SESSION['loggedin'] = true;
                //makes the enter key work
                echo "<script type='text/javascript'>window.location.href='index.php';</script>";
            }
            else{
                echo "Either email or password are incorrect";
            }
    }

?>