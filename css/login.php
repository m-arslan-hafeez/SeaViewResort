<html>
<head>
<title>Login Form</title>
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
    
    
 <div class="Login-Page">
 <div class="form">
	<form class="register-form" method="POST">


	<table align="center" cellpadding="5px" >
                <tr>
                    
                    <td><input type="text" name="fullname" placeholder="Full Name" required/></td>
                </tr>
                <tr>
                    
                    <td><input type="email" name="email" placeholder="Email Address" required /></td>
                </tr>
                <tr>
                    <td><input type="password" name="password" placeholder="Enter Password" required /></td>
                </tr>
                <tr>
                    <td><input type="date" name="dob" required/></td>
                </tr>
                <tr>
                    <td><select id="country" name="country" required>
                    <option value="">...Select Country ...</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="India">India</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="USA">USA</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United Arab of Emirates">United Arab of Emirates</option>
                        <option value="Seri Lanka">Seri Lanka</option>
                        <option value="Russia">Russia</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Oman">Oman</option>
                    </select> </td>
                </tr>
                <tr></tr>
                <td><select id="gender" name="gender" required>
                    <option value="">...Select Gender ...</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select> </td>
                <tr><td><input class="submit" type="submit" name="submit" value="REGISTER" /> </td></tr>
                </table>

    <p class="message">Already Have an Account ?    <a href="#">Login</a> </p>
	

    </form>
    <form class="login-form" >
    <input type="text" placeholder="Email"/> 
    <input type="password" placeholder="Password"/><button>Login</button>  
    <p class="message" >Not Registered?<a href="#">Register</a></p> </form>
    <script src=' https://code.jquery.com/jquery-3.3.1.min.js'></script>
     <script>
     $('.message a').click(function(){
     $('form').animate({height:"toggle", opacity:"toggle"},"slow");     });
     </script>  
 </html>
 <?php
if(isset($_POST['submit'])){
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $dob=$_POST['dob'];
    $country=$_POST['country'];
    $gender=$_POST['gender'];
$conn=mysqli_connect("localhost", "root", "root", "web_database");
$query=" INSERT INTO `resort`(`fullname`,`email`,`password`, `dob`,  `country`,`gender`) 
VALUES ('$fullname', '$email', '$password', '$dob','$country','$gender')";
$result=mysqli_query($conn, $query);
if($result){
    echo "Registration Successfully ";
}
else{
    echo " Query Error";
}
}
?> 