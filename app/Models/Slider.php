<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'sliders';

    protected $fillable = [
        'image',
        'title_ru',
        'title_uz',
        'title_en',
        'description_ru',
        'description_uz',
        'description_en',
        'link',
    ];



    public function uploadImage(): string {
        $image = request()->file('image');
        $image->store('uploads/images', 'public');
        return $image->hashName();
    }

    public function updateImage($image): string {
        if (request()->file('image') != null) {
            $this->removeImage();
            return $this->uploadImage();
        }
        return $image;
    }

    public function removeImage() {
        if (File::exists('storage/uploads/images/' . $this->image)) {
            File::delete('storage/uploads/images/' . $this->image);
        }
    }

}
