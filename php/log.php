
<?php
$con = mysqli_connect("localhost","root","lbp88541585","catpopobubu");
$sql = "select * from tb_catpopobubu";
$res = mysqli_query($con,$sql);
$data = $res -> fetch_all();
foreach($data as $v)
{
    echo $v[1]."   ".$v[2]."   ".$v[3]."   ".$v[4]."   ".$v[5]."   ".$v[6]."   ".$v[7]."   ";
    echo "\n";
}
?>