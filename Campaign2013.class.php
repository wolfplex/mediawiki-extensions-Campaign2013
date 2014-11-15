<?php
/**
 * Campaign 2013 extension - link to /2013
 *
 * @package MediaWiki
 * @subpackage Extensions
 * @author Dereckson
 * @license GNU General Public Licence 2.0 or later
 */

class Campaign2013 {
    static public function onBeforePageDisplay( OutputPage &$out, Skin &$skin ) {
        // If your set of extension doesn't use jquery, please consider something like:
        // $out->addHeadItem( 'jquery', '<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>' );

        $out->addHeadItem( 'campaign2013-js', '<script src="//assets.wolfplex.org/campaign2013/campaign2013.js"></script>' );
        $out->addHeadItem( 'campaign2013-css', '<link rel="stylesheet" href="//assets.wolfplex.org/campaign2013/campaign2013.css"></script>' );
        return true;
    }
}
