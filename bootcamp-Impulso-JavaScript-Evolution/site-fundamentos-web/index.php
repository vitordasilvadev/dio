<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bootcamp Impulso DIO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="css/style.css">
  
  <script>
  $( function() {
    $( "#accordion" ).accordion();
	$( "#tabs" ).tabs();

  } );
  </script>
  
</head>
<body>

	
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Fundamentos WEB</h1>
  <p>Bootcamp Impulso - Digital Inovation One</p> 
  <p> <a href="https://www.linkedin.com/in/vitorsdasilva/" id="linkedin" >Vitor da Silva </a>, 
	<?php
			$hoje = date('d/m/Y');
			echo $hoje;
	?>
  </p>

</div>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  
  <!-- The slideshow/carousel -->
  <center>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/tecnologias-fullstack.png" alt="tecnologias fullstack" class="d-block" style="width:60%">
      
    </div>
    <div class="carousel-item">
      <img src="img/frameworks-populares.png" alt="frameworks populares" class="d-block" style="width:60%">
    </div>
    <div class="carousel-item">
      <img src="img/dev.png" alt="dev" class="d-block" style="width:60%">
      <div class="carousel-caption">
        <h3>Desenvolvedor Full-stack</h3>
        <p>Font-end + Back-end</p>
      </div>  
    </div>
  </div>
  </center>
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
  <br><br>

</div>
  
<div id="accordion">
  
  <h3>Tecnologias Front-end</h3>
  <div>
    <p>O trabalho de um profissional que atua em projetos de Front-End envolvem:</p>
	<ul>
		<li>L??gica de Programa????o;</li>
		<li>HTML & CSS;</li>
		<li>JavaScript & jQuery;</li>
		<li>Ajax;</li>
		<li>TypeScript;</li>
		<li>Angular;</li>
		<li>Responsividade (Bootstrap);</li>
		<li>React;</li>
		<li>React-Native;</li>
		<li>Sistemas mobile, como Android e iOS.</li>
	</ul>
  </div>
  <h3>Tecnologias Back-end</h3>
  <div>
    <p>O desenvolvimento Back-End exige que o profissional domine diversas linguagens de programa????o. Geralmente, s??o as mais valorizadas no mercado, por??m n??o est??o entre as mais dif??ceis de aprender ou codar, pois se aproximam bastante da linguagem humana, veja alguns exemplos:</p>
	<ul>
		<li>Java;</li>
		<li>Python;</li>
		<li>PHP;</li>
		<li>C#;</li>
		<li>C;</li>
		<li>C++.</li>
	</ul>
  </div>
</div>

<div class="container mt-3">
  <h2>Tecnologias do Bootcamp Impulso - DIO:</h2>                                    
  <div class="spinner-border text-muted">HTML</div>
  <div class="spinner-border text-primary">CSS</div>
  <div class="spinner-border text-success">JavaScript</div>
  <div class="spinner-border text-info">React</div>
  <div class="spinner-border text-warning">SQL</div>
  <div class="spinner-border text-danger">NoSQL</div>
  <div class="spinner-border text-secondary">Node.Js</div><br><br>
</div>


<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Front-end</a></li>
    <li><a href="#tabs-2">Back-end</a></li>
    <li><a href="#tabs-3">Fullstack</a></li>
  </ul>
  <div id="tabs-1">
    <p>O Front-end est?? muito relacionado com a interface gr??fica do projeto. Ou seja, ?? onde se desenvolve a aplica????o com a qual o usu??rio ir?? interagir diretamente, seja em softwares, sites, aplicativos. Portanto, ?? essencial que o desenvolvedor tenha uma preocupa????o com a experi??ncia do usu??rio.</p>
	<p>Dev front-end ?? um termo muito utilizado para identificar profissionais que se especializaram especificamente nessa ??rea. Al??m disso, apesar de envolver a interface do projeto, o programador front-end n??o ?? formado em design. A diferen??a entre os dois ?? que o desenvolvedor n??o desenha visualmente a interface.</p>
	<p>Na verdade, no desenvolvimento front-end, o profissional ir?? mexer com o c??digo em si, projetando com quais ferramentas o usu??rio ir?? interagir. Por esse motivo, ?? importante ter essa diferen??a em mente quando falamos sobre o assunto.</p>
  </div>
  <div id="tabs-2">
	<p>Podemos classificar como back-end tudo o que envolve como o projeto funciona, seja ele um site ou sistema. Ou seja, tudo o que o usu??rio n??o pode ver, como o banco de dados e tamb??m os servidores. Aqui tamb??m ?? onde entra a seguran??a, estrutura e gerenciamento de conte??do.</P>
	<p>O back-end ?? essencial para que tudo funcione bem e cumpra com a proposta do projeto. Um exemplo disso ?? um site din??mico, que atualiza em tempo real com novas informa????es, como, por exemplo, um site de not??cias. ?? preciso que seu banco de dados funcione corretamente para que o site n??o apresente problemas t??cnicos.</p>
  </div>
  <div id="tabs-3">
	<p>O desenvolvedor full stack ?? o profissional que tem um perfil mais amplo, podendo atuar tanto em projetos de Front-End, quanto em projetos de Back-End. </p>
	<p>O desenvolvedor Full Stack tem um mercado de atua????o amplo, podendo trabalhar n??o s?? no Brasil, como tamb??m para empresas internacionais. Para se destacar entre as menores empresas do mercado, como as startups, os profissionais precisam ser vers??teis e se adaptar facilmente ?? realidade do neg??cio, trazendo solu????es criativas de forma ??gil e utilizando sempre o m??nimo de recursos.</p>
  </div>
</div>


</body>
</html>