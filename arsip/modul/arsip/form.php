<?php
	//panggil function.php untuk upload file
	include "config/function.php";

	//Uji Jika klik tombol edit / hapus
	if(isset($_GET['hal']))
	{

		if($_GET['hal'] == "edit")
		{

			//tampilkan data yang akan diedit
			$tampil = mysqli_query($koneksi, "SELECT * FROM tb_suratmasuk WHERE id_suratmasuk='$_GET[id]'");


			$data = mysqli_fetch_array($tampil);
			if($data)
			{
				//jika data ditemukan, maka data ditampung ke dalam variabel
				$vno_surat = $data['nomor_suratmasuk'];
				$vtanggal_surat = $data['tanggalsurat_suratmasuk'];
				$vtanggal_diterima = $data['tanggalmasuk_suratmasuk'];
				$vtanggal_entry = $data['tanggal_entry'];
				$vperihal = $data['perihal_suratmasuk'];
				$vtujuan = $data['tujuan_suratmasuk'];
				$vpengirim = $data['pengirim_suratmasuk'];
				$vfile = $data['file_suratmasuk'];
			}

		}
		elseif($_GET['hal'] == 'hapus')
		{
			$hapus = mysqli_query($koneksi, "DELETE FROM tb_suratmasuk WHERE id_suratmasuk='$_GET[id]'");
			if($hapus){
				echo "<script>
						alert('Hapus Data Sukses');
						document.location='?halaman=arsip_surat';
					  </script>";
			}
		}
		

	}
	
	//uji jika tombol simpan diklik
	if(isset($_POST['bsimpan']))
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

			$ubah = mysqli_query($koneksi, "UPDATE tb_suratmasuk SET 
			nomor_suratmasuk 		= '$_POST[nomor_suratmasuk]',
			tanggalsurat_suratmasuk	= '$_POST[tanggalsurat_suratmasuk]',
			tanggalmasuk_suratmasuk = '$_POST[tanggalmasuk_suratmasuk]',
			tanggal_entry	= '$_POST[tanggal_entry]',
			perihal_suratmasuk 			= '$_POST[perihal_suratmasuk]',
			tujuan_suratmasuk 			= '$_POST[tujuan_suratmasuk]',
			pengirim_suratmasuk 	= '$_POST[pengirim_suratmasuk]',
			file_suratmasuk			= '$file'
			where id_suratmasuk = '$_GET[id]' ");
			
			if($ubah)
			{
				echo "<script>
						alert('Ubah Data Sukses');
						document.location='?halaman=arsip_surat';
					  </script>";
			}
			else
			{
				echo "<script>
						alert('Ubah Data GAGAL!!');
						document.location='?halaman=arsip_surat';
					  </script>";
			}
		}
		else
		{
			//perintah simpan data baru
			//simpan data
			$file = upload();
			$simpan = mysqli_query($koneksi, "INSERT INTO tb_suratmasuk 
											  VALUES (	'', 
											  '$_POST[nomor_suratmasuk]',
												'$_POST[tanggalsurat_suratmasuk]',
												'$_POST[tanggalmasuk_suratmasuk]',
												'$_POST[tanggal_entry]',
												'$_POST[perihal_suratmasuk]',
												'$_POST[tujuan_suratmasuk]',
												'$_POST[pengirim_suratmasuk]',
												'$file'
											  		  ) ");

			if($simpan)
			{
				echo "<script>
						alert('Simpan Data Sukses');
						document.location='?halaman=arsip_surat';
					  </script>";
			}else
			{
				echo "<script>
						alert('Simpan Data GAGAL!!');
						document.location='?halaman=arsip_surat';
					  </script>";
			}

		}


		
	}

	

?>


<div class="card mt-3">
  <div class="card-header bg-info text-white ">
    Form Data Surat Masuk
  </div>
  <div class="card-body">
    <form method="post" action="" enctype="multipart/form-data" >
	  <div class="form-group">
	    <label for="nomor_suratmasuk">No. Surat</label>
	    <input type="text" class="form-control" id="nomor_suratmasuk" name="nomor_suratmasuk" value="<?=@$vno_surat?>">
	  </div>
	  <div class="form-group">
	    <label for="tanggalsurat_suratmasuk">Tanggal Surat</label>
	    <input type="date" class="form-control" id="tanggalsurat_suratmasuk" name="tanggalsurat_suratmasuk" value="<?=@$vtanggal_surat?>">
	  </div>
	  <div class="form-group">
	    <label for="tanggalmasuk_suratmasuk">Tanggal Diterima</label>
	    <input type="date" class="form-control" id="tanggalmasuk_suratmasuk" name="tanggalmasuk_suratmasuk" value="<?=@$vtanggal_diterima?>">
	  </div>
	  <div class="form-group">
	    <label for="tanggal_entry">Tanggal Entry</label>
	    <input type="date" class="form-control" id="tanggal_entry" name="tanggal_entry" value="<?=@$vtanggal_entry?>">
	  </div>
	  <div class="form-group">
	    <label for="perihal_suratmasuk">Perihal</label>
	    <input type="text" class="form-control" id="perihal_suratmasuk" name="perihal_suratmasuk" value="<?=@$vperihal?>">
	  </div>
	  <div class="form-group">
	    <label for="tujuan_suratmasuk">Tujuan</label>
	    <input type="text" class="form-control" id="tujuan_suratmasuk" name="tujuan_suratmasuk" value="<?=@$vtujuan?>">
	  </div>
	  <div class="form-group">
	    <label for="pengirim_suratmasuk">Pengirim</label>
	    <input type="text" class="form-control" id="pengirim_suratmasuk" name="pengirim_suratmasuk" value="<?=@$vpengirim?>">
	  </div>


	  <div class="form-group">
	    <label for="file">Pilih File</label>
	    <input type="file" class="form-control" id="file" name="file" value="<?=@$vfile?>">
	  </div>

	  <button type="submit" name="bsimpan" class="btn btn-primary">Simpan</button>
	  <button type="reset" name="bbatal" class="btn btn-danger">Batal</button>
	</form>
  </div>
</div>