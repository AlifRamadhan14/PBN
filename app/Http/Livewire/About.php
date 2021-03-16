<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

use App\Models\About as ModelAbout;

class About extends Component
{
    public $idAbout, $title, $image, $description, $isForm, $oldImage, $paginate = 5, $search;

    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'image' => 'required|mimes:jpg,png,jpeg,bmp', 
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
        $about = ModelAbout::all();
    
        return view('livewire.About.about', [
            'about'=>$about,
            'about'=>ModelAbout::where('title', 'like', '%'.$this->search.'%')->paginate($this->paginate),
            ])->extends('layouts.master');
    }

    public function create()
    {
        $this->openForm();
    }

    public function store()
    {

        if($this->idAbout){

            if ($this->image){
                $data = $this->validate();
                unlink(public_path('storage/image') . '/' . $this->oldImage);
                $data ['image'] = md5($this->image . microtime()) . '.' . $this->image->extension();;
                $this->image->storeAS('image', $data['image']);
            }else{
                $data = $this->validate([
                    'title' => 'required',
                    'description' => 'required'
                ]);
                $data['image'] = $this->oldImage;
            }
        
            $about  = ModelAbout::find($this->idAbout);
            $about->update($data);
            session()->flash('message','data berhasil diubah');
            $this->resetInput();
            $this->openForm();

        }else{
            $data = $this->validate();
            $data['image'] = md5($this->image . microtime()) . '.' . $data['image']->extension();
            $this->image->storeAs('image', $data['image']);
            
            ModelAbout::create($data);
            session()->flash('message','data berhasil ditambah');
            $this->resetInput();
        }

        $this->closeForm();
    }

    public function edit($id)
    {
        $about = ModelAbout::find($id);
        $this->idAbout = $id;
        $this->title = $about->title;
        $this->description = $about->description;
        $this->oldImage = $about->image;

        $this->openForm();
    }

    public function delete($id)
    {
        $about = ModelAbout::where('id',$id)->first();
        $this->image = $about->image;
        
        if($id)
        {
            ModelAbout::where('id', $id)->delete();
            if($this->image <> ""){
                unlink(public_path('storage/image').'/'.$this->image);
            }                          
        }
        session()->flash('message','data berhasil dihapus');
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
