<center><img src="header.jpg"></center>
<form method="get" id="form" enctype="multipart/form-data" action="" >
<BR><strong><center>ค้นหาข้อมูล</strong>
	<input type="text" name="search" size="30" value="" autocomplete="off">
	<input type="submit" value="ค้นหา"></center>
</form>
<font size ="5" ><center><b><u>แสดงข้อมูลเกณฑ์การประเมิน</b></u></center></font>
<?php
include_once('conn.php');
$search = isset($_GET['search']) ? $_GET['search']:'';
$sql = "SELECT * FROM standard_2 WHERE std_name LIKE '%$search%'";
//$conn= mysqli_connect("localhost","root","","capacity") 
//or die("Error: " . mysqli_error($conn));
mysqli_query($conn, "SET NAMES 'utf8' ");
//query
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
							<th><center>เกณฑ์ประเมิน</th>
							</tr>
						</thead>
						<tbody>
							<?php
								while($crow = mysqli_fetch_array($result, MYSQLI_ASSOC)){
							?>
							<tr>
                                <td><center><?php echo $crow['std_id']; ?></td>
								<td><center><?php echo $crow['standard_name']; ?></td>
								<td><center><?php echo $crow['id_small']; ?></td>
								<td><?php echo $crow['std_name']; ?></td>
								<td><center><a href="update_form_course_asm.php"><img src='edit.png' width='20px' height='20px'></td>
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
	</body>
</html>

<!-- Ref : 

	https://www.sourcecodester.com/tutorials/php/11606/simple-pagination-using-phpmysqli.html

	-->
	