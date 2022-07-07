<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ionic-Signup </title>
    <link rel="stylesheet" href="ass\css\style.css">
    <link rel="stylesheet"
          href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="siginContainer">
    <section class = "form signup">
    <header>Create your Ionic account</header>
    <form style="" action = "" method ="POST">
        <div style="padding:10px 0 0 0 ; ">
    <button style=" padding:10px 0 0 0 ; background-color: black; color: white; border-radius: 20px; position:relative;  left:10px; height: 40px;
    width: 100%;  "> <h3 style="position: relative; bottom:15px;  align-content: center; cursor: pointer; box-shadow: 0 0 120px 0 rgb(0, 0,0 , 0.1), 0 32px 64px -48px rgba(0, 0,0 , 0.5);  "> 
Continue with Git Hub </h3></button>
<button style="padding:10px 0 0 0 ; background-color: blue; color: white; border-radius: 20px; position:relative;  left:10px; height: 40px;
    width: 100%; "> <h3 style="position: relative;   bottom:15px; cursor: pointer; box-shadow: 0 0 120px 0 rgb(0, 0,0 , 0.1), 0 32px 64px -48px rgba(0, 0,0 , 0.5);  "> 
Continue with Bitbucket </h3></button>
<button style="background-color: orange; color: white; border-radius: 20px; position:relative;  left:10px; height: 40px;
    width: 100%; "> <h3 style="position: relative;   bottom:5px; cursor: pointer;  box-shadow: 0 0 120px 0 rgb(0, 0,0 , 0.1), 0 32px 64px -48px rgba(0, 0,0 , 0.5); "> 
Continue with GitLub </h3></button>
        </div>
        <hr style="position: relative; left: 10px; top: 9px; "></hr>
        <div style="position: relative; background-color:white; bottom:11px; width:25px; left:150px;">&nbsp;Or</div>
    <div class = "name-details">

    <div class="column input">
    
        <label>Firstname</label>
        <input type = "text" name ="firstname" placeholder="First name" class="firstname" require>
        </div>  
        <div class="column input">  
        <label>Lastname</label>
        <input type = "text" name ="lastname" placeholder="Last name" class="lastname"require>
        </div>
        </div>  
        <div class="column  input ">  
        
        <label>Username</label>
        <div class="field">
       
        <input type = "text" name ="Username" placeholder="Username" class="Username" require>
        </div>
        </div>
        <div class="column input input">  
        <label>Email</label>
        <div class="field">
        
        <input type = "email" name ="Email" placeholder="Email" class="Email" require>
        </div> 
        </div> 
    <div class="column input">  
        <label>Password</label>
        <div class="field">
        
        <input type = "password" name ="password" placeholder="Password" class="Password"require>
       
    </div> 
        </div> 
    
        
            <div class="column button "> 
        <input type = "submit" name ="submitButton" value="Register" class="Register" require>
            </div>
          

<div class="link">Already signed up? <a href="login.php">login now </a> </div>
</div>
</form>
</section>
</div>
    
</body>
</html>

<script src="ass\js\script.js"></script>