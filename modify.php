<html>
<head>
<meta http-equiv="content-Type" content="test/html; charset=utf-8">
<title>資料修改確認!!</title></head>
<body>
<?php

/*接收表單來的參數*/
  
//$apply_date=$_POST["apply_date"];
  $dept=$_POST["dept"];
  $job_title=$_POST["job_title"];
  $account=$_POST["account"];
  $P_name=$_POST["Pname"];
  $TW_id=$_POST["TW_id"];
  $tel_nmb=$_POST["tel_nmb"];
  $e_mail=$_POST["e_mail"];
  $mac_add=$_POST["mac_add"];
  $idv_ver=$_POST["idv_ver"];
  $id_UUID=$_POST["idv_UUID"];
  $getID=$_POST["theID"];
/*呈現收到的資料*/
  echo "資料已修改:<hr>";
  echo "<ol><li>單位: <b>".$dept."</b></li><br>";
  echo "<li>職稱: <b>".$job_title."</b></li><br>";
  echo "<li>帳號: <b>".$account."</b></li><br>";
  echo "<li>姓名: <b>".$P_name."</b></li><br>";
  echo "<li>身分證字號: <b>".$TW_id."</b></li><br>";
  echo "<li>連絡電話: <b>".$tel_nmb."</b></li><br>";
  echo "<li>電子郵件: <b>".$e_mail."</b></li><br>";
  echo "<li>WIFI位置: <b>".$mac_add."</b></li><br>";
  echo "<li>iDO Viewer版本: <b>".$idv_ver."</b></li><br>";
  echo "<li>iDO UUID: <b>".$id_UUID."</b><br></ol>";
//連接MSSql資料庫
	$serverIP="10.100.74.0";
	$connectinfor = array ("UID" => "sa","PWD" => "ebm_sa","Database" => "iDO_apply_doc");
	$ContSVR=sqlsrv_connect($serverIP,$connectinfor);
		IF ($ContSVR === false) {
					die (print_r(sqlsrv_errors(),true));
			}
//執行資料寫入
	$sql="UPDATE apply_doc SET 
			dept='$dept',
			job_title='$job_title',account='$account',
			P_name='$P_name',TW_id='$TW_id',
			tel_nmb='$tel_nmb',e_mail='$e_mail',
			mac_add='$mac_add',idv_ver='$idv_ver',
			id_UUID='$id_UUID'
			WHERE U_ID='$getID' ";
		
	$check1 = sqlsrv_query($ContSVR,$sql);
		IF ($check1 === false) {
					die(print_r(sqlsrv_errors(),true));
			}
?>
<hr>
</body>
</html>