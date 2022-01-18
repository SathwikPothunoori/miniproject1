<?php session_start(); 
$conn=new mysqli("localhost","root","","miniproject");

?>
<?php  
if(isset($_POST['submit'])){
    $newpassword=$_POST['newpassword'];
    $email=$_SESSION['mail'];
    $sql=$conn->query("UPDATE signup set password='$newpassword' WHERE email='$email' ");
    if($sql){
        echo "<script> window.alert('Sucessfully Updated  ')</script>";
        header('Location :login.php');
        
    }

        else{
            echo "<script> window.alert('Something Went Wrong ')</script>";
            header('Location :home.php');
        }
        session_destroy();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
New Password : <input type="text" name="newpassword" require >
<br>
<input type="submit" name="submit">
</form>


</body>
</html>