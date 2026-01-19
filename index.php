<!--Iyan Lucky Q. Aliman-->
<!--WD 202-->
<?php
date_default_timezone_set('Asia/Manila');

$national_holidays = [
    
    ['name' => 'New Year\'s Day',      'date' => '2026-01-01', 'type' => 'Regular', 'img' => 'https://i.imgur.com/HBcalZR.png'],
    
    ['name' => 'Chinese New Year',    'date' => '2026-02-17', 'type' => 'Special', 'img' => 'https://i.imgur.com/emb0RQg.png'],
    
    ['name' => 'Araw ng Kagitingan',  'date' => '2026-04-09', 'type' => 'Regular', 'img' => 'https://i.imgur.com/APfDBEb.png'],
    ['name' => 'Labor Day',           'date' => '2026-05-01', 'type' => 'Regular', 'img' => 'https://i.imgur.com/GdkklNa.png'],
    ['name' => 'Independence Day',    'date' => '2026-06-12', 'type' => 'Regular', 'img' => 'https://i.imgur.com/hV00hU7.png'],
    ['name' => 'National Heroes Day', 'date' => '2026-08-31', 'type' => 'Regular', 'img' => 'https://i.imgur.com/IidYh0A.png'],
    ['name' => 'All Saints\' Day',    'date' => '2026-11-01', 'type' => 'Special', 'img' => 'https://i.imgur.com/WOZsoan.png'],
    ['name' => 'Christmas Day',       'date' => '2026-12-25', 'type' => 'Regular', 'img' => 'https://i.imgur.com/fy2F5wE.png'],
];

$local_holidays = [
    ['name' => 'La Naval Fiesta',     'date' => '2026-10-11', 'type' => 'Local', 'img' => 'https://i.imgur.com/SYntjrZ.png'],
    ['name' => 'Pampanga Day',        'date' => '2026-12-11', 'type' => 'Local', 'img' => 'https://i.imgur.com/ROCT30f.png'],
    ['name' => 'Sisig Festival',      'date' => '2026-04-25', 'type' => 'Local', 'img' => 'https://i.imgur.com/5Q4RFVc.png'],
];

include 'header.php';
?>

<h2>National Holidays</h2>
<div class="container">
    <?php foreach ($national_holidays as $holiday): 
        $timestamp = strtotime($holiday['date']);
        $dayName = date('l', $timestamp);
        $hpDate = date('M d', $timestamp);
        
        
        $cssClass = strtolower($holiday['type']); 
    ?>
        <div class="poke-card <?php echo $cssClass; ?>">
            <div class="card-header">
                <span class="card-name"><?php echo $holiday['name']; ?></span>
                <span class="card-hp"><span class="hp-label">HP</span><?php echo $hpDate; ?></span>
            </div>

            <div class="img-frame">
                <img src="<?php echo $holiday['img']; ?>" alt="Pokemon Image">
            </div>

            <div class="mid-bar">
                NO. 2026 <?php echo $holiday['type']; ?> Pokemon HT: 24h WT: 1 Day
            </div>

            <div class="move-set">
                <div class="move-row">
                    <span class="move-name"><?php echo $dayName; ?> Rest</span>
                    <span class="move-damage">100%</span>
                </div>
                <div class="move-desc">
                    The user skips work or school. If the holiday type is Regular, the user receives double pay.
                </div>
            </div>

            <div class="card-footer">
                <div class="footer-item">weakness <span>Traffic x2</span></div>
                <div class="footer-item">resistance <span>Stress -20</span></div>
                <div class="footer-item">retreat <span>Free</span></div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<h2>Angeles City / Local Holidays</h2>
<div class="container">
    <?php foreach ($local_holidays as $holiday): 
        $timestamp = strtotime($holiday['date']);
        $dayName = date('l', $timestamp);
        $hpDate = date('M d', $timestamp);
    ?>
        <div class="poke-card special">
            <div class="card-header">
                <span class="card-name"><?php echo $holiday['name']; ?></span>
                <span class="card-hp"><span class="hp-label">HP</span><?php echo $hpDate; ?></span>
            </div>

            <div class="img-frame">
                <img src="<?php echo $holiday['img']; ?>" alt="Pokemon Image">
            </div>

            <div class="mid-bar">
                NO. 2026 Angeles City Pokemon HT: 24h WT: Local
            </div>

            <div class="move-set">
                <div class="move-row">
                    <span class="move-name"><?php echo $dayName; ?> Fiesta</span>
                    <span class="move-damage">50%</span>
                </div>
                <div class="move-desc">
                    Celebrated specifically in Angeles City or Pampanga. 
                </div>
            </div>

            <div class="card-footer">
                <div class="footer-item">weakness <span>Heat x2</span></div>
                <div class="footer-item">resistance <span>Hunger -50</span></div>
                <div class="footer-item">retreat <span>Jeep</span></div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php include 'footer.php'; ?>