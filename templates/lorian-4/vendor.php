<?php
defined('_JEXEC') or die;
$doc = JFactory::getDocument();
$doc->setHtml5(true);

$app = JFactory::getApplication();
$menu = $app->getMenu();
$active = $menu->getActive();
if(!isset($this->description) || empty($this->description)) $this->description = $this->title;


//Jquery for Virtuemart
//JHtml::_('jquery.framework');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/jquery/jquery3.6.0.min.js', array());
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/vendor/bootstrap5/bootstrap.min.css', $type = 'text/css');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/bootstrap5/bootstrap.bundle.min.js', array());

$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/vendor/owlcarousel/owl.carousel.min.css', $type = 'text/css');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/owlcarousel/owl.carousel.min.js', array());

$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/vendor/aos-master/aos.css', $type = 'text/css');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/aos-master/aos.js', array());

// $doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/lightbox2/files/lightbox.min.js', array());
// $doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/vendor/lightbox2/files/lightbox.min.css', $type = 'text/css');



$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/fonts/stylesheet.css', $type = 'text/css');

$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/lorian.min.css', $type = 'text/css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/template.css', $type = 'text/css');

$doc->addScript($this->baseurl . '/templates/' . $this->template . '/javascript/lorian.js', array(), array('defer'=> 'defer'));

$doc->addScript($this->baseurl . '/templates/' . $this->template . '/javascript/mask.js', array(), array('defer'=> 'defer'));
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/javascript/template.js', array(), array('defer'=> 'defer'));


//$doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/parallax/parallax.min.js', array());


if (isset($_POST['feed_back'])) {
	if (isset($_POST['date']) and $_POST['date'] == date('Y-m-d')) {
		include_once ('feed_back.php');
		$message = 'Ваше сообщение успешно отправлено';
	} else {
		$message = 'Ваше сообщение НЕ отправлено';
	}
	setcookie('message', $message, time()+5, '/');
	$REDIRECT_URL = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : '/';

	header("location: ".$REDIRECT_URL); exit;
}
