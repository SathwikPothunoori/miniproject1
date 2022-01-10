<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style sheets -->
    <link rel="stylesheet" href="home1.css">
    <link rel="stylesheet" href="Normalise.css">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
</head>
<body>

<header class='sticky' id='nav_pages'>
        
       <a href='http://localhost/miniproject/home.php'><img  src='TFOE.png'  alt='Project_logo' id='logo'></a> 
        <nav>
            <a class='nav_pages' href='http://localhost/miniproject/home.php'>Home</a>
            <a class='nav_pages' href='http://localhost/miniproject/register1.php'>Register</a>
            <a class='nav_pages' href='http://localhost/miniproject/Locate.php'>Locate</a>
            <a class='nav_pages' href='home.php#footer'>Contact</a>
            <a href='http://localhost/miniproject/login.php'><button id='login_btn' >Login</button></a>


        </nav>
    </header>
     <section  id='register_form'>
        
        
        <h1>REGISTRATION FORM</h1>
     <form action='db.php' name='details' method='post'>

    <table cellpadding='10' cellspacing='10' id ='form'>
        <tr>
            <td> First Name &nbsp; &nbsp;</td>
            <td><input type='text' name='fname' maxlength='50'></td>
        </tr>
        <tr>
            <td>Last Name  &nbsp; &nbsp;</td>
            <td><input type='text' name='lname' maxlength='50'></td>
        </tr>
      
        <tr>
            <td>Date of Birth </td>
        
            <td> <input type='date' name='' id=''></td>
        </tr>

        <tr>
            <td>Aadhar No: </td>

            <td><input type='text' name='aadhar' maxlength='12'></td>
        </tr>
       <tr>
           <td>
              Address
           </td>
           <td>
               <textarea name='address' cols='30' rows='10' placeholder='Enter your adress here '></textarea>
           </td>
       </tr>

        <tr>
            <td>Email</td>
            <td>
               <input type='email' name='email' maxlength='30'>
            </td>
        </tr>

        <tr>
            <td>
                Mobile Number: 
            </td>
            <td>
                <input type='number' maxlength='10' name='number'>
            </td>
        </tr>

        <tr>
            <td>
                Alternative Number
            </td>

            <td>
                <input type='number' maxlength='10' name='alnumber'>
            </td>
        </tr>
        
<tr>
   <table>
       <tr>
           <td> <input type='checkbox' name='checkbox' > <h6><span>I hereby declare that all the information furnished above is true to the best of my belief.</span></td>
       </tr>
   </table>
    </tr>
    </h6>
        <tr>
            <!-- <td>
                <input type="submit" name="submit" value="submit">
                <input type="reset" name="reset" value="reset">
            </td> -->
            <button id ='button_submit' class='form_button'>Submit</button>
            <button id ='button_reset' class='form_button'>Reset</button>
        </tr>
    </table>
</form>
</section>

 

    
        
    </body>

 </html>