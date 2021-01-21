<?php
	function indonesiandate($thedate){
		//mendapatkan huruf hari pada kolom ke 8 sebanyak 2 kata
		$hari=substr($thedate,8,2);
		//mendapatkan huruf bulan pada kolom ke 5 sebanyak 2 kata
		$bulan=bulan(substr($thedate,5,2));
		//mendapatkan huruf tahun pada kolom ke 0 sebanyak 4 kata
		$tahun=substr($thedate,0,4);
		//variable hari, bulan, dan tahun digabungkan di variable tanggal
		$tanggal="$hari $bulan $tahun";
		//function hasil outputnya adalah tanggal
		return $tanggal;
		}
		
	function bulan($bulan){
		//cek apakah bulan itu isinya apa?
		switch($bulan) {
			//jika isinya satu berarti bulan adalah januari
			case 1 :
			$namabulan="Januari";
			break;
		
			case 2 :
			$namabulan="Februari";
			break;
			
			case 3 :
			$namabulan="Maret";
			break;
			
			case 4 :
			$namabulan="April";
			break;
			
			case 5 :
			$namabulan="Mei";
			break;
			
			case 6 :
			$namabulan="Juni";
			break;
			
			case 7 :
			$namabulan="Juli";
			break;
			
			case 8 :
			$namabulan="Agustus";
			break;
			
			case 9 :
			$namabulan="September";
			break;
			
			case 10 :
			$namabulan="Oktober";
			break;
			
			case 11 :
			$namabulan="November";
			break;
			
			case 12 :
			$namabulan="Desember";
			break;
		}
		return $namabulan;
	}
	
	function gotopage($page){
		echo "<script language='javascript'>";
		echo "window.location.href='$page';";
		echo "</script>";
	}
	
	function get_currentsingledate($selection){
		date_default_timezone_set('Asia/Jakarta');
		$thedate=getdate();
		$year=$thedate["year"];
		$month=$thedate["mon"];
		$day=$thedate["mday"];
		$hours=$thedate["hours"];
		$minutes=$thedate["minutes"];
		$seconds=$thedate["seconds"];
		
		switch($selection){
			case "year":
			return $year;
			break;
			
			case "month";
			return $month;
			break;
			
			case "day";
			return $day;
			break;
			
			case "hours";
			return $hours;
			break;
			
			case "minutes";
			return $minutes;
			break;
			
			case "seconds";
			return $seconds;
			break;
		}
	}
?>