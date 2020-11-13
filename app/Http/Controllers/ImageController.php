<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public static $images = array(
        "1.jpg",
        "2.jpg",
        "3.jpg",
        "4.jpg",
        "5.jpg",
        "6.jpg",
        "7.jpg",
        "8.jpg",
        "9.jpg",
        "10.jpg",
        "11.jpg",
        "12.jpg",
        "13.jpg",
        "14.jpg",
        "15.jpg",
        "16.jpg",
    );

    public function showImages()
    {
        $totalImages = (count(ImageController::$images));
        $randomNumber = (rand(0, ($totalImages - 1)));
        $data['image_name'] = ImageController::$images[$randomNumber];
        $data['ip'] = gethostbyname(gethostname());
        $data['storage'] = Storage::disk('s3');

        return view('image.index')->with('data',$data);
    }
}