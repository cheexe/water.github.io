<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"><meta name="author" content="Dynata"><meta name="description" content="Op deze website vind je de digitale versie van de Spectrum Planner!"><meta name="keywords" content="Spectrum,Brabant,Planner,Online,Huiswerk,Agenda,Leren,Studeren"><meta name="robots" content="noimageindex">		<link rel="stylesheet" type="text/css" href="https://spectrumplanner.nl/style/spectrumplanner.css">
		
		<script src="https://spectrumplanner.nl/includes/jquery/jquery-2.1.4.min.js"></script>
		<script src="https://spectrumplanner.nl/js/agendaplanner-shared-functions.js"></script>
		<script src="https://spectrumplanner.nl/js/planner-home.js"></script>
		<title>Agenda | Spectrum Planner</title>
		<link rel='shortcut icon' type='image/x-icon' href='https://spectrumplanner.nl/style/images/favicon.ico' />
	</head>
	<body>
		<noscript>
			Je moet javascript ingeschakeld hebben om de Spectrum Planner te kunnen gebruiken!
		</noscript>		
		<div id="wrapper">	
			<div id="header">
				
<div class="sp-logo test">
	<h1 class="sp-logo-s">SPECTRUM</h1><h1 class="sp-logo-p">PLANNER</h1>
</div>
<div id="menu">
	<ul>
		<li><a href="https://spectrumplanner.nl">Home</a></li>
		<li><a href="https://spectrumplanner.nl/about.php">Over</a></li>
		<li><a href="https://spectrumplanner.nl/contact.php">Contact</a></li>
		<ul style="float:right;list-style-type:none;">
			<li><a id='username'>Welkom Vinz Laros</a></li><li class='dropdownlabelli'>
					<a href='https://spectrumplanner.nl/planner-home.php'>Plannen</a>
					<ul class='dropdown'>
						<li><a href='https://spectrumplanner.nl/howtouse.php' onclick="window.open('https://spectrumplanner.nl/howtouse.php','Hoe werkt de Spectrum Planner | Spectrum Planner', 'width=980,height=665,scrollbars=no,toolbar=no,location=no'); return false">Hoe te gebruiken</a></li>
						<li><a href='https://spectrumplanner.nl/7-stappen.php' onclick="window.open('https://spectrumplanner.nl/7-stappen.php','Het 7 Stappen Plan | Spectrum Planner', 'width=445,height=800,scrollbars=yes,toolbar=no,location=no'); return false">Het 7 stappen plan</a></li>
						<li><a href='https://spectrumplanner.nl/werkbladen.php'>Werkbladen</a></li>
					</ul>
				</li><li><a href='https://spectrumplanner.nl/account.php'>Instellingen</a></li><li><a href='https://spectrumplanner.nl/logout.php'>Logout</a></li>		</ul>
	</ul>
</div>

<div id="loginBox">
	<form action="https://spectrumplanner.nl/login-process.php" method="post">
		<input type="text" name="email" placeholder="E-Mailadres" required>
		<input type="password" name="wachtwoord" placeholder="Wachtwoord" required>
		<input type="submit" value="Inloggen">
	</form>
</div>			</div>		
			<div id="content">
				<div id="agendabox">
					<div id="agendaomschrijving">
						<h1 class="agendatitle">Agenda</h1>
						<div id="agendatoolbar">
							<ul>
								<li><a class="weergegevenweeknragenda">Week XX</a></li>
								<li><a onclick="agendanextweek()">Volgende Week</a></li>
								<li><a onclick="agendathisweek()">Huidige Week</a></li>
								<li><a onclick="agendapreviousweek()">Vorige Week</a></li>
								<li><a id="wanneeraf">Wanneer moet ik mijn huiswerk af hebben?</a></li>
							</ul>
						</div>
					</div>
					
					<div id="agendatable">
						<table>
							<tr>
								<th class="maandagagendalabel">Maandag XX-XX-XXXX</th>
								<th>&larr;</th>
								<th class="dinsdagagendalabel">Dinsdag XX-XX-XXXX</th>
								<th>&larr;</th>
								<th class="woensdagagendalabel">Woensdag XX-XX-XXXX</th>
								<th>&larr;</th>
								<th class="donderdagagendalabel">Donderdag XX-XX-XXXX</th>
								<th>&larr;</th>
								<th class="vrijdagagendalabel">Vrijdag XX-XX-XXXX</th>
								<th>&larr;</th>
								<th class="zaterdagagendalabel">Zaterdag XX-XX-XXXX</th>
								<th>&larr;</th>
								<th class="zondagagendalabel">Zondag XX-XX-XXXX</th>
								<th>&larr;</th>
							</tr>
							
							<tr>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(0, 1)" class="afspraaktext agendamaandageen"></a></td>
								<td class="pijltje pijltjemaandageen"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(1, 1)" class="afspraaktext agendadinsdageen"></a></td>
								<td class="pijltje pijltjedinsdageen"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(2, 1)" class="afspraaktext agendawoensdageen"></a></td>
								<td class="pijltje pijltjewoensdageen"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(3, 1)" class="afspraaktext agendadonderdageen"></a></td>
								<td class="pijltje pijltjedonderdageen"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(4, 1)" class="afspraaktext agendavrijdageen"></a></p></td>
								<td class="pijltje pijltjevrijdageen"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(5, 1)" class="afspraaktext agendazaterdageen"></a></td>
								<td class="pijltje pijltjezaterdageen"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(6, 1)" class="afspraaktext agendazondageen"></a></td>
								<td class="pijltje pijltjezondageen"></td>
							</tr>
							<tr>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(0, 2)" class="afspraaktext agendamaandagtwee"></a></td>
								<td class="pijltje pijltjemaandagtwee"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(1, 2)" class="afspraaktext agendadinsdagtwee"></a></td>
								<td class="pijltje pijltjedinsdagtwee"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(2, 2)" class="afspraaktext agendawoensdagtwee"></a></td>
								<td class="pijltje pijltjewoensdagtwee"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(3, 2)" class="afspraaktext agendadonderdagtwee"></a></td>
								<td class="pijltje pijltjedonderdagtwee"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(4, 2)" class="afspraaktext agendavrijdagtwee"></a></p></td>
								<td class="pijltje pijltjevrijdagtwee"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(5, 2)" class="afspraaktext agendazaterdagtwee"></a></td>
								<td class="pijltje pijltjezaterdagtwee"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(6, 2)" class="afspraaktext agendazondagtwee"></a></td>
								<td class="pijltje pijltjezondagtwee"></td>
							</tr>
							<tr>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(0, 3)" class="afspraaktext agendamaandagdrie"></a></td>
								<td class="pijltje pijltjemaandagdrie"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(1, 3)" class="afspraaktext agendadinsdagdrie"></a></td>
								<td class="pijltje pijltjedinsdagdrie"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(2, 3)" class="afspraaktext agendawoensdagdrie"></a></td>
								<td class="pijltje pijltjewoensdagdrie"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(3, 3)" class="afspraaktext agendadonderdagdrie"></a></td>
								<td class="pijltje pijltjedonderdagdrie"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(4, 3)" class="afspraaktext agendavrijdagdrie"></a></p></td>
								<td class="pijltje pijltjevrijdagdrie"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(5, 3)" class="afspraaktext agendazaterdagdrie"></a></td>
								<td class="pijltje pijltjezaterdagdrie"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(6, 3)" class="afspraaktext agendazondagdrie"></a></td>
								<td class="pijltje pijltjezondagdrie"></td>
							</tr>
							<tr>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(0, 4)" class="afspraaktext agendamaandagvier"></a></td>
								<td class="pijltje pijltjemaandagvier"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(1, 4)" class="afspraaktext agendadinsdagvier"></a></td>
								<td class="pijltje pijltjedinsdagvier"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(2, 4)" class="afspraaktext agendawoensdagvier"></a></td>
								<td class="pijltje pijltjewoensdagvier"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(3, 4)" class="afspraaktext agendadonderdagvier"></a></td>
								<td class="pijltje pijltjedonderdagvier"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(4, 4)" class="afspraaktext agendavrijdagvier"></a></p></td>
								<td class="pijltje pijltjevrijdagvier"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(5, 4)" class="afspraaktext agendazaterdagvier"></a></td>
								<td class="pijltje pijltjezaterdagvier"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(6, 4)" class="afspraaktext agendazondagvier"></a></td>
								<td class="pijltje pijltjezondagvier"></td>
							</tr>
							<tr>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(0, 5)" class="afspraaktext agendamaandagvijf"></a></td>
								<td class="pijltje pijltjemaandagvijf"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(1, 5)" class="afspraaktext agendadinsdagvijf"></a></td>
								<td class="pijltje pijltjedinsdagvijf"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(2, 5)" class="afspraaktext agendawoensdagvijf"></a></td>
								<td class="pijltje pijltjewoensdagvijf"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(3, 5)" class="afspraaktext agendadonderdagvijf"></a></td>
								<td class="pijltje pijltjedonderdagvijf"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(4, 5)" class="afspraaktext agendavrijdagvijf"></a></p></td>
								<td class="pijltje pijltjevrijdagvijf"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(5, 5)" class="afspraaktext agendazaterdagvijf"></a></td>
								<td class="pijltje pijltjezaterdagvijf"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(6, 5)" class="afspraaktext agendazondagvijf"></a></td>
								<td class="pijltje pijltjezondagvijf"></td>
							</tr>
							<tr>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(0, 6)" class="afspraaktext agendamaandagzes"></a></td>
								<td class="pijltje pijltjemaandagzes"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(1, 6)" class="afspraaktext agendadinsdagzes"></a></td>
								<td class="pijltje pijltjedinsdagzes"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(2, 6)" class="afspraaktext agendawoensdagzes"></a></td>
								<td class="pijltje pijltjewoensdagzes"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(3, 6)" class="afspraaktext agendadonderdagzes"></a></td>
								<td class="pijltje pijltjedonderdagzes"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(4, 6)" class="afspraaktext agendavrijdagzes"></a></p></td>
								<td class="pijltje pijltjevrijdagzes"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(5, 6)" class="afspraaktext agendazaterdagzes"></a></td>
								<td class="pijltje pijltjezaterdagzes"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(6, 6)" class="afspraaktext agendazondagzes"></a></td>
								<td class="pijltje pijltjezondagzes"></td>
							</tr>
							<tr>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(0, 7)" class="afspraaktext agendamaandagzeven"></a></td>
								<td class="pijltje pijltjemaandagzeven"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(1, 7)" class="afspraaktext agendadinsdagzeven"></a></td>
								<td class="pijltje pijltjedinsdagzeven"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(2, 7)" class="afspraaktext agendawoensdagzeven"></a></td>
								<td class="pijltje pijltjewoensdagzeven"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(3, 7)" class="afspraaktext agendadonderdagzeven"></a></td>
								<td class="pijltje pijltjedonderdagzeven"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(4, 7)" class="afspraaktext agendavrijdagzeven"></a></p></td>
								<td class="pijltje pijltjevrijdagzeven"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(5, 7)" class="afspraaktext agendazaterdagzeven"></a></td>
								<td class="pijltje pijltjezaterdagzeven"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(6, 7)" class="afspraaktext agendazondagzeven"></a></td>
								<td class="pijltje pijltjezondagzeven"></td>
							</tr>
							<tr>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(0, 8)" class="afspraaktext agendamaandagacht"></a></td>
								<td class="pijltje pijltjemaandagacht"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(1, 8)" class="afspraaktext agendadinsdagacht"></a></td>
								<td class="pijltje pijltjedinsdagacht"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(2, 8)" class="afspraaktext agendawoensdagacht"></a></td>
								<td class="pijltje pijltjewoensdagacht"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(3, 8)" class="afspraaktext agendadonderdagacht"></a></td>
								<td class="pijltje pijltjedonderdagacht"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(4, 8)" class="afspraaktext agendavrijdagacht"></a></p></td>
								<td class="pijltje pijltjevrijdagacht"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(5, 8)" class="afspraaktext agendazaterdagacht"></a></td>
								<td class="pijltje pijltjezaterdagacht"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(6, 8)" class="afspraaktext agendazondagacht"></a></td>
								<td class="pijltje pijltjezondagacht"></td>
							</tr>
							<tr>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(0, 9)" class="afspraaktext agendamaandagnegen"></a></td>
								<td class="pijltje pijltjemaandagnegen"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(1, 9)" class="afspraaktext agendadinsdagnegen"></a></td>
								<td class="pijltje pijltjedinsdagnegen"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(2, 9)" class="afspraaktext agendawoensdagnegen"></a></td>
								<td class="pijltje pijltjewoensdagnegen"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(3, 9)" class="afspraaktext agendadonderdagnegen"></a></td>
								<td class="pijltje pijltjedonderdagnegen"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(4, 9)" class="afspraaktext agendavrijdagnegen"></a></p></td>
								<td class="pijltje pijltjevrijdagnegen"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(5, 9)" class="afspraaktext agendazaterdagnegen"></a></td>
								<td class="pijltje pijltjezaterdagnegen"></td>
								<td class="afspraak"><a onclick="agendacreatechangeitemshowform(6, 9)" class="afspraaktext agendazondagnegen"></a></td>
								<td class="pijltje pijltjezondagnegen"></td>
							</tr>
						</table>
					</div>
				</div>
				
				<div id="plannerbox">
					<div id="planneromschrijving">
						<h1 class="plannertitle">Planner</h1>
						<div id="plannertoolbar">
							<ul>
								<li><a class="weergegevenweeknrplanner">Week XX</a></li>
								<li><a onclick="plannernextweek()">Volgende Week</a></li>
								<li><a onclick="plannerthisweek()">Huidige Week</a></li>
								<li><a onclick="plannerpreviousweek()">Vorige Week</a></li>
								<li><a id="wanneeraf">Wanneer ga ik mijn huiswerk maken?</a></li>
							</ul>
						</div>
					</div>
					
					<div id="plannertable">
						<table>
							<tr>
								<th class="maandagplannerlabel">
									Maandag<br>
									XX-XX-XXXX
								</th>
								<th>1-2-3</th>
								<th>&#128339;</th>
								<th>&#10003;</th>
								<th class="dinsdagplannerlabel">
									Dinsdag<br>
									XX-XX-XXXX
								</th>
								<th>1-2-3</th>
								<th>&#128339;</th>
								<th>&#10003;</th>
								<th class="woensdagplannerlabel">
									Woensdag<br>
									XX-XX-XXXX
								</th>
								<th>1-2-3</th>
								<th>&#128339;</th>
								<th>&#10003;</th>
								<th class="donderdagplannerlabel">
									Donderdag<br>
									XX-XX-XXXX
								</th>
								<th>1-2-3</th>
								<th>&#128339;</th>
								<th>&#10003;</th>
								<th class="vrijdagplannerlabel">
									Vrijdag<br>
									XX-XX-XXXX
								</th>
								<th>1-2-3</th>
								<th>&#128339;</th>
								<th>&#10003;</th>
								<th class="zaterdagplannerlabel">
									Zaterdag<br>
									XX-XX-XXXX
								</th>
								<th>1-2-3</th>
								<th>&#128339;</th>
								<th>&#10003;</th>
								<th class="zondagplannerlabel">
									Zondag<br>
									XX-XX-XXXX
								</th>
								<th>1-2-3</th>
								<th>&#128339;</th>
								<th>&#10003;</th>
							</tr>
							<tr>
								<td class="planitem planitemmaandageen"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordemaandageen"></td>
								<td class="blokje planitemtijdmaandageen"></td>
								<td class="blokje planitemvinkmaandageen"></td>
								<td class="planitem planitemdinsdageen"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordedinsdageen"></td>
								<td class="blokje planitemtijddinsdageen"></td>
								<td class="blokje planitemvinkdinsdageen"></td>
								<td class="planitem planitemwoensdageen"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordewoensdageen"></td>
								<td class="blokje planitemtijdwoensdageen"></td>
								<td class="blokje planitemvinkwoensdageen"></td>
								<td class="planitem planitemdonderdageen"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordedonderdageen"></td>
								<td class="blokje planitemtijddonderdageen"></td>
								<td class="blokje planitemvinkdonderdageen"></td>
								<td class="planitem planitemvrijdageen"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordevrijdageen"></td>
								<td class="blokje planitemtijdvrijdageen"></td>
								<td class="blokje planitemvinkvrijdageen"></td>
								<td class="planitem planitemzaterdageen"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordezaterdageen"></td>
								<td class="blokje planitemtijdzaterdageen"></td>
								<td class="blokje planitemvinkzaterdageen"></td>
								<td class="planitem planitemzondageen"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordezondageen"></td>
								<td class="blokje planitemtijdzondageen"></td>
								<td class="blokje planitemvinkzondageen"></td>
							</tr>
							<tr>
								<td class="planitem planitemmaandagtwee"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordemaandagtwee"></td>
								<td class="blokje planitemtijdmaandagtwee"></td>
								<td class="blokje planitemvinkmaandagtwee"></td>
								<td class="planitem planitemdinsdagtwee"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordedinsdagtwee"></td>
								<td class="blokje planitemtijddinsdagtwee"></td>
								<td class="blokje planitemvinkdinsdagtwee"></td>
								<td class="planitem planitemwoensdagtwee"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordewoensdagtwee"></td>
								<td class="blokje planitemtijdwoensdagtwee"></td>
								<td class="blokje planitemvinkwoensdagtwee"></td>
								<td class="planitem planitemdonderdagtwee"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordedonderdagtwee"></td>
								<td class="blokje planitemtijddonderdagtwee"></td>
								<td class="blokje planitemvinkdonderdagtwee"></td>
								<td class="planitem planitemvrijdagtwee"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordevrijdagtwee"></td>
								<td class="blokje planitemtijdvrijdagtwee"></td>
								<td class="blokje planitemvinkvrijdagtwee"></td>
								<td class="planitem planitemzaterdagtwee"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordezaterdagtwee"></td>
								<td class="blokje planitemtijdzaterdagtwee"></td>
								<td class="blokje planitemvinkzaterdagtwee"></td>
								<td class="planitem planitemzondagtwee"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordezondagtwee"></td>
								<td class="blokje planitemtijdzondagtwee"></td>
								<td class="blokje planitemvinkzondagtwee"></td>
							</tr>
							<tr>
								<td class="planitem planitemmaandagdrie"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordemaandagdrie"></td>
								<td class="blokje planitemtijdmaandagdrie"></td>
								<td class="blokje planitemvinkmaandagdrie"></td>
								<td class="planitem planitemdinsdagdrie"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordedinsdagdrie"></td>
								<td class="blokje planitemtijddinsdagdrie"></td>
								<td class="blokje planitemvinkdinsdagdrie"></td>
								<td class="planitem planitemwoensdagdrie"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordewoensdagdrie"></td>
								<td class="blokje planitemtijdwoensdagdrie"></td>
								<td class="blokje planitemvinkwoensdagdrie"></td>
								<td class="planitem planitemdonderdagdrie"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordedonderdagdrie"></td>
								<td class="blokje planitemtijddonderdagdrie"></td>
								<td class="blokje planitemvinkdonderdagdrie"></td>
								<td class="planitem planitemvrijdagdrie"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordevrijdagdrie"></td>
								<td class="blokje planitemtijdvrijdagdrie"></td>
								<td class="blokje planitemvinkvrijdagdrie"></td>
								<td class="planitem planitemzaterdagdrie"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordezaterdagdrie"></td>
								<td class="blokje planitemtijdzaterdagdrie"></td>
								<td class="blokje planitemvinkzaterdagdrie"></td>
								<td class="planitem planitemzondagdrie"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordezondagdrie"></td>
								<td class="blokje planitemtijdzondagdrie"></td>
								<td class="blokje planitemvinkzondagdrie"></td>
							</tr>
							<tr>
								<td class="planitem planitemmaandagvier"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordemaandagvier"></td>
								<td class="blokje planitemtijdmaandagvier"></td>
								<td class="blokje planitemvinkmaandagvier"></td>
								<td class="planitem planitemdinsdagvier"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordedinsdagvier"></td>
								<td class="blokje planitemtijddinsdagvier"></td>
								<td class="blokje planitemvinkdinsdagvier"></td>
								<td class="planitem planitemwoensdagvier"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordewoensdagvier"></td>
								<td class="blokje planitemtijdwoensdagvier"></td>
								<td class="blokje planitemvinkwoensdagvier"></td>
								<td class="planitem planitemdonderdagvier"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordedonderdagvier"></td>
								<td class="blokje planitemtijddonderdagvier"></td>
								<td class="blokje planitemvinkdonderdagvier"></td>
								<td class="planitem planitemvrijdagvier"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordevrijdagvier"></td>
								<td class="blokje planitemtijdvrijdagvier"></td>
								<td class="blokje planitemvinkvrijdagvier"></td>
								<td class="planitem planitemzaterdagvier"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordezaterdagvier"></td>
								<td class="blokje planitemtijdzaterdagvier"></td>
								<td class="blokje planitemvinkzaterdagvier"></td>
								<td class="planitem planitemzondagvier"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordezondagvier"></td>
								<td class="blokje planitemtijdzondagvier"></td>
								<td class="blokje planitemvinkzondagvier"></td>
							</tr>
							<tr>
								<td class="planitem planitemmaandagvijf"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordemaandagvijf"></td>
								<td class="blokje planitemtijdmaandagvijf"></td>
								<td class="blokje planitemvinkmaandagvijf"></td>
								<td class="planitem planitemdinsdagvijf"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordedinsdagvijf"></td>
								<td class="blokje planitemtijddinsdagvijf"></td>
								<td class="blokje planitemvinkdinsdagvijf"></td>
								<td class="planitem planitemwoensdagvijf"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordewoensdagvijf"></td>
								<td class="blokje planitemtijdwoensdagvijf"></td>
								<td class="blokje planitemvinkwoensdagvijf"></td>
								<td class="planitem planitemdonderdagvijf"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordedonderdagvijf"></td>
								<td class="blokje planitemtijddonderdagvijf"></td>
								<td class="blokje planitemvinkdonderdagvijf"></td>
								<td class="planitem planitemvrijdagvijf"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordevrijdagvijf"></td>
								<td class="blokje planitemtijdvrijdagvijf"></td>
								<td class="blokje planitemvinkvrijdagvijf"></td>
								<td class="planitem planitemzaterdagvijf"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordezaterdagvijf"></td>
								<td class="blokje planitemtijdzaterdagvijf"></td>
								<td class="blokje planitemvinkzaterdagvijf"></td>
								<td class="planitem planitemzondagvijf"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordezondagvijf"></td>
								<td class="blokje planitemtijdzondagvijf"></td>
								<td class="blokje planitemvinkzondagvijf"></td>
							</tr>
							<tr>
								<td class="planitem planitemmaandagzes"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordemaandagzes"></td>
								<td class="blokje planitemtijdmaandagzes"></td>
								<td class="blokje planitemvinkmaandagzes"></td>
								<td class="planitem planitemdinsdagzes"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordedinsdagzes"></td>
								<td class="blokje planitemtijddinsdagzes"></td>
								<td class="blokje planitemvinkdinsdagzes"></td>
								<td class="planitem planitemwoensdagzes"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordewoensdagzes"></td>
								<td class="blokje planitemtijdwoensdagzes"></td>
								<td class="blokje planitemvinkwoensdagzes"></td>
								<td class="planitem planitemdonderdagzes"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordedonderdagzes"></td>
								<td class="blokje planitemtijddonderdagzes"></td>
								<td class="blokje planitemvinkdonderdagzes"></td>
								<td class="planitem planitemvrijdagzes"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordevrijdagzes"></td>
								<td class="blokje planitemtijdvrijdagzes"></td>
								<td class="blokje planitemvinkvrijdagzes"></td>
								<td class="planitem planitemzaterdagzes"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordezaterdagzes"></td>
								<td class="blokje planitemtijdzaterdagzes"></td>
								<td class="blokje planitemvinkzaterdagzes"></td>
								<td class="planitem planitemzondagzes"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordezondagzes"></td>
								<td class="blokje planitemtijdzondagzes"></td>
								<td class="blokje planitemvinkzondagzes"></td>
							</tr>
							<tr>
								<td class="planitem planitemmaandagzeven"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordemaandagzeven"></td>
								<td class="blokje planitemtijdmaandagzeven"></td>
								<td class="blokje planitemvinkmaandagzeven"></td>
								<td class="planitem planitemdinsdagzeven"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordedinsdagzeven"></td>
								<td class="blokje planitemtijddinsdagzeven"></td>
								<td class="blokje planitemvinkdinsdagzeven"></td>
								<td class="planitem planitemwoensdagzeven"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordewoensdagzeven"></td>
								<td class="blokje planitemtijdwoensdagzeven"></td>
								<td class="blokje planitemvinkwoensdagzeven"></td>
								<td class="planitem planitemdonderdagzeven"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordedonderdagzeven"></td>
								<td class="blokje planitemtijddonderdagzeven"></td>
								<td class="blokje planitemvinkdonderdagzeven"></td>
								<td class="planitem planitemvrijdagzeven"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordevrijdagzeven"></td>
								<td class="blokje planitemtijdvrijdagzeven"></td>
								<td class="blokje planitemvinkvrijdagzeven"></td>
								<td class="planitem planitemzaterdagzeven"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordezaterdagzeven"></td>
								<td class="blokje planitemtijdzaterdagzeven"></td>
								<td class="blokje planitemvinkzaterdagzeven"></td>
								<td class="planitem planitemzondagzeven"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordezondagzeven"></td>
								<td class="blokje planitemtijdzondagzeven"></td>
								<td class="blokje planitemvinkzondagzeven"></td>
							</tr>
							<tr>
								<td class="planitem planitemmaandagacht"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordemaandagacht"></td>
								<td class="blokje planitemtijdmaandagacht"></td>
								<td class="blokje planitemvinkmaandagacht"></td>
								<td class="planitem planitemdinsdagacht"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordedinsdagacht"></td>
								<td class="blokje planitemtijddinsdagacht"></td>
								<td class="blokje planitemvinkdinsdagacht"></td>
								<td class="planitem planitemwoensdagacht"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordewoensdagacht"></td>
								<td class="blokje planitemtijdwoensdagacht"></td>
								<td class="blokje planitemvinkwoensdagacht"></td>
								<td class="planitem planitemdonderdagacht"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordedonderdagacht"></td>
								<td class="blokje planitemtijddonderdagacht"></td>
								<td class="blokje planitemvinkdonderdagacht"></td>
								<td class="planitem planitemvrijdagacht"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordevrijdagacht"></td>
								<td class="blokje planitemtijdvrijdagacht"></td>
								<td class="blokje planitemvinkvrijdagacht"></td>
								<td class="planitem planitemzaterdagacht"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordezaterdagacht"></td>
								<td class="blokje planitemtijdzaterdagacht"></td>
								<td class="blokje planitemvinkzaterdagacht"></td>
								<td class="planitem planitemzondagacht"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordezondagacht"></td>
								<td class="blokje planitemtijdzondagacht"></td>
								<td class="blokje planitemvinkzondagacht"></td>
							</tr>
							<tr>
								<td class="planitem planitemmaandagnegen"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordemaandagnegen"></td>
								<td class="blokje planitemtijdmaandagnegen"></td>
								<td class="blokje planitemvinkmaandagnegen"></td>
								<td class="planitem planitemdinsdagnegen"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordedinsdagnegen"></td>
								<td class="blokje planitemtijddinsdagnegen"></td>
								<td class="blokje planitemvinkdinsdagnegen"></td>
								<td class="planitem planitemwoensdagnegen"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordewoensdagnegen"></td>
								<td class="blokje planitemtijdwoensdagnegen"></td>
								<td class="blokje planitemvinkwoensdagnegen"></td>
								<td class="planitem planitemdonderdagnegen"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordedonderdagnegen"></td>
								<td class="blokje planitemtijddonderdagnegen"></td>
								<td class="blokje planitemvinkdonderdagnegen"></td>
								<td class="planitem planitemvrijdagnegen"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordevrijdagnegen"></td>
								<td class="blokje planitemtijdvrijdagnegen"></td>
								<td class="blokje planitemvinkvrijdagnegen"></td>
								<td class="planitem planitemzaterdagnegen"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordezaterdagnegen"></td>
								<td class="blokje planitemtijdzaterdagnegen"></td>
								<td class="blokje planitemvinkzaterdagnegen"></td>
								<td class="planitem planitemzondagnegen"><a class="planitemtext"></a></td>
								<td class="blokje planitemvolgordezondagnegen"></td>
								<td class="blokje planitemtijdzondagnegen"></td>
								<td class="blokje planitemvinkzondagnegen"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div id="footer">
				
&copy; SpectrumPlanner.nl 2015 - 2020 | Alle rechten voorbehouden<br>
<a href="https://spectrumplanner.nl/privacy.php" target="_blank">Privacy Policy</a> | <a href="https://spectrumplanner.nl/conditions.php" target="_blank">Algemene Voorwaarden</a><br>
SpectrumPlanner.nl is een onderdeel van <a href="http://spectrumbrabant.nl/" target="_blank">Spectrum Brabant</a> | Website by <a href="http://dynata.nl" target="_blank">Dynata</a>

<input type="hidden" name="$urlroot" id="$urlroot" value="https://spectrumplanner.nl" />			</div>
		</div>
		
		<div id="overlay">
			<div id="inneroverlay">
				<div id="overlayagendaitemform">
					<h1 class="overlayagendaitemformtitle">Agenda Item Aanmaken</h1>
					<p class="overlayagendaitemformundertitle">Week 52, , Uur 1</p>
					<form>
						<input type="hidden" id="overlayagendaitemformHID">
						<input type="text" id="overlayagendaitemformvak" placeholder="Vak (TIP: Gebruik afkortingen)">

							<select id="overlayagendaitemformyear" style="width:97px;">
																	<option value="2019" >2019</option>
																	<option value="2020" selected="selected">2020</option>
																	<option value="2021" >2021</option>
															</select>								
							
							<select id="overlayagendaitemformweek" style="width:97px;">
																	<option value="1" >Week 1</option>
																	<option value="2" >Week 2</option>
																	<option value="3" >Week 3</option>
																	<option value="4" >Week 4</option>
																	<option value="5" >Week 5</option>
																	<option value="6" >Week 6</option>
																	<option value="7" >Week 7</option>
																	<option value="8" >Week 8</option>
																	<option value="9" >Week 9</option>
																	<option value="10" >Week 10</option>
																	<option value="11" >Week 11</option>
																	<option value="12" >Week 12</option>
																	<option value="13" >Week 13</option>
																	<option value="14" >Week 14</option>
																	<option value="15" >Week 15</option>
																	<option value="16" >Week 16</option>
																	<option value="17" >Week 17</option>
																	<option value="18" >Week 18</option>
																	<option value="19" >Week 19</option>
																	<option value="20" selected="selected">Week 20</option>
																	<option value="21" >Week 21</option>
																	<option value="22" >Week 22</option>
																	<option value="23" >Week 23</option>
																	<option value="24" >Week 24</option>
																	<option value="25" >Week 25</option>
																	<option value="26" >Week 26</option>
																	<option value="27" >Week 27</option>
																	<option value="28" >Week 28</option>
																	<option value="29" >Week 29</option>
																	<option value="30" >Week 30</option>
																	<option value="31" >Week 31</option>
																	<option value="32" >Week 32</option>
																	<option value="33" >Week 33</option>
																	<option value="34" >Week 34</option>
																	<option value="35" >Week 35</option>
																	<option value="36" >Week 36</option>
																	<option value="37" >Week 37</option>
																	<option value="38" >Week 38</option>
																	<option value="39" >Week 39</option>
																	<option value="40" >Week 40</option>
																	<option value="41" >Week 41</option>
																	<option value="42" >Week 42</option>
																	<option value="43" >Week 43</option>
																	<option value="44" >Week 44</option>
																	<option value="45" >Week 45</option>
																	<option value="46" >Week 46</option>
																	<option value="47" >Week 47</option>
																	<option value="48" >Week 48</option>
																	<option value="49" >Week 49</option>
																	<option value="50" >Week 50</option>
																	<option value="51" >Week 51</option>
																	<option value="52" >Week 52</option>
																	<option value="53" >Week 53</option>
															</select>								
							
														<select id="overlayagendaitemformday" style="width:97px;">
																	<option value="0">Maandag</option>
																	<option value="1">Dinsdag</option>
																	<option value="2">Woensdag</option>
																	<option value="3">Donderdag</option>
																	<option value="4">Vrijdag</option>
																	<option value="5">Zaterdag</option>
																	<option value="6">Zondag</option>
															</select>						
							
							<select id="overlayagendaitemformhour" style="width:96px;">
																	<option value="1">Uur 1</option>
																	<option value="2">Uur 2</option>
																	<option value="3">Uur 3</option>
																	<option value="4">Uur 4</option>
																	<option value="5">Uur 5</option>
																	<option value="6">Uur 6</option>
																	<option value="7">Uur 7</option>
																	<option value="8">Uur 8</option>
																	<option value="9">Uur 9</option>
															</select>						
						
						
						<select id="overlayagendaitemformtype">
							<option value="0">Maak a.u.b. een keuze</option>
							<option value="11">Maakwerk (MW)</option>
							<option value="12">Leerwerk (LRW)</option>
							<option value="13">Leeswerk (LSW)</option>
							<option value="2">Schriftelijke Overhoring (SO)</option>
							<option value="3">Proefwerk (PW)</option>
														<option value="5">Mondelinge Overhoring (MO)</option>
							<option value="6">Praktische Opdracht (PO)</option>
							<option value="7">Schoolexamen (SE)</option>
							<option value="8">Informatief (INFO)</option>
							<option value="9">Centraal Schriftelijk Examen (CSE)</option>
							<option value="10">Afspraak (AFSPR)</option>
						</select>
						<textarea id="overlayagendaitemformstof" placeholder="Opgegeven Stof"></textarea>
						<input class="overlayagendaitemformsave" type="button" value="Agenda Item Opslaan" onclick="agendacreatechangeitem()" />
						<input class="overlayagendaitemformremove" type="button" value="Agenda Item Verwijderen" onclick="agendaremoveitem()" />
						<input class="overlayagendaitemformcancel" type="button" value="Venster sluiten" onclick="closeoverlay()" />
					</form>
				</div>
				
				<div id="overlayplanneraddstudymoment">
					<h1 class="overlayplanneraddstudymomenttitle">Nieuw Leermoment aanmaken</h1>
					<p class="overlayplanneraddstudymomentundertitle">Leermoment aanmaken voor:</p>
					<div id="overlayplanneraddstudymomentinformation">
						<p class="overlayplanneraddstudymomentinformationvaktijdomschrijving"></p>
						Stof:<br>
						<p class="overlayplanneraddstudymomentinformationstof"></p><br>
						<a class="overlayplannerchangestudymomentagendaitem"onclick="plannerchangeitemopenagendaitem(jaar, week, dag, uur)">Agenda Item Openen</a>
					</div>
					<form>
						<p class="overlayplanneraddstudymomentundertitle">Stappen om het leermoment aan te maken:</p>
						<p class="overlayplanneraddstudymomentundertitle">1): Selecteer hieronder de week waarin je het leermoment wil aanmaken:</p>
						<div id="overlayplanneraddstudymomentweekselect">
							<ul>
								<li style="width:43px;"><a onclick="chooseplanweekprevious()">&#8722;</a></li>
								<li style="width:138px;"><a class="chooseplanweekdisplay"></a></li>
								<li style="width:43px;"><a onclick="chooseplanweeknext()">&#43;</a></li>
								<li style="width:240px;"><a onclick="chooseplanweekcurrent()" class="chooseplanthisweekdisplay">Deze Week</a></li>
							</ul>
						</div>
						<p class="overlayplanneraddstudymomentundertitle">2): Selecteer hieronder de dag waarop je het leermoment wil aanmaken:</p>
						<select id="overlayplanneraddstudymomentdag">
							<option value="0">Maandag</option>
							<option value="1">Dinsdag</option>
							<option value="2">Woensdag</option>
							<option value="3">Donderdag</option>
							<option value="4">Vrijdag</option>
							<option value="5">Zaterdag</option>
							<option value="6">Zondag</option>
						</select>
						<p class="overlayplanneraddstudymomentundertitle">3): Wil je alle stof in &#233;&#233;n keer maken of slechts een deel van de stof inplannen?</p>
						<div class="overlayplanneraddstudymomentaangepastestofbool"><input type="radio" name="overlayplanneraddstudymomentaangepastestofbool" id="overlayplanneraddstudymomentaangepastestofbool-false" value="0" checked> Alle Stof Inplannen&nbsp;&nbsp;&nbsp;<input type="radio" name="overlayplanneraddstudymomentaangepastestofbool" id="overlayplanneraddstudymomentaangepastestofbool-true" value="1"> Deel van de stof inplannen</div>
						<p class="overlayplanneraddstudymomentundertitle">4): Heb je gekozen om slechts een deel van de stof in te plannen? Geef dan hieronder aan wat je precies wil inplannen:</p>
						<textarea id="overlayplanneraddstudymomentaangepastestof" placeholder="In te plannen stof"></textarea>
						<p class="overlayplanneraddstudymomentundertitle">5): Weet je al hoeveel minuten tijd je gaat besteden aan het behandelen van de ingeplande stof? Vul dat dan hieronder in:</p>
						<input type="text" id="overlayplanneraddstudymomenttijd" placeholder="Voorbeeld: 15" autocomplete="off">
						<input class="overlayplanneraddstudymomentcreate" type="button" value="Agenda Item Inplannen" onclick="plannercreateitem(HID, day, hour)" />
						<input class="overlayplannerchangestudymomentremove" type="button" value="Planner Item verwijderen" onclick="removeplanneritem(PID)" />
						<input class="overlayplanneraddstudymomentcancel" type="button" value="Venster sluiten" onclick="returntoagendacreatechangeform(day, hour)" />
					</form>
				</div>
				
				<div id="overlayplannedtable">
					<h1 class="overlayplannedtabletitle">Agenda Item Inplannen</h1>
					<p class="overlayplannedtableundertitle">Je hebt dit item op de volgende momenten ingepland:</p>
					<p class="overlayplannedtableaddstudymoment"></p>
					<table id="overlayplannedtableid">
						<tr>
								<th>Dag</th>
								<th>Stof</th>
								<th>&#128339;</th>
								<th>&#10003;</th>
								<th>&#128295;</th>
								<th>&#10060;</th>
							</tr>
							
							<tr class="overlayplannedtabletrtoegevoegd">
								<td class="overlayplannedtabledag"></td>
								<td class="overlayplannedtablestof"></td>
								<td class="overlayplannedtableblokje">20</td>
								<td class="overlayplannedtableblokje">&#10003;</td>
								<td class="overlayplannedtableblokje">&#128295;</td>
								<td class="overlayplannedtableblokje">&#10060;</td>
							</tr>
					</table>
				</div>
			</div>
		</div>
		<div id="plannerchangeform">
			<div id="plannerchangeforminner">
				<div id="plannerchangetijdform">
					<h2 class="plannerchangeformtitle">Tijd Aanpassen</h2>
					<form>
						<input type="hidden" id="plannerchangetijdformPID">
						<p class="plannerchangeformundertitle">Ik ga aan deze taak ... minuten werken:</p>
						<input type="text" id="plannerchangetijdformtijd" placeholder="Voorbeeld: 15" autocomplete="off">
						<input type="button" id="plannerchangetijdformtijdbutton" value="Tijd Opslaan" onclick="plannerchangetijd()" />
						<input type="button" value="Venster sluiten" onclick="closeplannerchangeform()" />
					</form>
				</div>
				<div id="plannerchangevolgordeform">
					<h2 class="plannerchangeformtitle">Volgorde Aanpassen</h2>
					<form>
						<input type="hidden" id="plannerchangevolgordeformPID">
						<p class="plannerchangeformundertitle">Ik ga aan deze taak als ...<sup>e</sup>  werken:</p>
						<input type="text" id="plannerchangevolgordeformvolgorde" placeholder="Voorbeeld: 1" autocomplete="off">
						<input type="button" id="plannerchangevolgordeformvolgordebutton" value="Volgorde Opslaan" onclick="plannerchangevolgorde()" />
						<input type="button" value="Venster sluiten" onclick="closeplannerchangeform()" />
					</form>
				</div>
			</div>
		</div>
		<div id="successbox">
			<p class="successboxtext">Wijzigingen zijn succesvol opgeslagen!</p>
		</div>
	</body>
</html>