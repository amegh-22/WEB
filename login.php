<html>
<head>
    <title>
        login</title>
</head>
<body>
    <form action="" method="post">
        <center><h1><b>LOGIN PAGE</b></h1></center>
       <center> <table border="1">
            <tr>
                <th>name:</th>
                <td>
                    <input type="text" name="name" required>
                </td>
            </tr>
            <tr>
                <th>phone</th>
                <td>
                    <input type="tel" name="phone" required>
                </td>
            </tr>
            <tr>
                <td  colspan="2"> <center><input type="submit" name="login" value="login"></center></td>
                   
                </td>
            </tr>
        </table>
        </center>
        </form>
</body>
<?php
session_start();
if(isset($_POST['login']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $con=mysqli_connect('localhost','root','','data');
    if(!$con){
        die("failed". mysqli_connect_error());
    }
    else{
        $que="SELECT * FROM register WHERE username='$name' AND phone='$phone' ";
        $re=mysqli_query($con,$que);
        if(mysqli_num_rows($re)>0)
        {
            $row=mysqli_fetch_assoc($re);
            $_SESSION["username"]=$row['name'];
            header('location:wel.php');
            exit();
        }
            else{
                echo("invalid");

            }
            mysqli_close($con);

        }
    }


?>
</html>