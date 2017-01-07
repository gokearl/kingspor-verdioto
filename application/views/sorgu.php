<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Araç Sorgu</title>
</head>
<body>
	<center>
		<h2>Araç Sorgula</h2>
		<div class="w3-dropdown-click w3-left">
		  <button onclick="dropDown()" class="w3-btn w3-blue">Sorgu Kriteri</button>
		  <div id="kriter" class="w3-dropdown-content w3-animate-zoom">
		    <input type="button" name="secim" value="Dosya No" onclick="alert('Hello World!')">
		    <input type="button" name="secim" value="TC No" onclick="alert('Hello World!')">
		    <input type="button" name="secim" value="Ad Soyad" onclick="alert('Hello World!')">
		  </div>
		</div>
	</center>
	<script>
	function dropDown() {
	    var x = document.getElementById("kriter");
	    if (x.className.indexOf("w3-show") == -1) {
	        x.className += " w3-show";
	    } else {
	        x.className = x.className.replace(" w3-show", "");
	    }
	}
	</script>
</body>
</html>
