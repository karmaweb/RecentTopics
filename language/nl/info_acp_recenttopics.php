<?php

/**
*
* @package Recent Topics Extension
* @copyright (c) 2014 PayBas
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
*
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
	'RECENT_TOPICS'					=> 'Recente Onderwerpen',
	'RECENT_TOPICS_LIST'			=> 'Weergeven in "recent onderwerpen” lijst',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Moeten onderwerpen uit dit forum worden weergegeven in de "recente onderwerpen" lijst?',

	'RT_CONFIG'						=> 'Configuratie',
	'RT_ANTI_TOPICS'				=> 'Uitgesloten onderwerpen',
	'RT_ANTI_TOPICS_EXP'			=> 'Gescheiden door een “, ” (Voorbeeld: “7, 9”)<br />Als je geen onderwerpen wilt uitsluiten, vul een 0 in.',
	'RT_NUMBER'						=> 'Aantal recente onderwerpen',
	'RT_NUMBER_EXP'					=> 'Aantal onderwerpen dat weergegeven wordt op de forumindex.',
	'RT_PAGE_NUMBER'				=> 'Aantal recente onderwerpen pagina\'s',
	'RT_PAGE_NUMBER_EXP'			=> 'Je kan bij het weergeven van meerdere pagina\'s aan recente onderwerpen aangeven hoeveel pagina\'s je dit wilt tonen. Vul 1 in om deze functie uit te schakelen. Als je een 0 invoert worden er net zoveel pagina\'s gebruikt als nodig om alle onderwerpen weer te geven.',
	'RT_PARENTS'					=> 'Weergeven van hoofdforums',
	'RT_PARENTS_EXP'				=> 'Geeft de hoofdforums weer in de onderwerpregel van de recente onderwerpen.',
	'RT_UNREADONLY'					=> 'Alleen ongelezen onderwerpen weergeven',
	'RT_UNREADONLY_EXP'				=> 'Deze optie zorgt ervoor dat alleen de ongelezen onderwerpen worden weergegeven (ongeacht of ze recent zijn). Deze functie gebruikt dezelfde instellingen (uitsluiting van forums/onderwerpen etc.) als in de normale situatie. NB: dit werkt alleen bij ingelogde gebruikers; gasten krijgen de normale lijst te zien.',

	'RT_VIEW_ON'					=> 'Geef recente onderwerpen weer bij:',
));
