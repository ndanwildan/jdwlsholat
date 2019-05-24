<html>
<head>
	 <script type="text/javascript" src="js/PrayTimes.js"></script>
			<link rel="stylesheet" href="../plugin/FlipClock/compiled/flipclock.css">
		<script src="js/jquery.min.js"></script>
		<script src="../plugin/FlipClock/compiled/flipclock.js"></script>
<?php //include "../koneksi.php"; ?>
    <style>
		td, th {font-family: "trebuchet MS"; font-size: 19px; color: #fff;padding-top: 8px;margin-left: 0px;}
        #timetable {border-width: 0px; border-style: outset; border-collapse: collapse; border-color: gray; width: 100%;}
        #timetable td, #timetable th {border-width: 0px; border-spacing: 0px; padding-right: 1.369em; border-style: inset; border-color: #CCCCCC;}
        #timetable th {color:black; *text-align: center; font-weight: bold;}
		#timetable td{
		padding:10px 20px 10px 20px; 
		font-size:25px; 
		font-style: oblique;
		text-transform: uppercase;
		}
		#timetable td span{font-weight:bold}
		
		.Fajr{
			 background-color: #ffa5007a;
		}
		.Dhuhr{
			background: #ffa50094;
		}
		.Asr{
			background: #ffa500b5;
		}
		.Maghrib{
		background: #ffa500d4;
		}
		.Isha{
		background: orange;
		}
        div.prayss{
 
        }

		
        div.tablex{
			background-color:#fff;

        }
        div.kotass{

			background:orange;

        }
        .jadwalview{
            text-decoration: none;
            font-family: "trebuchet MS"; font-size: 20px; color: #fff;
			background:orange;
        }
		.jadwal-outer{
			background: #ffca00;
			
		}
		.header-jadwalsholat{
			text-align: center;
			color:#333;
		}
		.header-jadwalsholat h2{padding:0px;margin:0px;font-size:30px}
		.header-jadwalsholat span{font-size:12px}
		.waktu-sholat{margin:10px 20px 5px 10px;
		}
		
		/* Preloader */
#iqomah{
	/*zoom :0.7;*/
	display: inline-block;
	width: auto;
}
#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #fff;
  /* change if the mask should have another color then white */
  z-index: 99;
  /* makes sure it stays on top */
}

#status {
  width: 200px;
  height: 200px;
  position: absolute;
  left: 50%;
  /* centers the loading animation horizontally one the screen */
  top: 50%;
  background-repeat: no-repeat;
  background-position: center;
  margin: -100px 0 0 -100px;
  /* is width and height divided by two */
}
    </style>
<?php
/*$id_pengurus = $_GET['idpengurus'];
$qu=mysqli_query($koneksi, "select *from tb_masjid, tb_pengurus, city where tb_masjid.id_pengurus = tb_pengurus.id_pengurus and tb_masjid.id_kota = city.id and tb_masjid.id_pengurus ='$id_pengurus'") or die(mysql_error());
$row_a = mysqli_fetch_array($qu);
$id_masjid = $row_a['id_masjid'];
$nama=$row_a['nama'];
$masjid=$row_a['nama_masjid'];
$kota=$row_a['kota'];
$alamat_masjid=$row_a['alamat_masjid'];
*/
?>

</head>
<body>
<div id="prelaoader">
  <div id="stataus">&nbsp;</div>
</div>
<div class="jadwal-outer">
<!--start header jadwal sholat-->
<div class="header-jadwalsholat">
<h2><?php //echo $masjid; ?></h2>
<span><?php //echo $alamat_masjid; ?></span>
</div>
<!--end header jadwal sholat-->

<div class="prayss">
    <div class="tablex">
    <div   id="table"></div>
    <script type="text/javascript">
         
        var date = new Date(); // today
        var times = prayTimes.getTimes(date, [<?php echo "-7.629714"; //$row_a['latitude']; ?>, <?php echo "111.513702"; //$row_a['longitude']; ?>], <?php echo "7"; //$row_a['timezone']; ?>);
		
        var list = ['Fajr', 'Dhuhr', 'Asr', 'Maghrib', 'Isha'];
 
        var html = '<table id="timetable"><tr>';
 
            for(var i in list)  {
            //html += '<tr><td>'+ list[i]+ '</td>';
            html += "<td class='"+ list[i]+"'><span>"+ list[i]+"</span><br/>"+times[list[i].toLowerCase()]+ "</td>";
        }
        html += '</tr></table>';
        document.getElementById('table').innerHTML = html;
         
    </script>
    </div>
<div class="jadwalview">
<div class="kotass">
<?php echo "madiun" //$row_a['kota']; ?> 
<script type="text/javascript">
//var dayxx = currentDate.getDate();
var objToday = new Date(),
                weekday = new Array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'),
                dayOfWeek = weekday[objToday.getDay()],
                domEnder = new Array( 'th', 'st', 'nd', 'rd', 'th', 'th', 'th', 'th', 'th', 'th' ),
                dayOfMonth = today + (objToday.getDate() < 10) ? '0' + objToday.getDate() + domEnder[objToday.getDate()] : objToday.getDate() + domEnder[parseFloat(("" + objToday.getDate()).substr(("" + objToday.getDate()).length - 1))],
                months = new Array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'),
                curMonth = months[objToday.getMonth()],
                curYear = objToday.getFullYear(),
                curHour = objToday.getHours() > 12 ? objToday.getHours() - 12 : (objToday.getHours() < 10 ? "0" + objToday.getHours() : objToday.getHours()),
                curMinute = objToday.getMinutes() < 10 ? "0" + objToday.getMinutes() : objToday.getMinutes(),
                curSeconds = objToday.getSeconds() < 10 ? "0" + objToday.getSeconds() : objToday.getSeconds(),
                curMeridiem = objToday.getHours() > 12 ? "PM" : "AM";
//var today = curHour + ":" + curMinute + "." + curSeconds + curMeridiem + " " + dayOfWeek + " " + dayOfMonth + " of " + curMonth + ", " + curYear;
var dayxx = objToday.getDate();
var today = dayOfWeek+", "+dayxx+" "+ curMonth + " " + curYear;
var waktunya = curHour + ":" + curMinute +"."+ curSeconds + curMeridiem;
document.write(today);
document.wrire(waktunya);
</script>
</div>
 
</div>


</div>
<div class="your-clock"></div>
	<div class="waktu-sholat">Waktu Sholat yang Akan Datang di Kota <b><?php echo "Madiun" //$row_a['kota']; ?></b></div>
	<div class="message"></div>
<div class="clock" style="margin-top:30px"></div>

	 <!-- audio  reminder one hour -->
<audio class="audioSatujam" preload="none">
<source src="../tone/1.mp3" type="audio/mp3">
		 Your browser does not support the audio element.
</audio>	 
<!-- audio adzan -->
<audio class="audioAdzan" preload="none">
		 <source src="../tone/adzan.mp3" type="audio/mp3">
		 Your browser does not support the audio element.
</audio>
	<script type="text/javascript">
	var clock = $('.your-clock').FlipClock({
		clockFace: 'TwentyFourHourClock'

	});
		var clock;
		
		$(document).ready(function() {
			var clock;

			clock = $('.clock').FlipClock({
		        clockFace: 'HourlyCounter',
				countdown: true,
		        autoStart: false,
		        callbacks: {
		
		        	stop: function() {
						//$(".audioAdzan").trigger('load');
						//$(".audioAdzan").trigger('play');
						$('.message').html('The clock has stopped!');
						setTimeout(function() {
						// var afterTenMinutue = new Audio('after2.mp3');
						// afterTenMinutue.play();
						// naha sih kudu ka ms
						//1 detik = 1000 milisecond
						// 1 menit = 60000 ms
						//10 menit = 600000 ms
						// 20 menit 1200000
						//reminder pertama
						upcoming = getUpcomingSchedule();
						theCounter.setTime(duration(upcoming));
						theCounter.start();
						},<?PHP echo "10"; ?>);
		        	}
		        }
		    });
				    
		    clock.setTime(10);
		    clock.setCountdown(true);
		    clock.start();

		});
	</script>
</div>

	 <!-- audio  reminder one hour -->
	 <audio class="audioSatujam" preload="none">
		 <source src="1jam.mp3" type="audio/mp3">
		 Your browser does not support the audio element.
	 </audio>
	 <!-- audio 30 minut -->
	 <audio class="audioTigaPuluh" preload="none">
	.mp3" type="audio/mp3">
		 Your browser does not support the audio element.
	 </audio>
	 <!-- audio 10 menit -->
	 <audio class="audioSepuluh" preload="none">
		 <source src="10.mp3" type="audio/mp3">
		 Your browser does not support the audio element.
	 </audio>
	 <!-- audio 5 minute -->
	 <audio class="audioLima" preload="none">
		 <source src="5menit.mp3" type="audio/mp3">
		 Your browser does not support the audio element.
	 </audio>
	 <!-- audio 1 minut -->
	 <audio class="audioSatuMenit" preload="none">
		 <source src="1.mp3" type="audio/mp3">
		 Your browser does not support the audio element.
	 </audio>
	 <!-- audio adzan -->
	 <audio class="audioAdzan" preload="none">
		 <source src="adzan.mp3" type="audio/mp3">
		 Your browser does not support the audio element.
	 </audio>

<script type="text/javascript">
$(window).on('load', function() { // makes sure the whole site is loaded
  $('#status').fadeOut(); // will first fade out the loading animation
  $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
  $('body').delay(350).css({'overflow':'visible'});
})
</body>
</html>