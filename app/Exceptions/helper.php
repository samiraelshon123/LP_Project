<?php
use Illuminate\Support\Str;
function uploadImage($file, $path = '/images/'): string
{

    $filename= Str::random(15).'.'.$file->getClientOriginalExtension();
    $file-> move(public_path($path), $filename);
    return $filename;
}
?>