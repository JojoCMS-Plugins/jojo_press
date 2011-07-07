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

$table = 'press';
$o = 0;

$default_td[$table]['td_displayfield']  = 'title';
$default_td[$table]['td_rolloverfield'] = '';
$default_td[$table]['td_orderbyfields'] = 'date DESC, title';
$default_td[$table]['td_topsubmit']     = 'yes';
$default_td[$table]['td_deleteoption']  = 'yes';
$default_td[$table]['td_menutype']      = 'list';
$default_td[$table]['td_categoryfield'] = '';
$default_td[$table]['td_categorytable'] = '';
$default_td[$table]['td_help']          = '';

/* ID */
$field = 'pressid';
$default_fd[$table][$field]['fd_order'] = $o++;
$default_fd[$table][$field]['fd_type']  = 'readonly';
$default_fd[$table][$field]['fd_help']  = 'A unique ID, automatically assigned by the system';

/* Title */
$field = 'title';
$default_fd[$table][$field]['fd_order']    = $o++;
$default_fd[$table][$field]['fd_type']     = 'text';
$default_fd[$table][$field]['fd_required'] = 'yes';
$default_fd[$table][$field]['fd_size']     = '50';
$default_fd[$table][$field]['fd_help']     = 'The publication name';

// Description 
$default_fd[$table]['description'] = array(
        'fd_name' => "Description",
        'fd_type' => "hidden",
        'fd_help' => "A Description of the article.",
        'fd_order' => $o++,
        'fd_mode' => "advanced",
        'fd_quickedit' => "yes",
    );

// Description 
$default_fd[$table]['description_code'] = array(
        'fd_name' => "Description",
        'fd_type' => "texteditor",
        'fd_options' => "description",
        'fd_rows' => "10",
        'fd_cols' => "50",
        'fd_help' => "A Description of the article.",
        'fd_order' => $o++,
        'fd_mode' => "advanced",
        'fd_quickedit' => "yes",
    );

//  Date Field
$default_fd[$table]['date'] = array(
        'fd_name' => "Date",
        'fd_type' => "unixdate",
        'fd_default' => "now",
        'fd_help' => "The article was released on this date",
        'fd_order' => $o++,
        'fd_mode' => "standard",
    );

// Image
$default_fd[$table]['image'] = array(
        'fd_name' => "Image",
        'fd_type' => "fileupload",
        'fd_help' => "An image for the article, if  available",
        'fd_order' => $o++,
        'fd_mode' => "standard",
        'fd_quickedit' => "yes",
    );

// PDF
$default_fd[$table]['pdf'] = array(
        'fd_name' => "PDF",
        'fd_type' => "fileupload",
        'fd_help' => " The article as a PDF",
        'fd_order' => $o++,
        'fd_mode' => "standard",
        'fd_quickedit' => "yes",
    );

// Weblink
$default_fd[$table]['weblink'] = array(
        'fd_name' => "Weblink",
        'fd_type' => "url",
        'fd_help' => " Link to full article",
        'fd_order' => $o++,
        'fd_mode' => "standard",
        'fd_quickedit' => "yes",
    );

