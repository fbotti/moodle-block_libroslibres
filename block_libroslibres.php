<?php //$Id: block_libroslibres.php,v.1.0 2011-04-23 22:00:00 fbotti Exp $

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package    moodlecore
 * @subpackage block
 * @copyright  2011 Federico J. Botti - Entornos Educativos
 * @author     2011 Federico J. Bott <federico@entornos.com.ar>
 * @version    1.0
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_libroslibres extends block_base {

    function init() {
        $this->title = get_string('libroslibres','block_libroslibres');
        $this->version = 2011042500;
    }

    function get_content() {
        global $CFG, $OUTPUT;

        if ($this->content !== NULL) {
            return $this->content;
        }
        $action = get_string('formaction','block_libroslibres');
        
        $this->content = new stdClass;
        $this->content->text = '';
        $this->content->text .= '          
<div class="libroslibres">
    <img style="" src="'.$CFG->wwwroot.'/blocks/libroslibres/pix/logo.png" />
    <form id="search-block-form" method="post" target="_blank" accept-charset="UTF-8" action="'.$action.'">
        <div>
            <div class="container-inline">
                <div style="display: inline;" id="edit-search-block-form-1-wrapper" class="form-item">
                    <input type="text" class="form-text" onfocus="if (this.value == \'Buscar en este sitio\') {this.value = \'\';} this.style.color = \'#000000\';" onblur="if (this.value == \'\') {this.value = \'Buscar en este sitio\';} this.style.color = \'#000000\';" value="Buscar en este sitio" size="15" id="edit-search-block-form-1" name="search_block_form" maxlength="128" style="color: rgb(0, 0, 0);">
                    <input type="image" src="'.$CFG->wwwroot.'/blocks/libroslibres/pix/search-button.png" class="form-submit" id="" name="">
                </div>
                <input id="edit-search-block-form" type="hidden" value="search_block_form" name="form_id">
            </div>
        </div>
    </form>
</div><br />
';
        $this->content->footer = '<a href="'.get_string('footerurl','block_libroslibres').'">'.get_string('footerurl','block_libroslibres').'</a>';
        return $this->content;
    }
}
?>