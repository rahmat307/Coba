<div id="content">
<div id="margin">
<body>

<form name="myForm" onSubmit="return validasiEmail()" method="POST">
	<fieldset>
    <legend><h1>Buku Tamu</h1></legend>
   	<table border="0" width="50%">
    	<tr>
    		<td>Nama</td>
    		<td><input type="text" name="nama"/></td>
        </tr>
        <tr>
    		<td>Email</td>
        	<td><input type="text" name="email" /></td>
    	</tr>
        <tr>
    		<td>Jenis Kelamin</td>
        	<td><input type="radio" name="jk" value="Pria" />
				 <label for="jk" >Pria</label>
			 	 <input type="radio" name="jk" value="Wanita" />
				 <label for="jk">Wanita</label></td>
        </tr>
        <tr>
    		<td>Status</td>
        	<td><select name="status">
    			 <option value ="">--Pilih Status--</option>
 				 <option value ="Pelajar">Pelajar</option>
  				 <option value ="Mahasiswa">Mahasiswa</option>
  				 <option value ="Guru">Guru</option>
  				 <option value ="Dosen">Dosen</option>
				 </select></td>
    	</tr>
        <tr>
    		<td>Komentar</td> 
        	<td><textarea rows="2" cols="20" name="komentar"></textarea></td>
        </tr>
        <tr>
        	<td></td>
    		<td><input type="Submit" name="Submit" value="Kirim" />
    			<input type="Reset" name="Reset" value="Batal" /></td>
        </tr>
    </table>
  	</fieldset>
	</form>

	<fieldset>
    <legend><b>Tanggapan Anda tentang Situs Saya</b></legend>
	<?php
		$nama   		= $_POST['nama'];
        $jk				= $_POST['jk'];
        $status		    = $_POST['status'];
        $email          = $_POST['email'];
		$tipe 	        = $_POST['tipe'];
        $komentar       = $_POST['komentar'];
                
			echo "<pre>";
			echo "Nama          : $nama <br>";
            echo "Email         : $email <br>";
			echo "Jenis Kelamin : $jk <br>";
            echo "Status        : $status <br>";
            echo "Komentar      : $komentar";
			echo "</pre>";
	?>

</fieldset><br><br>
</body>

</div>
</div>
