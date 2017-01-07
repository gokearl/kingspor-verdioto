<br/>
<div class="parent">
    <div id="footer">
        <button class="w3-btn-block w3-round w3-blue">
            <?php
                if ($this->authentication->logged_in()){
                    echo "<a href=\"".base_url()."index.php/auth/logout\">Oturumu Kapat</a>";
                }
            ?>
        </button>
    </div>
</div>
</html>
