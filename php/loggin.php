<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form loggin</title>
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../fontawesome-free-6.2.0-web/css/all.css">
    <link rel="stylesheet" href="../fontawesome-free-6.2.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="/css/loggin.css">
</head>
<body>
    <div id="wrapper">
        <form action="" method="post" id="form-loggin">
            <h1 class="form-heading">Loggin</h1>
            <div class="form-group">
                <i class="fa-regular fa-user"></i>
                <input id="username" name="username" type="text" class="form-input" placeholder="User name">
            </div>
            <div class="form-group">
                <i class="fa-solid fa-key"></i>
                <input id="password" name="password" type="password" class="form-input" placeholder="Password">
                <div id="eye">
                    <i class="fa-regular fa-eye"></i>
                </div>
            </div>
            <input type="submit" value="Loggin" class="form-submit">
            <a href="#">Create account</a>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="../js/loggin.js"></script>
</html>