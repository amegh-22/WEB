
    <html>
    <head>
        <style>
            h1{
                text-align: center;
                text-decoration: solid;
            }
            #btn
            {
                text-align: center;
                color: aquamarine;
                background-color:black;
                
            }
        </style>
        <title>
            login
        </title>
    </head>
    <body>
        <h1>LOGIN PAGE</h1>
        <form action="" method="POST">
            <center>
                <br><br><br><br>
                <table cellspacing="20">
                    <tr>
                        <th>
                            USERNAME:
                        </th>
                        <td>
                        <select name="user">                     
    <?php
    session_start();

   $con=mysqli_connect('localhost','root','','data');
   if(!$con)
   {
       die("not connected".mysqli_connect_error());
   }
   else{

    
    $sql = "SELECT user FROM regis ";  

    
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        // echo mysqli_num_rows($result) . " users found.<br>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="'.$row["user"]. '">' . $row["user"] . "</option>";
        }
    } else {
        
        echo "<option>No users found</option>";
    
   
}
mysqli_close($con);
   }
    ?>
</select>

                    <tr>
                        <th>
                            PASSWORD:
                        </th>
                        <td>
                            <input type="password"  name="pass" placeholder="Enter password" required>
                        </td>
                    </tr>
                    <tr >
                        <th colspan="2">
                            <input type="submit" value="LOGIN" name="sub" size="20" id="btn">
                        </th>
                    </tr>
                </table>
                <br><br>
                <h3>Not a member?<a href ="3.missregister.php">click here</a></h3>
            </center>


        </form>
    </body>
    <?php
    
    if(isset($_POST['sub']))
    {
        $user=$_POST['user'];
        $pass=$_POST['pass'];

        $conn=mysqli_connect('localhost','root','','data');
        if(!$conn)
        {
            die("not connected".mysqli_connect_error());
        }
        else{
            

            $qu="SELECT * FROM regis WHERE user='$user' AND pass='$pass'";
            $re=mysqli_query($conn,$qu);
            if(mysqli_num_rows($re)>0)
            {
            //     echo "<center><table border='1'>
            // <tr>
    
            //     <th>Name</th>
            //     <th>Gender</th>
            //     <th>Age</th>
            //     <th>User</th>
            // </tr>";
            unset($_SESSION['data']);
            $_SESSION['data'] = mysqli_fetch_all($re, MYSQLI_ASSOC);
            }
           else{
            echo "register first";
           }
           mysqli_close($conn);
           
           header("Location: 3.missresult.php");
            exit();
        }
    }
    ?>
   
</html>