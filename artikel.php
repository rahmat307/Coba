<div id="content">
<div id="margin">
<?php
	function readmore($teks,$tag='<!--more-->'){
		$cari=strpos($teks,$tag);
		return substr($teks,0,$cari);
	}
	
$artikel1="<h2>Pemimpin adalah Pemimpi</h2><p>Sumber daya alami yang paling langka adalah kepemimpinan. Bukan kepemimpinan yang memperindah dirinya sendiri 
				dengan segala kesibukan dan kedamaian melakukan segala sesuatu, namun dengan hal-hal yang akan dapat membuat orang melakukan sesuatu yang mereka 
				pikir mereka tidak dapat melakukan. Banyak orang menganggap kepemimpinan adalah talenta, tetapi talenta tanpa kerja keras akan menjadi tragedi 
				dimana kepemimpinan kita tidak berharga di mata pengikut kita.</p><!--more-->";
	$tampil_artikel1=readmore($artikel1)."<a href='index.php?page=pemimpin'>Read More</a>";
		
		
$artikel2="<h2>Kisah Ashabul Kahfi</h2><p>Kisah Ashabul Kahfi merupakan dua dari tiga kisah dalam surat al-Kahfi, sehingga digunakan sebagai nama surat dalam 
				al-Qur'an. Kisah Ashabul Kahfi  diperkirakan terjadi pada pertengahan abad ke-3 pada masa kekaisaran Diqyanius yang merasa dirinya Tuhan dan 
				memaksa rakyat untuk menyembah dirinya. Hal ini tentu bukan hal semata, melainkan karena banyak pelajaran (ibrah) yang dapat diambil dari kisah 
				tersebut.</p><!--more-->";
	$tampil_artikel2=readmore($artikel2)."<a href='index.php?page=kahfi'>Read More</a>";

echo $tampil_artikel1;
echo $tampil_artikel2;
?>

</div>
</div>