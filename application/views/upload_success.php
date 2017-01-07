<title>Aktarma Tamamlandı</title>
</head>
<body>
    <div class="w3-container">
    <center>
        <h2>Dosya yükleme başarılı</h2>
        <p>Veritabanı başarılı bir şekilde güncellendi.</p>
        <!-- <?php echo $error;?> -->

        <button class="w3-btn w3-round-xlarge w3-blue">
            <?php
                if ($this->authentication->logged_in()){
                    echo "<a href=\"".base_url()."index.php/welcome/arac_sorgu\">Araç Sorgula</a>";
                }
            ?>
        </button>

    </center>
    </div>

</body>
</html>
