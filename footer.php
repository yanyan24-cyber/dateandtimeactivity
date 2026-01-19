<footer>
        <div class="time-zones">
            <div class="tz-box">
                <span class="tz-label">TOKYO</span>
                <span class="tz-time">
                    <?php 
                        date_default_timezone_set('Asia/Tokyo');
                        echo date('H:i');
                    ?>
                </span>
            </div>

            <div class="tz-box">
                <span class="tz-label">LONDON</span>
                <span class="tz-time">
                    <?php 
                        date_default_timezone_set('Europe/London');
                        echo date('H:i');
                    ?>
                </span>
            </div>

            <div class="tz-box">
                <span class="tz-label">NEW YORK</span>
                <span class="tz-time">
                    <?php 
                        date_default_timezone_set('America/New_York');
                        echo date('H:i');
                    ?>
                </span>
            </div>
        </div>

        <div class="creator-tag">
            Card Master: <span class="creator-name">Iyan Aliman</span>
        </div>
    </footer>

</body>
</html>