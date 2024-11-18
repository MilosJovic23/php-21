
<?php



    require_once "DomaciModeli/Riba.php";


    $mladica = new Riba();

    $mladica->krljust = true;
    $mladica->vrstaVode = "reka";
    $mladica->tezina = 23;


    echo $mladica->tezina.$mladica->vrstaVode.$mladica->krljust;



