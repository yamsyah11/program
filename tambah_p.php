<html>
	<head>
		<title>Tambah Data</title>
		
	</head>
	<body>
		<form action="proses_p.php" method="POST">
			<table>
			<tr>
				<td><label for='nama'>Nama</label></td>
				<td>:</td>
				<td>
		<select name="nama" id="nama">
		<option value="webdesign">Web design</option>
		<option value="databases">Databases</option>
		<option value="laravel">Laravel</option>
		<option value="hacking">Hacking</option>
		</select>
				</td>			
			</tr>
			<tr>
				<td><label for='pengajar'>Pengajar</label></td>
				<td>:</td>
				<td><input type="text" name="pengajar" id="pengajar"></td>			
			</tr>
		<td><label for='status'>Status</label></td>
		  <td>:</td>
		  <td><input type='radio' name="status" id="status" value="1">aktif</td>
		  <td><input type='radio' name="status"id="status" value="0">tidak aktif</td>
		</td>				
		</tr>
		<tr>
			<td></td><td></td><td><input type='submit' value='submit'></td>
		</tr>
</table>
		</form>
	</body>
</html>


