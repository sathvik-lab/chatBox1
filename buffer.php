<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Water+Brush&display=swap" rel="stylesheet">
    <style>
        /* @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900|Open Sans:400,600,800');
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        div,
        input,
        p,
        a {
            font-family: "Open Sans";
            margin: 0px;
        }
        
        a,
        a:hover,
        a:focus {
            color: inherit;
        }
        
        body {
            background-color: #161a1d;
        }
        
        .container-fluid,
        .container {
            max-width: 1200px;
            display: flex;
            justify-content: center;
        }
        
        .card-container {
            padding: 100px 0px;
            -webkit-perspective: 1000;
            perspective: 1000;
        }
        
        .profile-card-2 {
            max-width: 300px;
            max-height: 500px;
            background-color: #353535;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            background-position: center;
            overflow: hidden;
            position: relative;
            margin: 10px;
            cursor: pointer;
            border-radius: 10px;
        }
        
        .img.img1 {
            width: 100%;
            background-attachment: fixed;
            background-position: top center;
        }
        
        .profile-card-2 img {
            transition: all linear 0.25s;
        }
        
        .profile-card-2 .profile-name {
            position: absolute;
            left: 30px;
            bottom: 70px;
            font-size: 30px;
            color: #FFF;
            text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
            font-weight: bold;
            transition: all linear 0.25s;
        }
        
        .profile-card-2 .profile-icons {
            position: absolute;
            bottom: 30px;
            right: 30px;
            color: #FFF;
            transition: all linear 0.25s;
        }
        
        .profile-card-2 .profile-username {
            position: absolute;
            bottom: 50px;
            left: 30px;
            color: #FFF;
            font-size: 13px;
            transition: all linear 0.25s;
        }
        
        .profile-card-2 .profile-icons .fa {
            margin: 5px;
        }
        
        .profile-card-2:hover img {
            filter: grayscale(100%);
        }
        
        .profile-card-2:hover .profile-name {
            bottom: 80px;
        }
        
        .profile-card-2:hover .profile-username {
            bottom: 60px;
        }
        
        .profile-card-2:hover .profile-icons {
            right: 40px;
        } */
        
        html,
        body {
            min-height: 100%;
        }
        
        body {
            background: linear-gradient(125deg, #264653 0%, #023047 100%);
        }
        
        .example {
            position: relative;
            width: 80%;
            padding-top: 50%;
            margin: 2rem auto;
        }
        
        .example>.block {
            position: absolute;
            height: 80%;
            width: 30%;
            perspective: 1000px;
        }
        
        .example>.block:nth-of-type(1) {
            height: 70%;
            top: 5%;
            left: 30%;
            width: 19%;
        }
        
        .example>.block:nth-of-type(1) .text {
            font-family: 'Water Brush', cursive;
            margin-top: 150%;
            font-size: 90px;
            color: #b6ccfe;
            font-weight: bold;
            opacity: 0.8;
        }
        
        .example>.block:nth-of-type(2) .text {
            font-family: 'Water Brush', cursive;
            margin-top: 110%;
            font-size: 110px;
            color: #b6ccfe;
            font-weight: bold;
            opacity: 0.8;
        }
        
        .example>.block:nth-of-type(1):hover {
            filter: grayscale(70%);
            cursor: pointer;
        }
        
        .example>.block:nth-of-type(2):hover {
            filter: grayscale(70%);
            cursor: pointer;
        }
        
        .example>.block:nth-of-type(2) {
            top: 0;
            left: 50%;
            width: 30%;
        }
        
        .example>.block>.side {
            position: absolute;
            top: 0;
            left: 0;
            background-image: url('https://images.unsplash.com/photo-1598899450636-3c62c5332a35?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');
            background-size: auto 100%;
            box-shadow: -1vw 0.5vw 1vw rgba(0, 0, 0, 0.3);
        }
        
        .example>.block>.side.-main {
            height: 100%;
            width: 100%;
            transform: rotateY(30deg);
            transform-origin: 0 50%;
        }
        
        .example>.block>.side.-left {
            height: 100%;
            width: 20%;
            transform-origin: 0 50%;
            transform: rotateY(-60deg) translateX(-100%);
            filter: brightness(40%);
        }
        
        .example>.block:nth-of-type(1)>.side.-main {
            background-position: 4% 50%;
            background-size: auto 130%;
        }
        
        .example>.block:nth-of-type(1)>.side.-left {
            background-position: 0 50%;
            background-size: auto 130%;
        }
        
        .example>.block:nth-of-type(2)>.side.-main {
            background-position: 50% 0;
        }
        
        .example>.block:nth-of-type(2)>.side.-left {
            background-position: 28.5% 0;
        }
    </style>
</head>

<div class="example">
    <div class="block img img-responsive profile-card-2" onClick="myFunction()">
        <div class="side -main">
            <div class="text">Text</div>
        </div>
        <div class="side -left"></div>

    </div>
    <div class="block img img-responsive profile-card-2" onClick="myfunction()">
        <div class="side -main">
            <div class="text">Call</div>
        </div>
        <div class="side -left"></div>

    </div>
</div>
<!-- //remember to add this video -->
<!-- <iframe src="https://www.youtube.com/embed/ioaY1z2trx4?&autoplay=1&mute=1&playlist=ioaY1z2trx4&loop=1&controls=0"></iframe> -->
</body>

</html>
<?php


// getting the values of post parameters 


$room = $_GET['room'];


include 'db_connect.php';


//check if room already exists
$sql = "INSERT INTO `chatrooms` (`roomName`, `sTime`) VALUES ('$room', current_timestamp());";


$message = "Room is ready ... You can chat now !!";
echo '<script language="javascript">';
echo 'function myFunction(){';
echo 'alert("'.$message.'");';
echo 'window.location ="http://localhost/chatbox1/rooms.php?roomname=' . $room . '";';
echo '};';



// echo 'function myfunction(){';
// echo '';

echo '</script>';



?>