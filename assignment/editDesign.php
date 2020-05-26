
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edit</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <script type="text/javascript" src="script/script.js"></script>
</head>
<body class="registerBody">

<div class="registerMain">
    <form action="edit.php" method="post">
        <div class="inputDiv">
            add<input class="input" type="text" placeholder="papertype" name="type"><br>
            
            add<input class="input" type="text" placeholder="colortheme" name="te"><br>
        
            <br>
            
        
            delete<input class="input" type="text" placeholder="papertype" name="typed"><br>
    
            delete<input class="input" type="text" placeholder="colortheme" name="ted"><br>
            <br>
                
            <button class="button" type="submit">submit</button>
        </div>
        <div class="message">
            <?php echo $_GET['message'] ?>

        </div>
    </form>
</div>

</body>
</html>