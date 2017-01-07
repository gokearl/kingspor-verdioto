<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Araç Kayıt</title>
</head>
<body>
<center>
	<form class="w3-container" method="post" action="gonder">
		<div>
		<?php
		$this->load->helper("form");
		echo validation_errors();
		// echo form_open(base_url()."/welcome/gonder");
		// echo form_label("Dosya No: ", "dosyano");
		// $data = array("name" => "dosyano",
		// 			  "id" => "dosyano",
		// 			  "value" => "");
		// echo form_input($data);
		// echo "<br/><br/>";
		// echo form_label("Ad Soyad: ", "adsoyad");
		// $data = array("name" => "adsoyad",
		// 			  "id" => "adsoyad",
		// 			  "value" => "");
		// echo form_input($data);
		// echo "<br/><br/>";
		// echo form_label("TC No: ", "tcno");
		// $data = array("name" => "tcno",
		// 			  "id" => "tcno",
		// 			  "value" => "");
		// echo form_input($data);
		// echo "<br/><br/>";
		// echo form_label("Marka: ", "marka");
		// $data = array("name" => "marka",
		// 			  "id" => "marka",
		// 			  "value" => "");
		// echo form_input($data);
		// echo "<br/><br/>";
		// echo form_label("Tip: ", "tip");
		// $data = array("name" => "tip",
		// 			  "id" => "tip",
		// 			  "value" => "");
		// echo form_input($data);
		// echo "<br/><br/>";
		// echo form_label("Model: ", "model");
		// $data = array("name" => "model",
		// 			  "id" => "model",
		// 			  "value" => "");
		// echo form_input($data);
		// echo "<br/><br/>";
		// echo form_label("Telefon: ", "telefon");
		// $data = array("name" => "telefon",
		// 			  "id" => "telefon",
		// 			  "value" => "");
		// echo form_input($data);
		// echo "<br/><br/>";
		// echo form_label("Adres: ", "adres");
		// $data = array("name" => "adres",
		// 			  "id" => "adres",
		// 			  "value" => "");
		// echo form_input($data);
		// echo "<br/><br/>";
		// echo form_label("Adres 2: ", "adres2");
		// $data = array("name" => "adres2",
		// 			  "id" => "adres2",
		// 			  "value" => "");
		// echo form_input($data);
		// echo "<br/><br/>";
		// echo form_label("Adres 3: ", "adres3");
		// $data = array("name" => "adres3",
		// 			  "id" => "adres3",
		// 			  "value" => "");
		// echo form_input($data);
		// echo "<br/><br/>";
		// echo form_submit("submit", "Kaydet!");
		// echo form_close();
	?>
	<div id="center">
		<label for="musterino">Müşteri No:</label>
		<input type="text" name="musterino" value="" style="width:250px"/><br/><br/>
		<label for="dosyano">Dosya No:</label>
		<input type="text" name="dosyano" value=""/><br/><br/>
		<label for="icradairesi">İcra Dairesi:</label>
		<input type="text" name="icradairesi" value=""/><br/><br/>
		<label for="statu">Statü:</label>
		<input type="text" name="statu" value=""/><br/><br/>
		<label for="tcno">TC No:</label>
		<input type="text" name="tcno" value=""/><br/><br/>
		<label for="ad">Ad:</label>
		<input type="text" name="ad" value=""/><br/><br/>
		<label for="soyad">Soyad:</label>
		<input type="text" name="soyad" value=""/><br/><br/>
		<label for="marka">Araç Markası:</label>
		<input type="text" name="marka" value=""/><br/><br/>
		<label for="model">Araç Modeli:</label>
		<input type="text" name="model" value=""/><br/><br/>
		<label for="plaka">Plaka:</label>
		<input type="text" name="plaka" value=""/><br/><br/>
		<label for="tip">Araç Cinsi:</label>
		<input type="text" name="tip" value=""/><br/><br/>
		<label for="imza">E-İmza:</label>
		<input type="text" name="imza" value=""/><br/><br/>
		<label for="haciztarihi">Haciz Tarihi:</label>
		<input type="text" name="haciztarihi" value=""/><br/><br/>
		<label for="ililce">İl / İlçe:</label>
		<input type="text" name="ililce" value=""/><br/><br/>
		<label for="adres">Mernis Adresi:</label>
		<input type="text" name="adres" value=""/><br/><br/>
		<label for="adres2">Adres 2:</label>
		<input type="text" name="adres2" value=""/><br/><br/>
		<label for="telefon">Telefon:</label>
		<input type="text" name="telefon" value=""/><br/><br/>
		<input style="margin: 5px 0px;" type="submit" value="Kaydet"/>
		</div>
	</div>
	</form>
</center>
