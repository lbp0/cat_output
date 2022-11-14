var year
var month
var day
var hour
var minute
var second

function timeUpDate()
{
	var dateObj = new Date();
	year = 1900 + dateObj.getYear();
	month = dateObj.getMonth() + 1;
	day = dateObj.getDate();
	hour = dateObj.getHours();
	minute = dateObj.getMinutes();
	second = dateObj.getSeconds();
	
	dateString = "";
	if(month < 10)
	{
		month = '0' + month;
	}
	dateString += month;
	dateString += "月";
	if(day < 10)
	{
		day = '0' + day;
	}
	if(hour < 10)
	{
		hour = '0' + hour;
	}
	if(minute < 10)
	{
		minute = '0' + minute;
	}
	dateString += day;
	dateString += "日，" + hour + ":" + minute;
	now = document.getElementById("now");
	now.innerHTML = dateString;
}

function listcatlog()
{
	window.location.href="datalog-sub.php";
}

function writer()
{
	popoint = 0;
	bubuint = 0;
	popo = document.getElementById("popo");
	bubu = document.getElementById("bubu");
	if(popo.checked)
	{
		popoint = 1;
	}
	if(bubu.checked)
	{
		bubuint = 1;
	}
	
	$.ajax({
		type:'POST',
		url: 'php/main.php',
		data: {'y':year,'m':month,'d':day,'h':hour,'min':minute,'sec':second,'po':popoint,'bu':bubuint},
		success:function()
		{
			alert("已成功提交");

		}
	});
}

function backToAppSel()
{
	window.location.href="../../index.php";
}

var intervalID = setInterval("timeUpDate()");
document.getElementById("submitter").onclick = writer;