<html>
<head>

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,user-scalable=0" />

<link rel="stylesheet" type="text/css" href="/css/template.css" />

<script type="text/javascript">
window.onload = function(){
	document.querySelector(".menuMobile").addEventListener("click", function(){
		if(document.querySelector(".menu nav ul").style.display == 'flex') {
			document.querySelector(".menu nav ul").style.display = 'none';
		} else {
			document.querySelector(".menu nav ul").style.display = 'flex';
		}
	});
};
</script>

<title>MediCenter</title>

</head>
<body>

<header>

	<div class="container">
		<div class="logo">
			<a href=""><img src="/images/logo.png" /></a>
		</div>
		<div class="menu">
			<nav>
				<div class="menuMobile">
					<div class="mm_line"></div>
					<div class="mm_line"></div>
					<div class="mm_line"></div>
				</div>
				<ul>
					<li class="active"><a href="">HOME</a></li>
					<li><a href="">Enfermagem</a></li>
					<li><a href="">Especialidade</a></li>
					<li><a href="">Resultados Exame</a></li>
				</ul>
		</div>
	</div>
	</div>
	<div class="login">
		<ul>
			<li><a href="{{ route('login') }}">Login</a></li>
			<li><a href="{{ route('register') }}">Cadastre-se</a></li>
		</ul>
	</div>
</header>
<section id="banner">
	<div class="container column">
		<div class="banner_headline">
			<h1>O que é Clínica Médica?</h1>
			<h2>A clínica médica é um dos ramos mais amplos da Medicina. São médicos especializados.</h2>
		</div>
		<div class="banner_options">
			<div class="banner1">
				<div class="banner_title">Onde Atendemos</div>
				<div class="banner_desc">
					<li>Hospital Nossa Graça - MG </li>
					<li>Hospital Mater Dei -MG</li>
					<li>Centro Medico de Guarulhos -SP</li>
				</div>
				<a href="">Saiba Mais</a>
			</div>
			<div class="banner2">
				<div class="banner_title">Principais Serviços</div>
				<div class="banner_desc">
					<li>Ambulatório</li>
					<li>Exames</li>
					<li>Internação</li>
				</div>
				<a href="">Saiba Mais</a>
			</div>
			<div class="banner3">
				<div class="banner_title">Horário</div>
				<div class="banner_desc">
					<li>4:00 ás 23:00 horas.</li>
					<li>23:30 ás 01:00 horas</li>
					<li>1:30 ás 3:30 horas</li>
				</div>
				<a href="">Saiba Mais</a>
			</div>
		</div>
	</div>
</section>

<section id="geral">
	<div class="container">
		<section>
			<div class="widget">
				<div class="widget_title">
					<div class="widget_title_text">Ultimas Notícias</div>
					<div class="widget_title_bar"></div>
				</div>
				<div class="widget_body flex">

					<article>
						<a href="">
							<div class="news_data">
								<div class="news_posted_at">15 MAIO 2022</div>
								<div class="news_comments">2</div>
							</div>
							<div class="news_thumbnail">
								<img src="/images/dr.jpg" />
							</div>
							<div class="news_title">
								Lorem ipsum dolor sit amat velum
							</div>
							<div class="news_resume">
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
							</div>
						</a>
					</article>

					<article>
						<a href="">
							<div class="news_data">
								<div class="news_posted_at">23 MAIO 2022</div>
								<div class="news_comments">6</div>
							</div>
							<div class="news_thumbnail">
								<img src="/images/dr.jpg" />
							</div>
							<div class="news_title">
								Lorem ipsum dolor sit amat velum
							</div>
							<div class="news_resume">
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
							</div>
						</a>
					</article>

					<article>
						<a href="">
							<div class="news_data">
								<div class="news_posted_at">15 JUNHO 2022</div>
								<div class="news_comments">2</div>
							</div>
							<div class="news_thumbnail">
								<img src="/images/dr.jpg" />
							</div>
							<div class="news_title">
								Lorem ipsum dolor sit amat velum
							</div>
							<div class="news_resume">
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
							</div>
						</a>
					</article>

					<article>
						<a href="">
							<div class="news_data">
								<div class="news_posted_at">20 JUNHO 2022</div>
								<div class="news_comments">14</div>
							</div>
							<div class="news_thumbnail">
								<img src="/images/dr.jpg" />
							</div>
							<div class="news_title">
								Lorem ipsum dolor sit amat velum
							</div>
							<div class="news_resume">
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
							</div>
						</a>
					</article>

				</div>
			</div>
		</section>
		<aside>
			<div class="widget">
				<div class="widget_title">
					<div class="widget_title_text">Departamentos</div>
					<div class="widget_title_bar">

					</div>
				</div>
				<div class="widget_body">
					<li>Laboratório de Análises Clínicas</li>
						<li>Unidade de Internação</li>
						<li>Oncologia</li>
						<li>Medicina Diagnóstica</li>
				</div>
			</div>
			<div class="widget">
				<div class="widget_title">
					<div class="widget_title_text">Angendar uma Consulta</div>
					<div class="widget_title_bar"></div>
				</div>
				<div class="widget_body">
					<a href="{{ route('register') }}" target="_blank">Consulta</a>
				</div>
			</div>
		</aside>
	</div>
</section>

<footer>
	<div class="container flexColumn">
		<div class="footer_menu">
			<div class="fm_1">
				<a href="">
					...
				</a>
			</div>
			<div class="fm_2">
				<a href="">
					...
				</a>
			</div>
			<div class="fm_3">
				<a href="">
					...
				</a>
			</div>
		</div>

		<div class="footer_area">
			<div class="footer_areaitem">
				<div class="widget">
					<div class="widget_title">
						<div class="widget_title_text">Medicenter Clinic</div>
						<div class="widget_title_bar"></div>
					</div>
					<div class="widget_body">
						...
					</div>
				</div>
			</div>
			<div class="footer_areaitem">
				<div class="widget">
					<div class="widget_title">
						<div class="widget_title_text">Latest Posts</div>
						<div class="widget_title_bar"></div>
					</div>
					<div class="widget_body">
						...
					</div>
				</div>
			</div>
			<div class="footer_areaitem">
				<div class="widget">
					<div class="widget_title">
						<div class="widget_title_text">Latest Tweets</div>
						<div class="widget_title_bar"></div>
					</div>
					<div class="widget_body">
						...
					</div>
				</div>
			</div>
		</div>

		<div class="footer_copy">
			Coyright - Todos os direitos reservados
		</div>

	</div>
</footer>




















</body>
</html>
