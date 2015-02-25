
        <?php
        echo"Web server is running Logically";
        require_once (__DIR__."/view/Header.php");
        require_once (__DIR__."/view/Navigation.php");
        require_once (__DIR__."/controller/Create.php");
        require_once (__DIR__."/view/Footer.php");
        require_once(__DIR__ . "/controller/login-verify.php");
          require_once(__DIR__ . "/view/header.php");
    if(authenticateUser()) {
        require_once(__DIR__ . "/view/navigation.php");
    }
    require_once(__DIR__ . "/view/footer.php");
   // require_once(__DIR__ . "/controller/read-post.php");
        ?>

