<?php
	require_once 'conn.php';
	$sql_gsub = "SELECT id_sub, name_sub FROM group_sub order by name_sub";
	$q_gsub= mysqli_query($conn,$sql_gsub);
?>
<center><img src="header.jpg"></center>
<form method="get" id="form" enctype="multipart/form-data" action="" >
<BR><strong><center><label for="groupid">เลือกกลุ่มวิชา</label></strong>
    <select id="groupid" name="groupid">
	            <option value="0">ทั้งหมด</option>
    <?php
	   	while($row_gsub = mysqli_fetch_array($q_gsub, MYSQLI_ASSOC))
		{
			echo "<option value='".$row_gsub["id_sub"]."'>".$row_gsub["name_sub"]."</option>";
		}
	?>
	</select>
<BR><strong><center>ชื่อรายวิชาภาษาไทย</strong>
	<input type="text" name="cname_th" size="30" value="" autocomplete="off">
<BR><strong><center>ชื่อรายวิชาภาษาอังกฤษ</strong>
	<input type="text" name="cname_en" size="30" value="" autocomplete="off">
	<input type="submit" value="ค้นหา"></center>
</form>
<font size ="5" ><center><b><u>แสดงข้อมูลรายวิชา</b></u></center></font>
<?php
	require 'conn.php';
	if (!empty($_GET['groupid']) || !empty($_GET['cname_th']) || !empty($_GET['cname_en']) )
	{
	   $search = " where ";
	   if ($_GET['groupid']!=0) { $search .= " course.id_sub = ".$_GET['groupid']." "; }
	   if (!empty($_GET['cname_th']) ) { 
			if($search != " where ") {
				$search .= " and ";
			}
			$search .= " course.d_name like '%".$_GET['cname_th']."%' ";
		} 
	   if (!empty($_GET['cname_en']) ) {
			if($search != " where ") {
				$search .= " and ";
			}
			$search .= " course.d_eng like '%".$_GET['cname_en']."%' "; 
		} 
	}else{
		$search = " ";
	}
	//$search = isset($_GET['groupid']) ? $_GET['groupid']: '';
	$sql_count = "SELECT COUNT(d_id2) FROM course $search ;";
	//echo "SQL : ".$sql_count."<BR>";
	$query = mysqli_query($conn,$sql_count);
	$row = mysqli_fetch_row($query);
  
	$rows = $row[0];
    //echo "All row course  ".$rows."<BR>";
	$page_rows = 15;  //จำนวนข้อมูลที่ต้องการให้แสดงใน 1 หน้า  ตย. 5 record / หน้า 

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

    $q = "select group_sub.name_sub, course.d_id, course.id_sub, course.d_id2, course.d_name, course.d_eng, course.d_credit ";
    $q .= "from course inner join group_sub ON group_sub.id_sub = course.id_sub ";
	$q .= " $search ";	
	$q .= "order by course.id_sub, course.d_id $limit";
	//echo "SQL : ".$q."<BR>";
	$result = mysqli_query($conn,$q);

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
		<style>
		body{
			background: url(.png) no-repeat center center fixed; 
			background-size: 100% 100%;
			height: auto;
			width: 100%;
		}
		</style>
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
							<th><center>กลุ่มวิชา</th>
							<th><center>รหัสรายวิชา</th>
							<th><center>ชื่อรายวิชาภาษาไทย</th>
							<th><center>ชื่อรายวิชาภาษาอังกฤษ</th>
							<th><center>หน่วยกิต</th>
							<th><center>แก้ไขข้อมูล</th>
							<th><center>ลบข้อมูล</th>
							</tr>
						</thead>
						<tbody>
							<?php
								while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
							?>
							<tr>
								<td><?php echo $row['name_sub']; ?></td>
								<td><center><?php echo $row['d_id2']; ?></td>
								<td><?php echo $row['d_name']; ?></td>
								<td><?php echo $row['d_eng']; ?></td>
								<td><center><?php echo $row['d_credit']; ?></td>
								<td><center><?php echo "<a href='update_form_course.php?d_id=".$row['d_id']."'><img src='edit.png' width='20px' height='20px'></a></td></a>"; ?></td>
								<td><center><?php echo "<a href='delete_course.php?d_id=".$row['d_id']."' onclick='return confirm(\"คุณต้องการที่จะลบข้อมูลนี้หรือไม่ ?\")'><img src='delete.png' width='20px' height='20px'></a></td></a>"; ?></td>
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
	<a href="insert_form_course.php"><center>เพิ่มข้อมูล</center></a>
	