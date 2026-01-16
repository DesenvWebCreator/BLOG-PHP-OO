<div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
        <h4>Categorias</h4>
    </div>
    <div class="w3-container w3-white">
        <p>
            <?php
            echo Exibe_Categoria("Todas", true);
            echo Exibe_Categoria("Viagens", false);
            echo Exibe_Categoria("Esportes", false);
            echo Exibe_Categoria("Política", false);
            echo Exibe_Categoria("Família", false);
            echo Exibe_Categoria("Games", false);
            ?>
        </p>
    </div>
</div>