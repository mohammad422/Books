<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="../css/stylesheet4.css" type="text/css" rel="stylesheet">
</head>
<body>
<div id="signup">
    <h1>Login</h1>
    <hr>
    <form method="post" action="../Controllers/login.controller.php" enctype="multipart/form-data">

            <label> <h2>FirstName</h2> </label>
        <p>
            <input type="text" name="username" placeholder="Enter your username">
        </p>

            <label><h2>LastName</h2> </label>
        <p>
            <input type="password" name="password" placeholder="Enter your password">
        </p>
        <p>
           Remember me <input type="checkbox" name="check">
        </p>
        <input type="submit" value="Send" name="btn">
    </form>
</div>
</body>
</html>
