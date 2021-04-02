<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\About as ModelAbout;
use App\Models\Consultation as ModelConsult;
use App\Models\Gallery as ModelGallery;
use App\Models\Service as ModelService;
use App\Models\Slider as ModelSlider;
use App\Models\Setting as ModelSetting;
use phpDocumentor\Reflection\Types\This;

class Index extends Component
{
    public $idConsult, $name, $phone, $topic, $description, $image, $oldImage;
    use WithFileUploads;

    protected $rules = [
        'name' => 'required',
        'phone' => 'required|min:12|max:15}',
        'topic' => 'required',
        'description' => 'required',
        'image' => '', 
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $about = ModelAbout::all();
        $consult = ModelConsult::all();
        $gallery = ModelGallery::all();
        $service = ModelService::all();
        $slide = ModelSlider::all();
        $setting = ModelSetting::all();

        return view('livewire.Index.index',[
            'slide'=>$slide,
            'about'=>$about,
            'consult'=>$consult,
            'gallery'=>$gallery,
            'service'=>$service,
            'setting'=>$setting,
        ])->extends('frontend.master');
    }

    public function store()
    {
        if($this->image) {
            $data = $this->validate([
                'name' => 'required',
                'phone' => 'required|min:12|max:15',
                'topic' => 'required',
                'description' => 'required',
                'image' => 'image|mimes:jpg,png,jpeg,bmp,svg', 
            ]);
            $data['image'] = md5($this->image . microtime()) . '.' . $data['image']->extension();
            $this->image->storeAs('image', $data['image']);
            $data['phone'] = "+62" . $this->phone;
            
            ModelConsult::create($data);
            session()->flash('message','data berhasil ditambah');
            $this->resetInput();            
        }
        else {
            $data = $this->validate();
            $data['image'] = "default";
            ModelConsult::create($data);                        
            $this->resetInput();           
        }

        redirect('/');
        session()->flash('message','data berhasil ditambah');
    }
    
    private function resetInput()
    {
        $this->name = null;
        $this->phone = null;
        $this->topic = null;
        $this->description = null;
        $this->image = null;
    }
}
