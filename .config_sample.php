<?php
// rename this to .config.php to be make the magic happen!
return [
	'app_base_url' => 'https://www.someurl.com/', // should end in a trailing slash
	'enable_smtp' => false,
	'smtp' => [
		'username' => 'user',
		'password' => 'pass',
		'host' => 'something.smtp.net',
		'port' => 25,
		'from_email' => 'commie@example.com',
		'from_name' => 'Commie Bot'
	]
];