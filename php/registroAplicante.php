<?php
    include_once '../components/head.inc.php';
?>
<body>
    <?php
        include_once '../components/header.inc.php';
    ?>

    <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
        {
            ?>
                <a href="logout.php">Logout</a>
            <?php 
        }
        else{ ?>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        <?php } 
        ?>

    <?php
        include_once '../components/footer.inc.php';
    ?>
</body>
</html>