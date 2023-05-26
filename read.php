<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style>
table{
        margin-left: 28%;
        }

table td, table th {
    border: 1px solid black;
    padding: 8px;
}

table tr:nth-child(even){
background-color: none;
color: black;
}

table tr:nth-child(odd){
background-color: none;
color: black;
}

table tr:hover {
background-color: #3399ff;
color: black;
}

table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #1e90ff;
    color: white;
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
    <br> <br> <br>

    <section>
        <h1 style="text-align:center ">Welcome to VIEW Page </h1>
        <p style="text-align: center ; font-size :x-large;"> In this website we can enter the details of a student and
            store it in database(phpMyadmin) and then can read it.</p>
        <br><br>
<?php
    include('mysql.php');
    
    $sqlget = "SELECT * FROM sanat_sarc";
    $sqldata = mysqli_query($dbcon, $sqlget) or die('An error occured...');
    
    
    echo"<table>";
    echo "<tr><th>Sr No.</th><th>Name</th><th>Roll No.</th><th>Email</th></tr>";

    while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
       echo "<tr><td>";
       echo $row['srno'];
       echo "</td><td>";
       echo $row['name'];
       echo "</td><td>";
       echo $row['rollno'];
       echo "</td><td>";
       echo $row['email'];
       echo "</td></tr>";
    }
    echo "</table>";
    ?>

    </section>

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