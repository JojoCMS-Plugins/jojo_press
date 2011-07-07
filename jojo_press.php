<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2007 Harvey Kane <code@ragepank.com>
 * Copyright 2007 Michael Holt <code@gardyneholt.co.nz>
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

class Jojo_Plugin_jojo_press extends Jojo_Plugin
{

    function _getContent()
    {
        global $smarty;

        $content = array();

        $press = Jojo::selectQuery("SELECT press.*, date_format( from_unixtime( date ) , '%M %Y' ) as month FROM {press} ORDER BY date DESC" );
        foreach ($press as &$p){
            $p['datefriendly'] = strftime( '%B %Y', $p['date']);
            $p['title'] = htmlspecialchars($p['title'], ENT_COMPAT, 'UTF-8', false);
        }
        $smarty->assign('press', $press);
        $smarty->assign('content', $this->page['pg_body']);

        $content['content'] = $smarty->fetch('jojo_press.tpl');

        return $content;
    }

}