@extends('layouts.app')
@section ('title',  "| $page_name")

@section('content')
	<section id="header" class="header">
		<div class="row home-header">
			<div class="col-md-12 intro-section">		
				<div class="only-logo"> 
					<img class="logo" alt="Web-Design - Websites für kleine und mittlere Unternehmen" src="{{URL::to('/images/logo.png') }}">
				</div>
				<div id="intro-section" class="">
					<h1 class="intro white-text">Websites für kleine Unternehmen</h1>
					<h3 class="white-text">hochwertig, zuverlässig, preiswert</h3> 
					<a title="Websites für kleine und mittlere Unternehmen" href="http://severus.es/referenzen-webdesign-projekte" id="inpage_scroll_btn" class="btn btn-primary standard-button inpage-scroll btn-packed">Referenzen</a>
				</div>
			</div>
		</div>
	</section>

	<section id="logos" class="clients logos">
			<ul class="client-logos">
				<li>
					<a href="http://blossom-dance.com/" title="">
						<img class="blossom-dance" alt="Websites für kleine Unternehmen: Web-Projekt Blossom dance" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAN4AAAA8AQMAAAAzJZZ9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUeNpjYBgFo2AUjIJRMAqGNgAABswAATvCo6MAAAAASUVORK5CYII=">
					</a>
				</li>
				<li>
					<a href="http://die-colores.de/" title="">
						<img class="die-colores" alt="Websites für kleine Unternehmen: Web-Projekt Die Colores" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQ4AAAApAQMAAAD+oVXcAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABRJREFUeNpjYBgFo2AUjIJRMMgAAAWbAAGSbImtAAAAAElFTkSuQmCC">
					</a>
				</li>
				<li>
					<a href="/web-projekt-malanga-blue/" title="">
						<img class="malanga-blue-1" alt="Websites für kleine Unternehmen: Web-Projekt Malanga Blue" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPMAAAA8AQMAAACJhh4dAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABdJREFUeNpjYBgFo2AUjIJRMApGAb0BAAeAAAGB8v1lAAAAAElFTkSuQmCC">
					</a>
				</li>
				<li>
					<a href="http://www.salon-adam.de/" title="">
						<img class="adam-salon-logo" alt="Websites für kleine Unternehmen: Web-Projekt Salon Adam" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHkAAAA8AQMAAAB4oYfVAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABFJREFUeNpjYBgFo2AUjEQAAAP8AAEf1n3hAAAAAElFTkSuQmCC">
					</a>
				</li>
			</ul>
	</section>

	<section id="muela" class="container muela">
		<h2 class="text-center">Meine Leistungen</h2>
	    <div class="row">
	        <div class="col-sm-6">
	            <p>Ich gestalte und implementiere Ihnen Ihre Internetpräsenz. Als Kleinunternehmer stehen Sie evtl. vor der Frage: Wie bekomme ich eine preisgünstige Webseite mit der höchsten Qualität, die gleichzeitig stark personalisiert ist und letztendlich mehr Kunden ins Geschäft bringt?</p>
	            <p><b>Die Antwort: mithilfe eines freiberuflichen Webdesigners.</b></p>
	            <p>Nach 10 Jahren Berufserfahrung und Hunderten von mir gestalteten Website, kann ich als freiberuflicher Webdesigner jeden Ihrer Aufträge schneller, sauberer und kostengünstiger bearbeiten als jede andere Webdesignfirma. Die Fertigstellung der Website erfolgt ca. eine Woche nachdem Instruktionsgespräch, wo Ihre Bedürfnisse und Anliegen mit mir Besprochen werden.</p>
	        </div>
	        <div class="col-sm-6">
	            <p>Nach dem Abschluss des Projektes lasse ich meine Arbeit immer bei einem Internet Tool überprüfen. Damit versichere ich Ihnen, dass Sie eine Webseite der „Klasse A“ von mir bekommen.</p>
	            <p>Niemand kennt die Details Ihres Geschäfts besser als Sie selbst, deshalb empfehle ich allen meinen Kunden ihre Internetseite eigenständig zu pflegen und bearbeiten, mittels eines Content-Management-Systems (CMS). Ich gebe Ihnen eine kurze – und kostenlose – Einführung in WordPress und betreue Ihre Seite weiterhin. Beim Support und bei Änderungswünschen bin ich jederzeit für Sie da.</p>
	        </div>
	    </div>
	</section>

	<section id="services" class="container services">
		<h2 class="text-center">Meine Leistungen</h2>
	    <div class="row">
	        <div class="col-sm-4">
	            <h2>Web-Design</h2>
	            <p>Ich beschäftige mich mit Usability-Problemen, unterschiedlichen CMSen und deren Template-Systemen, Browser- und Geräteunterschieden</p>
	        </div>
	        <div class="col-sm-4">
	            <h2>PHP</h2>
	            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
	            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
	        </div>
	        <div class="col-sm-4">
	            <h2>Wartung & Support</h2>
	            <p>Ich unterstütze meine Kunden und engagiere mich, um erfolgreiche, nachhaltige Lösungen zu schaffen</p>
	        </div>
	    </div>
	</section>

<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Even more great feautres</h1>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. </p>
            </div>
        </div>
        <div class="row features-block">
            <div class="col-sm-3 features-text wow fadeInLeft">
                <small>INSPINIA</small>
                <h2>Perfectly designed </h2>
                <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with latest jQuery plugins.</p>
                <a href="" class="btn btn-primary">Learn more</a>
            </div>
            <div class="col-sm-6 text-right m-t-n-lg wow zoomIn">
                <img src="images/iphone.jpg" class="img-responsive" alt="dashboard">
            </div>
            <div class="col-sm-3 features-text text-right wow fadeInRight">
                <small>INSPINIA</small>
                <h2>Perfectly designed </h2>
                <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with latest jQuery plugins.</p>
                <a href="" class="btn btn-primary">Learn more</a>
            </div>
        </div>
    </div>
</section>

<section id="ueber-mich" class="frontpage-content brief"><div class="container"><div class="frontpage-content-section-inner separator-md"><div class="col-md-8"><div class="separator-md"><div class="sky-tabs sky-tabs-pos-top-left sky-tabs-response-to-icons"> <input name="sky-tabs" checked="" id="sky-tab1" class="sky-tab-content-1" type="radio"><label for="sky-tab1" class="active"><span><span>Wer bin ich?</span></span></label><input name="sky-tabs" id="sky-tab2" class="sky-tab-content-2" type="radio"><label for="sky-tab2"><span><span>Skills</span></span></label><input name="sky-tabs" id="sky-tab3" class="sky-tab-content-3" type="radio"><label for="sky-tab3"><span><span>Ausbildung</span></span></label><p></p><ul><li class="sky-tab-content-1"><p>Mein Name ist Rafael Muñoz Ramírez. Ich arbeite Vollzeit als Webentwickler und gleichzeitig als freiberuflicher Webdesigner in Berlin. Meine Tätigkeit geht allerdings weit über die Hauptstadt hinaus.</p><p>Ich habe mein Studium erfolgreich als Architekt Ende der 80er Jahre in Kuba abgeschlossen. Wie das Leben so spielt, sollte dies nicht die Endstation meines beruflichen Werdegangs sein. Es war ein langer Weg, der mich zum Webdesigner gemacht hat. Ich begann mit kleinen Änderungen meiner eigenen Website, indem ich Farben hinzufügte oder Plugins verband. Dies waren die ersten schritte meiner HTML und CSS Erfahrungen.</p><p>In Deutschland hatte ich die Gelegenheit in weltbekannten Firmen wie ebay und 1&amp;1 zu arbeiten. Dort wurde ich zum Experten in WordPress und konnte mich in PHP und Larabel weiterentwickeln. Wie es in Deutschland üblich ist, kann man einen Beruf ohne einen Abschluss nicht erfolgreich ausüben. So erlangte ich im Abendstudium den Titel Fachinformatiker für Anwedungsentwicklung.</p><p>Heute betreue ich kleine und mittelständische Unternehmen in ganz Deutschland. Mein Servicespektrum beinthaltet die Umsetzung von individuellem Design und Layout-Ideen für Websites für kleine Unternehmen (KMU).</p></li><li class="sky-tab-content-2"><h4>Meine Skills: DAS KANN ICH</h4><div class="progress-bar-area"><div class="single-experience"> HTML<p></p><div class="progress"><div class="progress-bar wow fadeInLeft" style="width: 99%;" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".5s" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div><p></p></div><p></p></div><div class="single-experience"> CSS3 / SASS<p></p><div class="progress"><div class="progress-bar wow fadeInLeft" style="width: 90%;" role="progressbar" data-wow-duration=".6s" data-wow-delay=".6s" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div><p></p></div><p></p></div><div class="single-experience"> BOOTSTRAP<p></p><div class="progress"><div class="progress-bar wow fadeInLeft" style="width: 99%;" role="progressbar" data-wow-duration=".7s" data-wow-delay=".7s" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div><p></p></div><p></p></div><div class="single-experience"> MYSQL<p></p><div class="progress"><div class="progress-bar wow fadeInLeft" style="width: 75%;" role="progressbar" data-wow-duration="1.3s" data-wow-delay=".9s" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div><p></p></div><p></p></div><div class="single-experience"> PHP / LARAVEL<p></p><div class="progress"><div class="progress-bar wow fadeInLeft" style="width: 90%;" role="progressbar" data-wow-duration="1.3s" data-wow-delay="1s" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div><p></p></div><p></p></div><p></p></div></li><li class="sky-tab-content-3"><h4>Ausbildungshintergrund: DAS HABE ICH GESCHAFFT</h4><table cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="20%" valign="top">1984-1989</td><td valign="top">Architekturstudium – Instituto Superior Politécnico José Antonio Echeverría. Universität Havanna</td></tr><tr><td width="20%" valign="top">1989-1993</td><td valign="top">Alliance Française de La Havanne. Havanna.</td></tr><tr><td width="20%" valign="top">2003</td><td valign="top">Deutsche Sprache. Hartnackschule, Berlin.</td></tr><tr><td width="20%" valign="top">2005-2010</td><td valign="top">Verschiedene interne eCommerce Trainings bei eBay.</td></tr><tr><td width="20%" valign="top">2010</td><td valign="top">Website Entwicklung und Online Shop bei Arthur Speer Akademie. Berlin, Deutschland.</td></tr><tr><td width="20%" valign="top">2015 – 2017</td><td valign="top">Fachinformatiker Anwendungsentwicklung.</td></tr></tbody></table></li></ul></div><p></p></div><p></p></div><div class="col-md-4 pull-right"> <img alt="Rafael Muñoz Ramirez - Websites für kleine Unternehmen" class="vc_single_image-img attachment-full" src="/wp-content/uploads/2017/11/rafael-munoz.png" width="300" height="800"></div><p></p></div><p></p></div></section>
@endsection





 

