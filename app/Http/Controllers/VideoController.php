<?php

namespace App\Http\Controllers;

use FFMpeg\Format\Video\X264;
use Illuminate\Http\Request;
use ProtoneMedia\LaravelFFMpeg\Filesystem\Media;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class VideoController extends Controller
{
    //
    public function test(){
        $name =  rand();

        FFMpeg::fromDisk('songs')
            ->open(['test.mp4', 'test.mp3'])
            ->export()
            ->addFormatOutputMapping(new X264, Media::make('songs', 'finish/'.$name.'new_video.mp4'), ['0:v', '1:a'])
            ->save();

        return 111;

    }
}
