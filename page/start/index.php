<?php
	// LANGUAGE MANAGER //
	// initialize
	$lang = new Lang(list: ["de", "en"], default: "de");
	
	// load dict
	$dict = new Lang_dict($lang);
	require("./page/strings.php");
	
	
	// PAGE INIT //
	Page::start();
	
	Page::title($dict->get("title"));
	Page::icon("./asset/logo-256.png");
	Page::description($dict->get("description"));
	
	Page::lang($lang->get());
	Page::viewport(scale: 1, zoom: true);
	Page::referrer("same-origin");
	
	Page::robots(index: true, follow: true);
	Page::author("Kim Endisch");
	Page::keywords("selbstbestimmungsgesetz-jetzt", "selbstbestimmungsgesetz", "selbstbestimmung", "tsg", "transsexuellengesetz", "roadmap", "timeline", "stand", "trans", "nicht-binär", "non-binary", "deutschland", "gender", "geschlecht", "identität");
	
	Page::css(__DIR__ . "/style.css");
	
	Page::font("ubuntu");
	Page::font("tabler");
?>





<div class="page-container">
	<div class="page">
		<div class="title">
			<span class="abolish"><?= $dict->get("page_title_abolish") ?></span>
			<span class="introduce"><?= $dict->get("page_title_introduce") ?></span>
		</div>
		
		<div class="section">
			<div class="content">
				<div class="box">
					<span class="title"><?= $dict->get("why_title") ?></span>
					
					<?php
						$why_text = $dict->get("why_text");
						foreach($why_text as $one_why_text_line){
							echo("<span>" . $one_why_text_line . "</span>");
						}
					?>
				</div>
			</div>
		</div>
		
		<div class="section">
			<div class="header">
				<span class="icon ti ti-clock"></span>
				<span class="text"><?= $dict->get("timeline_title") ?></span>
			</div>
			<div class="content">
				<div class="timeline">
					<div class="item done">
						<div class="connector">
							<span class="waypoint ti ti-heart-handshake"></span>
						</div>
						<div class="box">
							<?php
								$timeline_date = $dict->get("timeline_koalitionsvertrag_date");
								if($timeline_date !== null){
							?>
									<span class="extra"><i class="ti ti-calendar"></i><?= $timeline_date ?></span>
							<?php } ?>
							
							<span class="title"><?= $dict->get("timeline_koalitionsvertrag_title") ?></span>
							
							<?php
								$timeline_koalitionsvertrag_text = $dict->get("timeline_koalitionsvertrag_text");
								foreach($timeline_koalitionsvertrag_text as $one_timeline_koalitionsvertrag_text_line){
									echo("<span>" . $one_timeline_koalitionsvertrag_text_line . "</span>");
								}
							?>
							
							<div class="button-list">
								<a href="https://www.spd.de/fileadmin/Dokumente/Koalitionsvertrag/Koalitionsvertrag_2021-2025.pdf" target="_blank" class="button">
									<span class="text"><?= $dict->get("timeline_koalitionsvertrag_button") ?></span>
									<span class="icon ti ti-external-link"></span>
								</a>
							</div>
						</div>
					</div>
					
					<div class="item done">
						<div class="connector">
							<span class="waypoint ti ti-border-corners"></span>
						</div>
						<div class="box">
							<?php
								$timeline_date = $dict->get("timeline_eckpunktepapier_date");
								if($timeline_date !== null){
							?>
									<span class="extra"><i class="ti ti-calendar"></i><?= $timeline_date ?></span>
							<?php } ?>
							
							<span class="title"><?= $dict->get("timeline_eckpunktepapier_title") ?></span>
							
							<?php
								$timeline_eckpunktepapier_text = $dict->get("timeline_eckpunktepapier_text");
								foreach($timeline_eckpunktepapier_text as $one_timeline_eckpunktepapier_text_line){
									echo("<span>" . $one_timeline_eckpunktepapier_text_line . "</span>");
								}
							?>
							
							<div class="button-list">
								<a href="https://www.bmfsfj.de/resource/blob/199382/1e751a6b7f366eec396d146b3813eed2/20220630-selbstbestimmungsgesetz-eckpunkte-data.pdf" target="_blank" class="button">
									<span class="text"><?= $dict->get("timeline_eckpunktepapier_button") ?></span>
									<span class="icon ti ti-external-link"></span>
								</a>
							</div>
						</div>
					</div>
					
					<div class="item done done-stop">
						<div class="connector">
							<span class="waypoint ti ti-pencil"></span>
						</div>
						<div class="box">
							<?php
								$timeline_date = $dict->get("timeline_referentenentwurf_date");
								if($timeline_date !== null){
							?>
									<span class="extra"><i class="ti ti-calendar"></i><?= $timeline_date ?></span>
							<?php } ?>
							
							<span class="title"><?= $dict->get("timeline_referentenentwurf_title") ?></span>
							
							<?php
								$timeline_referentenentwurf_text = $dict->get("timeline_referentenentwurf_text");
								foreach($timeline_referentenentwurf_text as $one_timeline_referentenentwurf_text_line){
									echo("<span>" . $one_timeline_referentenentwurf_text_line . "</span>");
								}
							?>
							
							<div class="button-list">
								<a href="https://www.tagesschau.de/inland/innenpolitik/selbstbestimmungsgesetz-gesetzentwurf-100.html" target="_blank" class="button">
									<span class="text"><?= $dict->get("timeline_referentenentwurf_button") ?></span>
									<span class="icon ti ti-external-link"></span>
								</a>
								<a href="https://www.queer.de/detail.php?article_id=45400" target="_blank" class="button">
									<span class="text"><?= $dict->get("timeline_referentenentwurf_button2") ?></span>
									<span class="icon ti ti-external-link"></span>
								</a>
							</div>
						</div>
					</div>
					
					<div class="item next">
						<div class="connector">
							<span class="waypoint ti ti-notes"></span>
						</div>
						<div class="box">
							<?php
								$timeline_date = $dict->get("timeline_regierungsentwurf_date");
								if($timeline_date !== null){
							?>
									<span class="extra"><i class="ti ti-calendar"></i><?= $timeline_date ?></span>
							<?php } ?>
							
							<span class="title"><?= $dict->get("timeline_regierungsentwurf_title") ?></span>
							
							<?php
								$timeline_regierungsentwurf_text = $dict->get("timeline_regierungsentwurf_text");
								foreach($timeline_regierungsentwurf_text as $one_timeline_regierungsentwurf_text_line){
									echo("<span>" . $one_timeline_regierungsentwurf_text_line . "</span>");
								}
							?>
						</div>
					</div>
					
					<div class="item">
						<div class="connector">
							<span class="waypoint ti ti-podium"></span>
						</div>
						<div class="box">
							<?php
								$timeline_date = $dict->get("timeline_lesung_1_date");
								if($timeline_date !== null){
							?>
									<span class="extra"><i class="ti ti-calendar"></i><?= $timeline_date ?></span>
							<?php } ?>
							
							<span class="title"><?= $dict->get("timeline_lesung_1_title") ?></span>
							
							<?php
								$timeline_lesung_1_text = $dict->get("timeline_lesung_1_text");
								foreach($timeline_lesung_1_text as $one_timeline_lesung_1_text_line){
									echo("<span>" . $one_timeline_lesung_1_text_line . "</span>");
								}
							?>
						</div>
					</div>
					
					<div class="item">
						<div class="connector">
							<span class="waypoint ti ti-podium"></span>
						</div>
						<div class="box">
							<?php
								$timeline_date = $dict->get("timeline_lesung_2_date");
								if($timeline_date !== null){
							?>
									<span class="extra"><i class="ti ti-calendar"></i><?= $timeline_date ?></span>
							<?php } ?>
							
							<span class="title"><?= $dict->get("timeline_lesung_2_title") ?></span>
							
							<?php
								$timeline_lesung_2_text = $dict->get("timeline_lesung_2_text");
								foreach($timeline_lesung_2_text as $one_timeline_lesung_2_text_line){
									echo("<span>" . $one_timeline_lesung_2_text_line . "</span>");
								}
							?>
						</div>
					</div>
					
					<div class="item">
						<div class="connector">
							<span class="waypoint ti ti-hand-stop"></span>
						</div>
						<div class="box">
							<?php
								$timeline_date = $dict->get("timeline_lesung_3_date");
								if($timeline_date !== null){
							?>
									<span class="extra"><i class="ti ti-calendar"></i><?= $timeline_date ?></span>
							<?php } ?>
							
							<span class="title"><?= $dict->get("timeline_lesung_3_title") ?></span>
							
							<?php
								$timeline_lesung_3_text = $dict->get("timeline_lesung_3_text");
								foreach($timeline_lesung_3_text as $one_timeline_lesung_3_text_line){
									echo("<span>" . $one_timeline_lesung_3_text_line . "</span>");
								}
							?>
						</div>
					</div>
					
					<div class="item">
						<div class="connector">
							<span class="waypoint ti ti-gavel"></span>
						</div>
						<div class="box">
							<?php
								$timeline_date = $dict->get("timeline_inkrafttreten_date");
								if($timeline_date !== null){
							?>
									<span class="extra"><i class="ti ti-calendar"></i><?= $timeline_date ?></span>
							<?php } ?>
							
							<span class="title"><?= $dict->get("timeline_inkrafttreten_title") ?></span>
							
							<?php
								$timeline_inkrafttreten_text = $dict->get("timeline_inkrafttreten_text");
								foreach($timeline_inkrafttreten_text as $one_timeline_inkrafttreten_text_line){
									echo("<span>" . $one_timeline_inkrafttreten_text_line . "</span>");
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="section">
			<div class="header">
				<span class="icon ti ti-heart"></span>
				<span class="text"><?= $dict->get("about_title") ?></span>
			</div>
			<div class="content">
				<div class="box">
					<?php
						$about_text = $dict->get("about_text");
						foreach($about_text as $one_about_text_line){
							echo("<span>" . $one_about_text_line . "</span>");
						}
						
						$mail_address = "mail@kim"."endisch.de";
					?>
					<span><?= $dict->get("about_mail_address_prefix") ?>: <a <?= Hidden::href("mailto:" . $mail_address) ?> class="link"><?= Hidden::text($mail_address) ?></a></span>
					
					<span class="gray"><?= $dict->get("about_disclaimer") ?></span>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="footer">
	<div class="brand">
		<img src="<?= File::file("./asset/logo-256.png") ?>" alt="logo" />
		<span>SelbstBestG Jetzt!</span>
		<a href="https://git.tjdev.de/kimendisch/selbstbestimmungsgesetz-jetzt-de" target="_blank"><?= $dict->get("text_sourcecode") ?> <i class="ti ti-external-link"></i></a>
		<span class="version">v<?= Project::meta_self()["version"] ?></span>
	</div>
	
	<div class="lang">
		<span><i class="ti ti-world"></i></span>
		<a <?= ($lang->get() === "de" ? "class=\"selected\"" : "") ?> href="?lang=de">DE</a>
		<span class="delimiter">|</span>
		<a <?= ($lang->get() === "en" ? "class=\"selected\"" : "") ?> href="?lang=en">EN</a>
	</div>
	
	<div class="legal">
		<span>&copy; 2023 Kim Endisch</span>
		<span class="delimiter">|</span>
		<a href="<?= $dict->get("link_imprint") ?>" target="_blank"><?= $dict->get("text_imprint") ?> <i class="ti ti-external-link"></i></a>
		<span class="delimiter">|</span>
		<a href="<?= $dict->get("link_privacy_policy") ?>" target="_blank"><?= $dict->get("text_privacy_policy") ?> <i class="ti ti-external-link"></i></a>
	</div>
</div>
