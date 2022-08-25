<?php
    SESSION_START();
    require("conn.php");

    $manha = filter_input(INPUT_POST, 'option-breakfest');
    $almoco = filter_input(INPUT_POST, 'option-lunch');
    $tarde = filter_input(INPUT_POST, 'option-cb');
    $janta = filter_input(INPUT_POST, 'option-dinner');
    $comentario = filter_input(INPUT_POST, 'option-message');

    $insert = "INSERT INTO refeicoes (dt, hora, manha, almoco, tarde, janta, comentarios) 
    VALUES ((SELECT current_date FROM NOW()), (SELECT current_time FROM NOW()), '$manha', '$almoco', '$tarde', '$janta', '$comentario')";

    $result = pg_query($conn, $insert);
        if (!$result){	
            header("Location: index.php");
        }else{	
            header("Location: https://www.canva.com/design/DAFDrcGFLiw/LUXr_yrm1OtPoPMbcnt8ZA/view?utm_content=DAFDrcGFLiw&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink");
        }

?>