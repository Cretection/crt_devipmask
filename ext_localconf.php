<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['TYPO3\\CrtDevipmask\\Task\\Task'] = array(
    'extension'        => $_EXTKEY,
    'title'            => 'DevIPmask',
    'description'      => 'Dieser Task benötigt eine IP-Adresse, die er alle 15 Minuten anpingen kann.',
);
?>