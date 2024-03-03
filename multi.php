<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multi</title>
    <style>
        table, th, td {
            border:1px solid black;
            font-size: 30px;
        }
        table{
            background-color: #0B0742;
        }
        td{
            background-color: #FF9190;;
        }
    </style>
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
<body style="background-color: #fdc094;">
    <div style="padding: 25px 250px 75px 350px;">
        <table style="text-align: center;height: 150px;width: 50%;">
            <?php $x = $_GET['n'];?>
            <tr>
                <td colspan="2"><?php echo $x ?></td>
            </tr>
            <?php for($i =1;$i<=12;$i++){?>
                <tr>
                    <td><?php echo $i.' x '.$x." =";?></td>
                    <td><?php echo $x * $i .'<br>';?></td>
                </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>
