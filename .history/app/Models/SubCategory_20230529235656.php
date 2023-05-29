<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    public $table = 'child_categories';
    protected $fillable = [ 'name', 'slug', 'status', 'image', 'category_id', 'sub_category_id'];

    public function getImageForWebAttribute(){

        if($this->image)
            return asset('images/SubCategory/'.$this->image);
        else
            return asset('images/default.png');

    }
}
