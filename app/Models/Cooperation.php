<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Cooperation extends Model
{
    use HasFactory;

    protected $table = 'cooperations';

    protected $fillable = [
        'image',
        'title_ru',
        'title_uz',
        'title_en',
    ];

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/cooperation/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/cooperation/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $cooperation): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $cooperation->image)) {
                File::delete(public_path() . $cooperation->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/cooperation/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/cooperation/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $cooperation->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/cooperation/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/cooperation/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
