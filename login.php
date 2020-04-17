<?php
/**
 * Created by PhpStorm.
 * User: 杨景优
 * Date: 2018/11/11
 * Time: 22:27
 *
 */


include_once("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="signin.css">
</head>
<body class="text-center">
<form class="form-signin">
    <img class="mb-4" src="1.jpg" alt="" width="160" height="160">
    <h1 class="h3 mb-3 font-weight-normal">PSYCHOLOGICAL_TEST</h1>
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputLoginID" class="sr-only">Login ID</label>
    <input type="text" id="inputLoginID" name="inputLoginID" class="form-control" placeholder="Login ID" required autofocus >
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required >
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me" id="Remember"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" id="Login" name="Login">Login in</button><br>
    <a href="Signup.php"><button class="btn btn-lg btn-primary btn-block" type="button" id="Sign">Sign in</button></a>
    <p class="mt-5 mb-10 text-muted">&copy; 2018-2019 Jing Company psychological test</p>


</form>

<script>
    $("#inputLoginID").show();
</script>
<script src="jquery-3.3.1.min.js">

</script>

<script type="text/javascript">
    $(function () {
        $("#Login").on("click",function () {
            var userName=$("input[name='inputLoginID']").val();
            var pwd=$("input[name='inputPassword']").val();
         //alert(userName);
        // alert(pwd);
           $.post("doLogin.php",{
                "userName":userName,
                "pwd":pwd
           },function (data) {
                alert(data);
                if (data=="用户登录成功")
                {location.href="http://localhost/psychological_test/psychological_test/user.php";}
                else if (data=="管理员登录成功") {
                  location.href="http://localhost/psychological_test/psychological_test/attendant.php";
                 }
                else {
                        alert("ID or PWD is wrong ");
                    }
           })
        })
    })

</script>
<script>

</script>

</body>
</html>
