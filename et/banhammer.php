<?php
/**
*
* Board Rules extension for the phpBB Forum Software package.
* Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
*
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'BANNED_ERROR'		=> 'Seal oli viga!',
	'BANNED_SUCCESS'	=> 'Kõik toimingud sooritati edukalt.',

	'ERROR_BAN_EMAIL'	=> 'E-posti keelamine ebaõnnestus.',
	'ERROR_BAN_IP'		=> 'IP keelamine ebaõnnestus.',
	'ERROR_BAN_USER'	=> 'Kasutaja keelamine ebaõnnestus.',
	'ERROR_DEL_POSTS'	=> 'Kasutaja postituste kustutamine ebaõnnestus.',
	'ERROR_MOVE_GROUP'	=> 'Kasutaja liigutamine valitud gruppi ebaõnnestus.',
	'ERROR_SFS'			=> 'Viga Stop Forum Spam andmebaasis',

	'BH_BAN_EMAIL'			=> 'Keela selle kasutaja e-posti aadress',
	'BH_BAN_GIVE_REASON'	=> 'Selle keelu põhjus, mida näidatakse kasutajale',
	'BH_BAN_IP'				=> 'Keela selle kasutaja IP aadress',
	'BH_BAN_IP_EXPLAIN'		=> '<strong>Ole sellega ettevaatlik.</strong> Enamikul kodukasutajatel on dünaamilised IP aadressid ja nad vajavad uue IP aadressi saamiseks oma ruuteri/modemi taaskäivitamist. Järgmisel päeval võib selle IP aadressi ükskõik kes teine kasutaja, keda keelata ei soovi. Rämpsposti saatjad kasutavad interneti anonüümsuse proxisid või TOR võrku, mis muudab IP keelamise mõttetuks.',
	'BH_BAN_LENGTH'			=> 'Keela selle kasutaja jaoks %s',
	'BH_BAN_REASON'			=> 'Selle keeldumise põhjus',
	'BH_BAN_USER'			=> 'Keela selle kasutaja jaoks %s',
	'BH_BAN_USER_PERM'		=> 'Keela selle kasutaja nimi jäädavalt',
	'BH_BAN_EMAIL_PERM'		=> 'Keela selle kasutaja e-posti aadress jäädavalt',
	'BH_BAN_EMAIL_FOR'		=> 'Keela selle kasutaja e-posti aadress %s',
	'BH_BAN_IP_PERM'		=> 'Keela selle kasutaja IP aadress jäädavalt',
	'BH_BAN_IP_FOR'			=> 'Keela selle kasutaja IP aadress %s',
	'BH_BANNED'				=> 'See kasutaja on keelatud',

	'BH_DEL_AVATAR'		=> 'Kustuta selle kasutaja avatar',
	'BH_DEL_PRIVMSGS'	=> 'Kustuta selle kasutaja privaatsõnumid',
	'BH_DEL_POSTS'		=> 'Kustuta selle kasutaja postitused',
	'BH_DEL_PROFILE'	=> 'Kustuta selle kasutaja profiiliväljad',
	'BH_DEL_SIGNATURE'	=> 'Kustuta selle kasutaja signatuur',

	'BH_MOVE_GROUP'	=> 'Liiguta see kasutaja gruppi &quot;%s&quot;', // %s will be a group name

	'BH_REASON'		=> 'Põhjus &quot;%s&quot;', // %s will be the reason
	'BH_REASON_USER'	=> 'Põhjus mida kuvatakse kasutajale &quot;%s&quot;', // %s will be the reason

	'BH_SUBMIT_SFS'	=> 'Esita Stop Forum Spam',

	'BH_THIS_USER'	=> 'Keela see kasutaja',

	'SFS_REPORT'	=> 'Teata sellest kasutajast Stop Forum Spami',
	'SURE_BAN'		=> 'Kas olete kindel, et soovite keelata <strong>%s</strong>?', // %s will be a username.

	'THIS_WILL'	=> 'See on',
));
