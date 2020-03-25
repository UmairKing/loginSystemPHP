<?php
session_start();
if (isset($_SESSION['useremail'])) {
    header("Location: php/main.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- This page is designed by me... Uncommnet the following css to get a dark login page (Previous version) -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        .form-signin {
            padding: 25px;
            max-width: 500px;
            min-width: 400px;
            /* background-color: #303030; */
            background-color: #ffffff;
            border-radius: 25px;
            box-shadow: 5px 5px rgb(143, 212, 247);
        }

        body {
            /* background-color: #181818; */
            background-color: #007bff;
        }

        #email {
            /* border-bottom: 1px solid #7a7a7a;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0; */
            margin-bottom: 10px;
            border-radius: 50px !important;
        }

        button {
            border-radius: 50px !important;
        }

        #pass {
            border-radius: 50px !important;
            /* border-top: 0;
            border-top-left-radius: 0;
            border-top-right-radius: 0; */
        }

        .form-signin input {
            height: 40px;
        }
    </style>
    <script>
        function signUp() {
            document.location.href = "signuphtml.php";
        }
    </script>
</head>

<body>
    <div class="container vh-100 d-flex align-items-center justify-content-center">
        <form class="form-signin text-center" action="php/login.php" method="POST">
            <h3 class="mb-4">Please Sign In</h3>
            <input type="text" id="email" class="form-control " name="logEmail" placeholder="Enter Your Email" required autofocus>
            <input type="password" id="pass" class="form-control mb-2" name="logPass" placeholder="Enter Your Password" required>
            <button type="submit" name="submit" class="mt-5 btn btn-primary btn-lg btn-block">Submit</button>
            <a class="d-block text-center mt-2 small" href="#" onclick="signUp()">Sign Up</a>
            <p class="mt-5 mb-3 text-muted">&copy; 2020-2022</p>
        </form>
    </div>
</body>

</html>