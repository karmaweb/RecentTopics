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
	'RECENT_TOPICS'					=> 'Argomenti recenti',
	'RECENT_TOPICS_LIST'			=> 'Mostra in “argomenti recenti”',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Attivare per mostrare gli argomenti di questo forum nell\'estensione “Argomenti recenti”',

	'RT_CONFIG'						=> 'Configurazione',
	'RT_ANTI_TOPICS'				=> 'Argomenti esclusi',
	'RT_ANTI_TOPICS_EXP'			=> 'Separato da “, ” (Esempio: “7, 9”)<br />Se non si vuole escludere un argomento inserire semplicemente 0.',
	'RT_NUMBER'						=> 'Argomenti recenti',
	'RT_NUMBER_EXP'					=> 'Numero di argomenti mostrati nell\'indice.',
	'RT_PAGE_NUMBER'				=> 'Pagine di argomenti recenti',
	'RT_PAGE_NUMBER_EXP'			=> 'Si può mostrare un maggior numero di argomenti recenti usando la paginazione. Inserire 1 per disabilitare tale funzione. Se si inserisce 0 verranno usate tante pagine quante necessarie per mostrare tutti gli argomenti del forum (non consigliato).',
	'RT_PARENTS'					=> 'Mostrare i forum genitori',
	'RT_PARENTS_EXP'				=> 'Mostrare i forum genitori nella riga degli argomenti negli Argomenti recenti.',
	'RT_UNREADONLY'					=> 'Mostrare solo argomenti non ancora letti',
	'RT_UNREADONLY_EXP'				=> 'Abilitare per mostrare solo argomenti non ancora letti (recenti o no). Questa funzione usa le stesse impostazioni (escludere forum/argomenti etc.) della modalità normale. Nota: questo funziona solo per gli utenti autenticati, gli ospiti vedranno la lista normale.',

	'RT_VIEW_ON'					=> 'Mostra Argomenti recenti su:',
));
