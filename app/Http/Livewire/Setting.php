<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Setting as ModelSetting;

class Setting extends Component
{
    public $idSetting, $logo, $web_name, $web_desc, $facebook, $instagram, $twitter, $linkedln, $phone, $whatsapp, $oldLogo, $isForm;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'logo' => 'required|mimes:jpg,png,jpeg,bmp,svg',
        'web_name' => 'required',
        'web_desc' => 'required',
        'facebook' => 'required',
        'instagram' => 'required',
        'twitter' => 'required',
        'linkedln' => 'required',
        'phone' => 'required',
        'whatsapp' => 'required'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $setting = ModelSetting::all();
        return view('livewire.Setting.setting', ['setting'=>$setting])->extends('layouts.master');
    }

    public function create()
    {
        $this->openForm();
    }

    public function store()
    {
        if($this->idSetting){

            if($this->logo){

                $data = $this->validate();
                unlink(public_path('storage/image') . '/' . $this->oldLogo);
                $data ['logo'] = "logo" . '.' . $this->logo->extension();
                $this->logo->storeAS('image', $data['logo']);

            }else{

                $data = $this->validate([
                    'web_name' => 'required',
                    'web_desc' => 'required',
                    'facebook' => 'required',
                    'instagram' => 'required',
                    'twitter' => 'required',
                    'linkedln' => 'required',
                    'phone' => 'required',
                    'whatsapp' => 'required'
                ]);
                $data['logo'] = $this->oldLogo;

            }      

            $setting = ModelSetting::find($this->idSetting);
            $setting->update($data);
            session()->flash('message','data berhasil diubah');

            $this->resetInput();
            redirect("/setting");
        }
    }

    public function edit($id)
    {
        $setting = ModelSetting::find($id);
        $this->idSetting = $id;
        $this->web_name = $setting->web_name;
        $this->web_desc= $setting->web_desc;
        $this->oldLogo = $setting->logo;
        $this->facebook = $setting->facebook;
        $this->instagram = $setting->instagram;
        $this->twitter = $setting->twitter;
        $this->linkedln = $setting->linkedln;
        $this->phone = $setting->phone;
        $this->whatsapp = $setting->whatsapp;

        $this->openForm();

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
        $this->web_name = null;
        $this->web_desc= null;
        $this->logo = null;
        $this->facebook = null;
        $this->instagram = null;
        $this->twitter = null;
        $this->linkedln = null;
        $this->phone = null;
        $this->whatsapp = null;
    }
}
