<?php
    include('conn.php');
    $name = $_REQUEST['name'];
    $ty = $_REQUEST['type'];
    $te = $_REQUEST['tel'];
    $id_sql = "SELECT * FROM Phonebook_List";
    $id;
    $result = mysqli_query($conn,$id_sql);
    if ($result->num_rows > 0) {
        // echo 'sss';
        while ($rows = mysqli_fetch_array($result)) {
            $id = $rows['id_Phonebook']+1;
        }
    }else{
        // echo '555';
        $id = 1;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head style="background-color: #fdc094;">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>
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
        $sql = "INSERT INTO Phonebook_List VALUES ('$name','$ty','$te',$id)";
        echo '<br><br>';
        if (mysqli_query($conn, $sql)) {
            echo "<p style='font-size: 20px;'>Done: Adding a new record.</p>".'<br><hr>';
            echo '<a href="phonebook.php"><button class="btn">Back</button></a>';
        } else {
            echo "Error: " . $strSQL . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>
</body>
</html>
    