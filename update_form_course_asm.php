<?php
require 'conn.php';
$d_id = $_GET['d_id'];
$sqlpro = "select * from course where d_id = '$d_id' ";
$respro = mysqli_query($conn, $sqlpro);
$rowpro = mysqli_fetch_array($respro, MYSQLI_ASSOC);
$query=mysqli_query($conn,"SELECT COUNT(std_name) FROM standard_2 WHERE std_name LIKE '%$search%'");
	$row = mysqli_fetch_row($query);

	$rows = $row[0];

	$page_rows = 30;  //จำนวนข้อมูลที่ต้องการให้แสดงใน 1 หน้า  ตย. 5 record / หน้า 

	$last = ceil($rows/$page_rows);

	if($last < 1){
		$last = 1;
	}

	$pagenum = 1;

	if(isset($_GET['pn'])){
		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
	}

	if ($pagenum < 1) {
		$pagenum = 1;
	}
	else if ($pagenum > $last) {
		$pagenum = $last;
	}

	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
	
	$q = "select * FROM standard_2 WHERE std_name";
    $q = "select standard_2.std_id ,standard.standard_name ,standard_2.id_small, standard_2.std_name ";
    $q .= "from standard_2 inner join standard ON standard.id = standard_2.id ";
	$result = mysqli_query($conn,$q);

	$nquery=mysqli_query($conn,"SELECT * from  standard_2 WHERE std_name LIKE '%$search%' $limit");

	$paginationCtrls = '';

	if($last != 1){

	if ($pagenum > 1) {
$previous = $pagenum - 1;
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn-info">Previous</a> &nbsp; &nbsp; ';

		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
			}
	}
}

	$paginationCtrls .= ''.$pagenum.' &nbsp; ';

	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	}

if ($pagenum != $last) {
$next = $pagenum + 1;
$paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="btn btn-info">Next</a> ';
}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"" rel="nofollow">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
	<form action = "update_course_asm.php" method = "post" enctype = "multipart/form-data" id = "form1">
		<div" rel="nofollow">
			<div style="height: 20px;"></div>
			<div class="row">
				<div class="col-lg-2">
				</div>
				<div class="col-lg-9">
					<table width="80%" class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="info" >
							<th><center>ลำดับ</th>
							<th><center>มาตรฐานการเรียนรู้</th>
							<th><center>รหัสมาตรฐานย่อย</th>
							<th><center>ชื่อมาตรฐานการเรียนรู้ย่อย</th>
							<th><center>คลิกเกณฑ์ประเมิน</th>
							</tr>
						</thead>
						<tbody>
							<?php
								while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							?>
							<tr>
								<td><center><?php echo $row['std_id']; ?></td>
								<td><center><?php echo $row['standard_name']; ?></td>
								<td><center><?php echo $row['id_small']; ?></td>
								<td><?php echo $row['std_name']; ?></td>
								<td><center><input type ="checkbox" name="choose" value="choose"></td>
							</tr>
							<?php
									}
							mysqli_free_result($result);
							mysqli_close($conn);
							?>
						</tbody>
					</table>
					<div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
				</div>
				<div class="col-lg-2">
				</div>
			</div>
		</div>
		<center><input type= "submit" value="บันทึก">
		<input type= "reset" value="ยกเลิก"></center>
	</body>
</html>