<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Refinery extends Model
{
    use HasFactory;

    protected $table = 'refineries';

    protected $fillable = [
        'image',
        'title_ru',
        'title_uz',
        'title_en',
        'content_ru',
        'content_uz',
        'content_en',
    ];


    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/refinery/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/refinery/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $refinery): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $refinery->image)) {
                File::delete(public_path() . $refinery->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/refinery/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/refinery/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $refinery->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/refinery/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/refinery/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
