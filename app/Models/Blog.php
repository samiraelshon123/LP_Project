<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
       'category_id',
        'user_id',
       'admin_id',
       'created_by',
        'title',
        'slug',
       'blog_content',
       'image',
       'author',
        'excerpt',
       'views',
       'visibility',
       'featured',
       'schedule_date',
        'status',
       'tag_name',    
    ];
   
    public function getImageForWebAttribute(){

        if($this->image)
            return asset('images/blogs/'.$this->image);
        else
            return asset('images/default.png');

    }
  

}
