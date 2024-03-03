<?php
    include('conn.php');
    $id_get = $_REQUEST['id'];
    $sql = "SELECT * FROM Phonebook_List WHERE id_Phonebook = $id_get";
    $result = mysqli_query($conn,$sql);
    $name;
    $ty;
    $te;
    $id;
    if ($result->num_rows > 0) {
        while ($rows = mysqli_fetch_array($result)) {
            $name = $rows['Phonebook_name'];
            $ty = $rows['Phonebook_type'];
            $te = $rows['Phonebook_TEL'];
            $id = $rows['id_Phonebook'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
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
    <h1>EDIT PHONEBOOK</h1>
    <br>
    <form action="edit.php?id=<?php echo $id;?>" method="post">
        <p>NAME:</p><input type="text" name="name" size="50" value="<?php echo $name?>" required=""><br>
        <p>TYPE:</p> <select name="type" required="">
                <option value="Family" <?php if ($ty === 'Family') echo 'selected'; ?>>Family</option>
                <option value="Friend" <?php if ($ty === 'Friend') echo 'selected'; ?>>Friend</option>
                <option value="Colleague" <?php if ($ty === 'Colleague') echo 'selected'; ?>>Colleague</option>
                <option value="Business" <?php if ($ty === 'Business') echo 'selected'; ?>>Business</option>
                <option value="Misc" <?php if ($ty === 'Misc') echo 'selected'; ?>>Misc</option>
            </select><br>
        <p>TEL:</p><input type="text" name="tel" maxlength="10" size="10" pattern="[0-9]*" value="<?php echo $te?>" required=""><br><br>
        <!-- <input type="submit" value="EDIT"> -->
        <button class="btn" type="submit" value="EDIT">EDIT</button>
    </form>
    <br>
    <a href="phonebook.php"><button class="btn">CANCEL</button></a>
</body>
</html>