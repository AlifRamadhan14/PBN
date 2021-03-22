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

class Index extends Component
{
    public $idConsult, $name, $phone, $topic, $description, $image, $oldImage;
    use WithFileUploads;

    protected $rules = [
        'name' => 'required',
        'phone' => 'required',
        'topic' => 'required',
        'description' => 'required',
        'image' => 'required|mimes:jpg,png,jpeg,bmp,svg', 
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
        ]);
    }

    public function store()
    {
            $data = $this->validate();
            $data['image'] = md5($this->image . microtime()) . '.' . $data['image']->extension();
            $this->image->storeAs('image', $data['image']);
            
            ModelConsult::create($data);
            session()->flash('message','data berhasil ditambah');
            $this->resetInput();
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
