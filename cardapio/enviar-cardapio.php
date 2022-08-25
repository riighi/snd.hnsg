<?php
    SESSION_START();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="shortcut icon"
            href="../img/ico/favicon.ico"
            type="image/x-icon"
        />
        <link rel="stylesheet" href="../css/enviar-cardapio.css">
        <title>
            Criação de Cardápio - Hospital Nossa Senhora das Graças
        </title>
    </head>
    <body>
        <div class="container">
            <form action="config-enviar-cardapio.php" method="post" class="form-cardapio">
                
            <div class="header-container">
                <img src="../img/logo/logotipoTopo300x150.png" id="logo-vertical-hnsg" class="header-logo" alt="Logo HNSG">
                <h1 class="header-title">Criação de Cardápio</h1>
            </div>

                <div class="opcao-cardapio-container">
                    <div class="span_tp_cardapio">
                        <input type="radio" name="tp_cardapio" class="tp_cardapio" value="almoco" required></input><p class="p_tp_cardapio">Almoço</p>
                        <input type="radio" name="tp_cardapio" class="tp_cardapio" value="janta" required></input><p class="p_tp_cardapio">Janta</p>
                    </div>
                    
                    <div class="span-dt-cardapio">
                        <input type="date" name="dt_refeicao" id="opcao" class="opcao-data" required>
                        <span class="title-dt-refeicao">
                            Informe a data da refeição
                        </span>
                    </div>
                    <input
                        type="text"
                        name="salada_um"
                        id="opcao"
                        maxlength="100"
                        placeholder="Informe a 1ª Opção de Salada"
                        required
                    />
                    <input
                        type="text"
                        name="salada_dois"
                        id="opcao"
                        maxlength="100"
                        placeholder="Informe a 2ª Opção de Salada"
                        required
                    />
                    <input
                        type="text"
                        name="salada_tres"
                        id="opcao"
                        maxlength="100"
                        placeholder="Informe a 3ª Opção de Salada"
                    />
                    <input
                        type="text"
                        name="comida_um"
                        id="opcao"
                        maxlength="100"
                        placeholder="Informe a 1ª Opção de Comida"
                        required
                    />
                    <input
                        type="text"
                        name="comida_dois"
                        id="opcao"
                        maxlength="100"
                        placeholder="Informe a 2ª Opção de Comida"
                        required
                    />
                    <input
                        type="text"
                        name="carne"
                        id="opcao"
                        maxlength="100"
                        placeholder="Informe a Carne"
                    />
                    <input
                        type="text"
                        name="guarnicao"
                        id="opcao"
                        maxlength="100"
                        placeholder="Informe a Guarnição"
                    />
                    <input
                        type="text"
                        name="sopa"
                        id="opcao"
                        maxlength="100"
                        placeholder="Informe a Sopa"
                        required
                    />
                    <input
                        type="text"
                        name="sobremesa"
                        id="opcao"
                        maxlength="100"
                        placeholder="Informe a Sobremesa"
                    />                    
                    <div class="botoes">
                        <button type="submit" class="btn-form-cardapio">
                            Enviar Cardápio
                        </button>
                        
                        <a href="http://intranet.hnsg.local/snd.hnsg/cardapio/cardapio.php" target="_blank" class="btn-visualizar-cardapio">
                            Visualizar Cardápio
                        </a>
                    </div>

                    <span class ="span-resultado-envio"></span>
                </div>

            </form>
        </div>
    </body>
</html>
