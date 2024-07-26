<?php

$uri = 'https://'.$_SERVER['SERVER_NAME'].'/';

if (isset($_POST['sbj'])) {
    $subject = $_POST['sbj'];
    unset($_POST['sbj']);
}else{
	$subject = "Заказ обратного звонка";
}
unset($_POST['feed_back']);
unset($_POST['personal']);
unset($_POST['date']);
$tr = Null;
foreach ($_POST as $key => $value) {
    $tr .= '<tr><th align="left">'.$key.'</th><td align="left">'.$value.'</td></tr>';
}

$body = '<html>
	<head>
		<title>'.$subject.'</title>
	</head>
	<body>
		<table border="0" style="margin: 0 auto;" cellpadding="0" cellspacing="0">
			<tr>
				<td style="text-align: center;">
					<table style="width: 465px; background: #F7F7F7; border-left: 1px solid rgb(221, 221, 221); border-right: 1px solid rgb(221, 221, 221); border-top: 1px solid rgb(221, 221, 221);" cellpadding="5">
						<tr>
							<td>
								<h3 style="text-align: center;">'.$subject.'</h3>
							</td>
						</tr>
						<tr>
							<td>
								<table style="width: 100%; border-top: 1px dashed #ddd;">
									'.$tr.'
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<img src="'.$uri.'templates/' . $this->template.'/images/mail/mail.png">
				</td>
			</tr>
		</table>
	</body>
</html>';

include ('include/SendMail.php');
