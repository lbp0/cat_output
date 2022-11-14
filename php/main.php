<?php

    function addZero($num)
    {
        if($num < 10)
        {
            $num = '0'.$num;
        }
        return $num;
    }

    echo "hello";
    $year = $_POST["y"];
	$month = $_POST["m"];
	$day = $_POST["d"];
	$hour = $_POST["h"];
	$minute = $_POST["min"];
	$second = $_POST["sec"];
	$popo = $_POST["po"];
	$bubu = $_POST["bu"];
    $con = mysqli_connect("localhost","root","lbp88541585","catpopobubu");


	$id = $year * 10000000000 + $month * 100000000 + $day * 1000000 + $hour * 10000 + $minute * 100 + $second;
    mysqli_query($con,"INSERT INTO tb_catpopobubu (cat_id,cat_year,cat_month,cat_day,cat_hour,cat_minute,cat_popo,cat_bubu) VALUES ('$id','$year','$month','$day','$hour','$minute','$popo','$bubu')");
?>