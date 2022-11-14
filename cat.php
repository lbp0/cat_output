<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>猫猫尿尿拉粑粑记录</title>
<link rel="stylesheet" type="text/css" href="css/main.css" />
<script src="js/jquery.js"></script>
<script>
	var rate = (window.innerWidth / window.innerHeight);
	if(rate < 1)
	{
		window.location.href="cat-sub.php";
	}
</script>
</head>
<body>
	<div class="main" id="main-div">
		<div id="time">
			<div id="title"><font size="4">猫猫记录</font><br /><br /></div>
		</div>

		<div id="nowFather" class="label">
			<div id="nowLabel">当前时间：</div>
			<div id="now" class="labelInner">XXXX年XX月XX日，XX:XX</div>
		</div>

		<div id="popobubuFather" class="label">
			<div id="popobubuLabel">猫砂状况：</div>
			<div id="popobubu" class="labelInner">
				<input type="checkbox" id="popo" />尿尿&emsp;&emsp;&emsp;&emsp;
				<input type="checkbox" id="bubu" />拉粑粑
			</div>
		</div>

		<div id="submitter" class="mybutton" onclick=writer>提交</div>
		<div id="submitlog" class="mybutton" onclick="listcatlog()">显示提交记录</div>
	</div>
	<script>
		//设置main-div垂直居中
		window.onload = function()
		{
			var height = window.innerHeight;
			var mainDiv = document.getElementById("main-div");
			var margin_top = ((height - 300) / 2) * 0.85; 
			mainDiv.style.marginTop = margin_top + "px";
		}
	</script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>