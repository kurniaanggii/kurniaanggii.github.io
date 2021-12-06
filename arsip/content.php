<?php

	@$halaman = $_GET['halaman'];

	if($halaman == "surat_keluar")
	{
		//tampilkan halaman arsip surat
		if(@$_GET['hal'] == "tambahdata" || @$_GET['hal'] == "edit" || @$_GET['hal'] == "hapus"){
			include "modul/arsip_keluar/form.php";
		}else{
			include "modul/arsip_keluar/data.php";
		}
	}
	elseif($halaman == "arsip_surat")
	{
		//tampilkan halaman arsip surat
		if(@$_GET['hal'] == "tambahdata" || @$_GET['hal'] == "edit" || @$_GET['hal'] == "hapus"){
			include "modul/arsip/form.php";
		}else{
			include "modul/arsip/data.php";
		}
	}
	else
	{
		//echo "Tampil Halaman Home";
		include "modul/home.php";
	}

?>