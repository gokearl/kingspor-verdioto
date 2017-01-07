<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title></title>
	<style media="screen">
		h2 {
			text-align: center;
		}
	</style>
</head>
<body>
	<center>
		<div class="w3-container w3-center">
		<?php echo "<br/>" ?>
		<ul class="w3-navbar w3-border w3-blue">
			<li class="w3-navitem"><h2><a href="<?php echo base_url(); ?>index.php/welcome/arac_sorgu">Araç Sorgu</a></h2></li>
		</ul><br/>
		<ul class="w3-navbar w3-border w3-blue">
			<li class="w3-navitem"><h2><a href="<?php echo base_url(); ?>index.php/welcome/arac_kayit">Yeni Kayıt</a></h2></li>
		</ul><br/>
		<ul class="w3-navbar w3-border w3-blue">
			<li class="w3-navitem"><h2><a href="<?php echo base_url(); ?>index.php/welcome/excel_import">Excel'den Aktar</a></h2></li>
		</ul>
			<!-- <button class="w3-btn w3-xlarge w3-blue"><a href="<?php echo base_url(); ?>index.php/welcome/arac_kayit">Yeni Kayıt</a></button>
			<br/><br/>
			<div class="w3-dropdown-click w3-left">
			  <button onclick="dropDown()" class="w3-btn w3-blue w3-xlarge">Araç Sorgu</button>
			  <div id="kriter" class="w3-dropdown-content w3-animate-zoom">
				<input type="submit" name="dosyano" value="Dosya No">
				<input type="submit" name="tcno" value="TC No">
				<input type="submit" name="adsoyad" value="Ad Soyad">
			  </div>
			</div> -->
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
