<html>

<head>
    <style>
        h1{
            text-align: center;
        }
        #btn
        {
            align-content: center;
        }
    </style>
    <title>register</title>
</head>

<body>
    <h1>---REGISTER---</h1>
    <center>
        <form action="" method="POST" onsubmit=" return validate()">
            <table  cellspacing="15">
                <tr>
                    <th>NAME:</th>
                    <td>
                        <input type="text" name="nm" id="nm" placeholder="Enter your name:">
                    </td>
                </tr>
                <tr>
                    <th>GENDER:</th>
                    <td>

                        <input type="radio" name="gen" id="gen" value="male">MALE
                        <input type="radio" name="gen"id="gen" value="female">FEMALE
                    </td>
                </tr>
                <tr>
                    <th>AGE:</th>
                    <td>


                        <select name="age" id="age">
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>USERNAME:</th>
                    <td>
                        <input type="text" name="user" id="user" placeholder="Enter your username:">
                    </td>
                </tr>
                <tr>
                    <th>PASSWORD:</th>
                    <td>
                        <input type="password" name="pass" id="pass"   placeholder="Enter your password">
                    </td>
                </tr>
                <tr>
            
                    <td colspan="2">
                        <center><input type="submit" value="REGISTER" id="btn" name="sub"></a></center>
                    </td>
                </tr>
            </table>
            <h3><a href ="3.misslogin.php">LOGIN</a></h3>
        </form>
    </center>
</body>


<script>
    function validate()

{
    var name=document.getElementById('nm').value;
    var gen=document.getElementById('gen').value;
    var age=document.getElementById('age').value;
    var user=document.getElementById('user').value;
    var pass=document.getElementById('pass').value;

    let nformat=/^[A-Z][A-Z\s\.]+$/i;
    let gformat=/^\d{1,3}$/;
    let uformat=/^[a-z]+\d{2}$/
    let pformat=/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[%$&#*])[a-zA-Z0-9%$&#*]{8,}$/;
    // let eformat=/^[a-z]{4,}[0-9]{3,}@[a-z]{4,}\.[a-z]{2,}$/;
    if(name=="" || gen=="" || age=="" || user=="" || pass=="" )
{
    alert("All fields must be filled");;
    return false;
}
    if(!nformat.test(name))
{
    alert("name should contain fisrt letter caps ");
    return false;
}

if(!uformat.test(user))
{
    alert("username alteat contain 2 letters");
    return false;
}
if(!pformat.test(pass))
{
    alert("atleast 8 characters");
    return false;
}
return true;
}

  
</script>
<?php
if(isset($_POST['sub']))
    {
        $name=$_POST['nm'];
        $gen=$_POST['gen'];
        $age=$_POST['age'];
        $user=$_POST['user'];
        $pass=$_POST['pass'];

        $con=mysqli_connect('localhost','root','','data');
        if(!$con)
        {
            die("not connected".mysqli_connect_error());
        }
        else
        {
            $sql = "SELECT * FROM regis WHERE user = '$user'";

            // Step 6: Execute the query and get the result
            $resul = mysqli_query($con,$sql);
        

            // Step 7: Check if the result has any rows (i.e., the user_id exists)
            if(mysqli_num_rows($resul)>0) {
                // If the user exists, print a message
                echo "User with username $user already  exists.";
                echo "<br>";
                die("enter a unique value");
            } 
            
            $queu="INSERT INTO regis(name,gen,age,user,pass)values('$name','$gen','$age','$user','$pass')";
            $resu=mysqli_query($con,$queu);
            if(!$resu)
            {
                echo "not registered";
            }
            else{
                echo"succesfully registered";
            }
            mysqli_close($con);

        }
    }
?>
</html>