<?php
namespace App\Helpers;

class helper{
    public static function menu($menus, $parent_id=0,$char=''){
        $html='';
        foreach($menus as $key=>$menu){
            if($menu->parent_id = $parent_id){
                $html .='
                <tr>
                    <th>'.$menu->id.'</th>
                    <th>'.$menu->name.'</th>
                    <th>'.$menu->active.'</th>
                    <th>'.$menu->updated_at.'</th>
                 
                </tr>
                ';
                unset($menus[$key]);
                $html.= self::menu($menus,$menu->id,$char.'--');
            }
        }
        return $html;
    }
}