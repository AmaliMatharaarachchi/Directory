<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CSE Alumni Directory</title>

    <link rel="stylesheet" href="assets/css/animate2.css">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="assets/css/style2.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>

<?php
// define variables and set to empty values
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<div class="container">
    <div class="top">
        <h1 id="title" class="hidden"><span id="logo">CSE Alumni Directory</span></h1>
    </div>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="login-box animated fadeInUp">
            <div class="box-header">
                <h2>Log In</h2>
            </div>
            <label for="username">Username</label>
            <br/>
            <input type="text" name="username">
            <br/>
            <label for="password">Password</label>
            <br/>
            <input type="password" name="password">
            <br/>
            <button type="submit">Sign In</button>
        </div>

    </form>


</div>


</body>


</html>