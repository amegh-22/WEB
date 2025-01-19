<html>
    <body>

<?php
    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['se'];
    $phone1=$_POST['nohome'];
    $phone2=$_POST['noffice'];
    ?>
    <center>
    <table border="1">
        <tr>
            <th>name:</th>
            <td> <?php echo $name ?></td>
        </tr>
        <tr>
            <th>age:</th>
            <td> <?php echo $age ?></td>
        </tr>
        <tr>
            <th>email</th>
            <td> <?php echo $email ?></td>
        </tr>
        <tr>
            <th>no:</th>
            <td> <table border="1">
                <tr>
                    <th>home</th>
                    <th>office</th>
                </tr>
                <tr>
                    <td> <?php echo $phone1 ?></td>
                    <td> <?php echo $phone2 ?></td>

                </tr>
            </table>
    </table>
    </center>
</body>
</html>