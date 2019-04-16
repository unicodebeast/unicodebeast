<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
    <?php
    require_once 'header.php';
    ?>
    <div class="section">
        <div class="background">
            <h1>CONTACT US</h1>
            <h3>kindly fill out the form bellow to get intouch with us via email</h3>
            <form action="" class="contact">
                <div class="groups">
                    <div class="column-1">
                        <h2>Office Address</h2>
                        <p>No 17 Kwasu Street, <br> Malete Ilorin, Kwara State </p>
                    </div>
                    <div class="column-2">
                            Enter Name:
                            <input type="text" name="Name" id="" class="con-input" required>
                            Enter Email:
                            <input type="email" name="" id="" class="con-input" required>
                            Enter Phone No:
                            <input type="tel" name="" id="" class="con-input" required>
                            
                    </div>
                    <div class="column-3">
                            Enter Your Comment
                            <input type="textarea" name="" class="comment"id="" required>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
    require_once 'footer.php';
    ?>
    </div>
</body>
</html>