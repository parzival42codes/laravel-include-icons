<?php

namespace App\Helpers;

class Icon
{
    public static function googleMaterial(string $icon): string
    {
        return '<span class="material-icons">  ' . $icon . '  </span>';
    }

    public static function fontAwesome(string $icon, string $type = 'regular'): string
    {
        return '<i class="fa-' . $type . ' fa-' . $icon . '"></i>';
    }
}
