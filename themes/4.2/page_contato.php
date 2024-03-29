<?php
// Template Name: Contato
?>

<?php
if($_POST['btEnviarCt']): //Se o formulário tiver sido enviado

	//Pegando informações do formulário
	$nome = utf8_decode(trim($_POST['nome']));
	$email = trim($_POST['email']);
	$telefone = "(".$_POST['ddd'].") ".$_POST['fone'];
	$assunto = utf8_decode(trim($_POST['assunto']));
	$mensagem = utf8_decode(trim($_POST['msg']));
	
	//Validando o envio
	if($nome == NULL && !$erro) $erro = "nome";
	if($email == NULL && !$erro) $erro = "email";
	if($assunto == NULL && !$erro) $erro = "assunto";
	if($mensagem == NULL && !$erro) $erro = "mensagem";
			
	//Se houver erro
	if($erro):
		if($erro == "nome") $alert = "Preencha o seu nome!";
		if($erro == "email") $alert = "Preencha o seu e-mail!";
		if($erro == "assunto") $alert = "Preencha o assunto!";
		if($erro == "mensagem") $alert = "Preencha a mensagem!";
		
		echo '<script type="text/javascript">';
		echo '	alert("'.$alert.'");';
		echo '	history.go(-1);';
		echo '</script>';
	else:
		//Corpo do e-mail
		$corpo .= "<strong>Nome: </strong>$nome<br />\r";
		$corpo .= "<strong>E-mail: </strong>$email<br />\r";
		$corpo .= "<strong>Telefone: </strong>$telefone<br /><br />\r\r";
		$corpo .= "<strong>Assunto: </strong>$assunto<br /><br />\r\r";
		$corpo .= nl2br($mensagem);
		
		//Monta o e-mail para envio
		$headers .= "From: $nome <$email>\r\n";
		$headers .= "Reply-To: $nome <$email>\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "X-Mailer: PHP/".phpversion();

		$enviarMail = wp_mail("colunistas@numclique.net", "[NumClique] - ".$assunto, $corpo, $headers);
		
		if($enviarMail):
			echo '<script type="text/javascript">';
			echo '	alert("E-mail enviado com sucesso!\nAguarde que em breve entrarei em contato!");';
			echo '	window.location="";';
			echo '</script>';
		else:
			echo '<script type="text/javascript">';
			echo '	alert("Falha no envio do e-mail!\nTente novamente mais tarde!");';
			echo '	history.go(-1);';
			echo '</script>';
		endif;
	endif;
	
endif;
?>

<?php get_header(); ?>

<!-- Posts -->
<div id="Posts">
    <?php
    if (have_posts ()) {
        while (have_posts ()) {
            the_post(); ?>
			<!-- cxPost -->
			<div class="cxPost">
				<h1>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h1>
				<div class="txtPost">
					<?php the_content(); ?>

                    <form id="ctForm" action="" method="post">
                        <p><span id="nome">* Nome</span> <input type="text" id="ctNome" name="nome" /></p>
                        <p><span id="fone">Telefone</span> <input type="text" id="ctDDD" name="ddd" maxlength="2" /> <input type="text" id="ctFone" name="fone" /></p>
                        <p><span id="email">* E-mail</span> <input type="text" id="ctEMail" name="email" /></p>
                        <p><span id="url">URL (site)</span> <input type="text" id="ctURL" name="url" /></p>
                        <p><span id="assunto">* Assunto</span> <input type="text" id="ctAssunto" name="assunto" /></p>
                        <p><span id="mensagem">* Mensagem</span> <textarea id="ctMsgs" name="msg"></textarea></p>
                        <p><input type="submit" value="Enviar mensagem" id="btEnviarCt" name="btEnviarCt" /></p>
                        <p class="legenda">* Campos obrigat&oacute;rios</p>
                    </form>

    			</div>
			</div>
			<!-- /cxPost -->
    <?php }
    } ?>

</div>
<!-- /Posts -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>