<html>

<head>
    <link rel="stylesheet" href="">

    </style>
    <title>Form</title>

</head>

<body>
    <marquee behavior="scroll" onmouseover="stop()" onmouseout="start()"><b>AIRLINE FORM</b></marquee>
    <form action="" method="post">
        <fieldset>
    
            <table border="1" style="border-style: double;width: 1000px;">
                <tr>
                    <th> <label name>Number:</label></th>
                    <td> <input type="number" name="number" required></td>
                </tr>
                <tr>
                    <th>
                        <label>title:</label>
                    <td>
                        <input type="text" name="title" required>
                    </td>
                    <br>
                    </th>
                </tr>

            
                <tr>
                    <th><label>author:</label> </th>
                    <td>
                        <input type="text" name="author" required>
                    </td>
                </tr>
                <tr>
                    <th><label>edition</label> </th>
                    <td>
                        <input type="text" name="edition" required>
                    </td>
                </tr>
                <tr>
                    <th><label>publisher:</label> </th>
                    <td>
                        <input type="text" name="publisher" required>
                    </td>
                </tr>
                <tr>
                    <th><label>rate:</label> </th>
                    <td>
                        <input type="number" name="rate" required>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">


                       <center> <input type="submit" name="submit" value="Submit"></center>
                       </td>
                       </tr>
                       <tr>
                        <td colspan="2"><a href="search_book.php">Find a book</a></td>
                       </tr>
                       

            
</table>

        </fieldset>

    </form>
    <?php
    if(isset($_POST['submit']))
    {
    $number=$_POST['number'];
    $title=$_POST['title'];
    $author=$_POST['author'];
    $edition=$_POST['edition'];
    $publisher=$_POST['publisher'];
    $rate=$_POST['rate'];

    $conn=mysqli_connect('localhost','root','','data');
    if(!$conn)
    {
        die("not connected".mysqli_connect_error());
    }
    else{
        $que="Insert into book(number,title,author,edition,publisher,rate)values('$number','$title','$author','$edition','$publisher','$rate')";
        $res=mysqli_query($conn,$que);
        if(!$res)
        {
            echo("failed");
        }
        else{

            echo("regishterd");
        }
        
         

    
    mysqli_close($conn);
}
    }
    ?>


</body>

</html>
