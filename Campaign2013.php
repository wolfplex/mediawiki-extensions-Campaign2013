<?php
/**
 * Campaign 2013 extension - link to /2013
 *
 * @package MediaWiki
 * @subpackage Extensions
 * @author Dereckson
 * @license GNU General Public Licence 2.0 or later
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
	die( 1 );
}

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'Campaign2013',
	'author' => 'Sébastien Santoro aka Dereckson',
	'descriptionmsg' => 'campaign2013-desc',
);

$dir = __DIR__ . '/';
$wgExtensionMessagesFiles['Campaign2013'] = $dir . 'Campaign2013.i18n.php';
$wgAutoloadClasses['Campaign2013'] = $dir . 'Campaign2013.class.php';

$wgHooks['BeforePageDisplay'][] = 'Campaign2013::onBeforePageDisplay';
