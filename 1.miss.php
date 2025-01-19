<html>
    <head>
        <style>
            #mar
            {
                color: white;
                background-color: blueviolet;

            }
        </style>
        <title>head</title>
    </head>
    <body>
        <marquee onmouseover="stop()" onmouseout="start()" id =mar>REGISTER NOW!!!!</marquee>
        <form action="" method="POST" autocomplete="off">
        <table>
            <tr>
                <th>NAME</th>
                <td>
                    <input type="text" name="nm" placeholder="Enter your name" required>
                </td>

            </tr>
            <tr>
                <th>USERNAME</th>
                <td>
                    <input type="text" name="user" placeholder="Enter your username" required>
                </td>

            </tr>
            <tr>
                <th>PASSWORD</th>
                <td>
                    <input type="password" name="ps1" placeholder="Enter your password" required>
                </td>

            </tr>
            <tr>
                <th>REPASSWORD</th>
                <td>
                    <input type="password" name="ps2" placeholder="Re-enter your password" required>
                </td>

            </tr>
            <tr>
                
                <td>
                    <input type="submit" name="sub">
                </td>


                
                <td>
                    <input type="reset" name="res" >
                </td>

            </tr>

            
        </table>
    </form>
    </body>
    <?php
    if(isset($_POST['sub']))
    {
        $name=$_POST['nm'];
        $user=$_POST['user'];
        $pass1=$_POST['ps1'];
        $pass2=$_POST['ps2'];

        if($pass1!=$pass2)
        {
            echo "password do not match";
        }
        else{
            $conn=mysqli_connect('localhost','root','','data');
            if(!$conn)
            {
                die ("not connected". mysqli_connect_error());
            }
            else{
                $que="INSERT INTO new(name,user,pass)values('$name','$user','$pass1')";
                $re=mysqli_query($conn,$que);
                if(!$re)
                {
                    echo "failed";
                }
                else{
                    echo "registered";
                }


            }
        
        mysqli_close($conn);
    }
    }


    ?>
</html>