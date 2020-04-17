<?php
/**
 * Created by PhpStorm.
 * User: 杨景优
 * Date: 2018/11/12
 * Time: 10:20
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sign up</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="1.jpg" alt="" width="144" height="144">
        <p class="lead">欢迎注册心理测试用户！</p>
    </div>

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your information</span>
                <span class="badge badge-secondary badge-info">0</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">your name</h6>
                        <small class="text-muted">whole name</small>
                    </div>
                    <!--<span class="text-muted">0</span>-->
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">your telephone</h6>
                        <small class="text-muted">add country</small>
                    </div>
                    <!--<span class="text-muted">$8</span>-->
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">your address</h6>
                        <small class="text-muted">add city</small>
                    </div>
                    <!--<span class="text-muted">$5</span>-->
                </li>
            </ul>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Login up information</h4>
            <form class="needs-validation" novalidate>
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Login PWd</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Pwd</span>
                        </div>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Login Pwd" required>
                        <div class="invalid-feedback" style="width: 100%">
                            You Login Pwd is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">telephone </label>
                    <input type="email" class="form-control" id="telephone" name="telephone" placeholder="which number you used">
                    <div class="invalid-feedback">
                        Please enter a telephone number for updates.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Age<span class="text-muted">(required)</span></label>
                    <input type="text" class="form-control" id="Age" name="Age" placeholder="18" required>
                    <div class="invalid-feedback">
                        Please enter your Age.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Birthday</label>
                    <input type="date" class="form-control" id="Birthday" name="Birthday" value="1998-09-01"  required>
                    <div class="invalid-feedback">
                        Please enter your Birthday
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Sex</label>
                        <select class="custom-select d-block w-100" id="Sex" name="Sex" required>
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid sex.
                        </div>
                    </div>
                    <div class="container">
                        <input type="radio"  name="accept" ><strong>I agree with joining in</strong>
                        <br><br><input type="radio" name="accept"><strong>I don't agree with joining in</strong>
                        <br> <br>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit" id="submit" name="submit">Submit</button>
                    <a href="login.php" class="btn-block" id="return"><button class="btn btn-success btn-lg btn-block" type="button">return</button></a>
                    <footer class="my-5 pt-5 text-muted text-center text-small">
                        <p class="mb-1">&copy; 2018-2019 Manipal-Institute-of-Technology</p>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#">Thanking for you Joining</a></li>
                            <li class="list-inline-item"><a href="#">rewrite</a></li>
                            <li class="list-inline-item"><a href="#">Support</a></li>
                        </ul>
                    </footer>
            </form>
        </div>
    </div>

</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="jquery-3.3.1.min.js"><\/script>')</script>
<script src="popper.min.js"></script>
<script src="bootstrap.min.css"></script>
<script src="holder.min.js"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';

        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<script src="jquery-3.3.1.min.js">

</script>

<script>
    $(function () {
        $("#submit").on("click",function () {
            var firstName=$("input[name='firstName']").val();
            var lastName=$("input[name='lastName']").val();
            var password=$("input[name='password']").val();
            var telephone=$("input[name='telephone']").val();
            var Birthday=$("input[name='Birthday']").val();
            var Age=$("input[name='Age']").val();
            var a=document.getElementById("Sex");  //select标签获取的值其实是一个数组--a.options[]; 然后，选定项的下标是--a.selectedIndex
            var Sex=a.options[a.selectedIndex].value;
            $.post("doSign.php",{
                "firstName":firstName,
                "lastName":lastName,
                "password":password,
                "telephone":telephone,
                "Birthday":Birthday,
                "Sex":Sex,
                "Age":Age
            },function (data) {
                alert(data);
                if (data=="注册成功")
                {location.href="http://localhost/psychological_test/psychological_test/SignShow.php";}
                else {
                    alert("something is worry");
                }
            })
        })
    })
</script>
</body>
</html>
