<?php
    session_start();
    if(isset($_SESSION['unique_id'])){//if user is logged in
    header("location: users.php");
    }
?>
<? 
include "php/header.php";
?>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#" autocomplete="off">
                <div class="error-txt"></div>
                    <div class="field input">
                        <label for="">Email Address</label>
                        <input type="text" name="email" placeholder="Enter your email">
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Enter new password">
                        <i><?php include "vectors/eye.svg"; ?></i>
                    </div>
                    <div class="field button ">
                        <input type="submit" value="Continue to Chat">
                    </div>
                    <div class="link">Not yet signed up? <a href="index.php">signup now</a></div>
                </form>
            </section> 
    </div>
    <style>
        <?php
        include "style.css";
        ?>
    </style>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
</body>
</html>