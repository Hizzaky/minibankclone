<?php include 'fun.php';

	// $sql="SELECT COUNT('mb_t_admin') FROM information_schema.TABLES ";

	// $x=dqr(SELECT COUNT(TABLE_NAME) FROM information_schema.TABLES);

	// $sql="SELECT * FROM mb_t_adminn";


	// $sql="SHOW TABLES LIKE mb_t_admin";




	// $x=sql($sql);
	// if ($x->num_rows>0) {
	// 	echo "ada";
	// }else{
	// 	echo "kosong";
	// }


	// $sql="SELECT * FROM information_schema.tables WHERE TABLE_SCHEMA='minibank' AND TABLE_NAME='mb_t_admin' LIMIT 1";

	// $data=sql($sql);

	// print_r($data);

	// if ((sql($sql)->num_rows)>0) {
	// 	echo "ada";
	// }else{
	// 	echo "kosong";
	// }

	// $x="mb_t_adminn";
	// $retVal = mysqli_query(db(),"DESCRIBE ".$x);

	// print_r($retVal);


	// $data=sql("SHOW TABLES LIKE 'mb_t_admin'");
	// $data=sql("SELECT * FROM mb_t_admin");
	// $x=$data->fetch_assoc();

	// print_r($x);
	// echo $data;


	// try {
	// 	sql("SELECT * FROM dt");
	// } catch (Exception $e) {
	// 	echo "ERROR : ".$e->getMessage();
	// }

	$id=$_SESSION['id'];
	// $data=dqr("SELECT * FROM mb_t_nasabah");
	$data=dqr("SELECT * FROM mb_t_nasabah WHERE id='$id'");
	// $d=sql("SELECT * FROM mb_t_admin");
	// while($x=$d->fetch_array()){
	// 	$ar[]=$x;
	// }

	// var_dump($data);

	// echo $data[1];




	$sql="SELECT * FROM mb_t_admin";
	$m=db()->query($sql);
	$x=$m->fetch_array();

	// $data=rsql($sql);
	
	// $i=0;
	// while ($x=$data->fetch_array()) {
	// 	$ar[$i]=$x;
	// 	$i++;
	// }

	// foreach ($x as $key => $value) {
	// 	echo $value."<br>";
	// }

	// var_dump($data);
	// echo $ar['id'];

	// print_r($ar);

	echo $data[0]['jenis_identitas_utama']."<br>";
	// echo $data[1]['nama_admin']."<br>";
	// echo $data[2]['nama_admin']."<br>";






 ?>

<!-- <input type="radio" name="a" value="" >radio -->