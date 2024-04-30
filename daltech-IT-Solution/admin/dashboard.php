<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Admin Panel</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 50px 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
        }

        .nav-link {
            padding: 10px;
            font-weight: bold;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .card {
            position: relative;
            width: 200px;
            height: 200px;
            background: lightgrey;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            transition: all 1s ease-in-out;
            border: 2px solid rgb(255, 255, 255);
        }

        .background {
            position: absolute;
            inset: 0;
            background-color: #4158D0;
            background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
        }

        .logo {
            position: absolute;
            right: 50%;
            bottom: 50%;
            transform: translate(50%, 50%);
            transition: all 0.6s ease-in-out;
            font-size: 1.3em;
            font-weight: 600;
            color: #ffffff;
            letter-spacing: 3px;
        }

        .logo .logo-svg {
            fill: white;
            width: 30px;
            height: 30px;
        }

        .icon {
            display: inline-block;
            width: 20px;
            height: 20px;
        }

        .icon .svg {
            fill: rgba(255, 255, 255, 0.797);
            width: 100%;
            transition: all 0.5s ease-in-out;
        }

        .box {
            position: absolute;
            padding: 10px;
            text-align: right;
            background: rgba(255, 255, 255, 0.389);
            border-top: 2px solid rgb(255, 255, 255);
            border-right: 1px solid white;
            border-radius: 10% 13% 42% 0%/10% 12% 75% 0%;
            box-shadow: rgba(100, 100, 111, 0.364) -7px 7px 29px 0px;
            transform-origin: bottom left;
            transition: all 1s ease-in-out;
        }

        .box::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: inherit;
            opacity: 0;
            transition: all 0.5s ease-in-out;
        }

        .box:hover .svg {
            fill: white;
        }

        .box1 {
            width: 70%;
            height: 70%;
            bottom: -70%;
            left: -70%;
        }

        .box1::before {
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #ff53d4 60%, #62c2fe 90%);
        }

        .box1:hover::before {
            opacity: 1;
        }

        .box1:hover .icon .svg {
            filter: drop-shadow(0 0 5px white);
        }

        .box2 {
            width: 50%;
            height: 50%;
            bottom: -50%;
            left: -50%;
            transition-delay: 0.2s;
        }

        .box2::before {
            background: radial-gradient(circle at 30% 107%, #91e9ff 0%, #00ACEE 90%);
        }

        .box2:hover::before {
            opacity: 1;
        }

        .box2:hover .icon .svg {
            filter: drop-shadow(0 0 5px white);
        }

        .box3 {
            width: 30%;
            height: 30%;
            bottom: -30%;
            left: -30%;
            transition-delay: 0.4s;
        }

        .box3::before {
            background: radial-gradient(circle at 30% 107%, #969fff 0%, #b349ff 90%);
        }

        .box3:hover::before {
            opacity: 1;
        }

        .box3:hover .icon .svg {
            filter: drop-shadow(0 0 5px white);
        }
        .col-4{
            margin-left: 10px;
            margin-top: 10px;
        }

        .box4 {
            width: 10%;
            height: 10%;
            bottom: -10%;
            left: -10%;
            transition-delay: 0.6s;
        }
        .row{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 10px;

        }


        .card:hover {
            transform: scale(1.1);
        }

        .card:hover .box {
            bottom: -1px;
            left: -1px;
        }

        .card:hover .logo {
            transform: translate(70px, -52px);
            letter-spacing: 0px;
        }
    </style>
</head>

<body>
    <center>
        <h2>
            Admin Dashboard
        </h2>
<div class="row">
    <div class="col-4" >
    <?php include 'card.php' ?>
       <br>
    </div>
    <div class="col-4" >
    <?php include 'card1.php' ?>
       <br>
    </div>
    <div class="col-4" >
    <?php include 'card1.php' ?>
       <br>
    </div>
   
      
    </div>
      
    </center>

 
    <div class="d-flex" id="wrapper">
        <div class="bg-light sidebar" id="sidebar">
            <div class="list-group list-group-flush">
                <a href="register-user-data.php" class="list-group-item list-group-item-action nav-link">Register User</a>
                <a href="display-contact.php" class="list-group-item list-group-item-action nav-link">Contact Us</a>
                <a href="#Messages" class="list-group-item list-group-item-action nav-link">Message</a>
                <a href="#DalTech" class= "list-group-item list-group-item-action nav-link">Daltech</a>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>