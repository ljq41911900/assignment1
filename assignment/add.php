<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <script type="text/javascript" src="script/script.js"></script>
</head>
<body class="registerBody">

<div class="registerMain">
    <form action="adminAddController.php" method="post">
        <div class="inputDiv">
            <input class="input" type="text" placeholder="username" name="username">
        </div>
        <div class="inputDiv">
            <input class="input" type="password" placeholder="Password" name="password">
        </div>
        <div>
            <button class="button" type="submit">Add admin</button>
        </div>
        <div class="message">
            

        </div>
    </form>
</div>

</body>
</html>