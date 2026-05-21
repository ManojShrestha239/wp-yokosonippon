<?php

/**
 * Custom WordPress Nav Walker to output flat Tailwind CSS anchor tags.
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Yokoso_Tailwind_Nav_Walker extends Walker_Nav_Menu
{

    // Remove the <ul> wrapper entirely for sub-menus (if you add them later)
    public function start_lvl(&$output, $depth = 0, $args = null) {}
    public function end_lvl(&$output, $depth = 0, $args = null) {}

    // Construct the individual <a> tags
    // Construct the individual <a> tags
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $is_active = in_array('current-menu-item', (array) $item->classes) || in_array('current-page-ancestor', (array) $item->classes);

        $is_mobile = (isset($args->theme_location) && $args->theme_location === 'mobile');
        $is_footer = (isset($args->theme_location) && $args->theme_location === 'footer');

        if ($is_mobile) {
            // Mobile Menu Classes
            $class_names = 'font-label-lg text-label-lg px-4 py-3 rounded-xl transition-all ';
            $class_names .= $is_active ? 'text-primary font-bold bg-primary/5 ' : 'text-on-surface-variant hover:text-primary hover:bg-primary/5 ';
        } elseif ($is_footer) {
            // Footer Menu Classes (Your exact Tailwind styling)
            $class_names = 'font-body-md text-body-md text-on-surface-variant hover:text-primary transition-all duration-300 opacity-80 hover:opacity-100 ';
            $class_names .= $is_active ? 'text-primary opacity-100 font-medium ' : '';
        } else {
            // Desktop Header Classes
            $class_names = 'nav-link font-label-lg text-label-lg ';
            $class_names .= $is_active ? 'active text-primary font-bold pb-1 ' : 'text-on-surface-variant hover:text-primary transition-colors duration-300 px-2 py-2 ';
        }

        $output .= '<a href="' . esc_url($item->url) . '" class="' . esc_attr(trim($class_names)) . '">';
        $output .= apply_filters('the_title', $item->title, $item->ID);
    }

    // Close the anchor tag (Overrides the default </li> closing)
    public function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= '</a>' . "\n";
    }
}
