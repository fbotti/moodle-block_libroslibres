<?php //$Id: block_libros_libres.php,v 1 2011-04-23 22:00:00 fbotti Exp $

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

class block_libros_libres extends block_base {

    function init() {
        $this->title = get_string('pluginname','block_libros_libres');
    }

    function get_content() {
        global $CFG, $OUTPUT;

        if ($this->content !== NULL) {
            return $this->content;
        }
        $action = "http://libroslibres.flacso.org.ar/search/";
        
        $this->content = new stdClass;
        $this->content->text = '';
        $this->content->text .= '
<div class="libroslibres">
    <img style="" src="'.$OUTPUT->pix_url('logo','block_libros_libres').'" />
    <form id="search-block-form" method="post" target="_blank" accept-charset="UTF-8" action="'.$action.'">
        <div>
            <div class="container-inline">
                <div style="display: inline;" id="edit-search-block-form-1-wrapper" class="form-item">
                    <input type="text" class="form-text" onfocus="if (this.value == \'Buscar en este sitio\') {this.value = \'\';} this.style.color = \'#000000\';" onblur="if (this.value == \'\') {this.value = \'Buscar en este sitio\';} this.style.color = \'#000000\';" value="Buscar en este sitio" size="15" id="edit-search-block-form-1" name="search_block_form" maxlength="128" style="color: rgb(0, 0, 0);">
                    <input type="image" src="'.$OUTPUT->pix_url('search-button','block_libros_libres').'" class="form-submit" id="" name="">
                </div>
                <input id="edit-search-block-form" type="hidden" value="search_block_form" name="form_id">
            </div>
        </div>
    </form>
</div><br />
';
        $this->content->footer = '<a href="http://libroslibres.flacso.org.ar">http://libroslibres.flacso.org.ar</a>';
        return $this->content;
    }
}
?>

