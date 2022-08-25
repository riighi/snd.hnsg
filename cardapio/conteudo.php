<form action="config.php" method="post" id="form-vote-snd">

    <div class="header">
        <img src="../img/logo/logotipoTopo300x150.png" id="logo-vertical-hnsg" alt="Logo HNSG">
        <h1 class="titulo">Avaliação de Refeições SND</h1>
    </div>

    <p class="paragrafo">Procuramos sempre estar nos aprimorando, e para tal, gostaríamos da sua avaliação referente as refeições realizadas no <u>dia de ontem</u>.</p>
    <h3 class="mensagem-paragrafo">O que você achou das refeições servidas em <span class="form-data-cardapio"><?php date_default_timezone_set('America/Sao_Paulo'); echo date('d/m/Y', strtotime('-1 days')); ?> </span> ? </h3>
    
    <div class="pesquisas">
        <h3 class="titulo-refeicao">Almoço de <?php date_default_timezone_set('America/Sao_Paulo'); echo date('d/m/Y', strtotime('-1 days')); ?>:</h3>
        <?php if(!$dados_almoco){                                    
            echo "Sem Informações";
        }else{ ?>
            <?php echo mb_strtolower($dados_almoco['salada_um']) ;?>,
            <?php echo mb_strtolower($dados_almoco['salada_dois']) ;?>,
            <?php echo mb_strtolower($dados_almoco['salada_tres']) ;?>,
            <?php echo mb_strtolower($dados_almoco['comida_um']) ;?>,
            <?php echo mb_strtolower($dados_almoco['comida_dois']) ;?>,
            <?php echo mb_strtolower($dados_almoco['carne']) ;?>,
            <?php echo mb_strtolower($dados_almoco['guarnicao']) ;?>,
            <?php echo mb_strtolower($dados_almoco['sopa']) ;?>,
            <?php echo mb_strtolower($dados_almoco['sobremesa']) ;?> <?php } ; ?>    
        <br><br>
        <h3 class="titulo-refeicao">Janta de <?php date_default_timezone_set('America/Sao_Paulo'); echo date('d/m/Y', strtotime('-1 days')); ?>:</h3>
        <?php if(!$dados_janta){                                    
            echo "Sem Informações";
        }else{ ?>
            <?php echo mb_strtolower($dados_janta['salada_um']) ;?>,
            <?php echo mb_strtolower($dados_janta['salada_dois']) ;?>,
            <?php echo mb_strtolower($dados_janta['salada_tres']) ;?>,
            <?php echo mb_strtolower($dados_janta['comida_um']) ;?>,
            <?php echo mb_strtolower($dados_janta['comida_dois']) ;?>,
            <?php echo mb_strtolower($dados_janta['carne']) ;?>,
            <?php echo mb_strtolower($dados_janta['guarnicao']) ;?>,
            <?php echo mb_strtolower($dados_janta['sopa']) ;?>,
            <?php echo mb_strtolower($dados_janta['sobremesa']) ;?> <?php } ; ?>  
    </div>

    <div class="pesquisas">
        <h3>Café da manhã</h3>        
        <input type="radio" class="option" name="option-breakfest" value="insatisfeito" required> Insatisfeito
        <input type="radio" class="option" name="option-breakfest" value="regular" required> Regular
        <input type="radio" class="option" name="option-breakfest" value="satisfeito" required> Satisfeito
        <input type="radio" class="option" name="option-breakfest" value="muito-satisfeito" required> Muito Satisfeito
        <input type="radio" class="option" name="option-breakfest" value="nao-opinar" required> Não Opinar
    </div>

    <div class="pesquisas">
        <h3>Almoço</h3>
        <input type="radio" class="option" name="option-lunch" value="insatisfeito" required> Insatisfeito
        <input type="radio" class="option" name="option-lunch" value="regular" required> Regular
        <input type="radio" class="option" name="option-lunch" value="satisfeito" required> Satisfeito
        <input type="radio" class="option" name="option-lunch" value="muito-satisfeito" required> Muito Satisfeito
        <input type="radio" class="option" name="option-lunch" value="nao-opinar" required> Não Opinar
    </div>

    <div class="pesquisas">
        <h3>Café da tarde</h3>        
        <input type="radio" class="option" name="option-cb" value="insatisfeito" required> Insatisfeito
        <input type="radio" class="option" name="option-cb" value="regular" required> Regular
        <input type="radio" class="option" name="option-cb" value="satisfeito" required> Satisfeito
        <input type="radio" class="option" name="option-cb" value="muito-satisfeito" required> Muito Satisfeito
        <input type="radio" class="option" name="option-cb" value="nao-opinar" required> Não Opinar
    </div>

    <div class="pesquisas">
        <h3>Janta</h3>        
        <input type="radio" class="option" name="option-dinner" value="insatisfeito" required> Insatisfeito
        <input type="radio" class="option" name="option-dinner" value="regular" required> Regular
        <input type="radio" class="option" name="option-dinner" value="satisfeito" required> Satisfeito
        <input type="radio" class="option" name="option-dinner" value="muito-satisfeito" required> Muito Satisfeito
        <input type="radio" class="option" name="option-dinner" value="nao-opinar" required> Não Opinar
    </div>

    <div class="pesquisas">
        <textarea name="option-message" class="option-message" cols="20" rows="6" maxlength="300" placeholder="Deixe sua opinião, ela é muito importante para nós (opcional)"></textarea>
    </div>

    <button type="submit" class="btn-form-snd">Votar</button>

</form>