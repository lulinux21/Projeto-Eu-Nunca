<?php
   	$palavras = array(
	'Eu nunca dormi na casa de alguém que eu não conhecia.',
	'Eu nunca quis Bater em alguém só por que eu não gostava da pessoa.',
	'Eu nunca xinguei alguém na hora do sexo.',
	'Eu nunca nunca dominei/dominada durante uma relação sexual.',
	'Eu nunca ganhei um boquete em público.',
	'Eu nunca ganhei um dedada nas minhas genitálias',
	'Eu nunca fiquei tão bêbado ao ponto de perder um compromisso importante.',
	'Eu nunca fiquei com alguém só para transar.',
	'Eu nunca transei no quarto de um amigo.',
	'Eu nunca transei em lugar público',
	'Eu nunca transei com alguém por dó.',
	'Eu nunca transei bêbado.',
	'Eu nunca me masturbei pensando em alguém da minha sala.',
	'Eu nunca tive um sonho erótico e depois transei.',
	'Eu nunca tive uma fantásia sexual com alguém da roda.',
	'Eu nunca pensei em transar com algum professor.',
	'Eu nunca transei com uma quarentona/quarentão.',
	'Eu nunca tive uma fantásia erótica com uma pessoa do sexo oposto.',
	'Eu nunca transaria a três.',
	'Eu nunca participaria de uma orgia.',
	'Eu nunca fui à uma casa swing.',
	'Eu nunca fui a um motel.',
	'Eu nunca fui a um puteiro.',
	'Eu nunca gastei todo meu dinheiro com bebidas.',
	'Eu nunca me apaixonei por alguém que eu não conhecia.',
	'Eu nunca me masturbei na casa de estranhos.',
	'Eu nunca transei com alguém compromissado.',
	'Eu nunca transei na casa de estranhos.',
	'Eu nunca pagaria uma puta para transar.',
	'Eu nunca transei num carro.',
	'Eu nunca lambi a embalagem pensando que fosse um genital.',
	'Eu nunca transei em uma construção',
	'Eu nunca dei uma dedada na bunda de alguém.'
); ?>
<!DOCTYPE html>
  <html lang="pt-br">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Eu nunca o seu jogo de fim de noite</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  </head>
   <body>
		<div class="container">
			<h1>Eu nunca ?</h1>
			<div class="content-box">
				<p class="content-text">
			  		<?php
			  			$aleatorio = rand(0, count($palavras));
	   					echo $palavras[$aleatorio]; 
	   				?>	
				</p>
			</div>
			<div class="button-next">
		  		<a href="index.php">Próximo Pergunta</a>
		 	</div>
		</div>
   </body>
   </html> 
