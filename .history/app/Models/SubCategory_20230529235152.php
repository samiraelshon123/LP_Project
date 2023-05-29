<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    public $table = 'child_categories';
    protected $fillable = [ 'name', 'slug', 'status', 'mobile_icon', 'image', 'sub_category'];

    public function getImageForWebAttribute(){

        if($this->image)
            return asset('images/categories/'.$this->image);
        else
            return asset('images/default.png');

    }
}
