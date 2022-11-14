<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>猫猫尿尿拉粑粑记录</title>
<link rel="stylesheet" type="text/css" href="css/mainSub.css" />
<script src="js/jquery.js"></script>
<script>
	var rate = (window.innerWidth / window.innerHeight);
	if(rate >= 1)
	{
		window.location.href="cat.php";
	}
	
</script>
</head>
<body>
	<div class="main" id="main-div">
		<div id="timeSub">
			<div id="title"><font size="7">猫猫记录</font><br /><br /></div>
		</div>
		<table id="mainTable">
			<tr id="line1" width="100%">
				<td width="35%"><div id="timeLabel" class="titleLabel">当前时间:</div></td>
				<td width="75%"><div id="now" class="label">XX月XX日，XX:XX</div></td>
			</tr>
			
			<tr id="line2" width="100%">
				<td width="35%"><div id="popobubuLabel" class="titleLabel">猫砂情况:</div></td>
				<td width="75%">
					<div id="popobubuSub" class="label">
						<input type="checkbox" id="popo" />尿尿&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="checkbox" id="bubu" />&nbsp;拉粑粑
					</div>
				</td>
			</tr>
		</table>
		<div id="submitter" class="mybutton" onclick=writer><div class="btntext">提交</div></div>
		<div id="submitlogSub" class="mybutton" onclick="listcatlog()"><div class="btntext">显示提交记录</div></div>
	</div>
<script type="text/javascript" src="js/main-sub.js"></script>
<script>
	var mainBox = document.getElementById("main-div");
	var height = window.innerHeight;
	var mainRate = (height - 1000) / 20;
	
	if(mainRate > 0)
	{
		var marginTop = String(mainRate * 8.9) + "px";
		var marginBottom = String(mainRate * 11) + "px";
		mainBox.style.marginTop = marginTop;
		mainBox.style.marginBottom = marginBottom;
	}
</script>
</body>
</html>