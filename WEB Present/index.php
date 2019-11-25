<?php 
    include("save/test.php");
    
?>
<!DOCTYPE html html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>TMO</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript" src="2.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
        <br>
        <h1 class="text-center">Time Manage Online</h1>
        <p class="text-center">แจ้งเตือนเวลาเรียนได้ง่ายๆ เพียงกรอก "Mail"</p>
        <Hr>
        <center><b><font size="7"><span id="date_time_eng"></span></font></b></center>
            
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
    <script  type = "text/javascript">
	$( document ).ready(function() {
    window.onload = date_time_eng('date_time_eng');
});
function date_time_eng(id)
{
        date = new Date;
        year = date.getFullYear();
        month = date.getMonth();
        months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
        d = date.getDate();
        day = date.getDay();
        days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        h = date.getHours();
		h = h % 12;
		h = h ? h : 12; // the hour '0' should be '12'
		if(h<10)
			{
					h = "0"+h;
			}
			
        m = date.getMinutes();
        if(m<10)
        {
                m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10)
        {
                s = "0"+s;
        }
		
		ampm = date.getHours() >= 12 ? 'PM' : 'AM';
		
        result = h+':'+m+':'+s+' '+ampm;
        document.getElementById(id).innerHTML = result;
        setTimeout('date_time_eng("'+id+'");','1000');
        return true;
}
</script>
</html>
