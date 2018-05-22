<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('navbar'))
{
    function navbar($nav = NULL, $attributes = '')
    {
        function nav_link($page, $item, $list = TRUE)
        {
            if ($list) echo '<li class="nav-item">';
            echo anchor($item, $page, array('class' => $list ? 'nav-link' : 'dropdown-item'));
            if ($list) echo '</li>';
        }

        function nav_dropdown($page, $items)
        {
            echo '<li class="nav-item dropdown">';
            echo anchor('#', $page, array('class' => 'nav-link dropdown-toggle', 'data-toggle' => 'dropdown'));
            echo '<div class="dropdown-menu">';
            foreach ($items as $page => $item)
            {
                nav_link($page, $item, FALSE);
            }
            echo '</div>';
            echo '</li>';
        }

        if ($nav != NULL)
        {
            if ($attributes !== '')
    		{
    			$attributes = _stringify_attributes($attributes);
    		}

            echo '<div ' .$attributes. '>';
            echo '<ul class="navbar-nav ml-auto">';
            foreach ($nav as $page => $item)
            {
                if (!is_array($item)) nav_link($page, $item);
                else nav_dropdown($page, $item);
            }
            echo '</ul>';
            echo '</div>';
        }
    }
}
