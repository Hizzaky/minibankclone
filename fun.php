<?php session_start();
function db()
{ 
	$servername = "db4free.net:3306"; 
	$db_name = "db_minibank";
	$username = "root_minibank";
	$password = "minibank";
	// $db_name="id19546105_minibank";
	// $username="id19546105_rootminibank";
	// $password="IP<4!CD~cs|xRe31";
	// return $conn = new mysqli($servername, $username, $password, $db_name);

	// ===
	$conn = new mysqli($servername, $username, $password, $db_name);
	if ($conn->connect_error) {
		return die("Connection failed: " . $conn->connect_error);
	} else {
		return "Connected successfully";
	}
}

function v_verif()
{
	$sql = "CREATE OR REPLACE VIEW v_nasabah_verif AS SELECT * FROM mb_t_nasabah WHERE verif='0'";
	db()->query($sql);
}
function v_nasabah()
{
	$sql = "CREATE OR REPLACE VIEW v_nasabah AS SELECT * FROM mb_t_nasabah WHERE verif='1'";
	db()->query($sql);
}
function v_pengajuan()
{

	$sql = "CREATE OR REPLACE VIEW v_pengajuan AS SELECT mb_t_kelengkapan.id_nasabah, mb_t_nasabah.nama_nasabah, mb_t_nasabah.username, mb_t_nasabah.jenis_identitas_utama, mb_t_form_pengajuan.jenis_pekerjaan, mb_t_form_pengajuan.jumlah_pengajuan, mb_t_form_pengajuan.jabatan_pekerjaan, mb_t_form_pengajuan.nama_instansi_pekerjaan, mb_t_form_pengajuan.gaji_tetap_pemohon, mb_t_form_pengajuan.gaji_tetap_pasangan, mb_t_form_pengajuan.gaji_xtetap_pasangan, mb_t_form_pengajuan.gaji_xtetap_pemohon, mb_t_form_pengajuan.hp_pribadi, mb_t_form_pengajuan.hp_menikah, mb_t_nasabah.email, mb_t_kelengkapan.kk, mb_t_kelengkapan.ktp, mb_t_kelengkapan.form, mb_t_kelengkapan.pengajuan_nasabah, mb_t_kelengkapan.pengajuan_cs, mb_t_kelengkapan.pengajuan_admin, mb_t_form_pengajuan.produk FROM mb_t_kelengkapan, mb_t_nasabah, mb_t_form_pengajuan WHERE mb_t_kelengkapan.id_nasabah = mb_t_nasabah.id AND mb_t_kelengkapan.id_nasabah=mb_t_form_pengajuan.id_nasabah ORDER BY mb_t_kelengkapan.id";
	db()->query($sql);

	$sql = "CREATE OR REPLACE VIEW v_pengajuan_nasabah AS SELECT * FROM v_pengajuan WHERE pengajuan_nasabah='1' AND pengajuan_cs='0'";
	db()->query($sql);

	$sql = "CREATE OR REPLACE VIEW v_pengajuan_cs AS SELECT * FROM v_pengajuan WHERE pengajuan_nasabah='1' AND pengajuan_cs='1' AND pengajuan_admin='0'";
	db()->query($sql);

	$sql = "CREATE OR REPLACE VIEW v_pengajuan_admin AS SELECT * FROM v_pengajuan WHERE pengajuan_nasabah='1' AND pengajuan_cs='1' AND pengajuan_admin='1'";
	db()->query($sql);

	// $sql="CREATE OR REPLACE VIEW v_kasir AS SELECT mb_t_pinjaman.id_nasabah, mb_t_nasabah.nama_nasabah, mb_t_pinjaman.pinjaman, mb_t_pinjaman.status FROM mb_t_pinjaman,mb_t_nasabah WHERE mb_t_pinjaman.id_nasabah=mb_t_nasabah.id AND mb_t_pinjaman.status='0' ORDER BY mb_t_pinjaman.id";
	$sql = "CREATE OR REPLACE VIEW v_kasir AS SELECT mb_t_pinjaman.id_nasabah, mb_t_nasabah.nama_nasabah, mb_t_form_pengajuan.produk, mb_t_form_pengajuan.jumlah_pengajuan, mb_t_pinjaman.pinjaman, mb_t_pinjaman.jumlah_bulan, mb_t_pinjaman.cicilan 


		FROM mb_t_pinjaman,mb_t_nasabah,mb_t_form_pengajuan WHERE mb_t_pinjaman.id_nasabah=mb_t_nasabah.id AND mb_t_pinjaman.id_nasabah=mb_t_form_pengajuan.id_nasabah AND mb_t_pinjaman.status='0' ORDER BY mb_t_pinjaman.id";
	db()->query($sql);

	$sql = "CREATE OR REPLACE VIEW v_cicilan AS SELECT mb_t_pinjaman.id_nasabah, mb_t_nasabah.nama_nasabah, mb_t_pinjaman.pinjaman, mb_t_pinjaman.jumlah_bulan, mb_t_pinjaman.tgl_mulai, mb_t_pinjaman.cicilan, mb_t_pinjaman.status FROM mb_t_pinjaman,mb_t_nasabah WHERE mb_t_pinjaman.id_nasabah=mb_t_nasabah.id AND mb_t_pinjaman.status='1' ORDER BY mb_t_pinjaman.id";
	db()->query($sql);

}

function cek_tbl($x)
{
	$n = 0;
	// $sql=mysqli_query(db(),"DESCRIBE ".$x);
	$sql = "SHOW TABLES LIKE " . $x;
	return $retVal = (sql($sql)) ? $n = 1 : $n;
	// return $retVal = (mysqli_query(db(),"DESCRIBE ".$x)) ? $n=1 : $n ;
}

function ct_admin()
{
	$cek = cek_tbl("mb_t_admin");
	$sql = "	CREATE TABLE mb_t_admin (
					id INT(5) AUTO_INCREMENT PRIMARY KEY,
					nama_admin VARCHAR(20) NOT NULL,
					username VARCHAR(50) NOT NULL,
					password VARCHAR(50) NOT NULL,
					lvl VARCHAR(10) NOT NULL
				) ";
	$retVal = ($cek == 0) ? db()->query($sql) : $cek = 1;
}

function ct_nasabah()
{
	$cek = cek_tbl("mb_t_nasabah");
	$sql = "	CREATE TABLE mb_t_nasabah (
					id INT(5) AUTO_INCREMENT PRIMARY KEY,
					username VARCHAR(50) NOT NULL,
					password VARCHAR(50) NOT NULL,

					kwn VARCHAR(30) NOT NULL,
					jenis_identitas_utama VARCHAR(20) NOT NULL,
					nomor_identitas_utama VARCHAR(50) NOT NULL,
					tgl_terbit_utama DATE NOT NULL,
					tgl_xpr_utama DATE NOT NULL,
					jenis_identitas_pelengkap VARCHAR(20) NULL,
					nomor_identitas_pelengkap VARCHAR(50) NULL,
					tgl_terbit_pelengkap DATE NULL,
					tgl_xpr_pelengkap DATE NULL,
					nama_nasabah VARCHAR(50) NOT NULL,
					alamat_nasabah TEXT NOT NULL,
					rt CHAR(3) NOT NULL,
					rw CHAR(3) NOT NULL,
					pos CHAR(10) NOT NULL,
					tempat_lahir VARCHAR(50) NOT NULL,
					tanggal_lahir DATE NOT NULL,
					jk CHAR(6) NOT NULL,
					golongan_nasabah CHAR(15) NOT NULL,
					pendidikan_terakhir VARCHAR(20) NOT NULL,
					agama VARCHAR(15) NOT NULL,
					status_pernikahan CHAR(10) NOT NULL,
					ibu_kandung VARCHAR(50) NOT NULL,
					npwp VARCHAR(15) NULL,
					hp VARCHAR(13) NOT NULL,
					email VARCHAR(50) NULL,

					tipe_pekerjaan VARCHAR(20) NOT NULL,
					bidang_usaha VARCHAR(30) NOT NULL,
					jabatan VARCHAR(30) NOT NULL,
					nama_instansi VARCHAR(50) NOT NULL,
					alamat_instansi TEXT NOT NULL,
					telepon_instansi VARCHAR(13) NOT NULL,

					tujuan_rekening VARCHAR(20) NOT NULL,
					sumber_dana TEXT NOT NULL,
					penghasilan_nasabah INT(11) NOT NULL,

					lvl VARCHAR(10) NOT NULL,
					verif CHAR(1) NOT NULL
				) ";
	$retVal = ($cek == 0) ? db()->query($sql) : $cek = 1;
}

function ct_kelengkapan()
{
	$cek = cek_tbl("mb_t_kelengkapan");
	$sql = "	CREATE TABLE mb_t_kelengkapan (
					id INT(5) AUTO_INCREMENT PRIMARY KEY,
					id_nasabah INT(5) NOT NULL,
					kk TEXT NULL,
					ktp TEXT NULL,
					form CHAR(1) NULL,					
					pengajuan_nasabah CHAR(1) NULL,					
					pengajuan_cs CHAR(1) NULL,					
					pengajuan_admin CHAR(1) NULL					
				) ";
	$retVal = ($cek == 0) ? db()->query($sql) : $cek = 1;
}

function ct_pinjaman()
{
	$cek = cek_tbl("mb_t_pinjaman");
	$sql = "	CREATE TABLE mb_t_pinjaman (
					id INT(5) AUTO_INCREMENT PRIMARY KEY,
					id_nasabah INT(5) NOT NULL,
					pinjaman TEXT NOT NULL,					
					sisa_pinjaman TEXT NOT NULL,					
					jumlah_bulan INT(8) NULL,					
					jumlah_bulan_cicil INT(8) NOT NULL,					
					tgl_mulai DATE NULL,					
					cicilan TEXT NULL,					
					status CHAR(1) NOT NULL
				) ";
	$retVal = ($cek == 0) ? db()->query($sql) : $cek = 1;
}

function ct_pembiayaan()
{
	$cek = cek_tbl("mb_t_pembiayaan");
	$sql = "	CREATE TABLE mb_t_pembiayaan (
					id INT(5) AUTO_INCREMENT PRIMARY KEY,
					pembiayaan VARCHAR(15) NOT NULL,
					bln12 VARCHAR(15) NOT NULL,
					bln18 VARCHAR(15) NOT NULL,
					bln24 VARCHAR(15) NOT NULL,
					bln36 VARCHAR(15) NOT NULL
				) ";
	$retVal = ($cek == 0) ? db()->query($sql) : $cek = 1;

	$sql = db()->query("SELECT * FROM mb_t_pembiayaan");
	$retVal = ($sql->num_rows >= 1) ? $x = 1 : $x = 0;
	if ($x == 0) {
		$ar = array(
			array("5000000", "430166", "291277", "221833", "152388"),
			array("10000000", "860333", "582555", "443666", "304777"),
			array("15000000", "1290500", "873833", "665500", "457166"),
			array("20000000", "1720667", "1165111", "887333", "609555"),
			array("25000000", "2150833", "1456389", "1109167", "761944"),
			array("30000000", "2581000", "1747667", "1331000", "914333"),
			array("35000000", "3011167", "2038944", "1552833", "1066722"),
			array("40000000", "3441333", "2330222", "1774667", "1219111"),
			array("45000000", "3871500", "2621500", "1996500", "1371500"),
			array("50000000", "4301667", "2912778", "2218333", "1532889"),
			array("75000000", "6452500", "4369167", "3327500", "2285833"),
			array("100000000", "8603333", "5825566", "4436667", "3047778"),
			array("125000000", "10754167", "7281944", "5545833", "3809722"),
			array("150000000", "12905000", "8738333", "6655000", "4571667"),
			array("175000000", "15055833", "10194722", "7764167", "5333611"),
			array("200000000", "17206667", "11651111", "8873333", "6095556")
		);
		for ($i = 0; $i < count($ar); $i++) {
			// for ($j=0; $j < 5; $j++) { 
			$pembiayaan = $ar[$i][0];
			$bln1 = $ar[$i][1];
			$bln2 = $ar[$i][2];
			$bln3 = $ar[$i][3];
			$bln4 = $ar[$i][4];
			$sql = "INSERT INTO mb_t_pembiayaan (pembiayaan,bln12,bln18,bln24,bln36) 
					VALUES('$pembiayaan','$bln1','$bln2','$bln3','$bln4')";
			// }
			db()->query($sql);
		}
	}
}

function ct_form_pengajuan()
{
	$cek = cek_tbl("mb_t_form_pengajuan");
	$sql = "	CREATE TABLE mb_t_form_pengajuan (
					id INT(5) AUTO_INCREMENT PRIMARY KEY,
					id_nasabah INT(5) NOT NULL,
					produk VARCHAR(50) NOT NULL,	
					jumlah_pengajuan VARCHAR(15) NOT NULL,	
					jenis_pengajuan VARCHAR(20) NOT NULL,	
					jangka_waktu VARCHAR(3) NOT NULL,	
					tujuan_penggunaan TEXT NOT NULL,	
					nama_pribadi VARCHAR(50) NOT NULL,	
					jk_pribadi VARCHAR(10) NOT NULL,	
					ttl_pribadi TEXT NOT NULL,	
					status_pribadi VARCHAR(20) NOT NULL,	
					ktp_pribadi VARCHAR(16) NOT NULL,	
					jumlah_tanggungan_pribadi VARCHAR(15) NOT NULL,	
					npwp_pribadi VARCHAR(16) NULL,	
					pendidikan_terakhir_pribadi TEXT NOT NULL,	
					alamat_ktp_pribadi TEXT NOT NULL,	
					no_ktp_pribadi CHAR(3) NOT NULL,	
					rt_ktp_pribadi CHAR(2) NOT NULL,	
					rw_ktp_pribadi CHAR(3) NOT NULL,	
					lurah_ktp_pribadi TEXT NOT NULL,	
					kecamatan_ktp_pribadi TEXT NOT NULL,	
					kota_ktp_pribadi TEXT NOT NULL,	
					provinsi_ktp_pribadi TEXT NOT NULL,	
					pos_ktp_pribadi CHAR(5) NOT NULL,	
					telepon_ktp_pribadi VARCHAR(13) NULL,	

					alamat_tinggal_pribadi TEXT NULL,	
					no_tinggal_pribadi CHAR(3) NULL,	
					rt_tinggal_pribadi CHAR(2) NULL,	
					rw_tinggal_pribadi CHAR(3) NULL,	
					lurah_tinggal_pribadi TEXT NULL,	
					kecamatan_tinggal_pribadi TEXT NULL,	
					kota_tinggal_pribadi TEXT NULL,	
					provinsi_tinggal_pribadi TEXT NULL,	
					pos_tinggal_pribadi CHAR(5) NULL,	
					telepon_tinggal_pribadi VARCHAR(13) NULL,	
					status_tempat_tinggal_pribadi VARCHAR(50) NOT NULL,	
					hp_pribadi VARCHAR(13) NOT NULL,	

					jenis_pekerjaan TEXT NOT NULL,	
					bentuk_pekerjaan TEXT NOT NULL,	
					nama_instansi_pekerjaan TEXT NOT NULL,	
					lama_kerja_pekerjaan CHAR(2) NOT NULL,	
					jabatan_pekerjaan TEXT NOT NULL,	
					alamat_instansi_pekerjaan TEXT NOT NULL,	
					no_instansi_pekerjaan CHAR(3) NULL,	
					rt_instansi_pekerjaan CHAR(2) NULL,	
					rw_instansi_pekerjaan CHAR(3) NULL,	
					lurah_instansi_pekerjaan TEXT NULL,	
					kecamatan_instansi_pekerjaan TEXT NULL,	
					kota_instansi_pekerjaan TEXT NULL,	
					provinsi_instansi_pekerjaan TEXT NULL,	
					pos_instansi_pekerjaan CHAR(5) NULL,	
					telepon_instansi_pekerjaan VARCHAR(13) NULL,	
					
					nama_menikah TEXT NULL,	
					ttl_menikah TEXT NULL,	
					ktp_menikah VARCHAR(16) NULL,	
					hp_menikah VARCHAR(13) NULL,	
					jenis_pekerjaan_menikah TEXT NULL,	
					alamat_menikah TEXT NULL,	
					no_menikah CHAR(3) NULL,	
					rt_menikah CHAR(2) NULL,	
					rw_menikah CHAR(3) NULL,	
					lurah_menikah TEXT NULL,	
					kecamatan_menikah TEXT NULL,	
					kota_menikah TEXT NULL,	
					provinsi_menikah TEXT NULL,	
					pos_menikah CHAR(5) NULL,	
					telepon_menikah VARCHAR(13) NULL,	

					gaji_tetap_pemohon VARCHAR(15) NOT NULL,	
					gaji_tetap_pasangan VARCHAR(15) NOT NULL,	
					tunjangan_tetap_pemohon VARCHAR(15) NOT NULL,	
					tunjangan_tetap_pasangan VARCHAR(15) NOT NULL,	
					potongan_tetap_pemohon VARCHAR(15) NOT NULL,	
					potongan_tetap_pasangan VARCHAR(15) NOT NULL,	
					cicilan_tetap_pemohon VARCHAR(15) NOT NULL,	
					cicilan_tetap_pasangan VARCHAR(15) NOT NULL,	
					total_tetap VARCHAR(15) NOT NULL,	

					gaji_xtetap_pemohon VARCHAR(15) NOT NULL,	
					gaji_xtetap_pasangan VARCHAR(15) NOT NULL,	
					tunjangan_xtetap_pemohon VARCHAR(15) NOT NULL,	
					tunjangan_xtetap_pasangan VARCHAR(15) NOT NULL,
					potongan_xtetap_pemohon VARCHAR(15) NOT NULL,	
					potongan_xtetap_pasangan VARCHAR(15) NOT NULL,	
					cicilan_xtetap_pemohon VARCHAR(15) NOT NULL,	
					cicilan_xtetap_pasangan VARCHAR(15) NOT NULL,
					total_xtetap VARCHAR(15) NOT NULL,

					signature_pemohon TEXT NOT NULL,
					signature_pasangan TEXT NOT NULL	
				) ";
	$retVal = ($cek == 0) ? db()->query($sql) : $cek = 1;
}

function cek_table()
{
	ct_admin();
	// ct_nasabah();
	// ct_kelengkapan();
	// ct_pinjaman();
	// ct_form_pengajuan();
	// ct_pembiayaan();
	
	// $admin = ct_admin();
	// $nasabah = ct_nasabah();
	// $pengajuan = ct_kelengkapan();
	// $pinjaman = ct_pinjaman();
	// $form_pengajuan = ct_form_pengajuan();
	// $pembiayaan = ct_pembiayaan();
}

function escStr($x)
{
	$sql = mysqli_escape_string(db(), $x);
	return $sql;
}

function mix($x)
{
	// $username=escStr($_POST['username']);
	// $password=escStr($_POST['password']);
	// $cek="username='$username' AND password='$password'";
	// return $ar=array($username,$password);

	return array_push($_SESSION, $x);
}

function slct($tbl, $id)
{
	$sql = "SELECT * FROM $tbl WHERE id='$id'";
	return db()->query($sql)->fetch_array();
	;
}

function cek_data($tbl, $where, $cek)
{
	$sql = "SELECT * FROM $tbl WHERE $where='$cek'";
	$msql = db()->query($sql);
	return $retVal = (mysqli_num_rows($msql) >= 1) ? $x = 1 : $x = 0;
}

function arKey($x)
{
	$y = array_keys($x);
	return $z = $y[0];
}
function slct2($tbl, $where = "")
{
	$sql = "SELECT * FROM $tbl $where";
	return db()->query($sql)->fetch_array();
	;
}
function up_pengajuan($x, $id)
{
	$sql = "UPDATE mb_t_kelengkapan SET pengajuan_nasabah='$x' WHERE id_nasabah='$id'";
	db()->query($sql);
}


function penyebut($nilai)
{
	$nilai = abs($nilai);
	$huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
	$temp = "";
	if ($nilai < 12) {
		$temp = " " . $huruf[$nilai];
	} else if ($nilai < 20) {
		$temp = penyebut($nilai - 10) . " Belas";
	} else if ($nilai < 100) {
		$temp = penyebut($nilai / 10) . " Puluh" . penyebut($nilai % 10);
	} else if ($nilai < 200) {
		$temp = " Seratus" . penyebut($nilai - 100);
	} else if ($nilai < 1000) {
		$temp = penyebut($nilai / 100) . " Ratus" . penyebut($nilai % 100);
	} else if ($nilai < 2000) {
		$temp = " Seribu" . penyebut($nilai - 1000);
	} else if ($nilai < 1000000) {
		$temp = penyebut($nilai / 1000) . " Ribu" . penyebut($nilai % 1000);
	} else if ($nilai < 1000000000) {
		$temp = penyebut($nilai / 1000000) . " Juta" . penyebut($nilai % 1000000);
	} else if ($nilai < 1000000000000) {
		$temp = penyebut($nilai / 1000000000) . " Milyar" . penyebut(fmod($nilai, 1000000000));
	} else if ($nilai < 1000000000000000) {
		$temp = penyebut($nilai / 1000000000000) . " Trilyun" . penyebut(fmod($nilai, 1000000000000));
	}
	return $temp;
}

function terbilang($nilai)
{
	if ($nilai < 0) {
		$hasil = "minus " . trim(penyebut($nilai));
	} else {
		$hasil = trim(penyebut($nilai));
	}
	return $hasil;
}

function dq($x)
{
	return db()->query($x)->fetch_array();
}

function sql($x)
{
	db()->query($x);
}

function rsql($x)
{
	return db()->query($x);
}

function dqr($sql)
{
	$data = rsql($sql);
	while ($x = $data->fetch_array()) {
		$ar[] = $x;
	}
	return $ar;
}

// function dqr2($sql){
// 	$data=rsql($sql);
// 	$ar2=array();
// 	$i=0;
// 	while ($x=$data->fetch_array()) {
// 		$ar2[$i][]=$x;
// 		$i++;
// 	}
// 	return $ar2;
// }





?>