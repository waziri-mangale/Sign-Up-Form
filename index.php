<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="main">
    <div class="register">
        <h2>Register With Our Platform</h2>
        <form id="Register" action="connect.php" method="POST">
            <label>First Name : </label>
            <br>
            <input type="text" name="fname" id="name" placeholder="Enter Your First Name">
            <br><br>
            <label>Middle Name : </label>
            <br>
            <input type="text" name="mname" id="name" placeholder="Enter Middle Name">
            <br><br>
            <label>Last Name : </label>
            <br>
            <input type="text" name="lname" id="name" placeholder="Enter Your Last Name">
            <br><br>
            <label>Your Age : </label>
            <br>
            <input type="number" name="age" id="name" placeholder="How Old Are You?">
            <br><br>
            <label>Email : </label>
            <br>
            <input type="text" name="email" id="name" placeholder="Enter Your Email">
            <br><br>
            <label>Gender : </label>
            <br>
            &nbsp; &nbsp; &nbsp;
            <input type="radio" name="gender" id="male" value="m">
            &nbsp;
            <span id="male">Male</span>
            &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="gender" id="female" value="f">
            &nbsp;
            <span id="female">Female</span>
            &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="gender" id="other" value="o">
            &nbsp;
            <span id="other">Other</span>
            <br><br>
            <label> Fluent Languages : </label>
            <br><br>
            &nbsp; &nbsp; &nbsp;
            <input type="checkbox" name="lang" id="Duruma" value="Duruma">
            &nbsp;
            <span id="Duruma">Duruma</span>
            &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="checkbox" name="lang" id="Digo" value="Digo">
            &nbsp;
            <span id="Digo">Digo</span>
            <br><br>
            <input type="submit" name="submit" id="submit" value="submit">
        </form>
    </div>
</div>
</body>
</html>