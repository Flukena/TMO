<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Display Date and Time in Javascript</title>
        <script type="text/javascript" src="2.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
    $timeday = {
            <span id="date_time_eng"></span>
    </body>
	<script  type = "text/javascript">
	$( document ).ready(function() {
    window.onload = date_time_eng('date_time_eng');
})};

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
		
        result = ''+days[day]+' '+d+' '+months[month]+' '+year+' '+h+':'+m+':'+s+' '+ampm;
        document.getElementById(id).innerHTML = result;
        setTimeout('date_time_eng("'+id+'");','1000');
        return true;
}
</script>
</html>
