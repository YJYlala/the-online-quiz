<?php
/**
 * Created by PhpStorm.
 * User: 10732
 * Date: 2018/11/14
 * Time: 12:22
 */
include_once ("connection.php");
$subject=fread($record,100);
$num=fread($record1,100);
$answer=fread($record4,100);
$string1="SELECT * FROM `category` WHERE `TypeName`='".$subject."'";
$res1=mysqli_query($conn,$string1);
$row1=mysqli_fetch_array($res1);
$typeID=$row1["TypeID"];
$string3="SELECT * FROM `question_aid` WHERE `TypeID`=$typeID AND `QID`=$num";
$res3=mysqli_query($conn,$string3);
$row3=mysqli_fetch_array($res3);
$T="T".$answer;
$Tanswer=$row3[$T];
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../../../favicon.ico">-->

    <title>Explain</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
</head>

<body>

<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Explain</a>
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
    <h1 class="mt-5">Explain of The question</h1><h1 class="mt-5">Welcome</h1>
    <h3>Please choose your info</h3>
    <div class="btn btn-group">
        <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                Subject
                <span class="caret"></span>
            </button>
            <ul id="project" class="dropdown-menu">
                <li value="OCD Test"><a href="#">OCD Test</a></li>
                <li class="divider"></li>
                <li value="Stress Test"><a href="#">Stress Test</a></li>
                <li class="divider"></li>
                <li value="Happiness Test"><a href="#">Happiness Test</a></li>
                <li class="divider"></li>
                <li value="Blue Test"><a href="#">Blue Test</a></li>
            </ul>
            <input id="proname" type="text" name="proname" value="<?php echo $subject;?>">
        </div>
        <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                Number
                <span class="caret"></span>
            </button>
            <ul id="project1" class="dropdown-menu">
                <li value="1"><a href="#">1</a></li>
                <li class="divider"></li>
                <li value="2"><a href="#">2</a></li>
                <li class="divider"></li>
                <li value="3"><a href="#">3</a></li>
                <li class="divider"></li>
                <li value="4"><a href="#">4</a></li>
                <li class="divider"></li>
                <li value="5"><a href="#">5</a></li>
                <li class="divider"></li>
                <li value="6"><a href="#">6</a></li>
                <li class="divider"></li>
                <li value="7"><a href="#">7</a></li>
                <li class="divider"></li>
                <li value="8"><a href="#">8</a></li>
                <li class="divider"></li>
                <li value="9"><a href="#">9</a></li>
                <li class="divider"></li>
                <li value="10"><a href="#">10</a></li>
            </ul>
            <input id="proname1" type="text" name="proname1" value="<?php echo $num;?>">
        </div>
        <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
               Answer
                <span class="caret"></span>
            </button>
            <ul id="project3" class="dropdown-menu">
                <li value="A"><a href="#">A</a></li>
                <li class="divider"></li>
                <li value="B"><a href="#">B</a></li>
                <li class="divider"></li>
                <li value="C"><a href="#">C</a></li>
                <li class="divider"></li>
                <li value="D"><a href="#">D</a></li>
            </ul>
            <input id="proname3" type="text" name="proname3" value="<?php echo $answer;?>">
        </div>
        <button class="btn btn-info" id="Switch" name="Switch">Switch</button>
    </div>
    <div class="row form-control" style="height: auto">
        <h4>Here is the Explain of this question:</h4>
        <textarea class="col-md-10" rows="8"><?php echo $Tanswer;?></textarea>
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

<script>
    $("#project").on("click", "li", function(){
        $("#proname").val($(this).text());
    });
</script>
<script>
    $("#project1").on("click", "li", function(){
        $("#proname1").val($(this).text());
    });
</script>
<script>
    $("#project3").on("click", "li", function(){
        $("#proname3").val($(this).text());
    });
</script>

<script type="text/javascript">
    $(function () {
        $("#Switch").on("click",function () {
            var subject=$("input[name='proname']").val();
            var num=$("input[name='proname1']").val();
            var answer=$("input[name='proname3']").val();
            $.post("checkswitch.php",{
                "subject":subject,
                "num":num,
                "answer":answer
            },function (data) {
                alert(data);
                alert("change sucessully");
            })
            window.location.reload();
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
