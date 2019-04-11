<?php
     session_start():

     // connect to database
     $db = mysqli_connect("localhost","root", "", "authentication"):

     ?>


<!DOCTYPEhtml5>
<html>
<head>
     <title>Sign up user php mysql</title>
</head>
<body>
<div class="header">
      <h1>Sign upuser php mysql</h1>
</div>

<form method="post" action="register.php">
    <table>
    <tr>
         <td>Username:</td>
         <td><input type ="text" name="username" class="textInput"></td>
    </tr>

    <tr>
        <td>Email id:</td>
        <td><input type ="Email id" name="Email id" class="textInput"></td>
    </tr>

    <tr>
       <td>Password:</td>
       <td><input type ="Password" name="Password" class="textInput"></td>
   </tr>

   <tr>
       <td>Re-enter password:</td>
       <td><input type ="Re-enter password" name="Re-enter password" class="textInput"></td>
   </tr>

   <tr>
       <td>Phone No:</td>
       <td><input type ="Phone No" name="Phone No" class="textInput"></td>
   </tr>

   <tr>
       <td>submit:</td>
       <td><input type ="submit" name="submit" class="textInput"></td>
   </tr>
   </table> 
</form>
</body>
</html>