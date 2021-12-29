<div style="text-align: center;"><button><a href="<?php echo base_url(); ?>kalendarium/index">Új kalendárium</a></button></div>

<?php

$szamok = array();
$sorsoltSzam;

while (count($szamok) != 24) {
    $sorsoltSzam = rand(0, count($tetelek)-1);
    if (in_array($sorsoltSzam, $szamok) == false) {
        array_push($szamok, $sorsoltSzam);
    }
}

?>

<div>
    <h1>Adventi kalendárium</h1>
    <div class="grid-container">
    <?php
    for ($x = 0; $x < 24; $x++) {?>
    <button onclick="this.innerHTML = '<?php echo $tetelek[$szamok[$x]]['tartalom']; ?>'"><?php echo $x+1; ?></button><?php } ?> 
    </div>
</div>








