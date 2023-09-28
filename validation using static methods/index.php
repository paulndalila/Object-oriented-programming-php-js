<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="action.php" method="post"> 
        <h1>Registeration Form</h1>
        <input type="text" name="fname" id="fname" placeholder="First Name" required/>
        <input type="text" name="lname" id="lname" placeholder="Last Name" required/>
        <input type="email" name="email" id="email" placeholder="Email address" required/>
        <input type="password" name="password" id="password" placeholder="New password" required/>
        <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm password" required/>
        <input type="submit" name="submit" id="submitBtn" value="Submit"/>
    </form>
</body>
</html>