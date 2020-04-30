<?php //create_tab.php
include_once('conn.php');
$sql = "CREATE TABLE employee (id int(6) NOT NULL auto_increment
		,first varchar(200)NOT NULL
		,last varchar(200)NOT NULL
		,phone varchar(20)NOT NULL
		,email varchar(100) NOT NULL
		,web varchar(255)NOT NULL
		,CONSTRAINT pk_employee PRIMARY KEY(id))";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>alert('Create tab ok');
			</script>";
}else{
	echo "<script>alert('Cannot create');
			</script>";
}
mysqli_close($conn);
?>