<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <style>
        form input {
            border: none;
            background: transparent;
            border-bottom: 2px solid white;
            color: white !important;
        }
    </style>
</head>

<body>
    <div class="container mt-5 py-5">
        <form style="width: 400px;border-radius:20px;" class="mx-auto bg-dark shadow text-white pt-5 py-5 text-center" method="post">
            <h2 class="fw-bold text-center">Login Now</h2>
            <input class="mt-5 input" type="text" name="username" placeholder="username" id=""><br>
            <input class="mt-5 input" type="password" name="pass" placeholder="password" id=""><br>
            <button name="submit" type="submit" class="mx-auto mt-5 col-4 bg-primary text-white fw-bold">Login</button>
            <p class="mt-3">
                <?php
                //reporter
                error_reporting(0);
                //actual var
                $user = "admin";
                $pass = 1234;
                //for username
                    $username = $_POST['username'];
                //for password
                    $password = $_POST['pass'];

                //now final
                if(isset(($_POST['submit']))){
                    if($username == $user AND $password == $pass){
                        echo '
                        <script>
                        let yes = "login successfully";
                        alert(yes);
                        </script>
                        ';
                    }else{
                        echo '<span style="color:red;">Incorrect Input</span>';
                    }
                }
                ?>
            </p>
        </form>
    </div>
</body>
<script src="./bootstrap.bundle.min.js"></script>

</html>