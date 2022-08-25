<?php    
    require("consulta-cardapio.php");
    setlocale(LC_ALL, 'pt_BR');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="../img/ico/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../css/cardapio.css">
        <script src="../js/cardapio.js"></script>
        <title>
            Cardápio de <?php date_default_timezone_set('America/Sao_Paulo'); $timestamp = strtotime($data_atual); echo date('d/m/Y', $timestamp);?> - Hospital Nossa Senhora das Graças
        </title>
    </head>
    <body>
        <div class="container">   
            <div class="container-header">
                <img src="../img/logo/logotipoTopo300x150.png" id="logo-vertical-hnsg" class="header-logo" alt="Logo HNSG">                            
                <!-- <img src="../img/logo/teste.gif" id="logo-vertical-hnsg" class="header-logo" alt="Logo HNSG">                             -->
                <!-- <form action="" method="post">
                    <div class="header-input">
                        <span class="titulo_data_refeicao">Informe a data para consulta:</span>
                        <input type="date" name="input_data_refeicao" class="input_data_refeicao" required>
                        <button type="submit" class="btn-header">
                            <i class="icon fa-solid fa-rotate"></i>
                        </button>
                    </div>                
                </form> -->
            </div>

            <div class="container-title">
                <h1 class="header-title">Cardápio do dia <?php date_default_timezone_set('America/Sao_Paulo');     echo date('d/m/Y', $timestamp); ?></h1>         
            </div>

            <div class="container-cardapio">
                <div class="almoco">
                    <p class="titulo">Almoço</p>
                    <span class="cardapio">                        
                        <?php if(!$dados_almoco){                                    
                                echo "Sem Informações";
                            }else{ ?>
                            <div class="left">                                
                                <span class="conteudo-cardapio">
                                    <?php echo ucfirst(strtolower($dados_almoco['salada_um'])); ?>
                                </span>
                                <span class="conteudo-cardapio">
                                    <?php echo ucfirst(strtolower($dados_almoco['salada_dois'])); ?>
                                </span>
                                <span class="conteudo-cardapio">
                                    <?php echo ucfirst(strtolower($dados_almoco['salada_tres'])); ?>
                                </span>
                                <span class="conteudo-cardapio">
                                    <?php echo ucfirst(strtolower($dados_almoco['comida_um'])); ?>
                                </span>
                                <span class="conteudo-cardapio">
                                    <?php echo ucfirst(strtolower($dados_almoco['comida_dois'])); ?>
                                </span>
                            </div>

                            <div class="right">
                                <span class="conteudo-cardapio">
                                    <?php echo ucfirst(strtolower($dados_almoco['carne'])); ?>
                                </span>
                                <span class="conteudo-cardapio">
                                    <?php echo ucfirst(strtolower($dados_almoco['guarnicao'])); ?>
                                </span>
                                <span class="conteudo-cardapio">
                                    <?php echo ucfirst(strtolower($dados_almoco['sopa'])); ?>
                                </span>
                                <span class="conteudo-cardapio">
                                    <?php echo ucfirst(strtolower($dados_almoco['sobremesa'])); ?>
                                </span>
                                <?php } ; ?>                        
                            </div>                                
                    </span>
                </div>

                <div class="janta">
                    <p class="titulo">Janta</p>
                    <span class="cardapio">                        
                        <?php if(!$dados_janta){                                    
                                echo "Sem Informações";
                            }else{ ?>
                                <div class="left">                                
                                <span class="conteudo-cardapio">
                                    <?php echo ucfirst(strtolower($dados_janta['salada_um'])); ?>
                                </span>
                                <span class="conteudo-cardapio">
                                    <?php echo ucfirst(strtolower($dados_janta['salada_dois']));?>
                                </span>
                                <span class="conteudo-cardapio">
                                    <?php echo ucfirst(strtolower($dados_janta['salada_tres']));?>
                                </span>
                                <span class="conteudo-cardapio">
                                    <?php echo ucfirst(strtolower($dados_janta['comida_um']));?>
                                </span>
                                <span class="conteudo-cardapio">
                                    <?php echo ucfirst(strtolower($dados_janta['comida_dois']));?>
                                </span>
                            </div>

                            <div class="right">
                                <span class="conteudo-cardapio">
                                    <?php echo ucfirst(strtolower($dados_janta['carne']));?>
                                </span>
                                <span class="conteudo-cardapio">
                                    <?php echo ucfirst(strtolower($dados_janta['guarnicao']));?>
                                </span>
                                <span class="conteudo-cardapio">
                                    <?php echo ucfirst(strtolower($dados_janta['sopa']));?>
                                </span>
                                <span class="conteudo-cardapio">
                                    <?php echo ucfirst(strtolower($dados_janta['sobremesa']));?>
                                </span>
                                <?php } ; ?>                        
                    </span>
                </div>                
            </div> 

            <div class="subtitulo">
                <p class="container-cardapio-subtitulo"> O cardápio poderá sofrer alterações caso o número de comensais exceda a média de consumo diário.</p>        
            </div>
        </div>
    </body>
</html>
