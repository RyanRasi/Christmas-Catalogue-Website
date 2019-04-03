	 <?php if(isset($_SESSION['loggedin'])) { echo
	 
	       '<div class="col-sm-10" style="">
	      <div class="card">
<div id="clockbox" style="text-align:left;"></div></div></div>

<script type="text/javascript">
var tday=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
var tmonth=["January","February","March","April","May","June","July","August","September","October","November","December"];

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

var clocktext=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
document.getElementById(\'clockbox\').innerHTML=clocktext;
}

GetClock();
setInterval(GetClock,1000);
</script>


	 
		  	        <div class="col-sm-2" style="">  <h6 style="text-align:right";> 
		<div class="card" style="padding: 8px" "text-align:right";>' , 
	  
	   "Welcome back " , $_SESSION['username'] , ' <br> <a href="logout.php">' , "  (Not " , $_SESSION['username'] , '?) ' , "Sign Out" , '</a>' , '</div>
	  </div>  </h6>';
	 } else { echo
	 
	       '<div class="col-sm-12" style="">
	      <div class="card">
	 <div id="clockbox" style="text-align:left;"></div></div></div> 
	 <script type="text/javascript">
var tday=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
var tmonth=["January","February","March","April","May","June","July","August","September","October","November","December"];

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

var clocktext=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
document.getElementById(\'clockbox\').innerHTML=clocktext;
}

GetClock();
setInterval(GetClock,1000);
</script>'
	 ; }
		 

	  
?>