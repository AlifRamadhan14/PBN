<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Slider as ModelSlider;

class Slider extends Component
{
    public $idSlide, $title, $image, $description, $isForm, $oldImage;
    use WithFileUploads;

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'image' => '', 
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $slide = ModelSlider::all();
        return view('livewire.Slider.slider', ['slide'=>$slide])->extends('layouts.master');
    }

    public function create()
    {
        $this->openForm();
    }

    public function store()
    {
        
        if($this->idSlide){

            if ($this->image){
                $data = $this->validate([
                     'title' => 'required',
                    'description' => 'required',
                    'image' => 'image|mimes:jpg,png,jpeg,bmp,svg',
                ]);
                if($this->oldImage != "default" ){
                    unlink(public_path('storage/image') . '/' . $this->oldImage);
                }
                $data ['image'] = md5($this->image . microtime()) . '.' . $this->image->extension();;
                $this->image->storeAS('image', $data['image']);
            }else{
                $data = $this->validate([
                    'title' => 'required',
                    'description' => 'required',
                ]);
                $data['image'] = "default";
            }
        
            $slide  = ModelSlider::find($this->idSlide);
            $slide->update($data);
            session()->flash('message','data berhasil diubah');
            $this->resetInput();
            redirect("/slider");

        }
        
        $this->closeForm();
        
    }

    public function edit($id)
    {
        $slide = ModelSlider::find($id);
        $this->idSlide = $id;
        $this->title = $slide->title;
        $this->description = $slide->description;
        $this->oldImage = $slide->image;

        $this->openForm();
    }

    public function delete($id)
    {
        $slide = ModelSlider::where('id',$id)->first();
        $this->image = $slide->image;
        
        if($id)
        {
            ModelSlider::where('id', $id)->delete();
            if($this->image <> ""){
                unlink(public_path('storage/image').'/'.$this->image);
            }       
        }
        $this->emit('confirm');
        
    }

    public function openForm()
    {
        $this->isForm = true;
    }

    public function closeForm()
    {
        $this->isForm = false;
    }

    public function back(){
        $this->closeForm();
    }
    
    private function resetInput()
    {
        $this->title = null;
        $this->description =null;
        $this->image = null;
    }
}
