<html>
<head> 
	<meta charset="utf-8">
<title>
	iDO VIEWER申請網頁
</title>
</head>
<body>
<?php
	$serverIP="10.100.74.0";
	$connectinfor = array("UID"=>"sa","PWD"=>"ebm_sa","Database"=>"iDO_apply_doc");
	
	$connt=sqlsrv_connect($serverIP,$connectinfor);
	/*if ($connt === false){
		die (print_r(sqlsrv_errors(),true);
	}*/
	$theID=$_GET["theID"];
	$sql="select * from apply_doc where U_ID='$theID'";
	$stmt=sqlsrv_query($connt,$sql);
	if ($stmt === false) {
		die(print_r(sqlsrv_errors(),true));
	}
	if (sqlsrv_fetch($stmt) === false){
		die(print_r(sqlsrv_errors(),true));
	}
	$dept=sqlsrv_get_field($stmt,2);
	$job_title=sqlsrv_get_field($stmt,3);
	$account=sqlsrv_get_field($stmt,4);
	$name=sqlsrv_get_field($stmt,5);
	$TW_id=sqlsrv_get_field($stmt,6);
	$tel_nmb=sqlsrv_get_field($stmt,7);
	$email=sqlsrv_get_field($stmt,8);
	$mac_add=sqlsrv_get_field($stmt,9);
	$idv_ver=sqlsrv_get_field($stmt,10);
	$idv_UUID=sqlsrv_get_field($stmt,11);
?>

<FORM method="post" action="modify.php" accept-charset="big5">

請輸入要修改的資料<hr><ol>
<li>單位: <input type="text" name="dept" value=<?php echo $dept; ?>></li><br>
<li>職稱: <input type="text" name="job_title" value=<?php echo $job_title; ?>></li><br>
<li>帳號: <input type="text" name="account" value=<?php echo $account; ?>></li><br>
<li>姓名: <input type="text" name="Pname" value=<?php echo $name; ?>></li><br>
<li>身分證字號: <input type="text" name="TW_id" value=<?php echo $TW_id; ?>></li><br>
<li>連絡電話: <input type="text" name="tel_nmb" value=<?php echo $tel_nmb; ?>></li><br>
<li>電子郵件: <input type="email" name="e_mail" value=<?php echo $email; ?>></li><br>
<li>WIFI位置: <input type="text" name="mac_add" value=<?php echo $mac_add; ?>></li><br>
<li>iDO Viewer版本: <input type="text" name="idv_ver" value=<?php echo $idv_ver; ?>></li><br>
<li>iDO UUID: <input type="text" name="idv_UUID" value=<?php echo $idv_UUID; ?>></li><br>
			  <input type="hidden" name="theID" value=<?PHP echo $theID; ?> >
</ol>

<input type="reset" value="清空"><input type="submit" value="送出">
</body>
</html>
