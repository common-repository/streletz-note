<?php
/*
 Plugin Name:  Streletz-Note
 Description: Плагин для выделения блоков текста при помощи шорт-кодов.
 Version: 1.0
 Author: Стрелец Coder
 Author URI: http://streletzcoder.ru
 Plugin URI: http://streletzcoder.ru/category/programs/streletz-note/
 */
/*  Copyright 2017  Стрелец Coder  (email: soft-streletzcoder@yandex.ru)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details. Total Old Revision Cleaner

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
function streletz_note_show_shortcode($attrs,$content,$classes)
{
    $params=shortcode_atts( array(
                               'color' => 'red',
                               ),
        $attrs);
    return "<div class=\"$classes\"><div>".do_shortcode($content)."</div></div>";
}
/*Шорт-код [note][/note]*/
function streletz_note_note_shortcode_func($attrs,$content)
{  
    return streletz_note_show_shortcode($attrs,$content,'note note-wrapper');
}
add_shortcode('note','streletz_note_note_shortcode_func');
/*Шорт-код important*/
function streletz_note_important_shortcode_func($attrs,$content)
{
    return streletz_note_show_shortcode($attrs,$content,'note important-wrapper');    
}
add_shortcode('important','streletz_note_important_shortcode_func');
/*Шорт-код tip*/
function streletz_note_tip_shortcode_func($attrs,$content)
{
    return streletz_note_show_shortcode($attrs,$content,'note tip-wrapper');    
}
add_shortcode('tip','streletz_note_tip_shortcode_func');
/*Шорт-код warning*/
function streletz_note_warning_shortcode_func($attrs,$content)
{
    return streletz_note_show_shortcode($attrs,$content,'note warning-wrapper');    
}
add_shortcode('warning','streletz_note_warning_shortcode_func');
/*Шорт-код help*/
function streletz_note_help_shortcode_func($attrs,$content)
{
    return streletz_note_show_shortcode($attrs,$content,'note help-wrapper');    
}
add_shortcode('help','streletz_note_help_shortcode_func');
/*Подключение стилей*/
function streletz_note_stylesheet() {
    wp_register_style( 'Streletz-Note-style', plugins_url('note-style.css', __FILE__) );
    wp_enqueue_style( 'Streletz-Note-style' );
}
add_action( 'wp_enqueue_scripts', 'streletz_note_stylesheet' );
?>