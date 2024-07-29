<?php defined('_JEXEC') or die; include_once('vendor.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <jdoc:include type="head" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="HandheldFriendly" content="true" />
    <meta name="apple-mobile-web-app-capable" content="YES" />
</head>
<body class="<?php echo $active->alias; ?>">
<header id="navbar" class="navbar navbar-expand-xl navbar-light">
	<div class="container">
		<a href="/" class="main__logo">
			<img src="/images/main_logo.png" alt="main_logo">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="navbar-content" class="collapse navbar-collapse justify-content-between">
			<div id="top_menu" class="navbar-nav">
				<jdoc:include type="modules" name="top_menu" />
			</div>
			<div id="header_items" class="navbar-nav">
				<jdoc:include type="modules" name="header_item" />
			</div>
			<div class="d-flex flex-column justify-content-center me-4">
				<div class="d-flex align-items-center">
					<div class="image"> <img src="/images/social/phone.png" alt="phone"> </div>
					<a href="tel:+79055955161">+79055955161</a>
				</div>
				<div class="d-flex align-items-center">
					<div class="image"> <img src="/images/social/mail.png" alt="phone"> </div>
					<a href="mailto:mail@beltona.ru">mail@beltona.ru</a>
				</div>
			</div>
			<button type="button" class="btn btn-default">Заказать</button>
		</div>
	</div>
</header>
<div id="center" class="container flex-fill">
	<div id="top"><jdoc:include type="modules" name="top" /></div>
	<div id="middle">
		<main class="order-1 d-flex flex-fill flex-column">
			<aside id="top_content"><jdoc:include type="modules" name="top_content" /></aside>
			<article>
				<jdoc:include type="message" />
				<jdoc:include type="component" />
			</article>
			<aside id="bottom_content"><jdoc:include type="modules" name="bottom_content" /></aside>
		</main>
		<aside id="left" class="order-0"><jdoc:include type="modules" name="left" /></aside>
		<aside id="right" class="order-2"><jdoc:include type="modules" name="right" /></aside>
	</div>
	<div id="bottom"><jdoc:include type="modules" name="bottom" /></div>
</div>
<footer>
	<div class="container">
		<div class="footer_items row"><jdoc:include type="modules" name="footer_item" /></div>
		<div id="author"><jdoc:include type="modules" name="author" /></div>
		<div id="counters" class="d-none"><jdoc:include type="modules" name="counters" /></div>
	</div>
</footer>
<!--noindex-->
<div class="scroll-up trans3s">
    <i class="fa fa-angle-up"></i>
</div>
<jdoc:include type="modules" name="other" />
<!--/noindex-->
</body>
</html>