<?php 
include('regs.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SARC Assignment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="jquery-2.1.4.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

    <style>
    input[type=submit]{
            background-color: white;
            color: #1e90ff;
            cursor: pointer;
            padding: 9px 35px;
            border-radius: 10px;
            box-shadow: 0 1px 5px #1e90ff;
            transition: 0.5s;
            font-size: 18px;
            margin: auto;
        }
        input[type=submit]:hover{
           color: white;
           background-color: #1e90ff;
           padding: 11px 45px;
           box-shadow: 0 2px 5px white;
           font-size: 19px;
        }
        .swal-title{
           font-family: montserrat;
        }
        .swal-text{
           font-family: montserrat;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Assignment</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="enter.php">ENTER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="read.php">VIEW</a>
                    </li>



                </ul>
            </div>
        </div>
    </nav>
<?php
require ('regs.php');

if(isset($_POST['submit']))
{
 $namee = ($_POST['name']);
 $rollnoo = ($_POST['roll']);
 $emaill = ($_POST['email']);
 
$sql = "INSERT INTO `sanat_sarc` (`rollno`,`name`,`email`)
VALUES ('$rollnoo','$namee','$emaill')";


if ($conn->query($sql) === TRUE) 
{
    echo("<SCRIPT LANGUAGE='JavaScript'>
        swal({
        icon: 'success',
        title: 'Registered',
        text: 'You Entered Data Successfully'
        }). then(function(result){
        window.location = 'enter.php';
             })
        </SCRIPT>");
}
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
    <div class="container my-5">
        <form action="enter.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputname" class="form-label">Name</label>
                <input class="form-control-md" type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Roll.No</label>
                <input class=" form-control-md" type="text" id="exampleInputPassword1" name="roll">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>

            <input type="submit" value="Register" name="submit">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>


</body>

</html>