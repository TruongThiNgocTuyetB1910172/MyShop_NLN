<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'menu_id',
        'description',
        'content',
        'price',
        'price_sale',
        'active',
        'thumb'
        
    ];

    public function menu(){
        return $this ->hasOne(Menu::class, 'id', 'menu_id')->withDefault('name');
    }
    public function getBy($dataSearch, $menuId)
    {
        return $this->whereHas('menus', fn ($q) => $q->where('menu_id', $menuId))->paginate(10);
    }
}