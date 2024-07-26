<?php
$mailer = JFactory::getMailer();
$config = JFactory::getConfig();

$sender = array(
	$config->get( 'mailfrom' ),
	$config->get( 'fromname' ),
);

$mailer->setSender($sender);

$user = JFactory::getUser();
$recipient = $user->email;

$recipient = array(
	$config->get( 'replyto' ),
	'danilmockhnatkin@gmail.com'
);
$mailer->addRecipient($recipient);

$mailer->setSubject($subject);

$mailer->isHTML(true);
$mailer->Encoding = 'base64';
$mailer->setBody($body);
$send = $mailer->Send();
