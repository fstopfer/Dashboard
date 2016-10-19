<?php

    if(isset($_POST['email']) && isset($_POST['password'])){
        login();
    }

?>

<main>
    <div class="login_form">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <fieldset>
                <legend>Login Form:</legend><br>
                <label>Email:</label><br>
                <input type="email" name="email" value="" required><br><br>
                <label>Password:</label><br>
                <input type="password" name="password" value="" required><br><br>
                <input type="submit" value="Login" name="login">
            </fieldset>
        </form>
    </div>
</main>