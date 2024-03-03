<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VisitCookie</title>
    <link rel="stylesheet"href="../style.css">
    <button class="btn" onclick="location.href='../My.html'">Profile</button>
    <button class="btn" onclick="location.href='../review.html'">Review</button>
    <button class="btn" onclick="location.href='../EasyCal.html'">EasyCal</button>
    <button class="btn" onclick="location.href='../Easymath.html'">Easymath</button>
    <button class="btn" onclick="location.href='../multi.php?n=1'">multi</button>
    <button class="btn" onclick="location.href='../Palindrome.php'">Palindrome</button>
    <button class="btn" onclick="location.href='../phonebook/phonebook.php'">Phonebook</button>
    <button class="btn" onclick="location.href='cookie.php'">cookie</button>
    <style>
      .digital{
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        max-width: 480px;
        margin: 0 auto;
      }
    </style>

  </head>
<body style="background-color: #FF9190;">
    <br><br>
    <h1 style="margin: 0;
            padding: 0;
            text-align: center;">Visit Cookie</h1>
    <div class ='digital'>
        <p>You visited this website <span id="Count">0</span> Times</p>
        <p>The previous visit was <span id="Time"> 0 day(s) 0 hour(s) 0 minute(s) 0 second(s)</span> ago.</p>
    </div>
    <div style="padding: 30px;
        max-width: 400px;
        margin: 0 auto;">
        <button class="btn" id="resetButton" 
        style="font-size: 10px;">Reset</button>
    </div>
    
    <script>
        // ฟังก์ชันเพื่อเรียกดูคุกกี้จากชื่อ
        function getCookie(cookieName) {
            const name = cookieName + "=";
            const decodedCookie = decodeURIComponent(document.cookie);
            const cookieArray = decodedCookie.split(';');
            for (let i = 0; i < cookieArray.length; i++) {
                let cookie = cookieArray[i];
                while (cookie.charAt(0) === ' ') {
                    cookie = cookie.substring(1);
                }
                if (cookie.indexOf(name) === 0) {
                    return cookie.substring(name.length, cookie.length);
                }
            }
            return "";
        }

        // ฟังก์ชันเพื่อตั้งค่าคุกกี้
        function setCookie(cookieName, cookieValue, daysToExpire) {
            const d = new Date();
            d.setTime(d.getTime() + (daysToExpire * 24 * 60 * 60 * 1000));
            const expires = "expires=" + d.toUTCString();
            document.cookie = cookieName + "=" + cookieValue + "; " + expires;
        }

        // รีเซ็ตค่าคุกกี้
        function resetCookies() {
            const visitCountElement = document.getElementById("Count");
            const lastVisitTimeElement = document.getElementById("Time");

            const initialVisitCount = 1; // ตั้งค่าคุกกี้เริ่มต้นเป็น 1
            const initialLastVisitTime = new Date().getTime().toString(); // ตั้งค่าคุกกี้เริ่มต้นเป็นเวลาปัจจุบัน

            visitCountElement.textContent = initialVisitCount;
            lastVisitTimeElement.textContent = " 0 day(s) 0 hour(s) 0 minute(s) 0 second(s)";

            setCookie("Count", initialVisitCount, 365);
            setCookie("Time", initialLastVisitTime, 365);
        }


        // เรียกใช้งานเมื่อโหลดหน้าเว็บ
        window.onload = function() {
            const visitCountElement = document.getElementById("Count");
            const lastVisitTimeElement = document.getElementById("Time");
            const resetButton = document.getElementById("resetButton");

            let visitCount = getCookie("Count");
            let lastVisitTime = getCookie("Time");

            if (visitCount === "") {
                visitCount = 1;
            } else {
                visitCount = parseInt(visitCount) + 1;
            }

            visitCountElement.textContent = visitCount;

            const currentTime = new Date().getTime();
            if (lastVisitTime !== "") {
                const lastVisitTimestamp = parseInt(lastVisitTime);
                const timeDifference = currentTime - lastVisitTimestamp;
                const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeDifference / (1000 * 60 * 60)) % 24);
                const minutes = Math.floor(timeDifference / (1000 * 60));
                const seconds = Math.floor((timeDifference / 1000) % 60);
                lastVisitTimeElement.textContent = `${days} day(s) ${hours} hour(s) ${minutes} minute(s) ${seconds}  second(s)`;
            }

            resetButton.addEventListener("click", resetCookies);
            setCookie("Count", visitCount, 365);
            setCookie("Time", currentTime, 365);
        }
    </script>
</body>
</html>
