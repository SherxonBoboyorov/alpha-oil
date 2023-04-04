<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'image',
        'content_ru',
        'content_uz',
        'content_en',
        'frame',
        'meta_title_ru',
        'meta_title_uz',
        'meta_title_en',
        'meta_description_ru',
        'meta_description_uz',
        'meta_description_en',
    ];

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/service/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/service/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $service): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $service->image)) {
                File::delete(public_path() . $service->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/service/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/service/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $service->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/service/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/service/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
