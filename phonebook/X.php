<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X</title>
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
    <?php
        echo '<br><br>';
        include('conn.php');
        $id = $_REQUEST['id'];
        // echo $id;
        $sql = "DELETE FROM Phonebook_List WHERE id_Phonebook = $id";
        if (mysqli_query($conn, $sql)) {
            echo "<p style='font-size: 20px;'>Done: Deleting records.</p>".'<br><hr>';
            echo '<a href="phonebook.php"><button class="btn">Back</button></a>';
        } else {
            echo "Error: " . $strSQL . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>
</body>
</html>


