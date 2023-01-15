<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileElement extends Model
{
    use HasFactory;

    public function getTitleAttribute()
    {
        if ($locale = App::currentLocale() == "ar") {
            return $this->ar_title;
        } else {
            return $this->en_title;
        }
    }

    public function getValueAttribute($image)
    {
        if ($this->type == 'image') {
            return '<img src="' . asset('uploads/files') . '/' . $image . '" width="70px" height="40px">';
        }

        return $image;

    }

    public function setValueAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'files');
            $this->attributes['value'] = $imageFields;
        }else{
            $this->attributes['value'] = $image;

        }


    }
}
