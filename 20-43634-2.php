<?php
$ename="";
if ($_SERVER["REQUEST_METHOD"] == "GET") 
{
    if(empty($_GET['name']))
    {
        $ename="";
        echo $ename;
    }
    else
        $ename= $_GET['name'];
}
 
$eemail="";
if ($_SERVER["REQUEST_METHOD"] == "GET") 
{
    if(empty($_GET['email']))
    {
        $eemail="";
        echo $eemail;
    }
    else
        $eemail= $_GET['email'];
}
 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="get">
 

        <fieldset>
            <legend>REGISTRATION</legend>
 
 
        Name: <input type="text" name="name" placeholder= "Enter your name" ><?php echo $ename?> <br> <hr>
        Eamil: <input type="text" name="email" placeholder= "Enter your gmail" ><?php echo $eemail?> <br><hr>
        Password: <input type="Password" name="pass" placeholder= "Enter your password" ><br><hr>
        Your Image: <br><br>
 

        <button>Submit</button>
 

        </fieldset>
 
    </form>
 

</body>
</html>