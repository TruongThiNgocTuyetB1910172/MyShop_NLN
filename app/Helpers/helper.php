<?php


namespace App\Helpers;
// use App\Helpers\Str;
use Illuminate\Support\Str;
use Stringable;

class Helper
{
    public static function menu($menus, $parent_id = 0, $char = '')
    {
        $html = '';

        foreach ($menus as $key => $menu) {
            if ($menu->parent_id == $parent_id) {
                $html .= '
                    <tr>
                        <td>' . $menu->id . '</td>
                        <td>' . $char . $menu->name . '</td>
                        <td>' . $menu->active. '</td>
                        <td>' . $menu->updated_at . '</td>
                        <td>
                        <a class="btn btn-primary btn-sm" href="/admin/menus/edit/' . $menu->id . '">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm"
                        onclick="removeRow(' . $menu->id . ', \'/admin/menus/destroy/\')">
                        <i class="fas fa-trash"></i>
                    </a>
                        </td>
                    </tr>
                ';

                unset($menus[$key]);

                $html .= self::menu($menus, $menu->id, $char . '|--');
            }
        }

        return $html;
    }
    public static function active($active = 0): string
    {
        return $active == 0 ? '<span class="btn btn-danger btn-xs">NO</span>'
            : '<span class="btn btn-success btn-xs">YES</span>';
    }

    public static function menus($menus, $parent_id = 0) :string
    
    {
        
        $html = '';
        foreach ($menus as $key => $menu) {
            if ($menu->parent_id == $parent_id) {
                $html .= '
                    <li class="pb-3">
                        <a ' . $menu->id . '-' . Str::slug($menu->name, '-'). '.html class="collapsed d-flex justify-content-between h3 text-decoration-none">
                            ' . $menu->name . '
                        </a>';

                unset($menus[$key]);

                if (self::isChild($menus, $menu->id)) {
                    $html .= '<ul class="collapse list-unstyled pl-3">';
                    $html .= self::menus($menus, $menu->id);
                    $html .= '</ul>';
                }

                $html .= '</li>';
            }
        }

        return $html;
    }

    public static function isChild($menus, $id) : bool
    {
        foreach ($menus as $menu) {
            if ($menu->parent_id == $id) {
                return true;
            }
        }

        return false;
    }

    public static function price($price = 0, $priceSale = 0)
    {
        if ($priceSale != 0) return number_format($priceSale);
        if ($price != 0)  return number_format($price);
        return '<a href="/lien-he.html">Liên Hệ</a>';
    }
}