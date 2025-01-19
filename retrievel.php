<html>

<head>
    <link rel="stylesheet" href="">

    </style>
    <title>Form</title>

</head>

<body>
    <marquee behavior="scroll" onmouseover="stop()" onmouseout="start()"><b>REGISTRATION FORM</b></marquee>
    <form method="POST" action="table.php">
        <fieldset>
            <legend>Personal info</legend>
            <table border="1" style="border-style: double;width: 1000px;">
                <tr>
                    <th> <label name>Name:</label></th>
                    <td> <input type="text" name="name" placeholder="Enter your first name"></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <th>
                        <label>Age:</label>
                    <td>
                        <input type="number" name="age">
                    </td>
                    <br>
                    </th>
                </tr>

                <tr>
                    <th>
                        <label>Password</label>

                    </th>
                    <td>
                        <input type="password" name="pass" placeholder="Enter your Password">
                    </td>

                <tr></tr>
                <tr></tr>

                <tr>
                    <th>
                        <label>Re-enter Password</label>

                    </th>
                    <td>
                        <input type="password" name="pass1" placeholder="Enter your Password">
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
                        <input type="text" name="seqans">
                    </td>
                </tr>

                <th> <label email>Email: </label> </th>
                <td>
                    <input type="email" name="se" placeholder="Enter your email">
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

                <th> <label phone>Phone no: </label> </th>
                <td>
                    <table border="1">
                        <tr>
                            <th>Home</th>
                            <th>office</th>
                        </tr>
                        <tr>
                            <td><input type="number" name="nohome" ></td>
                            <td><input type="number" name="noffice"></td>
                        </tr>
                    </table>
                </td>

                <tr>
                    <th><label>cv</label></th>
                    <td>
                        <input type="file">
                    </td>
                </tr>
                <tr>

                <tr>
                    <th>
                        <input type="reset" class="button" value="reset">
                    </th>
                    <th>


                        <input type="submit" class="button" value="Submit">

                    </th>

        </fieldset>
    </form>
</body>


</html>