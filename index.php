<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');

		.header-logo {
			float: left;
			padding: 2vw!important;
		}

		.header-about {
			padding: 2vw!important;
		}

		.logo-img {
			height: calc(2em + 0.7vw);
		}

		.about-label {
			text-align: right;
			font-weight: 700;
			line-height: 2vh;
			font-size: calc(9px + 0.5vw);
			letter-spacing: 0.1vh;	
		}

		.about-phone {
			text-align: right;
			font-weight: 700;
			line-height: 2vh;
			font-size: calc(8px + 0.5vw);
			letter-spacing: 0.1vh;
		}
		
		.header-about div + div {
			margin-top: calc(4px + 0.7vw)!important;
		}

		.main {
			padding-top: 1em;
		}

		.container-img {
			margin-left: 3vw;
			margin-right: 3vw;
			background: grey;
			width: 94vw;
			background-image: url("1.png");
			height: calc(11.6em + 20vw)!important;
			margin-bottom: 2vh;
		}

		.container-card {
			background: #373636;
			position: absolute;
			margin-top: 5vh;
			margin-left: 5vw;
			margin-right: 5vw;
			z-index: 100;
			width: 40%;
		}

		.card-label {
			font-weight: 400;
			line-height: 1vh;
			font-size: calc(10px + 1vw);
		}

		.card-title {
			font-size: calc(1.5em + 1vw);
			line-height: calc(1em + 1vw);
			letter-spacing: -1px;
		}

		.card-time {
			color: white;
			font-size: calc(9px + 1vw);
			font-weight: 400;
			line-height: 2vh;

		}

		.card-date {
			margin-top: calc(8px + 1vh);
			color: white;
			white-space: nowrap;
			font-size: calc(1em + 1vw);
			font-weight: 400;
			line-height: 2vh;
		}

		.info-size {
			font-size: calc(10px + 0.8vw)!important;
		}


		.card-link-button {
			border-radius: 8px 8px 8px 8px;
			padding: 2vh;
			padding-left: 7vw!important;
			padding-right: 7vw!important;
			font-size: calc(10px + 0.4vw)!important;
			background: #0089C3;
			color: white;
			font-weight: 700;
			line-height: 1vh;
		}

		.card-content {
			padding: 4vw;
		}

		.card-content div + div {
			margin-top: 4vw;
		}



		.card-link-container {
			padding-top: 12%;
			width: 100%;
			text-align: center;
		}

		.container-info {
			margin-left: 50%;
			margin-right: 5%;
		}

		.info-size {
			font-weight: 400;
			font-size: 1.2vw;
			line-height: 3vh;
		}

		.info-text div + div {
			margin-top: 2%;
		}

		.info-footer {
			margin-top: 2%;
		}

		.info-container-link {
			border-radius: 8px 8px 8px 8px;
			color: white;
			padding: 2%;
			background: #0089C3;
		}

		.footer-nav-item {
			display: inline-block;
			margin-top: 3%;

			font-weight: 500;
			font-size: calc(8px + 0.6vw)!important;
			line-height: 2vh;
			letter-spacing: 0.01vw;
			margin-right: 5%;
			margin-left: 5%;
		}

		.contacts-item {
			text-align: center;
			margin-left: 2%;
			margin-right: 2%;
			width: 25%;
			display: inline-block;
			margin-bottom: 2%;
		}

		.contacts-item-link {
			white-space: nowrap;
			color: white;

			font-weight: 400;
			font-size: calc(8px + 0.5vw)!important;
			line-height: 2vh;
			letter-spacing: 0.1vh;
		}

		.contacts-item-link svg {
			width: 2.5vh;
		}

		.footer-size {
			font-weight: 400;
			font-size: 0.8vw;
			line-height: 20px;
			text-align: right;
		}

		.footer-size-svg {
			width: 2vh;
		}

		.header-about {
			float: right;
			text-align: right;
		}

		.contacts {
			margin-top: 5%;
		}
		.contacts div + div {
			margin-top: 2%;
		}

		.contacts-item-link svg {
			margin-right: 10%;
		}

		.footer-nav {
			text-align: center;
		}

		.footer-nav-item a {
			color: white;
		}

		.info-footer {
			margin-right:5%;
			margin-left: 5%;
			padding-bottom: 2%;
		}

		.info-footer p {
			color: gray;
		}


		@media screen and (max-width: 1024px) {
			.container-img {
				width: 96%;
				margin-left: 2%;
				margin-right: 2%;
				height: 540px;
			}

			.container-card {
				width: 40%;
				margin-top: 10%;
				margin-left: 6%;
			}

			.card-content {
				margin-top: 5%;
				padding: 10%;
			}

			.card-content div + div {
				margin-top: 12%;
			}


			
			.card-link-container {
				padding-top: 12%;
				width: 100%;
				text-align: center;
			}

			.card-link-button {
				padding: 6%;
				border-radius: 8px 8px 8px 8px;
				line-height: 8px;
			}

			.container-info {
				margin-left: 50%;
			}

			.info-size {
				font-weight: 400;
				font-size: 20px;
				line-height: 26px;
			}

			.info-text div + div {
				margin-top: 3%;
			}

			.info-footer {
				margin-top: 2%;
			}

			.info-container-link {
				border-radius: 8px 8px 8px 8px;
				color: white;
				padding: 2%;
				background: #0089C3;
			}

			.footer-nav-item {
				font-weight: 500;
				font-size: 20px;
				line-height: 21px;
				letter-spacing: 0.4px;
				margin-right: 5%;
				margin-left: 5%;
			}

			.contacts-item {
				text-align: center;
				margin-left: 2%;
				margin-right: 2%;
				width: 25%;
				display: inline-block;
				margin-bottom: 2%;
			}

			.contacts-item-link {
				white-space: nowrap;
				font-weight: 400;
				font-size: 15px;
				line-height: 27px;
				letter-spacing: 0.54px;
			}

			.footer-size {
				font-weight: 400;
				font-size: 10px;
				line-height: 20px;
				text-align: right;
			}
		}

		@media screen and (max-width: 768px) {
			.container-card {
				margin-top: 10%;
				width: 45%;
				margin-left: 8%;
			}

			.card-content {
				width: 80%;
				margin-top: 5%;
				margin-left: 0px;
			}


			.card-content div + div {
				margin-top: 13%;
			}

			.container-img {
				width: 94vw;
				margin-left: 3vw;
				margin-right: 3vw;
				height: 410px;
			}

			.card-link-container {
				padding-top: 6%;
				width: 100%;
				text-align: center;
			}

			.card-link-button {
				padding: 6%;
				line-height: 8px;
			}

			.container-info {
				margin-left: 60%;
				margin-right: 5%;
			}

			.info-size {
				font-weight: 400;
				font-size: 16px;
				line-height: 21px;
			}

			.footer-nav-item {
				font-weight: 500;
				font-size: 14px;
				line-height: 21px;
				letter-spacing: 0.42px;
				margin-right: 5%;
				margin-left: 5%;
			}

			.contacts {
				margin-left: 5%;
			}

			.contacts-item {
				text-align: left;
				width: 44%;
				display: inline-block;
				margin-bottom: 2%;
			}

			.footer-size {
				font-weight: 400;
				font-size: 10px;
				line-height: 20px;
				text-align: right;
			}

			.card-content {
				margin-right: 50%;
			}


			
			.contacts-item-link {
				font-size: 13px;
			}

			.header-about {
				padding-right: 7px;
			}

			.footer-anotation {
				font-size: 10px;
			}
			
			.contacts div {
				display: inline-block;
				white-space: nowrap;
			}
			.contacts-item-link svg {
				margin-right: 5%;
			}
		}

		@media screen and (max-width: 480px) {
			.container-img {
				width: 100vw;
				margin-left: 0px;
				margin-right: 0px;
			}

			.container-img {
				margin-bottom: calc(3em + 10vh);
			}

			.header-about div + div {
				margin-top: 5%;
			}

			.card-content div + div {
				margin-top: 6%;
			}


			.card-link-container {
				padding-top: 13%;
				width: 100%;
				text-align: center;
			}

			.card-link-button {
				font-size: 24px;
				padding: 6%;
				padding-left: 16%;
				padding-right: 16%;
				border-radius: 8px 8px 8px 8px;
				background: #0089C3;
				color: white;
				font-weight: 700;
				line-height: 8px;
			}

			.container-info {
				margin-left: 10%;
				margin-right: 10%;
			}

			.info-size {
				font-weight: 400;
				font-size: 14px;
				line-height: 18px;
			}

			.footer-nav-item {
				font-weight: 700;
				font-size: 12px;
				line-height: 21px;
				letter-spacing: 0.3px;
				margin-right: 5%;
				margin-left: 5%;
			}

			.container-card {
				width: 80%;
				margin-top: 10%;
			}

			.contacts div {
				display: inline-block;
				white-space: nowrap;
			}

			.contacts-item-link svg {
				margin-right: 5%;
			}

			.footer-nav-item {
				font-size: 12px;
				margin-top: 7%;
			}
		}
		
		@media screen and (max-width: 425px) {
			
		}

		@media screen and (max-width: 375px) {
			
		}

		@media screen and (max-width: 320px) {
			.card-content {
				margin-top: 0px;
			}

			.card-content div + div {
				margin-top: 5%;
			}



			.card-link-container {
				padding-top: 12%;
				width: 100%;
				text-align: center;
			}

			.card-link-button {
				padding: 6%;
				padding-left: 16%;
				padding-right: 16%;
				border-radius: 8px 8px 8px 8px;
				background: #0089C3;
				color: white;

				font-weight: 700;
				font-size: 16px;
				line-height: 21px;
			}

			.container-card {
				width: 80%;
				margin-top: 10%;
				margin-left: 10%;
			}

			.info-size {
				font-weight: 400;
				font-size: 13px;
				line-height: 17px;
			}

			.footer-nav-item {
				font-weight: 700;
				font-size: 10px;
				line-height: 21px;
				letter-spacing: 0.4px;
				margin-right: 2%;
				margin-left: 3%;
			}

			.contacts-item {
				text-align: left;
				width: 100%;
				display: inline-block;
				margin-bottom: 0px;
			}

			.contacts-item-link {
				font-weight: 400;
				font-size: 11px;
				line-height: 27px;
				/* or 245% */

				letter-spacing: 0.54px;
			}

			.footer-anotation {
				margin-left: 5%;
				margin-right: 5%;
			}

			.footer-size {
				text-align: left;
				font-weight: 400;
				font-size: 8px;
				line-height: 9px;
			}
		}

		@media screen {
			a, p, span {
				font-family: Inter;
				text-decoration: none;
			}

			p {
				margin-block-start: 0px;
				margin-block-end: 0px;
			}

			body {
				min-width: 100vw;
				min-height: 100vh;
				margin: 0px!important;
				background: #373636;
			}

			.header {
				width: 100vw;
			}

			.main {
				background: white;
			}

			.about-label, .card-label {
				color: #5CB5DB;
			}

			.about-phone, .card-title {
				color: white;
			}

			.link-button {
				text-align: center;
				margin-top: 10%;
				margin-bottom: 5%;
			}

			.link-button a {
				color: white;
				border-radius: 8px 8px 8px 8px;
				background: #0089C3;
			}


			.footer-anotation p, .footer-anotation a {
				color: #888888;
			}
		}
	</style>
</head>
<body>
	<div class="header">
		<div class="header-root">
			<div class="header-logo">
				<svg class='logo-img' viewBox="0 0 345 85" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M126.495 28.6825H108.11V38.5634H124.324V46.8705H108.11V64.3614H99.4464V20.3169H126.511L126.495 28.6825Z" fill="white"/> <path d="M138.678 64.3616H130.121V20.3296H138.678V64.3616Z" fill="white"/> <path d="M170.033 64.3617H161.476V59.9535C159.105 63.293 156.331 64.9628 153.155 64.9628C150.143 64.9628 147.805 63.9763 146.141 62.0031C144.477 60.03 143.639 57.3403 143.628 53.9339V31.6716H152.189V51.3708C152.189 53.241 152.581 54.6742 153.365 55.6705C153.766 56.1693 154.277 56.5649 154.858 56.8247C155.439 57.0845 156.073 57.2011 156.707 57.165C157.364 57.1989 158.02 57.0821 158.625 56.8233C159.231 56.5645 159.772 56.1704 160.206 55.6705C161.047 54.6714 161.469 53.2382 161.472 51.3708V31.6716H170.033V64.3617Z" fill="white"/> <path d="M183.937 28.1942H175.017V20.3296H183.937V28.1942ZM183.693 64.3616H175.137V31.6716H183.693V64.3616Z" fill="white"/> <path d="M217.331 64.3616H208.77V59.849C206.44 63.2582 203.527 64.9627 200.031 64.9627C196.536 64.9627 193.612 63.5393 191.26 60.6923C188.867 57.8481 187.672 53.7822 187.675 48.4946V47.5219C187.675 42.2343 188.86 38.1684 191.231 35.3242C193.602 32.48 196.536 31.0565 200.031 31.0537C203.442 31.0537 206.355 32.6386 208.77 35.8084V20.3296H217.331V64.3616ZM208.889 48.3819V47.6513C208.889 44.924 208.287 42.738 207.082 41.0933C205.878 39.4485 204.365 38.6262 202.544 38.6262C200.737 38.6262 199.224 39.4485 198.006 41.0933C196.787 42.738 196.185 44.924 196.199 47.6513V48.3819C196.199 51.1064 196.801 53.2924 198.006 54.9399C199.21 56.5874 200.723 57.4098 202.544 57.407C204.357 57.407 205.869 56.5846 207.082 54.9399C208.295 53.2952 208.898 51.1092 208.889 48.3819Z" fill="white"/> <path d="M239.09 49.6632H221.428V41.2476H239.09V49.6632Z" fill="white"/> <path d="M269.768 64.3616H244.028V20.2585H252.692V55.9793H269.751L269.768 64.3616Z" fill="white"/> <path d="M281.761 28.1942H272.842V20.3296H281.761V28.1942ZM281.522 64.3616H272.961V31.6716H281.522V64.3616Z" fill="white"/> <path d="M313.104 64.3616H304.531V44.6624C304.531 42.7922 304.13 41.359 303.327 40.3627C302.917 39.8661 302.399 39.4726 301.813 39.2132C301.227 38.9539 300.59 38.8358 299.952 38.8683C299.296 38.8344 298.64 38.9512 298.035 39.21C297.43 39.4688 296.89 39.8629 296.457 40.3627C295.613 41.3618 295.191 42.795 295.191 44.6624V64.3616H286.63V31.6715H295.191V36.063C297.564 32.7235 300.337 31.0537 303.508 31.0537C306.561 31.0537 308.922 32.0389 310.592 34.0092C312.261 35.9796 313.095 38.6735 313.092 42.0909L313.104 64.3616Z" fill="white"/> <path d="M344.266 48.4443C344.266 49.5408 344.226 50.4954 344.147 51.308H324.859C325.621 55.6606 327.95 57.8368 331.848 57.8368C334.381 57.8368 336.773 56.8197 339.023 54.7853L342.88 60.0326C339.904 63.3721 336.126 65.0419 331.547 65.0419C327.168 65.0419 323.541 63.5113 320.667 60.45C317.793 57.3888 316.357 53.3841 316.36 48.436V47.8474C316.36 43.0078 317.695 39.0129 320.366 35.8626C321.594 34.3459 323.146 33.1313 324.906 32.3105C326.665 31.4897 328.586 31.0842 330.524 31.1246C334.944 31.1246 338.339 32.7401 340.71 35.9711C343.081 39.2021 344.266 43.3599 344.266 48.4443ZM336.015 45.5222C335.814 43.2458 335.241 41.4577 334.294 40.1581C333.877 39.5411 333.313 39.0394 332.656 38.6983C331.998 38.3571 331.267 38.1874 330.528 38.2044C329.787 38.1888 329.053 38.3522 328.387 38.6811C327.721 39.01 327.143 39.4948 326.699 40.0954C325.717 41.3561 325.084 43.1651 324.801 45.5222H336.015Z" fill="white"/> <path d="M0 0V85H83.9995V0H0ZM17.9964 76.3589H8.78779V41.1391H17.9964V76.3589ZM17.9964 21.8407V31.6339H8.78779V9.02514H23.8467C22.025 10.6159 20.5605 12.5824 19.5515 14.7927C18.5425 17.003 18.0123 19.406 17.9964 21.8407V21.8407ZM29.045 76.3589V41.1391H40.0442V31.6339H29.045V21.8407C29.045 18.0837 32.1888 15.0656 36.0588 15.0656H47.8418V61.9195C47.8533 64.7863 48.5667 67.6055 49.918 70.1252C51.2694 72.6449 53.2166 74.7866 55.5857 76.3589H29.045ZM74.9065 68.6946H65.5122C63.7458 68.6836 62.0558 67.9641 60.8128 66.694C59.5699 65.4239 58.8756 63.7069 58.8822 61.9195V9.02514H74.9065V68.6946Z" fill="white"/> </svg>
			</div>
			<div class="header-about">
				<div class="about-label">
					<span>Многоканальный телефон</p>
				</div>
				<div>
					<a class="about-phone" href="tel:+74959844100">+7 (495) 984-41-00</a>
				</div>
			</div>
		</div>
		<div style="clear: both;"></div>
	</div>
	<div class="main" style="">
		<div class="main-container">
			<div class="container">
				<div class="container-card">
					<div class="card-content">
						<div>
							<p class="card-label">Вебинар</p>
						</div>
						<div class="card-title">
							<span><b>Альтернативные стандарты фитингов</b></span>
						</div>
						<div>
							<span class="card-time">Дата и время:</span>
							<div class="card-date">
								<span>8 июня 2022 в 11:00</span>
							</div>
						</div>
						<div class="card-link-container link-container">
							<a class="card-link-button link-button" href="#">Начать просмотр</a>
						</div>
					</div>
				</div>

				<div class="container-img"></div>
				<div class="container-info">
					<div class="info-text">
						<div>
							<span class="info-size">Здравствуйте!<br>Сегодня состоится Вебинар "Альтернативные стандарты фитингов".</span>
						</div>
						<div>
							<p class="info-size">Трансляция доступна</p>
						</div>
						<div class="info-container">
							<a class="info-container-link info-size" style="padding: 7px;" href="#">по ссылке</a>
						</div>
					 	<div>
					 		<p class="info-size">Не пропустите!</p>
					 	</div>
					</div>
				</div>
				<div class='info-footer'>
					<p class="info-size">Вебинар 08 июня в 11:00 “Альтернативные стандарты фитингов”  (другие линейки Hy-lok соединителей и где они применяются. Резьбовые, приварные, на чистые среды, под шланги, на вакуум и др.)</p>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div class="footer-nav">
			<div class="footer-nav-item">
				<a href="#">Новости</a>
			</div>
			<div class="footer-nav-item">
				<a href="#">Продукция</a>
			</div>
			<div class="footer-nav-item">
				<a href="#">О компании</a>
			</div>
			<div class="footer-nav-item">
				<a href="#">Сертификаты</a>
			</div>
		</div>
		<div class="contacts">
			<div class="contacts-item">
				<a class="contacts-item-link" href="tel:+74959844100">
					<svg  viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.1419 1.19235e-06H4.70967C4.21565 -0.000392777 3.72639 0.0968471 3.26986 0.286162C2.81333 0.475477 2.39846 0.753155 2.04899 1.10333C1.69952 1.4535 1.42231 1.86931 1.23316 2.32697C1.04402 2.78464 0.946655 3.2752 0.946655 3.77061V13.2294C0.946655 14.2294 1.34279 15.1885 2.04793 15.8956C2.75307 16.6027 3.70946 17 4.70668 17H14.1389C15.1361 17 16.0925 16.6027 16.7976 15.8956C17.5027 15.1885 17.8989 14.2294 17.8989 13.2294V3.77061C17.8989 2.7711 17.5032 1.81249 16.7987 1.10545C16.0942 0.398405 15.1386 0.000796031 14.1419 1.19235e-06ZM13.4601 13.5502C12.756 14.2069 11.9083 14.2924 11.0277 14.0375C9.83168 13.6897 8.86737 12.943 8.04659 12.0225C6.49624 10.2864 5.40636 8.32984 5.1537 5.95952C5.02064 4.70615 5.50055 3.75862 6.44392 3.0075C6.94027 2.61319 7.37083 2.71664 7.68479 3.26537C7.79412 3.45313 7.88763 3.64972 7.96436 3.85308C8.53098 5.37182 8.66405 5.30735 7.28413 6.10195C6.86552 6.34483 6.67713 6.68966 6.84458 7.13493C7.56668 9.05847 8.60724 10.7586 10.2966 12.0225C10.4043 11.958 10.4461 11.9385 10.479 11.913C12.0892 10.7661 12.2895 10.8081 13.5528 12.3133C13.9654 12.8126 13.8533 13.1829 13.4601 13.5502Z" fill="#0089C4"/> </svg>+7 (495) 984-41-00
				</a>
			</div>
			<div class="contacts-item">
				<a class="contacts-item-link" href="mailto:mail@fluid-line.ru">
					<svg  viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.14 0H4.70552C3.70847 0.000374139 2.75239 0.374429 2.04751 1.03992C1.34263 1.70541 0.946655 2.60785 0.946655 3.54881V12.4512C0.946655 13.3921 1.34263 14.2946 2.04751 14.9601C2.75239 15.6256 3.70847 15.9996 4.70552 16H14.14C15.1371 15.9996 16.0932 15.6256 16.798 14.9601C17.5029 14.2946 17.8989 13.3921 17.8989 12.4512V3.54881C17.8989 2.60785 17.5029 1.70541 16.798 1.03992C16.0932 0.374429 15.1371 0.000374139 14.14 0ZM15.5605 11.7457C15.396 12.2043 14.9325 12.4766 14.2911 12.4766H9.42278C7.79304 12.4766 6.16381 12.4766 4.53507 12.4766C3.91457 12.4766 3.47947 12.2212 3.30005 11.7711C3.18941 11.4959 3.22231 11.3943 3.48097 11.2405C4.90886 10.3939 6.33973 9.54723 7.76613 8.70059C7.85611 8.63686 7.96481 8.60101 8.07726 8.59798C8.18972 8.59495 8.30041 8.62488 8.3941 8.68366C8.64978 8.82477 8.90695 8.97716 9.15215 9.13661C9.22688 9.19354 9.32002 9.22459 9.41605 9.22459C9.51209 9.22459 9.60522 9.19354 9.67994 9.13661C9.94758 8.96587 10.2287 8.81207 10.4963 8.63992C10.5654 8.58912 10.65 8.56071 10.7375 8.55893C10.8251 8.55715 10.9109 8.58209 10.9822 8.63004C12.4505 9.50678 13.9183 10.3821 15.3855 11.256C15.4764 11.3002 15.5455 11.376 15.5781 11.4674C15.6108 11.5588 15.6044 11.6586 15.5605 11.7457ZM3.26716 10.3953V5.60614L7.25478 8.00494L3.26716 10.3953ZM11.5908 8.00353L15.5799 5.60473V10.3896L11.5908 8.00353ZM15.2868 4.8103C13.701 5.75853 12.1131 6.70488 10.5232 7.64935C10.2631 7.80457 10.0014 7.95696 9.74873 8.12206C9.6576 8.1909 9.54476 8.22911 9.42805 8.23064C9.31134 8.23218 9.19742 8.19694 9.10431 8.13052C7.22837 7.00168 5.34794 5.87565 3.46303 4.75245C3.41816 4.73237 3.37796 4.7041 3.34475 4.66925C3.31154 4.63441 3.28599 4.59369 3.26958 4.54946C3.25317 4.50523 3.24623 4.45836 3.24915 4.41158C3.25207 4.3648 3.2648 4.31903 3.2866 4.27692C3.45705 3.81127 3.83682 3.54317 4.43639 3.53188C5.33349 3.51495 6.23059 3.52059 7.1277 3.51918H9.42278H14.2612C14.765 3.51918 15.1971 3.65323 15.4707 4.08361C15.6831 4.42649 15.6397 4.60005 15.2868 4.8103Z" fill="#0089C4"/> </svg>mail@fluid-line.ru
				</a>
			</div>
			<div class="contacts-item">
				<a class="contacts-item-link" href="tel:+74959844100">
					<svg  viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.1359 0.0732449H4.70668C4.21298 0.0730479 3.72407 0.170389 3.26789 0.359717C2.81171 0.549044 2.39721 0.826649 2.04804 1.17666C1.69887 1.52668 1.42188 1.94225 1.23291 2.39964C1.04393 2.85702 0.946655 3.34726 0.946655 3.84236V13.3026C0.947844 14.3019 1.34451 15.2598 2.04952 15.9659C2.75453 16.6721 3.71024 17.0687 4.70668 17.0687H14.1389C15.1358 17.0687 16.092 16.6717 16.7971 15.9649C17.5022 15.2581 17.8985 14.2994 17.8989 13.2996V3.83936C17.8985 3.34427 17.8009 2.8541 17.6115 2.39686C17.4222 1.93963 17.1449 1.52428 16.7954 1.17454C16.446 0.824805 16.0312 0.547536 15.5749 0.358573C15.1186 0.169609 14.6296 0.0726539 14.1359 0.0732449ZM13.2688 7.07474C13.2324 7.39247 13.1612 7.70521 13.0565 8.00728C12.828 8.70471 12.5352 9.37929 12.1819 10.0223C11.9427 10.472 11.693 10.9113 11.4239 11.3401C11.0726 11.9023 10.7063 12.4541 10.331 12.9983C10.0604 13.3926 9.76441 13.7704 9.48035 14.1557C9.4654 14.1767 9.45493 14.2007 9.44148 14.2232H9.41606C9.35177 14.1347 9.29047 14.0463 9.22469 13.9608C8.73431 13.3131 8.26786 12.65 7.82533 11.9713C7.43662 11.3716 7.06736 10.7629 6.73097 10.1332C6.3734 9.48257 6.07325 8.80182 5.83395 8.09873C5.72318 7.79036 5.64451 7.47132 5.59922 7.14671C5.56187 6.83047 5.56187 6.51092 5.59922 6.19468C5.64288 5.81916 5.74372 5.45258 5.89822 5.10773C6.23463 4.33985 6.81215 3.70332 7.54277 3.29513C7.97541 3.04907 8.45269 2.89208 8.94661 2.83336C9.66557 2.74114 10.3958 2.85661 11.0516 3.1662C11.8258 3.52539 12.4575 4.13458 12.8457 4.89633C13.0413 5.27134 13.1723 5.67687 13.2329 6.09573C13.2857 6.41927 13.2977 6.74819 13.2688 7.07474Z" fill="#0089C4"/> </svg>Москва, ул.Большая Cеменовская, д.49
				</a>
			</div>
		</div>
		<hr>
		<div class="footer-anotation">
			<div>
				<p class="footer-size">Вы получили это письмо, потому что подписаны на еженедельную рассылку Fluid-Line.</p>
			</div>
			<div class="footer-size">
				<p><a href="#">
					<svg class='footer-size-svg' style='margin-right: 5px;'  viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M4.11389 4.13037L9.38771 9.33785" stroke="#7D7D7D" stroke-miterlimit="10"/> <path d="M9.38771 4.13037L4.11389 9.33785" stroke="#7D7D7D" stroke-miterlimit="10"/> <path d="M6.83704 12.6381C10.0918 12.6381 12.7302 10.0328 12.7302 6.81906C12.7302 3.60528 10.0918 1 6.83704 1C3.58232 1 0.943848 3.60528 0.943848 6.81906C0.943848 10.0328 3.58232 12.6381 6.83704 12.6381Z" stroke="#7D7D7D" stroke-miterlimit="10"/> </svg>Отписаться
				</a></p>
			</div>
		</div>
	</div>
</body>
</html>