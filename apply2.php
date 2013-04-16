<html>
<head> <meta charset="utf-8">
<title>	iDO VIEWER申請網頁</title>
<!--JavaScript連接&CODE
	<link rel="stylesheet" type="text/css" media="all" href=".\jsdatepick\jsDatePick_ltr.min.css" />
	<script type="text/javascript" src=".\jsdatepick\jquery.1.4.2.js"></script>
	<script type="text/javascript" src=".\jsdatepick\jsDatePick.jquery.min.1.3.js"></script>
	<script type="text/javascript">
		window.onload = function(){
			new JsDatePick({
				useMode:2,
				target:"date_pick",
				dateFormat:"%Y-%m-%d"
			});
		};
	</script>
END -->

<!--欄位判斷的JavaScript-->
	<script type="text/javascript">
	
	function CheckData() {
		if (apply.apply_date.value=='')		{ alert('日期未填寫'); 
												return false; }
		else if (apply.dept.value=='')		{ alert('部門未填寫');
												return false; }
		else if (apply.job_title.value=='')	{ alert('職稱未填寫'); 
												return false; }
		else if (apply.account.value=='')	{ alert('帳號未填寫'); 
												return false; }
		else if (apply.Pname.value=='')		{ alert('姓名未填寫'); 
												return false; }
		else if (apply.TW_id.value=='')		{ alert('身分證字號未填寫'); 
												return false; }
		else if (apply.tel_nmb.value=='')	{ alert('連絡電話未填寫'); 
												return false; }
		else if (apply.e_mail.value=='')	{ alert('E_MAIL未填寫'); 
												return false; }
		else if (apply.mac_add.value=='')	{ alert('WiFi位置未填寫'); 
												return false; }
		else if (apply.idv_ver.value=='')	{ alert('iDO版本未填寫'); 
												return false; }
		else if (apply.idv_UUID.value=='')	{ alert('UUID未填寫'); 
												return false; }
		else
			apply.submit();
		}	
	</script>
<!--END-->

<style>
	.border_radius{
			padding-top:15px; 
			padding-left:15px; 
			padding-right:5px; 
			padding-bottom:10px; 
			border: 3px dashed #000000; 
			-webkit-box-shadow: 3px 3px 5px #999;
			width:350px;
			height:450px;
			background-color:#33CC33;
			-webkit-border-radius: 10px;
			-webkit-border-top-right-radius: 20px;
			-moz-border-radius: 10px;
			-moz-border-radius-topright: 20px;
			border-radius: 10px;
			border-top-right-radius: 20px;
		}
		
	.form_body{
			background-color:#FFCC66;
		}
</style>

</head>

<body>

<!--表單開始-->
<div class="border_radius">
<table>
<tr><td colspan="2"><h1 style="margin-bottom:0;">請完整輸入以下資料</h1></td></tr>
<FORM name="apply" action="add.php" method="post">
	<tr>
	<td> 1. 申請日期: </td><td><input type="text" name="apply_date" id="date_pick"></td>
	</tr>
	<tr>
	<td>2. 單位: </td><td><input type="text" name="dept"></td>
	</tr>
	<tr>
	<td>3. 職稱: </td><td><input type="text" name="job_title"></td>
	</tr>
	<tr>
	<td>4. 帳號: </td><td><input type="text" name="account"></td>
	</tr>
	<tr>
	<td>5. 姓名: </td><td><input type="text" name="Pname"></td>
	</tr>
	<tr>
	<td>6. 身分證字號: </td><td><input type="text" name="TW_id"></td>
	</tr>
	<tr>
	<td>7. 連絡電話: </td><td><input type="text" name="tel_nmb"></td>
	</tr>
	<tr>
	<td>8. 電子郵件: </td><td><input type="email" name="e_mail"></td>
	</tr>
	<tr>
	<td>9. WIFI位置: </td><td><input type="text" name="mac_add"></td>
	</tr>
	<tr>
	<td>10.iDO Viewer版本: </td><td><input type="text" name="idv_ver"></td>
	</tr>
	<tr>
	<td>11.iDO UUID: </td><td><input type="text" name="idv_UUID"></td>
	</tr>
<tr><td colspan="2" align="center">
	<input type="reset" value="清空">
	<input type="Button" value="送出" onclick="CheckData()">
	
</td></tr>
</form>
</table>
<!--END-->
</div>
</body>
</html>