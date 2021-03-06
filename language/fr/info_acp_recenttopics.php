<?php

/**
*
* @package Recent Topics Extension
* @copyright (c) 2014 PayBas
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* French translation by ForumsFaciles (http://www.forumsfaciles.fr)
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
	'RECENT_TOPICS'					=> 'Sujets récents',
	'RECENT_TOPICS_LIST'			=> 'Afficher les “sujets récents',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Activer pour afficher les sujets de ce forum dans l’Extension “sujets récents”',

	'RT_CONFIG'						=> 'Configuration',
	'RT_ANTI_TOPICS'				=> 'Sujets exclus',
	'RT_ANTI_TOPICS_EXP'			=> 'Séparés par “, ” (exemple: “7, 9”)<br />Si vous ne souhaitez exclure aucun sujet, entrez simplement 0.',
	'RT_NUMBER'						=> 'Sujets récents',
	'RT_NUMBER_EXP'					=> 'Nombre de sujets à afficher sur l’index.',
	'RT_PAGE_NUMBER'				=> 'Nombre de pages pour les sujets récents',
	'RT_PAGE_NUMBER_EXP'			=> 'Vous pouvez afficher davantage de sujets récents en utilisant la pagination. Entrez seulement 1 pour désactiver cette option. Si vous sntrez 0, il y aura autant de pages que nécessaire pour afficher tous les sujets de votre forum (non conseillé).',
	'RT_PARENTS'					=> 'Afficher les forums-parents',
	'RT_PARENTS_EXP'				=> 'Afficher les forums-parents dans la liste des sujets récents.',
	'RT_UNREADONLY'					=> 'Afficher uniquement les sujets non-lus',
	'RT_UNREADONLY_EXP'				=> 'Activer cela pour n’afficher que les sujets non-lus (qu’ils soient récents ou non). Cette fonctionnalité utilise les mêmes paramètres (en excluant les forums/sujets, etc.) que le mode normal. Info: cela ne fonctionnera que pour les utilisateurs connectés; les invités verront la liste normale.',

	'RT_VIEW_ON'					=> 'Afficher les sujets récents sur:',
));
