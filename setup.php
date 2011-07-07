<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2007-2008 Harvey Kane <code@ragepank.com>
 * Copyright 2007-2008 Michael Holt <code@gardyneholt.co.nz>
 * Copyright 2007 Melanie Schulz <mel@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @author  Michael Cochrane <code@gardyneholt.co.nz>
 * @author  Melanie Schulz <mel@gardyneholt.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */

/* add Events page if it does not exist */
$data = Jojo::selectQuery("SELECT * FROM {page} WHERE pg_link='jojo_plugin_jojo_press'");
if (!count($data)) {
    echo "Adding <b>Press</b> Page to menu<br />";
    Jojo::insertQuery("INSERT INTO {page} SET pg_title='Press', pg_link='jojo_plugin_jojo_press', pg_url='press'");
} 

/* edit Events page */
$data = Jojo::selectQuery("SELECT * FROM {page} WHERE pg_url='admin/edit/press'");
if (!count($data)) {
    echo "Adding <b>Press</b> Page to menu<br />";
    Jojo::insertQuery("INSERT INTO {page} SET pg_title='Press', pg_link='Jojo_Plugin_Admin_Edit', pg_url='admin/edit/press', pg_parent=?, pg_order=5, pg_mainnav='yes', pg_breadcrumbnav='yes', pg_sitemapnav='no', pg_xmlsitemapnav='no', pg_footernav='no', pg_index='no'", $_ADMIN_CONTENT_ID);
}

/* Ensure there is a folder for uploading event images */
$res = Jojo::RecursiveMkdir(_DOWNLOADDIR . '/presss');
if ($res === true) {
    echo "Jojo_Plugin_press: Created folder: " . _DOWNLOADDIR . '/presss';
} elseif($res === false) {
    echo 'Jojo_Plugin_press: Could not automatically create ' .  _DOWNLOADDIR . '/presss' . 'folder on the server. Please create this folder and assign 777 permissions.';
}
