<?php
    include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phonebook List</title>
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
    <h1 style="text-align: center;">Phonebook List</h1><br>
    <a href="Addphone.php" >
    <button class="btn" style="font-size: 20px;">+</button>
    </a>
    <hr>
    <?php
    
        $sql = 'SELECT * FROM Phonebook_List';
        $result = mysqli_query($conn,$sql);
        if ($result->num_rows > 0) {
            while ($rows = mysqli_fetch_array($result)) {
                echo '<div>';
                echo '<span style="color:blue;"><b>'.$rows['Phonebook_name'].' '."</b></span>";
                echo '('.$rows['Phonebook_type'].') ';
                echo 'เบอร์'.$rows['Phonebook_TEL']." ";
                echo '<a href="editform.php?id='.$rows["id_Phonebook"].'"><button class="btn">EDIT</button></a>'.' ';
                echo '<a href="X.php?id='.$rows["id_Phonebook"].'"><button class="btn">X</button></a>';
                echo '<hr>';
                echo '</div>';
            }
        }else{
            echo 'None.';
        }
    ?>
</body>
</html>