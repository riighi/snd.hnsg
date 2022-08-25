<?php
    SESSION_START();
    require_once("conn.php");

    ini_set('display_errors', true);
    error_reporting(E_ALL|E_STRICT);

    date_default_timezone_set('America/Sao_Paulo');    
        
    if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){
        $data_atual = $_POST['input_data_refeicao'];
    }else {
        $data_atual = date('Y-m-d');
    }
    
    $query_data = "SELECT * FROM cardapio
    WHERE dt_refeicao = '$data_atual'";

    $select_data = pg_query($conn, $query_data);

    if($select_data){
        $query_almoco = "SELECT * FROM cardapio
        WHERE dt_refeicao = '$data_atual'
        AND tp_refeicao = 'almoco'
        order by 2,1 desc
        limit 1";
        $select_almoco = pg_query($conn, $query_almoco);
        $dados_almoco = pg_fetch_array($select_almoco);     
    }

    if($select_data){
    $query_janta = "SELECT * FROM cardapio
    WHERE dt_refeicao = '$data_atual'
    AND tp_refeicao ='janta'
    order by 2,1 desc
    limit 1";
    $select_janta = pg_query($conn, $query_janta);
    $dados_janta = pg_fetch_array($select_janta);      
    }

    pg_close($conn);
?>