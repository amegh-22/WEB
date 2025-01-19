<html>
    <head>
        <title>data about book</title>
    </head>
    <body>
    
                <>
                
                                <?php 
                                session_start();
                                if(isset($_SESSION['number'],$_SESSION['title'],$_SESSION['author'],$_SESSION['publisher'],$_SESSION['rate'],$_SESSION['edition'])){

                                
                                echo " number",$_SESSION['number']; 
                            
                                echo " title",$_SESSION['title']; 
                                
                                echo "author",$_SESSION['author']; 
                                
                                echo "publisher",$_SESSION['publisher']; 
                                
                                echo " rate",$_SESSION['rate'];
                            } 
                            else{
                                echo"error";
                            }
                                
                                ?>
                            
                    
    </body>
    </html>