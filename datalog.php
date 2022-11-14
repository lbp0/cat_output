<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="stylesheet" type="text/css" href="css/DataPage.css" />
<title>猫猫历史记录</title>
</head>
<body>
	<div class="main" id="sub-div">
		<div id="backToHome" class="mybutton" onclick="backToHome()">
			<div id="backIcon">
				<svg viewBox="0 0 20 20" width="10px" height="10px">
					<path d="M 20 0 L 0 10 L 20 20 z" fill="black"/>
				</svg>
			</div>
			<div id="backText">回到主页</div>
		</div>
		<table width=80%; id="dataTable">
			<tr>
				<td>日期</td>
				<td>时间</td>
				<td>尿尿</td>
				<td>拉粑粑</td>
			</tr>
		</table>
	</div>
	<script type="text/javascript" src="js/log.js"></script>
	<script type="text/javascript">
		window.onload = function()
		{	
			var tableObj = document.getElementById("dataTable");
			console.log(tableObj);
			var dataLog = <?php
				$xml_array=simplexml_load_file('conf/main.conf');//xml解析器
				$xml_array->db_address;
			
			
				$db_address = $xml_array->db_address;
				$db_database = $xml_array->db_database;
				$db_database_table = $xml_array->db_database_table;
				$db_user = $xml_array->db_user;
				$db_password = $xml_array->db_password;
			
			
				$con = mysqli_connect($db_address,$db_user,$db_password,$db_database);
				$sql = "select * from ".$db_database_table;
				$res = mysqli_query($con,$sql);
				$data = $res -> fetch_all();
				echo json_encode($data);
			?>;
			for(i = 0;i < dataLog.length;i ++)
			{
				//总是插入1号位置，倒序排列
				var newTr = tableObj.insertRow(1);//添加新行，trIndex就是要添加的位置 
				var newTd1 = newTr.insertCell(); //新日期行
				newTd1.innerHTML = dataLog[i][1] + '-' + dataLog[i][2] + '-' + dataLog[i][3];
				var newTd2 = newTr.insertCell(); //新时间行
				newTd2.innerHTML = dataLog[i][4] + ':' + dataLog[i][5];
				var newTd3 = newTr.insertCell(); 
				if(dataLog[i][6] == '1')
				{
					newTd3.innerHTML = "✓";
					newTd3.style = "color:green";
				}
				else
				{
					newTd3.innerHTML = "✗";
					newTd3.style = "color:red";
				}
				var newTd4 = newTr.insertCell(); 
				if(dataLog[i][7] == '1')
				{
					newTd4.innerHTML = "✓";
					newTd4.style = "color:green";
				}
				else
				{
					newTd4.innerHTML = "✗";
					newTd4.style = "color:red";
				}
			}
		}
	</script>
</body>
</html>
