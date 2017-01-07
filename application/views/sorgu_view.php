<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Araç Sorgu</title>
</head>
<body>
	<div id="main">
	<center>
		<h2>Araç Sorgula</h2>
		<form class="w3-container" method="post" action="search">
		<input type="text" class="w3-input" name="value" value=""/>
		<input type="hidden" id="hidden" name="criterion"/>
		<input type="submit" name="submit" value="Ara">
		</form>
		<div class="w3-dropdown-click w3-center">
		  <button id="drpdwn" onclick="dropDown()" class="w3-btn w3-blue">Sorgu Kriteri</button>
		  <div id="kriter" class="w3-dropdown-content w3-animate-zoom" style="background-color: inherit">
			  <input type="button" name="secim" value="İl / İlçe" onclick="secim('İl / İlçe','il_ilce')" style="width: 150px; height: 60px;">
			<input type="button" style="width: 150px; height: 60px;" name="secim" value="Müşteri No" onclick="secim('Müşteri No', 'musteri_no')">
			<input type="button" style="width: 150px; height: 60px;" name="secim" value="Dosya No" onclick="secim('Dosya No', 'dosya_no')">
		    <input type="button" style="width: 150px; height: 60px;" name="secim" value="İcra Dairesi" onclick="secim('İcra Dairesi', 'icra_dairesi')">
		    <input type="button" style="width: 150px; height: 60px;" name="secim" value="TC No" onclick="secim('TC No','tc_no')">
		    <input type="button" style="width: 150px; height: 60px;" name="secim" value="Ad" onclick="secim('Ad', 'ad')">
			<input type="button" style="width: 150px; height: 60px;" name="secim" value="Soyad" onclick="secim('Soyad', 'soyad')">
			<input type="button" style="width: 150px; height: 60px;" name="secim" value="Marka" onclick="secim('Marka','marka')">
			<input type="button" style="width: 150px; height: 60px;" name="secim" value="Model" onclick="secim('Model','model')">
			<input type="button" style="width: 150px; height: 60px;" name="secim" value="Statü" onclick="secim('Statü', 'statu')">
			<input type="button" name="secim" value="Cins" onclick="secim('Cins','cins')" style="width: 150px; height: 60px;">
			<input type="button" name="secim" value="Plaka" onclick="secim('Plaka','plaka')" style="width: 150px; height: 60px;">
			<input type="button" name="secim" value="İmza" onclick="secim('İmza','imza')" style="width: 150px; height: 60px;">
			<input type="button" name="secim" value="Haciz Tarihi" onclick="secim('Haciz Tarihi','haciz_tarihi')" style="width: 150px; height: 60px;">
			<input type="button" name="secim" value="Adres" onclick="secim('Adres','adres')" style="width: 150px; height: 60px;">
			<input type="button" name="secim" value="Adres 2" onclick="secim('Adres 2','adres2')" style="width: 150px; height: 60px;">
			<input type="button" name="secim" value="Telefon" onclick="secim('Telefon','telefon')" style="width: 150px; height: 60px;">
		  </div>
	  	</div>
		<!-- <label>First Name</label> -->
		<br/><br/>

	</center>
	</div>
	<script>
	function dropDown() {
	    var x = document.getElementById("kriter");
	    if (x.className.indexOf("w3-show") == -1) {
	        x.className += " w3-show";
	    } else {
	        x.className = x.className.replace(" w3-show", "");
	    }
	}

	function secim(label, field) {
		var x = document.getElementById("kriter");
		document.getElementById("hidden").value = field;
		document.getElementById("drpdwn").innerHTML = label;
		x.className = x.className.replace(" w3-show", "");
	}
	</script>
</body>
</html>
