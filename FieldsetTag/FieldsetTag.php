<?php
if (!defined('MEDIAWIKI')) die();


 /*
 *        Wikiunity 2011-2012
 *        @developer Michael McCouman Junior / CEO and Founder
 *        @iniz the inputs
 *        @file tags
 *        @mediawiki
 */

$wgExtensionCredits['specialpage'][] = array(
	'name' => 'FieldsetTag',
	'author' => array( 'Michael McCouman jr.' ),
	'description' => 'Erzeugt den Tag <nowiki><fieldset></nowiki> und macht ihn in der MediaWiki-Software anwendbar',
	'version' => '1.0',
);
 
$wgHooks['ParserFirstCallInit'][] = 'effieldsetSetup';
 
function effieldsetSetup( &$parser ) {
	$parser->setHook( 'fieldset', 'effieldsetRender' );
       return true;
}
function effieldsetRender( $text, $args, $parser, $frame ) {
	$output = $parser->recursiveTagParse( $text, $frame );
	return '<fieldset>' 
	. $output . '</fieldset>';
}
