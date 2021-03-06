<?php
/**
 * Created by PhpStorm.
 * User: 10732
 * Date: 2018/12/9
 * Time: 10:27
 */


include_once ("connection.php");
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../../../favicon.ico">-->

    <title>Advice</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
</head>

<body>

<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Advice</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" id="return" name="return">Return</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>

<!-- Begin page content -->
<main role="main" class="container">
    <h1 class="mt-5">Please make your suggestion </h1><h1 class="mt-5">Welcome</h1>

    <div class="row form-control" style="height: auto">
        <h4>Here is the Suggestion of this question:</h4>
        <textarea class="col-md-10" rows="8" id="advice"></textarea>
    </div>
    <div class="btn btn-danger col-md-10 text-center">
        <button type="submit" class="btn btn-block btn-danger" id="submit" name="submit">submit</button>
    </div>
</main>

<footer class="footer">
    <div class="container">
        <span class="text-muted">@2018-2019 </span>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="jquery-3.3.1.min.js"><\/script>')</script>
<script src="popper.min.js"></script>
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap.min.js"></script>

<script type="text/javascript">
    $(function () {
        $("#submit").on("click",function () {
            var advice=$("#advice").val();
            $.post("doadvice.php",{
         "advice":advice
            },function (data) {
                alert(data);
                window.location.reload();
            })
        })
    })
</script>



<script>
    $("#return").on("click",function () {
        window.history.go(-1);
    });
</script>
</body>
</html>
