<div class="card mt-3">
  <div class="card-header bg-info text-white ">
    Data Surat Keluar
  </div>
  <div class="card-body">
  	<a href="?halaman=surat_keluar&hal=tambahdata" class="btn btn-info mb-3" >Tambah Data</a>
    <table class="table table-borderd table-hovered table-striped">
    	<tr>
    		<th>No</th>
    		<th>No Surat</th>
    		<th>Tanggal Surat</th>
    		<th>Tanggal Keluar</th>
			<th>Tanggal Entry</th>
    		<th>Perihal</th>
    		<th>Tujuan</th>
    		<th>File</th>
    		<th>Aksi</th>
    	</tr>
    	<?php
    		$tampil = mysqli_query($koneksi, "
    				  SELECT * FROM
    				  	tb_suratkeluar");
    		$no = 1;
    		while($data = mysqli_fetch_array($tampil)) :

    	?>
    	<tr>
    		<td><?=$no++?></td>
    		<td><?=$data['nomor_suratkeluar']?></td>
    		<td><?=$data['tanggalsurat_suratkeluar']?></td>
    		<td><?=$data['tanggalkeluar_suratkeluar']?></td>
    		<td><?=$data['tanggal_entry']?></td>
			<td><?=$data['perihal_suratkeluar']?></td>
    		<td><?=$data['tujuan_suratkeluar']?></td>
    		<td>
    			<?php
    				//uji apakah file nya ada atau tidak
    				if(empty($data['file_suratkeluar'])){
    					echo " - ";
    				}
					else{
    			?>
    				<a href="file/<?=$data['file_suratkeluar']?>" target="$_blank"> lihat file </a>
    			<?php
    				}
    			?>
    		</td>
    		<td>
    			<a href="?halaman=surat_keluar&hal=edit&id=<?=$data['id_suratkeluar']?>" class="btn btn-success" >Edit </a>
    			<a href="?halaman=surat_keluar&hal=hapus&id=<?=$data['id_suratkeluar']?>" class="btn btn-danger" 
    				onclick="return confirm('Apakah yakin ingin menghapus data ini?')" >Hapus </a>
    		</td>
    	</tr>
    <?php endwhile; ?>
    </table>
  </div>
</div>