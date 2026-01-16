<?php
$NPostagens = 0;
while ($NPostagens < 2) {
    $NPostagens++;
?>
    <div class="w3-card-4 w3-margin w3-white">
        <img src="<?php echo $Bloco_Postagens[$NPostagens]["img"]; ?>" alt="Nature" style="width:100%">
        <div class="w3-container">
            <h3><b><?php echo $NPostagens . " " . $Bloco_Postagens[$NPostagens]["titulo"]; ?></b></h3>
            <h5><?php echo $Bloco_Postagens[$NPostagens]["sTitulo"] . " , <span class='w3-opacity'>" . $Bloco_Postagens[$NPostagens]["data"] . "</span>"; ?></h5>
        </div>

        <div class="w3-container">
            <p><?php echo $Bloco_Postagens[$NPostagens]["texto"]; ?></p>
            <div class="w3-row">
                <div class="w3-col" style="width:80%">
                    <p><button class="w3-button w3-padding-large w3-white w3-border"><b>Leia mais... »</b></button></p>
                </div>
                <div class="w3-col w3-hide-small" style="width:20%">
                    <p><span class="w3-padding-large w3-right"><b>Comments </b> <span class="w3-tag"><?php echo $Bloco_Postagens[$NPostagens]["nComent"]; ?></span></span></p>
                </div>
            </div>
        </div>
    </div>
    <hr>
<?php
}
?>