//Dilarang Klik Kanan
var pesan="Maaf! Dilarang Klik Kanan Bos!";

	function clickIE4(){
		if (event.button==2){
			alert(pesan);
			return false;
		}
	}

	function clickNS4(e){
		if (document.layers||document.getElementById&&!document.all){
			if (e.which==2||e.which==3){
				alert(pesan);
				return false;
			}
		}
	}
	
if (document.layers){
	document.captureEvents(Event.MOUSEDOWN);
	document.onmousedown=clickNS4;
}

else if (document.all&&!document.getElementById){
	document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("alert(pesan);return false")
//Akhir Larangan Klik Kanan

//Validasi Email
function validasiEmail()
{
var x=document.forms["myForm"]["email"].value
var at=x.indexOf("@");
var dot=x.lastIndexOf(".");
if (at<1 || dot<at+2 || dot+2>=x.length)
  {
  alert("Maaf! Email harus diisi dengan benar bro!");
  return false;
  }
}
//Akhir Validasi Email

//Tanggal dan Jam 
function jam(){
	var hari = new Array ("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
	var bulan = new Array ("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","November","Desember");

	var tanggal = new Date();
	var hri = hari[tanggal.getDay()];
	var tgl = tanggal.getDate();
	var bln	= bulan[tanggal.getMonth()];
	var thn = tanggal.getFullYear();

	document.getElementById('date').innerHTML= hri + "," +" "+ tgl +" "+ bln +" "+ thn;

    var now= new Date();
    var h=now.getHours();
    var m=now.getMinutes();
    var s=now.getSeconds();
    
	m=detik(m);
    s=detik(s);
    document.getElementById('jam').innerHTML=h+":"+m+":"+s;
    t=setTimeout(function(){jam()},500);
}
 
function detik(i){
    if (i<10){
		i="0" + i;
    }
return i;
}
//akhir Tanggal dan Jam


