<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 
        'slug',
        'page_content',
        'visibility',
        'status',
        'page_builder_status',
        'layout',
        'sidebar_layout',
        'navbar_variant',
        'page_class',
        'back_to_top',
        'breadcrumb_status',
        'footer_variant',
        'widget_style',
        'left_column',
        'right_column'
    ];

}
