<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\About as ModelAbout;
use App\Models\Consultation as ModelConsult;
use App\Models\Gallery as ModelGallery;
use App\Models\Service as ModelService;
use App\Models\Slider as ModelSlider;


class Index extends Component
{
    public function render()
    {
        $about = ModelAbout::all();
        $consult = ModelConsult::all();
        $gallery = ModelGallery::all();
        $service = ModelService::all();
        $slide = ModelSlider::all();

        return view('livewire.Index.index', [
            'about' => $about,
            'consult' => $consult,
            'gallery' => $gallery,
            'service' => $service,
            'slide' => $slide,
        ]);
    }
}
