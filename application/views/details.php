<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Detaylar</title>
</head>
<body>
	<center>
		 <form class="w3-container" method="post" action="gonder">
	 		<div>
	 		<?php
	 		$this->load->helper("form");
	 		echo validation_errors();
			?>
			<label for="musterino">Müşteri No:</label>
			<input type="text" name="musterino" value="<?php echo set_value('musterino', $arac->getMusteriNo()); ?>" disabled/><br/><br/>
			<label for="dosyano">Dosya No:</label>
			<input type="text" name="dosyano" value="<?php echo set_value('dosyano', $arac->getDosyaNo()); ?>" disabled/><br/><br/>
			<label for="icradairesi">İcra Dairesi:</label>
			<input type="text" name="icradairesi" value="<?php echo set_value('icradairesi', $arac->getIcraDairesi()); ?>" disabled/><br/><br/>
			<label for="statu">Statü:</label>
			<input type="text" name="statu" value="<?php echo set_value('statu', $arac->getStatu()); ?>" disabled/><br/><br/>
			<label for="tcno">TC No:</label>
			<input type="text" name="tcno" value="<?php echo set_value('tcno', $arac->getTcNo()); ?>" disabled/><br/><br/>
			<label for="ad">Ad:</label>
			<input type="text" name="ad" value="<?php echo set_value('ad', $arac->getAd()); ?>" disabled/><br/><br/>
			<label for="soyad">Soyad:</label>
			<input type="text" name="soyad" value="<?php echo set_value('soyad', $arac->getSoyad()); ?>" disabled/><br/><br/>
			<label for="marka">Araç Markası:</label>
			<input type="text" name="marka" value="<?php echo set_value('marka', $arac->getMarka()); ?>" disabled/><br/><br/>
			<label for="model">Araç Modeli:</label>
			<input type="text" name="model" value="<?php echo set_value('model', $arac->getModel()); ?>" disabled/><br/><br/>
			<label for="plaka">Plaka:</label>
			<input type="text" name="plaka" value="<?php echo set_value('plaka', $arac->getPlaka()); ?>" disabled/><br/><br/>
			<label for="tip">Araç Cinsi:</label>
			<input type="text" name="tip" value="<?php echo set_value('tip', $arac->getCins()); ?>" disabled/><br/><br/>
			<label for="imza">E-İmza:</label>
			<input type="text" name="imza" value="<?php echo set_value('imza', $arac->getImza()); ?>" disabled/><br/><br/>
			<label for="haciztarihi">Haciz Tarihi:</label>
			<input type="text" name="haciztarihi" value="<?php echo set_value('haciztarihi', $arac->getHacizTarihi()); ?>" disabled/><br/><br/>
			<label for="ililce">İl / İlçe:</label>
			<input type="text" name="ililce" value="<?php echo set_value('ililce', $arac->getIlIlce()); ?>" disabled/><br/><br/>
			<label for="adres">Mernis Adresi:</label>
			<input type="text" name="adres" value="<?php echo set_value('adres', $arac->getAdres()); ?>" disabled/><br/><br/>
			<label for="adres2">Adres 2:</label>
			<input type="text" name="adres2" value="<?php echo set_value('adres2', $arac->getAdres2()); ?>" disabled/><br/><br/>
			<label for="telefon">Telefon:</label>
			<input type="text" name="telefon" value="<?php echo set_value('telefon', $arac->getTelefon()); ?>" disabled/><br/><br/>
			<button class="w3-btn w3-round-xlarge w3-blue">
	            <?php
	                if ($this->authentication->logged_in()){
	                    echo "<a href=\"".base_url()."index.php/welcome/arac_sorgu\">Yeni Sorgu</a>";
	                }
	            ?>
	        </button>
	 	</div>
	 	</form>
	</center>
</body>
</html>
