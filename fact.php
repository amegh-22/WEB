<html>
    <head>
        <title>fact</title>
    </head>
    <body>
        <center>
            <form action="" method="POST">
            <table border="1">
                <tr>
                    <th>Enter value</th>
                    <td><input type="text" name="value"></td>
                </tr>
                <tr>
                    <th colspan="2">
                        <input type="submit" value="enter" name="enter" required>
                    </th>
                </tr>
            </table>
            
        </center>
    </body>
    <?php

    if(isset($_POST['enter']))
    {
        $num=$_POST['value'];
        function fact($Z)
        {
            if($Z==0)
            {
            return 1;
            }
            return $Z *fact($Z-1);

        }
        echo "factorial is ".fact($num);

    }
    ?>
</html>