<?php session_start();
$_SESSION['count']=2;
$otp=$_SESSION['otp'];
$mail=$_SESSION['email'];
?>
<?php
if(isset($_POST['otp'])){
if($_POST['value']!=$otp && $_SESSION['count']!=0 ) {

 echo "<script> window.alert('Incorrect OTP ')</script>";
$_SESSION['count']-=1;
    header('Location:otp.php');}
else if($_POST['value']==$otp && $_SESSION['count']!=0){
    echo "<script> window.alert('Sucessful Otp valid  ')</script>";
    header('Location: newotp.php');
    
}
else{
    echo "<script> window.alert('Too Many attempts ')</script>";
    session_destroy();
    header('Location:home.php');

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP</title>
</head>
<body>
<center>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<strong>
Enter OTP : <input type="number" name="value" require ></strong>
<input type="submit" name="otp">
</form>
</center>


</body>
</html>
