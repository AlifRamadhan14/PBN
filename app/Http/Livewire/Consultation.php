<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Consultation as ModelConsult;

class Consultation extends Component
{
    public $idConsult, $name, $phone, $topic, $description, $image, $oldImage, $isForm, $paginate = 5, $search;
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['search'];

    protected $rules = [
        'name' => 'required',
        'phone' => 'required|min:12|max:15',
        'topic' => 'required',
        'description' => 'required',
        'image' => '', 
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
        $consult = ModelConsult::all();
        return view('livewire.Consultation.consultation', [
            'consult'=>$consult,
            'consult'=>ModelConsult::where('name', 'like', '%'.$this->search.'%')->paginate($this->paginate),
            ])->extends('layouts.master');
    }

    public function create()
    {
        $this->openForm();
    }

    public function delete($id)
    {
        $consult = ModelConsult::where('id',$id)->first();
        $this->image = $consult->image;
        
        if($id)
        {
            if($this->image == "default") {
                ModelConsult::where('id', $id)->delete();
               
            }
            else {                
                ModelConsult::where('id', $id)->delete();
                if($this->image <> ""){
                    unlink(public_path('storage/image').'/'.$this->image);
                }
            }
           
        }        
        redirect('/consultation');
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
        $this->name = null;
        $this->phone = null;
        $this->topic = null;
        $this->description =null;
        $this->image = null;
    }

}
