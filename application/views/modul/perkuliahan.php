<body bgcolor="#FFEBCD">
<br>
<center><h2><table border="1" cellpadding="10" bgcolor="white"><th> E-Learning | Sekolah Tinggi Teknologi Bandung | Admin</th></table></h2></center><br><hr><br>
<table border="1" cellspacing="10" cellpadding="10">
<tr>
<th bgcolor="#800000"><button style="font-size: 15px; background-color: white;"><a href="<?php echo base_url('Myadmin/index');?>">Beranda</a></button></th>
<th bgcolor="#800000"><button style="font-size: 15px; background-color: white;"><a href="<?php echo base_url('Myadmin/perkuliahan');?>">Mata Kuliah</a></button></th>
<th bgcolor="#800000"><button style="font-size: 15px; background-color: white;"><a href="<?php echo base_url('Myadmin/datamahasiswa');?>">Data Mahasiswa</a></button></th>
</tr>
</table>

<table style="margin:50px auto; padding: 2px" border="10" cellpadding="10px">
			<thead>
				<tr>
					<th bgcolor="yellow">No</th>
					<th bgcolor="yellow" >Kode Mata Kuliah</th>
					<th bgcolor="yellow">Nama Mata Kuliah</th>
					<th bgcolor="yellow">SKS</th>
					<th bgcolor="yellow">Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no=1;
				foreach ($tampil as $tpl) {
					echo "<tr><td bgcolor='white'>".$no."</td>";
					echo "<td bgcolor='white'>".$tpl->str_kode_matkul."</td>";
					echo "<td bgcolor='white'>".$tpl->str_nama_matkul."</td>";
					echo "<td bgcolor='white'><center>".$tpl->int_sks."</center></td>";
					echo "<td bgcolor='white'>Hapus</td></tr>";
					$no++;
				}
				 ?>
				 <td bgcolor='white'><button><a href="<?php echo base_url('Myadmin/tambahdataperkuliahan');?>">Tambah Data</a></button></td>
					</table>
				
			</tbody>
		</table>
