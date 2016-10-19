<?php

    session_start();

    include "model/connect.php";
    include "view/header.php";
    include "model/functions.php";
    include "model/login_sys.php";

    if(isset($_SESSION['loggedin'])){
        include "view/admin_stats.php";
        include "view/view.php";
    }
    else{
        include "view/login_form.php";
    }
    
    include "view/footer.php"; 
        
?>