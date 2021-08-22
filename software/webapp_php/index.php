<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<title>Leakio</title>

<body>
    <div class="block"></div>
    <div class="container">
        
        <div class="title-text animate__animated animate__fadeInLeft">
            Welcome back, <br>
            <span class="name-text">Hackthe6ix</span>
        </div>

        <?php
$servername = "192.168.2.57";
$username = "root";
$password = "victor";
$dbname = "leakdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    ?>

        <div class="bubble-wrap animate__animated animate__fadeInLeft animate__delay-1s">
            <div class="text-bubble">
                <div class="text-wrap">
                    <div class="text">
                        Status:<span id="replace"> No detected leaks</span> <br>
                        <span style="font-size: 12px;font-weight: 400;">Sound & Water sensors have not detected any
                            abnormal activity in past 24 hours.
                        </span>
                        <div class="button">
                            <span
                                style="font-size:12px;position:absolute; left:50%;top: 50%;transform: translate(-50%,-50%);width:100%;text-align: center;">
                                View Devices
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="next animate__animated animate__fadeInLeft animate__delay-1s">
            <span style="font-size: 12px;">Next Steps: Update Security</span>
            <div class="button2"><span
                    style="font-size:12px;position:absolute; left:50%;top: 50%;transform: translate(-50%,-50%);width:100%;text-align: center;">
                    Update
                </span></div>
        </div>

        <div class="graph animate__animated animate__fadeInLeft animate__delay-2s">
            <span style="font-weight: 700;">Acoustic Status:</span>
            <span style="color:green;">Good</span>
            <img class="graph-img" id="graph" src="./img/graph_img.png">
        </div>

        <div class="menu-bar">
            <li>
                <div class="icon-container"><img class="icon" src="./img/search.png"></div>
            </li>
            <li>
                <div class="icon-container"><img class="icon" src="./img/stats.png"></div>
            </li>
            <li>
                <div class="icon-container active"><img class="icon icon-active" src="./img/home.png"></div>
            </li>
            <li>
                <div class="icon-container"><img class="icon" src="./img/cam.png"></div>
            </li>
            <li>
                <div class="icon-container"><img class="icon" src="./img/person.png"></div>
            </li>
        </div>
    </div>

    <script src="./script.js"></script>
    <script>
        if (CSS && 'paintWorklet' in CSS) CSS.paintWorklet.addModule('https://unpkg.com/smooth-corners')
    </script>

</body>

</html>