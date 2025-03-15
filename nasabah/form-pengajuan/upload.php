<?php  include '../../fun.php'; 


	if (empty($_SESSION['produk']) OR is_null($_SESSION['produk']) OR $_SESSION['produk']=="") {
		echo "<script>location.replace('../pengajuan')</script>";
	}else{

		foreach($_POST as $key => $item) {
			$_SESSION[$key]=$_POST[$key];
		}
	 	// print_r($_POST);
	 	$newArray=$_SESSION;
	 	$id=$newArray['id'];
	 	$usrnm=$newArray['username'];


	 	$cekData=db()->query("SELECT * FROM mb_t_form_pengajuan WHERE id_nasabah='$id'");
	 	if (mysqli_num_rows($cekData)>=1) {
	 		db()->query("DELETE FROM mb_t_form_pengajuan WHERE id_nasabah='$id'");
	 	}

	 	unset($newArray['username']);
	 	unset($newArray['password']);
	 	unset($newArray['lvl']);
	 	unset($newArray['verif']);
	 	unset($newArray['nama']);

	 	if ($newArray['jenis_pekerjaan']=="Lainnya") {
	 		$newArray['jenis_pekerjaan']=$newArray['jenis_pekerjaan2'];
	 		unset($newArray['jenis_pekerjaan2']);
	 	}else{
	 		$newArray['jenis_pekerjaan'];
	 		unset($newArray['jenis_pekerjaan2']);
	 	}

	 	if ($newArray['bentuk_pekerjaan']=="Lainnya") {
	 		$newArray['bentuk_pekerjaan']=$newArray['bentuk_pekerjaan2'];
	 		unset($newArray['bentuk_pekerjaan2']);
	 	}else{
	 		$newArray['bentuk_pekerjaan'];
	 		unset($newArray['bentuk_pekerjaan2']);
	 	}
	 	if (is_null($newArray["jenis_pekerjaan_menikah"])) {
	 		// echo "kosong";
	 		$newArray["jenis_pekerjaan_menikah"]="";
	 		unset($newArray['jenis_pekerjaan_menikah2']);
	 	}else{
	 		if ($newArray['jenis_pekerjaan_menikah']=="Lainnya") {
		 		$newArray['jenis_pekerjaan_menikah']=$newArray['jenis_pekerjaan_menikah2'];
		 		unset($newArray['jenis_pekerjaan_menikah2']);
		 	}else{
		 		$newArray['jenis_pekerjaan_menikah'];
		 		unset($newArray['jenis_pekerjaan_menikah2']);
		 	}
	 	}
	 	echo "<hr>";

	 	$newArray['id_nasabah']=$newArray['id'];
	 	unset($newArray['id']);
	 	$img_pemohon = $newArray['signature_pemohon'];
	 	$img_pasangan = $newArray['signature_pasangan'];
	 	$newArray['signature_pemohon']="pemohon.png";
	 	if (!$img_pasangan=="" || !empty($img_pasangan)) {
	 		$newArray['signature_pasangan']="pasangan.png";
	 	}
	 	// else{
	 	// 	$newArray['signature_pasangan']="";
	 	// }
		$dir="file/".$id.$usrnm;
		if (!is_dir($dir)) {
	    	mkdir($dir);
	    }

		$arkey=[];
		$aritem=[];
		$i=0;
		foreach($newArray as $key => $item) {
	  		$arkey[$i]=$key;
	  		$aritem[$i]="'".escStr($item)."'";
	  		$i++;
		}

		$key=implode(",", $arkey);
		$data=implode(",", $aritem);

		$data_pemohon = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img_pemohon));
		$export_pemohon=file_put_contents($dir.'/pemohon.png', $data_pemohon);
		// print_r($arkey);
		// print_r($newArray);
		echo "<hr>";
		// print_r($aritem);

		// RENEW DATA SESSION 
			// echo $key."<br>";
		
		// print_r($_SESSION);
		// 
		$sql="INSERT INTO mb_t_form_pengajuan ($key) VALUES($data)";

	 	if ($img_pasangan=="" || is_null($img_pasangan) || empty($img_pasangan)) {
	//  TANPA TTD PASANGAN
			if (db()->query($sql)) {
				db()->query("UPDATE mb_t_kelengkapan SET form='1' WHERE id_nasabah='$id'");
				// echo "sukses DB-";
				if ($export_pemohon) {
					foreach ($newArray as $key => $value) {
						unset($_SESSION[$key]);
					}
					// echo "sukses file ttd";
					// header("location:../pengajuan?suksesFileTtd");
					echo "<script>location.replace('../pengajuan?sukses')</script>";

				}else{
					// echo "fail file ttd";
					// header("location:../pengajuan?failFileTtd");
					echo "<script>location.replace('../pengajuan?fail')</script>";
				}
				
			}else{
				// echo "fail File DB";
				// header("location:../pengajuan?failFileDB");
				echo "<script>location.replace('../pengajuan?fail')</script>";
			}
	 	}else{
	//  DENGAN TTD PASANGAN
			$data_pasangan = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img_pasangan));
			$export_pasangan=file_put_contents($dir.'/pasangan.png', $data_pasangan);

			if (db()->query($sql)) {
				// echo "sukses DB-";
				db()->query("UPDATE mb_t_kelengkapan SET form='1' WHERE id_nasabah='$id'");
				if ($export_pemohon) {
					foreach ($newArray as $key => $value) {
						unset($_SESSION[$key]);
					}
					// echo "sukses";
					// header("location:../pengajuan?sukses");
					echo "<script>location.replace('../pengajuan?sukses')</script>";
				}else{
					// echo "fail";
					// header("location:../pengajuan?failFile");
					echo "<script>location.replace('../pengajuan?fail')</script>";
				}
				
			}else{
				// echo "fail DB";
				// header("location:../pengajuan?failDB");
				echo "<script>location.replace('../pengajuan?fail')</script>";
			}

	 	}
	}






  ?>