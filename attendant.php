
<?php
include_once ("connection.php");
$loginid1=fread($loginid,100);
$string4="SELECT * FROM `user_info` WHERE `UserID`= $loginid1";
$res4=mysqli_query($conn,$string4);
$row4=mysqli_fetch_array($res4);
$username=$row4["Name"];
$subject=fread($record,100);
$num=fread($record1,100);
$string1="SELECT * FROM `category` WHERE `TypeName`='".$subject."'";
$res1=mysqli_query($conn,$string1);
$row1=mysqli_fetch_array($res1);
$typeID=$row1["TypeID"];
$string2="SELECT * FROM `question_info`WHERE `TypeID`=$typeID AND `QID`= $num";
$res2=mysqli_query($conn,$string2);
$row2=mysqli_fetch_array($res2);
$string3="SELECT * FROM `question_aid` WHERE `TypeID`=$typeID AND `QID`=$num";
$res3=mysqli_query($conn,$string3);
$row3=mysqli_fetch_array($res3);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Attendant</title>
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
        <a class="navbar-brand" href="#">Manager</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">The Quiz<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="explain.php">Explain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="mangeradvice.php">Advice</a>
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
    <h1 class="mt-5">Welcome<small><?php echo $username;?></small></h1>
    <h3>Please choose the info</h3>
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
                <button class="btn btn-info" id="Switch" name="Switch">Switch</button>
    </div>

    <div class="row form-control" style="height: auto">
        <p class="col-md-4"><strong>Design the question here:</strong></p>
        <textarea class="col-md-10" rows="5" id="QContent" name="QContent"><?php echo $row2["QContent"];?></textarea>
        <p class="col-md-12">Design A,B,C,D Answers</p>
        <p>A:  <input type="text" class="col-md-5" placeholder="please write" style="width: 300px" value="<?php echo $row2["A"];?>" id="A" name="A"></p>
        <p>B:  <input type="text" class="col-md-5" placeholder="please write" style="width: 300px" value="<?php echo $row2["B"];?>" id="B" name="B"></p>
        <p>C:  <input type="text" class="col-md-5" placeholder="please write" style="width: 300px" value="<?php echo $row2["C"];?>" id="C" name="C"></p>
        <p>D:  <input type="text" class="col-md-5" placeholder="please write" style="width: 300px" value="<?php echo $row2["D"];?>" id="D" name="D"></p><br>
        <div class="form-control" style="height: auto">
            <p class="col-md-4"><strong>Here is you design A Explain:</strong></p>
            <textarea class="col-md-10" rows="5" id="TA" name="TA"><?php echo $row3["TA"];?></textarea>
            <p class="col-md-4"><strong>Here is you design B Explain:</strong></p>
            <textarea class="col-md-10" rows="5" id="TB" name="TB"><?php echo $row3["TB"];?></textarea>
            <p class="col-md-4"><strong>Here is you design C Explain:</strong></p>
            <textarea class="col-md-10" rows="5" id="TC" name="TC"><?php echo $row3["TC"];?></textarea>
            <p class="col-md-4"><strong>Here is you design D Explain:</strong></p>
            <textarea class="col-md-10" rows="5" id="TD" name="TD"><?php echo $row3["TD"];?></textarea>
            <div class="btn btn-success col-md-10 text-center">
                <button type="submit" class="btn  btn-block btn-success" id="submit" name="submit" >submit</button>
            </div>
            <div class="btn btn-info col-md-10 text-center">
                <button type="submit" class="btn btn-block btn-info" id="update" name="update">update</button>
            </div>
            <div class="btn btn-danger col-md-10 text-center">
                <button type="submit" class="btn btn-block btn-danger" id="delete" name="delete">delete</button>
            </div>
        </div>
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
<script type="text/javascript">
    $(function () {
        $("#Switch").on("click",function () {
           var subject=$("input[name='proname']").val();
            var num=$("input[name='proname1']").val();
            $.post("teacherswitch.php",{
                "subject":subject,
                "num":num
            },function (data) {
                alert(data);
                    alert("change sucessully");
            })
            window.location.reload();
        })
    })
</script>

<script type="text/javascript">
    $(function () {
        $("#submit").on("click",function () {
            var subject=$("input[name='proname']").val();
            var num=$("input[name='proname1']").val();
            var QContent=$("#QContent").val();
            var TA=$("#TA").val();
            var TB=$("#TB").val();
            var TC=$("#TC").val();
            var TD=$("#TD").val();
            var A=$("input[name='A']").val();
            var B=$("input[name='B']").val();
            var C=$("input[name='C']").val();
            var D=$("input[name='D']").val();
            $.post("teachersubmit.php",{
                "subject":subject,
                "num":num,
                "QContent":QContent,
                "TA":TA,
                "TB":TB,
                "TC":TC,
                "TD":TD,
                "A":A,
                "B":B,
                "C":C,
                "D":D
            },function (data) {
                alert(data);

            })
        })
    })
</script>

<script type="text/javascript">
    $(function () {
        $("#delete").on("click",function () {
            var subject=$("input[name='proname']").val();
            var num=$("input[name='proname1']").val();
            $.post("teacherdelete.php",{
                "subject":subject,
                "num":num
            },function (data) {
                alert(data);

            })
        })
    })
</script>

<script type="text/javascript">
    $(function () {
        $("#update").on("click",function () {
            var subject=$("input[name='proname']").val();
            var num=$("input[name='proname1']").val();
            var QContent=$("#QContent").val();
            var TA=$("#TA").val();
            var TB=$("#TB").val();
            var TC=$("#TC").val();
            var TD=$("#TD").val();
            var A=$("input[name='A']").val();
            var B=$("input[name='B']").val();
            var C=$("input[name='C']").val();
            var D=$("input[name='D']").val();
            $.post("teacherupdate.php",{
                "subject":subject,
                "num":num,
                "QContent":QContent,
                "TA":TA,
                "TB":TB,
                "TC":TC,
                "TD":TD,
                "A":A,
                "B":B,
                "C":C,
                "D":D
            },function (data) {
                alert(data);
            })
        })
    })
</script>

</body>
</html>