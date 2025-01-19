<html>
    <head>
        <title>book search</title>
    </head>
    <body>
        <center><h1>BOOK SERACH</h1>
            <form action="result_book.php" method="POST">
                <table border="2">
                    <tr>
                        <th>Enter the numbner of the book</th>
                        <td>
                            <input type="number" name="number" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="enter" name="'enter">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>

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
                header('locaion:result_book.php');
    
            }
            else{
                echo("invalid");
            }
            mysqli_close($connect);
        }
    }
    ?>
    
    

</html>