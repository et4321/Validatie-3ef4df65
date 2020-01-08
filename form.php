<!DOCTYPE html>
<html>
<body>
<h1> Form </h1>
<form  method= "POST" >

    <div class= "form">
        <label for = "email">Please enter your Email:
        </label>
        <input  name="email" type = "email" id="email" required>
    </div>

    <div class="form">
        <input type="submit" value="Send Form">
    </div>
</form>

<h1>
<?php
 if (isset($_POST["email"])) {
     if((filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))){
         echo"Geldige E-Mail.";
     }
     else{
         echo"Ongeldig E-Mail";
     }
 }
?>