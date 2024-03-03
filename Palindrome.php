<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>
    <link rel="stylesheet"href="style.css">
    <button class="btn" onclick="location.href='My.html'">Profile</button>
    <button class="btn" onclick="location.href='review.html'">Review</button>
    <button class="btn" onclick="location.href='EasyCal.html'">EasyCal</button>
    <button class="btn" onclick="location.href='Easymath.html'">Easymath</button>
    <button class="btn" onclick="location.href='multi.php?n=1'">multi</button>
    <button class="btn" onclick="location.href='Palindrome.php'">Palindrome</button>
    <button class="btn" onclick="location.href='./phonebook/phonebook.php'">Phonebook</button>
    <button class="btn" onclick="location.href='./cookie/cookie.php'">cookie</button>
</head>
<body style="background-color: #FF9190;">
    <div style="padding: 35px 250px 95px 350px;">
        <form method="post" accept="Palindrome.php" >
            <br>
            <p style="font-size: 30px">Word : 
            <input type="text" name="n" style="font-size: 30px; text-align: center;">
             : <input type="submit" value="ADD" style="font-size: 30px; text-align: center;"> </p>
        </form>
        
        <?php
            if(!isset($_REQUEST['n']) || empty($_REQUEST['n'])){
                echo '<p style="font-size: 30px" >Enter the word!!!</p>';
            }else{
                echo '<p style="font-size: 30px">Word :'.$_REQUEST['n']."</p><br>".'<p style="font-size: 30px">Word Reverse: '.(strrev($_REQUEST['n'])).'<br>';
                if($_REQUEST['n'] == strrev($_REQUEST['n'])){
                    echo "<br>".'<p style="font-size: 30px;">"'.$_REQUEST['n'].'"'." is a Palindrome</p>";
                }else{
                    echo "<br>".'<p style="font-size: 30px;">"'.$_REQUEST['n'].'"'." is not a Palindrome</p>";
                }
            }
        ?>
    </div>
</body>
</html>