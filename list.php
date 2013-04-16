<html><head><meta http-equiv="content-Type" content="test/html; charset=utf-8">
<title>清單</title>

<script>
	function func1(ID) {
		
		window.open("apply.php?theID="+ID,"right_frame","toolbar=no,location=yes, directories=no,status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=400, height=620");
	}
	
	function mouse_in(x){
		x.style.color="#FFFFFF";
		x.style.backgroundColor="E60000";
		}
	function mouse_out(x){
		x.style.color="#000000";
		x.style.backgroundColor="FFFFFF";
		}
</script>

</head>
<body>
<?php
//連接MsSql資料庫
	$serverIP="10.100.74.0";
	$connectinfor = array("UID" => "sa", "PWD" => "ebm_sa", "Database" => "iDO_apply_doc");
	$ContSVR = sqlsrv_connect($serverIP,$connectinfor);
		IF ($ContSVR === FALSE) {
			die (print_r(sqlsrv_errors(),TRUE));
		} 
//SQL語法放入變數
	$sql_1="select * from apply_doc order by U_ID,dept,account,P_name";
	
//執行SQL語法
	$stmt=sqlsrv_query($ContSVR,$sql_1);
		if ($stmt === false) {
			die (print_r(sqlsrv_errors(),true));
		}
	echo "<table border=\"1\">
		<tr>
			<th>Row_ID</th>
			<th>姓名</th>
			<th>帳號</th>
			<th>eMail</th>
		</tr>";
		
		
	while ($row=sqlsrv_fetch_array($stmt)) {
			$theID=$row['U_ID'];
		echo "<tr onclick=\"func1('$theID')\"
				  onmouseover=\"mouse_in(this)\"
				  onmouseout=\"mouse_out(this)\"
				  style=\"cursor:pointer\">
				<td>".$row['U_ID']."</td>  
				<td>".$row['P_name']."</td>
				<td>".$row['account']."</td>
				<td>".$row['e_mail']."</td>
			</tr>";
		}
	echo "</table>";
?>

</body>
</html>

