<?php 
    include("save.php");
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>TMO</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>
    </head>
    <style>
        body{
        background-image: url("image.jpg");
        background-size: 100%;
        background-repeat: no-repeat-x;
        color: #ffffff;
        font-family: 'Roboto', sans-serif;
        }
    </style>
    <body>
    <form method="post" action="gmail.php">
        <h1 class="text-center">Time Manage Online</h1>
        <p class="text-center">แจ้งเตือนเวลาเรียนได้ง่ายๆ เพียงกรอก "Mail"</p>
        <Hr>
            <center><iframe width="560" height="315" src="https://www.youtube.com/embed/0Rk3FfHw6QE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
<br>

        <div class="row justify-content-center">
            <div class="col-md-3 mb-3">
                <label for="validationCustom04">ID</label>
                <input type="number" class="form-control" name="id" required>
            </div>

            <div class="col-md-3 mb-3">
                <label for="validationCustom04">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
        </div>

<br>
            <center><p>กรอก Mail และกดปุ่ม</p></center>
            <center><button type="submit" class="btn btn-success" name="sendemail">OK!</button></center>

    </form>
    
    <?php
    if(isset($_POST["send"])){
        save($_POST["id"],$_POST["email"]);
    }elseif(isset($_POST["sendemail"])){
        sendemail($_POST["id"],$_POST["email"]);
    }
    ?>
    </body>
</html>
