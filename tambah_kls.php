<html>
	<head>
		<title>Tambah Data</title>
		
	</head>
	<body>
		<form action="proses_kls.php" method="POST">
			<table>
			<tr>
				<td><label for='nama'>Nama kelas</label></td>
				<td>:</td>
				<td>	
		<select name="nama" id="nama">
		<option value="1a">1a</option>
		<option value="1b">1b</option>
		<option value="2a">2a</option>
		<option value="2b">2b</option>
   	<option value="3a">3a</option>
		<option value="3b">3b</option>
		<option value="3c">3c</option>
		<option value="3d">3d</option>
		</select>
		</td>			
		</tr>
		<tr>
		<td><label for='status'>Status</label></td>
		  <td>:</td>
		  <td><input type='radio' name="status"id="status" value="1">aktif</td>
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

