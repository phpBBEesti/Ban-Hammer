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
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
$lang = array_merge($lang, array(
	'ACP_BAN_EMAIL'		=> 'Keela kasutajate e-posti aadress',
	'ACP_BAN_IP'		=> 'Keela kasutajate IP aadress',
	'ACP_BAN_IP_EXPLAIN'	=> '<strong>Ole sellega ettevaatlik.</strong> Enamikul kodukasutajatel on dünaamilised IP aadressid ja nad vajavad uue IP aadressi saamiseks oma ruuteri/modemi taaskäivitamist. Järgmisel päeval võib selle IP aadressi ükskõik kes teine kasutaja, keda keelata ei soovi. Rämpsposti saatjad kasutavad interneti anonüümsuse proxisid või TOR võrku, mis muudab IP keelamise mõttetuks.',

	'ACP_DEL_AVATAR'	=> 'Kustuta kasutajate avatar',
	'ACP_DEL_PRIVMSGS'	=> 'Kustuta kasutajate privaatsõnumid',
	'ACP_DEL_POSTS'		=> 'Kustuta kasutajate postitused',
	'ACP_DEL_PROFILE'	=> 'Kustuta kasutajate profiiliväljad',
	'ACP_DEL_SIGNATURE'	=> 'Kustuta kasutajate signatuur',

	'ACP_GROUP_MISSING'	=> 'Gruppi &quot;%s&quot; ei eksisteeri.', // %s is the group name.

	'ACP_MOVE_GROUP'			=> 'Liiguta gruppi',
	'ACP_MOVE_GROUP_EXPLAIN'	=> 'Gruppi nimi, kuhu keelatud kasutajad tuleks liigutada. See on ka nende vaikimisi grupiks.<br /><strong>Kui rippmenüüst jätta <em>“Gruppi ei ole määratud.”</em> siis ei ole te gruppe seadistanud.</strong>',
	'BAN_LENGTH_EXPLAIN'	=> 'Ükskõik millist keeldumise varianti on kasutaja keelustamiseks kasutatud, siis keelatakse kasutaja siin määratud aja jooksul.  Seda saab määrata ka siis, kui keelatakse kasutaja Ban Hammeriga.',
	'SETTINGS_ERROR'		=> 'Seadete salvestamisel tekkis viga! Palun edastage oma veateade.',
	'SFS_API_KEY'			=> 'SFS API võti',
	'SFS_API_KEY_EXPLAIN'	=> 'Kui soovite teavitada StopForumSpami automaatselt, vajate selleks API võtit, <a href="http://www.stopforumspam.com/registreerige">http://www.stopforumspam.com/signup</a>.',
	'SFS_NEEDS_CURL'		=> '<span style="color:red;">Teie server vajab cURLi installeerimist, et kasutada StopForumSpam teenust.</span>',
));
