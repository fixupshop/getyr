<html>
<head>
      <title>FIXUPSHOP</title>
</head>    
<body>
    <?php
        require 'steamauth/steamauth.php';
        loginButton ();

        if(isset($_SESSION['steamid'])){
            require './/steamauth/steamauth.php';
            echo "<a href='.//steamauth/loguot.php'>Выйти</a>"
        }
    ?>
</body>
</html>