<html>

<head>
    <link rel="stylesheet" href="">

    </style>
    <title>Form</title>

</head>

<body>
    <marquee behavior="scroll" onmouseover="stop()" onmouseout="start()"><b>REGISTRATION FORM</b></marquee>
    <form action="" method="post">
        <fieldset>
            <legend>Personal info</legend>
            <table border="1" style="border-style: double;width: 1000px;">
                <tr>
                    <th> <label name>Name:</label></th>
                    <td> <input type="text" name="name" placeholder="Enter your first name" required></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <th>
                        <label>Age:</label>
                    <td>
                        <input type="number" name="age" required>
                    </td>
                    <br>
                    </th>
                </tr>

                <tr>
                    <th>
                        <label>Password</label>

                    </th>
                    <td>
                        <input type="password" name="pass" placeholder="Enter your Password" required>
                    </td>

                <tr></tr>
                <tr></tr>

                <tr>
                    <th>
                        <label>Re-enter Password</label>

                    </th>
                    <td>
                        <input type="password" class="pass1" placeholder="Enter your Password" required>
                    </td>

                <tr></tr>
                <tr></tr>

                <tr>
                    <th><label>security Question</label> </th>
                    <td>
                        <input type="radio" name="security" value="place">pet<br>
                        <input type="radio" name="security" value="friend">Best friennd<br>
                        <input type="radio" name="security" value="color">favorite color<br>
                        <input type="radio" name="security" value="teacher">favourite teacher<br>
                    </td>
                </tr>
                <tr>
                    <th><label>Answer of security Question</label> </th>
                    <td>
                        <input type="text" name="seqans" required>
                    </td>
                </tr>

                <th> <label email>Email: </label> </th>
                <td>
                    <input type="email" class="se" name="email" placeholder="Enter your email" required>
                </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <th><label>Langues known:</label></th>
                    <td>
                        <input type="checkbox" name="languge" value="mala">malayalam
                        <input type="checkbox" name="languge" value="english">English
                        <input type="checkbox" name="languge" value="hindi">Hindi
                        <input type="checkbox" name="languge" value="Tamil">Tamil
                    </td>
                    </td>

                </tr>

                <th name="table"> <label>Phone no: </label> </th>
                <td>
                    <table border="1">
                        <tr>
                            <th>Home</th>
                            <th>office</th>
                        </tr>
                        <tr>
                            <td><input type="number" name="nohome" required></td>
                            <td><input type="number" name="noffice" required></td>
                        </tr>
                    </table>
                </td>

                <tr>
                    <th><label>cv</label></th>
                    <td>
                        <input type="file" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">


                       <center> <input type="submit" name="submit" value="Submit"></center>

                    </td>
                    <tr >
                        <td colspan="2">
                        <center><p>Already Registered-><a href="login.php">Login</a></p></center>
                        </td>
                    </tr>
</table>

        </fieldset>
    </form>
    <?php
    if(isset($_POST['submit']))
    {
    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['nohome'];

    $cet=mysqli_connect('localhost','root','','data');
    if(!$cet)
    {
        die("not connected");
    }
    else
    {
        $query="Insert into register(username,age,email,phone)values('$name','$age','$email','$phone')";
        $full=mysqli_query($cet,$query);

    if($full)
    {
        echo "<h2>registered</hr>";
    }
    else
    {
        echo "<h3>failed</h3>";
    
    

    }
    mysqli_close($conn);
}
    }
    ?>


</body>

</html>
