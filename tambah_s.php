<html>
	<head>
		<title>Tambah Data</title>
		
	</head>
	<body>
		<form action="proses_s.php" method="POST">
			<table>
			<tr>
				<td><label for='induk'>Induk</label></td>
				<td>:</td>
				<td><input type="text" name="induk" id="induk"></td>			
			</tr>
			<tr>
				<td><label for='nama'>Nama</label></td>
				<td>:</td>
				<td><input type="text" name="nama" id="nama"></td>			
			</tr>
					<tr>
				<td><label for='data'>Data</label></td>
				<td>:</td>
				<td><input type="text" name="data" id="data"></td>			
			</tr>
					<tr>
				<td><label for='password'>Password</label></td>
				<td>:</td>
				<td><input type="text" name="password" id="password"></td>			
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
