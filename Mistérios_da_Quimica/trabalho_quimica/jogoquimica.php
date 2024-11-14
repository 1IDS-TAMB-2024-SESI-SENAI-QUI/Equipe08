<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css_jogo.css">
	<link rel="icon" href="./images/icone.ico" type="image/x-icon">
	<title>M&Q ||</title>
</head>

<body>
	<nav>
		<img class="imagem" src="./images/Quimica.png">
		<div class="menu">
			<ul>
				<li><a href="../home/quimica.html">Home</a></li>
				<li><a href="../Escala_PH/escala/index.html">Escala de pH</a></li>
				<li class="dropdown">
					<a href="#">Funções Inorgânicas <i class="fa-solid fa-arrow-down"></i></a>
					<div class="dropdown-menu">
						<a href="../Sais/cards_sais.html">Sais</a>
						<a href="../Bases/cards_bases.html">Bases</a>
						<a href="../Ácidos/cards_acidos.html">Ácidos</a>
					</div>
				</li>
				<li><a href="../trabalho_quimica/jogoquimica.php"><b>Jogo</b></a></li>
				<li><a href="../Quiz/index.html">Quiz</a></li>
				<li class="direita">
					<a href="../sobre_nos/index.html"><i class="fa-solid fa-atom"></i></a>
				</li>
			</ul>
		</div>
	</nav>
	<body>
		<article>
		<div>
			<div>
				<h1>Jogo das Substâncias</h1>
				<br/>
				<div class="content">
					<div>
					<h3>Introdução ao Jogo das Substâncias</h3><br>
					<p>Bem-vindo ao Jogo das Substâncias, uma divertida e interativa jornada no mundo da química! Neste jogo, 
						você terá a oportunidade de testar seus conhecimentos sobre as propriedades das substâncias. 
						Sua missão é selecionar diferentes substâncias e determinar se elas são ácidas, neutras ou alcalinas, 
						tilizando seu conhecimento de pH e reações químicas.</p><br>
					<h3>Objetivo Estudantil</h3><br>
					<p>O principal objetivo do jogo é aprender e reforçar o conceito de pH e as características das substâncias em relação à acidez,
						neutralidade e alcalinidade. Ao longo das rodadas, você desenvolverá uma compreensão mais profunda de como essas substâncias se comportam em diferentes contextos, 
						além de se familiarizar com exemplos do cotidiano que se encaixam em cada categoria. 
					O jogo é uma excelente forma de aplicar seus conhecimentos de química de forma lúdica e dinâmica!</p><br>
					<h3>Regras Básicas:</h3><br>
					<p>Seleção da Substância: O jogo apresenta uma lista de substâncias variadas, como vinagre, água, bicarbonato, entre outras. Você deve escolher uma substância de cada vez.<br>

Análise de pH: Após selecionar a substância, ela será exibida com seu respectivo pH. Com base nesse valor, você deve determinar se a substância é:<br>

Ácida: pH menor que 7<br>
Neutra: pH igual a 7<br>
Alcalina (ou básica): pH maior que 7<br><br></p>
					</div>
		<form action="" method="POST">
			<label><h2>Escolha uma substância:</h2></label>
			<select name="sub" id="sub" required>
				<option value="...">...</option>
				<option value="sub_1">Leite</option>
				<option value="sub_2">Limão</option>
				<option value="sub_3">Bateria</option>
				<option value="sub_4">Vinagre</option>
				<option value="sub_5">Suco do repolho roxo</option>
				<option value="sub_6">Água Sanitária</option>
				<option value="sub_7">Café</option>
				<option value="sub_8">Sabonete</option>
				<option value="sub_9">Amônia</option>
				<option value="sub_10">Hidróxido de sódio</option>
			</select>
			<button>Jogar!</button>
		</form>
		<br/><br/>
		<div class="table">
			<table>
				<tr>
					<?php
						if(isset($_POST["sub"])){
							if($_POST["sub"] == "sub_1"){
								?>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td style="font-size:30px">🡇</td>
								<?php
							}
							else if($_POST["sub"] == "sub_2"){
								?>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td style="font-size:30px">🡇</td>
								<?php
							}
							else if ($_POST["sub"] == "sub_3"){
							?>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td style="font-size:30px">🡇</td>
								<?php	
							}
							else if ($_POST["sub"] == "sub_4"){
							?>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td style="font-size:30px">🡇</td>
								<?php	
							}
							else if ($_POST["sub"] == "sub_5"){
							?>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td style="font-size:30px">🡇</td>
								<?php	
							}
							else if ($_POST["sub"] == "sub_6"){
							?>
								<td></td>
								<td></td>
								<td style="font-size:30px">🡇</td>
								<?php	
							}
							else if ($_POST["sub"] == "sub_7"){
							?>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td style="font-size:30px">🡇</td>
								<?php	
							}
							else if ($_POST["sub"] == "sub_8"){
							?>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td style="font-size:30px">🡇</td>
								<?php	
							}
							else if ($_POST["sub"] == "sub_9"){
							?>
								<td></td>
								<td></td>
								<td style="font-size:30px">🡇</td>
								<?php	
							}
							else if ($_POST["sub"] == "sub_10"){
							?>
								<td style="font-size:30px">🡇</td>
								<?php	
							}
							else if ($_POST["sub"] == "..."){
							?>
								<td style="font-size:30px"></td>
								<?php	
							}
						}
					?>
					
				</tr>
				<tr>
					<td class="fourteen">14.0 Alcalino</td>
					<td class="thirteen">13.0</td>
					<td class="twelve">12.0</td>
					<td class="eleven">11.0</td>
					<td class="ten">10.0</td>
					<td class="nine">9.0</td>
					<td class="eight">8.0</td>
					<td class="seven">7.0 Neutro</td>
					<td class="six">6.0</td>
					<td class="five">5.0</td>
					<td class="four">4.0</td>
					<td class="three">3.0</td>
					<td class="two">2.0</td>
					<td class="one">1.0</td>
					<td class="zero">0.0 <br />Ácido</td>
				</tr>
			</table>
			<br>
		</div>
					</div>
					</div>
					</div>
					</article>
					<br>
		<footer>
		<div class="container">
			<ul>
				<h3>Mistérios da Química</h3>
				<p>Mistérios da Química é um site dedicado
					<br>a explicar de forma simples os conceitos<br>de ácidos, bases, sais e a escala de pH,
					<br> trazendo exemplos práticos e curiosidades<br>do cotidiano.
				</p>
				<div class="redes-sociais">
					<i class="fa-brands fa-instagram"></i>
					<i class="fa-brands fa-twitter"></i>
					<i class="fa-brands fa-facebook"></i>
					<i class="fa-brands fa-github"></i>
				</div>
				<br />
				<p>© 2024 Mistérios da Química. <br>Todos os direitos reservados.</p>
			</ul>
			<ul>
                    <h3>Link</h3>
                    <li><a href="../home/quimica.html"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li><a href="../Escala_PH/escala/index.html"><i class="fa-solid fa-ruler"></i> Escala Ph</a></li>
                    <li><a href="#"><i class="fa-solid fa-flask"></i> Funções Inorgânicas</a></li>
                    <li><a href="../trabalho_quimica/jogoquimica.php"><i class="fa-solid fa-gamepad"></i> Jogo</a></li>
                    <li><a href="../Quiz/index.html"><i class="fa-solid fa-question"></i> Quiz</a></li>
                </ul>
			<ul>
				<h3>Suporte</h3>
				<li><a href="#"><i class="fa-solid fa-phone"></i> Contato</a></li>
				<li><a href="../sobre_nos/index.html"><i class="fa-solid fa-person"></i> Sobre Nós</a></li>
			</ul>
			<ul>
				<h3>Nos Contate</h3>
				<li>
					<p>+55 19 99336-1724</p>
				</li>
				<li>
					<p><a href="mailto:misteriosdaquimica2024@gmail.com">misteriosdaquimica2024@gmail.com</a></p>
				</li>
				<li>
					<p>Brasil</p>
				</li>
			</ul>
		</div>


	</footer>
	</body>
</html>