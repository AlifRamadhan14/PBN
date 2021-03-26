<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Service as ModelService;

class Service extends Component
{
    public $idService, $title, $image, $description, $isForm, $oldImage, $paginate = 5, $search;
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'image' => 'required|mimes:jpg,png,jpeg,bmp,svg', 
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function render()
    {   
        $service = ModelService::all();
        return view('livewire.Service.service', [
            'service'=>$service,
            'service'=>ModelService::where('title', 'like', '%'.$this->search.'%')->paginate($this->paginate),
            ])->extends('layouts.master');
    }

    public function create()
    {
        $this->openForm();
    }

    public function store()
    {
        if($this->idService){

            if ($this->image){
                $data = $this->validate();
                unlink(public_path('storage/image') . '/' . $this->oldImage);
                $data ['image'] = md5($this->image . microtime()) . '.' . $this->image->extension();
                $this->image->storeAS('image', $data['image']);
            }else{
                $data = $this->validate([
                    'title' => 'required',
                    'description' => 'required'
                ]);
                $data['image'] = $this->oldImage;
            }
        
            $service = ModelService::find($this->idService);
            $service->update($data);
            session()->flash('message','data berhasil diubah');
            $this->resetInput();
            // return redirect()->to('/service');

            $this->closeForm();

        }else{
            $data = $this->validate();
            $data['image'] = md5($this->image . microtime()) . '.' . $data['image']->extension();
            $this->image->storeAs('image', $data['image']);
            
            ModelService::create($data);
            session()->flash('message','data berhasil ditambah');
            $this->resetInput();
            // return redirect()->to('/service');
        }

        $this->closeForm();
    }

    public function edit($id)
    {
        $service = ModelService::find($id);
        $this->idService = $id;
        $this->title = $service->title;
        $this->description = $service->description;
        $this->oldImage = $service->image;

        $this->openForm();
    }

    public function delete($id)
    {
        $service = ModelService::where('id',$id)->first();
        $this->image = $service->image;
        
        if($id)
        {   
            ModelService::where('id', $id)->delete();
            if($this->image <> ""){
                unlink(public_path('storage/image').'/'.$this->image);
            }                 
        }        
        $this->emit('confirm');
        session()->flash('message','data berhasil dihapus');
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
        $this->title = "";
        $this->description = "";
        $this->image = "";
    }
}
