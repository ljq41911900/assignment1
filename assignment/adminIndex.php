<?php
require "functions.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Index</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <script type="text/javascript" src="script/script.js"></script>
</head>
<body class="mainBody">

    <div class="mainTop">
      <div class="title">Welcome: <?php echo getUserName($_SESSION['id'])?>
        </div>
        <div>
            <button type="button" class="button" onclick="window.location.href='adminLogin.php'">Logout</button>
        </div>
    </div>
    <div class="mainLeft">
        <ul>
            <li onmouseover="changeToGray(this)" onmouseout="changeToNon(this)"> <a href="add.php" target="userIframe">Add Admin</a> </li>
            <li onmouseover="changeToGray(this)" onmouseout="changeToNon(this)"> <a href="editDesign.php" target="userIframe">Edit Design</a> </li>
            <li onmouseover="changeToGray(this)" onmouseout="changeToNon(this)"> <a href="manageAccount.php" target="userIframe">Manage Account</a> </li>
            <li onmouseover="changeToGray(this)" onmouseout="changeToNon(this)"> <a href="saleHistory.php" target="userIframe">Sale History</a> </li>
            <li onmouseover="changeToGray(this)" onmouseout="changeToNon(this)"> <a href="moderateFeedback.php" target="userIframe">Moderate Feedback</a> </li>
            <li onmouseover="changeToGray(this)" onmouseout="changeToNon(this)"> <a href="report.php" target="userIframe">Generate report</a> </li>
        </ul>
    </div>
    <div class="mainRight">
        <iframe id="iframe" name="userIframe" frameborder="0" src="welcome.html"></iframe>
    </div>

</body>
</html>