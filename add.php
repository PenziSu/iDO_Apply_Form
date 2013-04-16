<html>
<head>
<meta http-equiv="content-Type" content="test/html; charset=utf-8">
<title>資料確認!!</title></head>
<body>
<?php

/*接收表單來的參數*/
  $apply_date=$_POST["apply_date"];
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
/*呈現收到的資料*/
  echo "收到以下資料:<hr>";
  echo "1. 申請日期: <b>".$apply_date."</b><br>";
  echo "2. 單位: <b>".$dept."</b><br>";
  echo "3. 職稱: <b>".$job_title."</b><br>";
  echo "4. 帳號: <b>".$account."</b><br>";
  echo "5. 姓名: <b>".$P_name."</b><br>";
  echo "6. 身分證字號: <b>".$TW_id."</b><br>";
  echo "7. 連絡電話: <b>".$tel_nmb."</b><br>";
  echo "8. 電子郵件: <b>".$e_mail."</b><br>";
  echo "9. WIFI位置: <b>".$mac_add."</b><br>";
  echo "10.iDO Viewer版本: <b>".$idv_ver."</b><br>";
  echo "11.iDO UUID: <b>".$id_UUID."</b><br>";
//連接MSSql資料庫
	$serverIP="10.100.74.0";
	$connectinfor = array ("UID" => "sa","PWD" => "ebm_sa","Database" => "iDO_apply_doc");
	$ContSVR=sqlsrv_connect($serverIP,$connectinfor);
		IF ($ContSVR === false) {
					die (print_r(sqlsrv_errors(),true));
			}
//執行資料寫入
	$sql="INSERT INTO apply_doc (apply_date,dept,job_title,account,P_name,TW_id,tel_nmb,e_mail,mac_add,idv_ver,id_UUID)
		VALUES ('".$apply_date."','".$dept."','".$job_title."','".$account."',N'$P_name','".$TW_id."','".$tel_nmb."','".$e_mail."','".$mac_add."','".$idv_ver."','".$id_UUID."')";
	
		IF (sqlsrv_query($ContSVR,$sql) === false) {
					die(print_r(sqlsrv_errors(),true));
			}
			
/*	
連線SQL SERVER資料庫,將GID改成2的SQL
	$sql2="Update apply_doc set e_mail='*****@gmail.com' 
			where account='$account'";
	$check2 = sqlsrv_execute( sqlsrv_prepare($ContSVR, $sql2));
	if ($check2 === false) {
			die (print_r(sqlsrv_errors(),true));
			}
	sqlsrv_close($connectinfor);


寄送EMAIL
require("class.phpmailer.php");

$mail = new PHPMailer();
$mail->CharSet = "big5";		//修正主指亂碼錯誤
$mail->IsSMTP();				// set mailer to use SMTP
$mail->Host = "ebmtech.com";	// specify main and backup server
$mail->SMTPAuth = true;			// turn on SMTP authentication
$mail->Username = "dennis.su";  // SMTP username
$mail->Password = "142451466a"; // SMTP password

$mail->From = "tsgh@ebmtech.com";
$mail->FromName = "三總PACS維護小組";
//$mail->AddAddress("assassin.penzi@gmail.com", "Penzi Su");
$mail->AddAddress("tsgh@ebmtech.com");					// name is optional
$mail->AddReplyTo("tsgh@ebmtech.com", "TSGH Group");

$mail->WordWrap = 50;									// set word wrap to 50 characters
//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);									// set email format to HTML

$mail->Subject = "三總iDO帳號申請通知 - $name";
$mail->Body    = "收到以下IDO帳號申請資料:<hr>
					<ol>
					<li>申請日期: <b>$apply_date</b></li>
					<li>單位: <b>$dept</b></li>
					<li>姓名: <b>$name</b></li>
					<li>連絡電話: <b>$tel_nmb</b></li>
					<li>電子郵件: <b>$e_mail</b></li>
					</ol></br>";
					//<a href='http://10.100.73.254/replytopacs.php?realname=$name&account=$account&tel=$tel_nmb'>回信PACS工程師</a>

$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
*/
?>
<hr>
<a href="http://127.0.0.1/apply2.php" name="right_frame">回到申請畫面</a><br>
<a href="http://10.100.73.254/list.php">查看清單</a><br>
<a href="http://10.100.74.252/index.php/ido">前往設定教學</a>
</body>
</html>