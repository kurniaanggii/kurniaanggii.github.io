<div class="card mt-3">
  <div class="card-header bg-info text-white ">
    Data Surat Masuk
  </div>
  <div class="card-body">
  	<a href="?halaman=arsip_surat&hal=tambahdata" class="btn btn-info mb-3" >Tambah Data</a>
    <table class="table table-borderd table-hovered table-striped">
    	<tr>
    		<th>No</th>
    		<th>No Surat</th>
    		<th>Tanggal Surat</th>
    		<th>Tanggal Diterima</th>
			<th>Tanggal Entry</th>
    		<th>Perihal</th>
    		<th>Tujuan</th>
    		<th>Pengirim</th>
    		<th>File</th>
    		<th>Aksi</th>
    	</tr>
    	<?php
    		$tampil = mysqli_query($koneksi, "
    				  SELECT * FROM
    				  	tb_suratmasuk");
    		$no = 1;
    		while($data = mysqli_fetch_array($tampil)) :

    	?>
    	<tr>
    		<td><?=$no++?></td>
    		<td><?=$data['nomor_suratmasuk']?></td>
    		<td><?=$data['tanggalsurat_suratmasuk']?></td>
    		<td><?=$data['tanggalmasuk_suratmasuk']?></td>
    		<td><?=$data['tanggal_entry']?></td>
			<td><?=$data['perihal_suratmasuk']?></td>
    		<td><?=$data['tujuan_suratmasuk']?></td>
    		<td><?=$data['pengirim_suratmasuk']?></td>
    		<td>
    			<?php
    				//uji apakah file nya ada atau tidak
    				if(empty($data['file_suratmasuk'])){
    					echo " - ";
    				}
					else{
    			?>
    				<a href="file/<?=$data['file_suratmasuk']?>" target="$_blank"> lihat file </a>
    			<?php
    				}
    			?>
    		</td>
    		<td>
    			<a href="?halaman=arsip_surat&hal=edit&id=<?=$data['id_suratmasuk']?>" class="btn btn-success" >Edit </a>
    			<a href="?halaman=arsip_surat&hal=hapus&id=<?=$data['id_suratmasuk']?>" class="btn btn-danger" 
    				onclick="return confirm('Apakah yakin ingin menghapus data ini?')" >Hapus </a>
    		</td>
    	</tr>
    <?php endwhile; ?>
    </table>
  </div>
</div>