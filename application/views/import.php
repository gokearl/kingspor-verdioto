
<title>Excel'den Aktar</title>
</head>
<body>
    <div class="w3-container">
    <center>
        <h2>Yüklemek istediğiniz Excel dosyasını CSV formatında seçin.</h2>
        <p>Excel dosyası yüklemek için önce '.csv' formatında kaydetmeniz gerekmektedir. Dosya yükleme işlemi veritabanındaki tüm kayıtları siler ve yüklediğiniz dosyadaki kayıtları tutar.</p>
        <?php if($error != null) echo '<div id="message"'.$error['error'].'</div>';?>
        <?php echo form_open_multipart('welcome/upload');?>
        <input type="file" name="userfile" size="20" />

        <br /><br />

        <input type="submit" value="Yükle" />

        </form>

    </center>
    </div>

</body>
</html>
