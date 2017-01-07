<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Araçlar</title>
        <style media="screen">
            tr {
                color: white;
            }
            #message
            {
                color: red;
            }
        </style>
    </head>
    <body>
        <table class="w3-table w3-bordered w3-hoverable w3-small w3-responsive">
            <tr>
              <th>Marka</th>
              <th>Plaka</th>
              <th>İl/İlçe</th>
              <th>Müşteri No</th>
            </tr>
            <?php if (count($list)<1): ?>
                <div id="message" ><?php echo "Sonuç bulunamadı!";?></div>
            <?php endif; ?>
            <?php foreach ($list as $item): ?>
                <tr onclick="window.location.href = '<?php echo base_url()."index.php/welcome/details/".$item['id']; ?>'">
                <th><?php echo $item['marka'] ?></th>
                <th><?php echo $item['plaka'] ?></th>
                <th><?php echo $item['ilce'] ?></th>
                <th><?php echo $item['musterino'] ?></th>
                </tr>
            <?php endforeach; ?>

    </body>
</html>
