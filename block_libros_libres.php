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
 * @version    1
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_libros_libres extends block_base {

    function init() {
        $this->title = 'Buscador Libros Libres';
    }

    function get_content() {
        global $CFG;

        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text = '';
        $this->content->text .= '
            <img style="width:170px;height:80px;" src="http://libroslibres.flacso.org.ar/sites/all/themes/libroslibres/logo.png" />
<form id="search-block-form" method="post" target="_blank" accept-charset="UTF-8" action="http://libroslibres.flacso.org.ar/search/node/educacion">
    <div>
        <div class="container-inline">
            <div id="edit-search-block-form-1-wrapper" class="form-item">
                <input type="text" class="form-text" onfocus="if (this.value == \'Buscar en este sitio\') {this.value = \'\';} this.style.color = \'#000000\';" onblur="if (this.value == \'\') {this.value = \'Buscar en este sitio\';} this.style.color = \'#000000\';" value="Buscar en este sitio" size="15" id="edit-search-block-form-1" name="search_block_form" maxlength="128" style="color: rgb(0, 0, 0);">
                <input type="image" src="http://libroslibres.flacso.org.ar/sites/all/themes/libroslibres/images/search-button.png" class="form-submit" id="" name="">
            </div>
            
        </div>
    </div>
</form>
';


        $this->content->footer = '';
        return $this->content;
    }
}
?>

