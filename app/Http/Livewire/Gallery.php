<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Gallery as ModelGallery;

class Gallery extends Component
{
    public $idGallery, $title, $image, $isForm, $oldImage, $paginate = 5, $search;
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['search'];

    protected $rules = [
        'title' => 'required',
        'image' => 'required', 
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
        $gallery = ModelGallery::all();
        return view('livewire.Gallery.gallery', [
            'gallery'=>$gallery,
            'gallery'=>ModelGallery::where('title', 'like', '%'.$this->search.'%')->paginate($this->paginate),
            ])->extends('layouts.master');
    }

    public function create()
    {
        $this->openForm();
    }

    public function store()
    {
        $data = $this->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,bmp'
        ]);

        if($this->idGallery){

            if ($this->image){
                $data = $this->validate();
                $data ['image'] = md5($this->image . microtime()) . '.' . $this->image->extension();;
                $this->image->storeAS('image', $data['image']);
            }else{
                $data = $this->validate([
                    'title' => 'required',
                ]);
                $data['image'] = $this->oldImage;
            }
        
            $gallery = ModelGallery::find($this->idGallery);
            $gallery->update($data);
    
            $this->openForm();

        }else{
            $data = $this->validate();
            $data['image'] = md5($this->image . microtime()) . '.' . $data['image']->extension();
            $this->image->storeAs('image', $data['image']);
            
            ModelGallery::create($data);
        }

        $this->closeForm();
    }


    public function edit($id)
    {
        $gallery = ModelGallery::find($id);
        $this->idGallery = $id;
        $this->title = $gallery->title;
        $this->oldImage = $gallery->image;

        $this->openForm();
    }

    public function delete($id)
    {
        $gallery = ModelGallery::where('id',$id)->first();
        
        if($id)
        {
            ModelGallery::where('id', $id)->delete();
        }
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
        redirect('gallery');
    }
    
    private function resetInput()
    {
        $this->title = null;
        $this->image = null;
    }

}
