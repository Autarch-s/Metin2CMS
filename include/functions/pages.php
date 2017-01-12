<?php
	switch ($current_page) {
		case 'news':
			$page = 'news';
			$title = $lang['news'];
			break;
		case 'register':
			$page = 'register';
			$title = $lang['register'];
			break;
		case 'login':
			$page = 'login';
			$title = $lang['login'];
			break;
		case 'players':
			$page = 'players';
			$title = $lang['players'];
			break;
		case 'guilds':
			$page = 'guilds';
			$title = $lang['guilds'];
			break;
		case 'administration':
			$page = 'administration';
			$title = $lang['administration'];
			break;
		case 'read':
			$page = 'read';
			$title = '';
			break;
		case 'lost':
			$page = 'lost';
			$title = $lang['account-recovery'];
			break;
		case 'characters':
			$page = 'characters';
			$title = $lang['chars-list'];
			break;
		case 'admin':
			$page = 'admin';
			$title = $lang['administration'];
			break;
		case 'download':
			$page = 'download';
			$title = $lang['download'];
			break;
		case 'password':
			$page = 'password';
			$title = $lang['change-password'];
			break;
		case 'email':
			$page = 'email';
			$title = $lang['change-email'];
			break;
		default:
			$page = 'news';
			$title = $lang['news'];
	}
?>