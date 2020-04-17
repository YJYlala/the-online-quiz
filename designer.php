<?php
/**
 * Created by PhpStorm.
 * User: 10732
 * Date: 2018/11/14
 * Time: 12:25
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teacher</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="">-->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
</head>
<body>
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Teacher</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">The Quiz<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Explain.html">Explain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Advice</a>
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
    <h1 class="mt-5">Welcome</h1>
    <h3>Please choose your info</h3>
    <div class="btn btn-group">
        <div class="dropdown">
            <button class="btn" data-toggle="dropdown" id="mydropdown1">subject
                <span class="caret"></span>
                <input type="text" placeholder="Your choose subject">
            </button>
            <ul class="dropdown-menu" role="menu"aria-labelledby="mydropdown1">
                <li role="presentation"><a href="#">Math</a></li>
                <li role="presentation">English</li>
                <li role="presentation">Chemical</li>
                <li role="presentation">Computer Science</li>
            </ul>
        </div>
        <div class="dropdown">
            <button class="btn" data-toggle="dropdown" id="mydropdown2">type
                <span class="caret"></span>
                <input type="text" placeholder="Type of Question">
            </button>
            <ul class="dropdown-menu" role="menu"aria-labelledby="mydropdown2">
                <li role="presentation"><a href="#">Single topics</a></li>
                <li role="presentation">Multiple topics</li>
            </ul>
        </div>
        <div class="dropdown">
            <button class="btn" data-toggle="dropdown" id="mydropdown3">Number
                <span class="caret"></span>
                <input placeholder="Number" type="text">
            </button>
            <ol class="dropdown-menu" role="menu"aria-labelledby="mydropdown3">
                <li role="presentation"><a href="#">1</a></li>
                <li role="presentation">2</li>
                <li role="presentation">3</li>
                <li role="presentation">4</li>
            </ol>
        </div>
    </div>

    <div class="row form-control" style="height: auto">
        <p class="col-md-4"><strong>Here is you design Question:</strong></p>
        <textarea class="col-md-10" rows="5"></textarea>
        <p class="col-md-12">Design A,B,C,D Answer</p>
        <p>A:  <input type="text" class="col-md-5" placeholder="please write" style="width: 300px"></p>
        <p>B:  <input type="text" class="col-md-5" placeholder="please write" style="width: 300px"></p>
        <p>C:  <input type="text" class="col-md-5" placeholder="please write" style="width: 300px"></p>
        <p>D:  <input type="text" class="col-md-5" placeholder="please write" style="width: 300px"></p><br>
        <div class="form-control" style="height: auto">
            <p class="col-md-5"><strong>Right Answer</strong></p>
            <!--<div class="btn btn-group btn-primary col-md-10" >-->
            <div class="input-group-lg" style="background-color: #eecdec">
                <input type="checkbox" placeholder="" style="width: 150px">A
                <input type="checkbox" placeholder="" style="width: 150px">B
                <input type="checkbox" placeholder="" style="width: 150px">C
                <input type="checkbox" placeholder=""  style="width: 150px">D
            </div>
            <!--</div>-->
        </div>
        <div class="form-control" style="height: auto">
            <p class="col-md-4"><strong>Here is you design Explain:</strong></p>
            <textarea class="col-md-10" rows="5"></textarea>
            <div class="btn btn-success col-md-10 text-center">
                <button type="submit" class="btn btn-success" >submit</button>
            </div>
        </div>

    </div>
</main>

<footer class="footer">
    <div class="container">
        <span class="text-muted">@2018-2019 Manipal Institute of Technology</span>
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


</body>
</html>
