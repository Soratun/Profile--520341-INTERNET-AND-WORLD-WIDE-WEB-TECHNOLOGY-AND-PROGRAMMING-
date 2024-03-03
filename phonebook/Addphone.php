<?php
    include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet"href="../style.css">
    <button class="btn" onclick="location.href='../My.html'">Profile</button>
    <button class="btn" onclick="location.href='../review.html'">Review</button>
    <button class="btn" onclick="location.href='../EasyCal.html'">EasyCal</button>
    <button class="btn" onclick="location.href='../Easymath.html'">Easymath</button>
    <button class="btn" onclick="location.href='../multi.php?n=1'">multi</button>
    <button class="btn" onclick="location.href='../Palindrome.php'">Palindrome</button>
    <button class="btn" onclick="location.href='phonebook.php'">Phonebook</button>
</head>
<body style="background-color: #fdc094;">
    <h1>ADD NEW</h1>
    <br>
    <form action="add.php" method="post">
        <p>NAME:</p> <input type="text" name="name" size="50" required=""><br>
        <p>TYPE:</p> <select name="type" required="">
        <option value="" selected="" disabled="disabled"></option>
        <option value="Family">Family</option>
        <option value="Friend">Friend</option>
        <option value="Colleague">Colleague</option>
        <option value="Business">Business</option>
        <option value="Misc">Misc</option>
        </select><br>
        <p>TEL:</p> <input type="text" name="tel" maxlength="10" size="10" pattern="[0-9]*" required=""><br><br>
    <!-- <input type="submit" value="ADD"> -->
        <button class="btn" type="submit" value="ADD">ADD</button>
    </form>
    <br>
    <a href="phonebook.php"><button class="btn" type="sub">CANCEL</button></a>
</body>
</html>