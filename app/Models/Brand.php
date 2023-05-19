<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    public $table = 'brands';
    protected $fillable = ['title', 'url', 'image'];
    
    public function getImageForWebAttribute(){

        if($this->image)
            return asset('images/brands/'.$this->image);
        else
            return asset('images/default.png');

    }
}
