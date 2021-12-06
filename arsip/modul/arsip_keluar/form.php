<?php
	//panggil function.php untuk upload file
	include "config/function.php";

	//Uji Jika klik tombol edit / hapus
	if(isset($_GET['hal']))
	{

		if($_GET['hal'] == "edit")
		{

			//tampilkan data yang akan diedit
			$tampil = mysqli_query($koneksi, "SELECT * FROM tb_suratkeluar WHERE id_suratkeluar='$_GET[id]'");


			$data = mysqli_fetch_array($tampil);
			if($data)
			{
				//jika data ditemukan, maka data ditampung ke dalam variabel
				$vno_surat = $data['nomor_suratkeluar'];
				$vtanggal_surat = $data['tanggalsurat_suratkeluar'];
				$vtanggal_diterima = $data['tanggalkeluar_suratkeluar'];
				$vtanggal_entry = $data['tanggal_entry'];
				$vperihal = $data['perihal_suratkeluar'];
				$vtujuan = $data['tujuan_suratkeluar'];
				$vfile = $data['file_suratkeluar'];
			}

		}
		elseif($_GET['hal'] == 'hapus')
		{
			$hapus = mysqli_query($koneksi, "DELETE FROM tb_suratkeluar WHERE id_suratkeluar='$_GET[id]'");
			if($hapus){
				echo "<script>
						alert('Hapus Data Sukses');
						document.location='?halaman=surat_keluar';
					  </script>";
			}
		}
		

	}
	
	//uji jika tombol simpan diklik
	if(isset($_POST['simpan']))
	{
		
		//pengujian apakah data akan diedit / simpan baru
		if(@$_GET['hal'] == "edit"){
			//perintah edit data
			//ubah data

			// cek apakah user pilih file/gambar atau tidak 
			if($_FILES['file']['error'] === 4){
				$file = $vfile;
			}else{
				$file = upload();
			}

			$ubah = mysqli_query($koneksi, "UPDATE tb_suratkeluar SET 
			nomor_suratkeluar 		= '$_POST[nomor_suratkeluar]',
			tanggalsurat_suratkeluar	= '$_POST[tanggalsurat_suratkeluar]',
			tanggalkeluar_suratkeluar = '$_POST[tanggalkeluar_suratkeluar]',
			tanggal_entry	= '$_POST[tanggal_entry]',
			perihal_suratkeluar 			= '$_POST[perihal_suratkeluar]',
			tujuan_suratkeluar 			= '$_POST[tujuan_suratkeluar]',
			file_suratkeluar			= '$file'
			where id_suratkeluar = '$_GET[id]' ");
			
			if($ubah)
			{
				echo "<script>
						alert('Ubah Data Sukses');
						document.location='?halaman=surat_keluar';
					  </script>";
			}
			else
			{
				echo "<script>
						alert('Ubah Data GAGAL!!');
						document.location='?halaman=surat_keluar';
					  </script>";
			}
		}
		else
		{
			//perintah simpan data baru
			//simpan data
			$file = upload();
			$simpan = mysqli_query($koneksi, "INSERT INTO tb_suratkeluar 
											  VALUES (	'', 
											  '$_POST[nomor_suratkeluar]',
												'$_POST[tanggalsurat_suratkeluar]',
												'$_POST[tanggalkeluar_suratkeluar]',
												'$_POST[tanggal_entry]',
												'$_POST[perihal_suratkeluar]',
												'$_POST[tujuan_suratkeluar]',
												'$file'
											  		  ) ");

			if($simpan)
			{
				echo "<script>
						alert('Simpan Data Sukses');
						document.location='?halaman=surat_keluar';
					  </script>";
			}else
			{
				echo "<script>
						alert('Simpan Data GAGAL!!');
						document.location='?halaman=_surat_keluar';
					  </script>";
			}

		}


		
	}

	

?>


<div class="card mt-3">
  <div class="card-header bg-info text-white ">
    Form Data Surat keluar
  </div>
  <div class="card-body">
    <form method="post" action="" enctype="multipart/form-data" >
	  <div class="form-group">
	    <label for="nomor_suratkeluar">No. Surat</label>
	    <input type="text" class="form-control" id="nomor_suratkeluar" name="nomor_suratkeluar" value="<?=@$vno_surat?>">
	  </div>
	  <div class="form-group">
	    <label for="tanggalsurat_suratkeluar">Tanggal Surat</label>
	    <input type="date" class="form-control" id="tanggalsurat_suratkeluar" name="tanggalsurat_suratkeluar" value="<?=@$vtanggal_surat?>">
	  </div>
	  <div class="form-group">
	    <label for="tanggalkeluar_suratkeluar">Tanggal Keluar</label>
	    <input type="date" class="form-control" id="tanggalkeluar_suratkeluar" name="tanggalkeluar_suratkeluar" value="<?=@$vtanggal_diterima?>">
	  </div>
	  <div class="form-group">
	    <label for="tanggal_entry">Tanggal Entry</label>
	    <input type="date" class="form-control" id="tanggal_entry" name="tanggal_entry" value="<?=@$vtanggal_entry?>">
	  </div>
	  <div class="form-group">
	    <label for="perihal_suratkeluar">Perihal</label>
	    <input type="text" class="form-control" id="perihal_suratkeluar" name="perihal_suratkeluar" value="<?=@$vperihal?>">
	  </div>
	  <div class="form-group">
	    <label for="tujuan_suratkeluar">Tujuan</label>
	    <input type="text" class="form-control" id="tujuan_suratkeluar" name="tujuan_suratkeluar" value="<?=@$vtujuan?>">
	  </div>
	  <div class="form-group">
	    <label for="file">Pilih File</label>
	    <input type="file" class="form-control" id="file" name="file" value="<?=@$vfile?>">
	  </div>

	  <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
	  <button type="reset" name="bbatal" class="btn btn-danger">Batal</button>
	</form>
  </div>
</div>