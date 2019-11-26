<br>
<center><h2>E-Learning | Sekolah Tinggi Teknologi Bandung</h2></center><hr><br>
<table border="1" cellspacing="10" cellpadding="10">
<tr>
<th><button style="font-size: 15px"><a href="<?php echo base_url('Myadmin/index');?>">Beranda</a></button></th>
<th><button style="font-size: 15px"><a href="<?php echo base_url('Myadmin/perkuliahan');?>">Perkuliahan</a></button></th>
<th><button style="font-size: 15px"><a href="<?php echo base_url('Myadmin/krs');?>">Perubahan KRS</a></button></th>
</tr>
</table>
<table style="margin:50px auto; padding: 10px" border="5" cellpadding="10px">
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
					echo "<tr><td>".$no."</td>";
					echo "<td>".$tpl->str_kode_matkul."</td>";
					echo "<td>".$tpl->str_nama_matkul."</td>";
					echo "<td>".$tpl->int_sks."</td>";
					echo "<td>".$tpl->int_sks."</td></tr>";
					$no++;
				}
				 ?>
					</table>
				
			</tbody>
		</table>