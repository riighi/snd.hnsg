<?php
    SESSION_START();
    require_once("conn.php");
        
    date_default_timezone_set('America/Sao_Paulo');
    $data_atual = date('d/m/Y', strtotime('-1 days'));

    $query_almoco = "SELECT * FROM cardapio
    WHERE dt_refeicao = '$data_atual'
    AND tp_refeicao = 'almoco'
    order by 2,1 desc
    limit 1";

    $query_janta = "SELECT * FROM cardapio
    WHERE dt_refeicao = '$data_atual'
    AND tp_refeicao ='janta'
    order by 2,1 desc
    limit 1";

    $select_almoco = pg_query($conn, $query_almoco);
    $select_janta = pg_query($conn, $query_janta);
    $dados_almoco = pg_fetch_array($select_almoco);
    $dados_janta = pg_fetch_array($select_janta);
    
    pg_close($conn);
?>