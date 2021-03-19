<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\About as ModelAbout;
use App\Models\Consultation as ModelConsult;
use App\Models\Gallery as ModelGallery;
use App\Models\Service as ModelService;
use App\Models\Slider as ModelSlider;
use App\Models\Setting as ModelSetting;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard',[
            'slider' => ModelSlider::get()->count(),
            'about' => ModelAbout::get()->count(),
            'consult' => ModelConsult::get()->count(),
            'gallery' => ModelGallery::get()->count(),
            'service' => ModelService::get()->count(),
            'setting' => ModelSetting::get()->count(),
        ])->extends('layouts.master');
    }
}