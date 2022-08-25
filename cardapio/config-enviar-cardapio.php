<?php
    SESSION_START();
    require_once("conn.php");    

    $tp_refeicao = filter_input(INPUT_POST, 'tp_cardapio');
    $dt_refeicao = filter_input(INPUT_POST, 'dt_refeicao');
    $salada_um = filter_input(INPUT_POST, 'salada_um');
    $salada_dois = filter_input(INPUT_POST, 'salada_dois');
    $salada_tres = filter_input(INPUT_POST, 'salada_tres');
    $comida_um = filter_input(INPUT_POST, 'comida_um');
    $comida_dois = filter_input(INPUT_POST, 'comida_dois');
    $guarnicao = filter_input(INPUT_POST, 'guarnicao');
    $carne = filter_input(INPUT_POST, 'carne');
    $sopa = filter_input(INPUT_POST, 'sopa');
    $sobremesa = filter_input(INPUT_POST, 'sobremesa');

    $insert_cardapio = "INSERT INTO cardapio (dt_inclusao, hr_inclusao, tp_refeicao, dt_refeicao, salada_um, salada_dois, salada_tres, comida_um, comida_dois, carne, guarnicao, sopa, sobremesa) VALUES ((SELECT current_date FROM NOW()), (SELECT current_time FROM NOW()), '$tp_refeicao', '$dt_refeicao', '$salada_um', '$salada_dois', '$salada_tres', '$comida_um', '$comida_dois', '$carne', '$guarnicao', '$sopa', '$sobremesa')";

    $insertDb = pg_query($conn, $insert_cardapio);
    if($insertDb){
        header("Location: enviar-cardapio.php");
    }
    
    pg_close($conn);
?>