<!DOCTYPE html>
<html>
<head>
    <title>TMO</title>
    <script type="text/javascript">
        function btnclick(){
            var div = document.getElementById('Mydiv');
        }
    </script>
    </head>
    <style>
        body{
        background-image: url("image.jpg");
        background-size: 100%;
        background-repeat: no-repeat-x;
        }
        h1{
            color: white;
            text-align: center;
        }
        p{
            text-align: center;
            color:white
        }
        iframe{
            display: block;
            margin: 0 auto;
        }
        div{
            text-align: center;
            color: white;
        }
    </style>
    <body>
        <h1 title="About"> Time Manage Online</h1>
        <p>แจ้งเตือนเวลาเรียนได้ง่ายๆ เพียงกรอก "Mail"</p>
        <Hr>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/0Rk3FfHw6QE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div id="Mydiv">กรอก Mail และกดปุ่ม</div>
            <input type="button" id="Mybutton" onclick="btnclick" value="OK!"/>
    </body>
</html>
