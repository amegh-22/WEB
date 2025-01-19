<html>

<head>

    <title>Bouncing Text</title>
    <style>
        table {
            height: 200px;
            width: 400px;
            text-align: center;

        }

        .bouncing-text {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            animation: bounce 2s infinite;
            color: white;
            background-color: cornflowerblue;
        }

        @keyframes bounce {
            0% {
                transform: translateY(-40px);
            }

            50% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(30px);
            }
        }
    </style>
</head>

<body>

    <form action="" method="POST">
        <div class="bouncing-text">Welcome to Our Website!</div>
        <br><br><br>
        <center>
            <table border="3" cellspacing="20">
                <tr>
                    <th>NAME</th>
                    <td>
                        <input type="text" name="nm" placeholder="Enter the name" size="25">
                    </td>
                </tr>
                <tr>
                    <th>USERNAME</th>
                    <td>
                        <input type="text" name="user" placeholder="Enter the username" size="25" ;>
                    </td>
                </tr>
                <tr>
                    <th>PASSWORD</th>
                    <td>
                        <input type="password" name="ps1" placeholder="Enter the password" size="25">
                    </td>
                </tr>

                <th>RE-PASSWORD</th>
                <td>
                    <input type="password" name="ps2" placeholder="Enter the again password" size="25">
                </td>
                </tr>

                <td>
                    <input type="submit" name="sub" size="90">
                </td>
                <td>
                    <input type="reset" name="res" size="20">
                </td>
                </tr>
            </table>
        </center>
    </form>

</body>
<?php

if (isset($_POST['sub'])) {
    $name = $_POST['nm'];
    $user = $_POST['user'];
    $pass1 = $_POST['ps1'];
    $pass2 = $_POST['ps2'];
    if ($pass1 != $pass2) {
        echo "password do not match";
    } else {
        $connect = mysqli_connect('localhost', 'root', '', 'data');
        if (!$connect) 
        {
            die("not connected" . mysqli_connect_error());
        } 
        else
         {
            $sql = "SELECT * FROM bounce WHERE user = '$user'";

            // Step 6: Execute the query and get the result
            $resul = mysqli_query($connect,$sql);
        

            // Step 7: Check if the result has any rows (i.e., the user_id exists)
            if(mysqli_num_rows($resul)>0) {
                // If the user exists, print a message
                echo "User with username $user already  exists.";
                echo "<br>";
                die("enter a unique value");
            } 
            
            $query = "INSERT INTO bounce(name,user,pass)values('$name','$user','$pass1')";
            $result = mysqli_query($connect, $query);
            if (!$result) {
                echo "not registered";
            } else {
                echo "successfully registered";
            }
        }
        mysqli_close($connect);
    }
}
?>

</html>