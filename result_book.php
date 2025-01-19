<?php
    session_start();
    if(isset($_POST['enter']))
    {
        $number=$_POST['number'];
        $connect=mysqli_connect('localhost','root','','data');
        if(!$connect)
        {
            die ("not connected".mysqli_connect_error());

        }
        else{
            $query="SELECT * FROM book WHERE 'number=$number'";
            $result=mysqli_connect($connect,$query);
            if(mysqli_num_rows($result)>0)
            {

                $row=mysqli_fetch_assoc($result);
                $_SESSION["number"]=$row['number'];
                $_SESSION["title"]=$row['title'];
                $_SESSION["publisher"]=$row['publisher'];
                $_SESSION["author"]=$row['author'];
                $_SESSION["edition"]=$row['edition'];
                $_SESSION["rate"]=$row['rate'];
                header('location:result_book.php');
    
            }
            else{
                echo("invalid");
            }
            mysqli_close($connect);
        }
    }
    ?>

<html>
    <head>
        <title>data about book</title>
    </head>
    <body>
    
    <?php
                                

                                
                                echo " number",$_SESSION['number']; 
                            
                                echo " title",$_SESSION['title']; 
                                
                                echo "author",$_SESSION['author']; 
                                
                                echo "publisher",$_SESSION['publisher']; 
                                
                                echo " rate",$_SESSION['rate'];
                            
                            
                                
                                ?>
                            
                    
    </body>
    </html>
