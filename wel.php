<html>
<head>
    <title>welcome</title>
</head>
<body>
    <h2> <?php 
    session_start();
    echo "welcome",$_SESSION['name'];
     ?>
     </h2>
</body>
</html>