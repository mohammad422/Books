<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
   <link href="../css/stylesheet4.css" type="text/css" rel="stylesheet">
</head>
<body>
<div id="signup" >
    <h1>Sign Up</h1>
    <hr>
<form method="post" action="../Controllers/signup.controller.php" enctype="multipart/form-data">

        <label><h2>FirstName</h2></label>
    <p>
        <input type="text" name="firstname" placeholder="Enter your firstname">
    </p>

        <label><h2>LastName</h2></label>
    <p>
        <input type="text" name="lastname" placeholder="Enter your Lastname">
    </p>

        <label><h2>UserName</h2></label>
    <p>
        <input type="text" name="username" placeholder="Enter your username">
    </p>
        <label><h2>Password</h2></label>
    <p>
        <input type="password" name="password" placeholder="Enter your password">
    </p>
    <input type="submit" value="Send" >
</form>
</div>
</body>
</html>
