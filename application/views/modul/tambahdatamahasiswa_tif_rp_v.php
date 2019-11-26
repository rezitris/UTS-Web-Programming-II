<body bgcolor="#FFEBCD">
<br>
<center><h2><table border="1" cellpadding="10" bgcolor="white"><th> E-Learning | Sekolah Tinggi Teknologi Bandung | Admin</th></table></h2></center><br><hr><br>
<table border="1" cellspacing="10" cellpadding="10">
<tr>
<th bgcolor="#800000"><button style="font-size: 15px; background-color: white;"><a href="<?php echo base_url('Myadmin/index');?>">Beranda</a></button></th>
<th bgcolor="#800000"><button style="font-size: 15px; background-color: white;"><a href="<?php echo base_url('Myadmin/perkuliahan');?>">Mata Kuliah</a></button></th>
<th bgcolor="#800000"><button style="font-size: 15px; background-color: white;"><a href="<?php echo base_url('Myadmin/datamahasiswa');?>">Data Mahasiswa</a></button></th>
</tr></table>

<h2 align="center">Tambah Data Mahasiswa</h2>
<h3 align="center">TIF RP Semester V</h3>

<table style="margin:20px auto; padding: 1px" border="10" cellpadding="20px">
	<ul>
		<td>
			<form action="<?php echo base_url('Myadmin/aksi_tambahdata_tif_rp_v')?>" method="POST" accept-charset="utf-8">

				NPM  :  <br><br><input type="text" name="npm"  placeholder="Masukkan NPM" required><br></input><br>
				Nama Mahasiswa :  <br><br><input type="text" name="nama"  placeholder="Masukkan Nama" required><br></input><br>
				<button style="padding: 15px; height: 50px;"  type="submit" value="Submit" >Simpan Data</button>
			</form>
		</table><br><br><br><br>
