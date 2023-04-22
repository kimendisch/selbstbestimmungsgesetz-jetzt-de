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
	
	Page::robots(index: true, follow: true);
	Page::author("Kim Endisch");
	Page::keywords("selbstbestimmungsgesetz-jetzt", "selbstbestimmungsgesetz", "selbstbestimmung", "tsg", "transsexuellengesetz", "roadmap", "timeline", "stand", "trans", "nicht-binär", "non-binary", "deutschland", "gender", "geschlecht", "identität");
	
	Page::css(__DIR__ . "/style.css");
	
	Page::font("ubuntu");
	Page::font("tabler");
?>





<div class="page-container">
	<div class="page">
		<div class="section">
			<div class="header">
				<span class="icon ti ti-info-circle"></span>
				<span class="text">Über</span>
			</div>
			<div class="content">
				<div class="box">
					<span>Content</span>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="footer">
	<div class="brand">
		<img src="<?= File::file("./asset/logo-256.png") ?>" alt="logo" />
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
