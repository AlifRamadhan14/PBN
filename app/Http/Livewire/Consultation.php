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
        'phone' => 'required',
        'topic' => 'required',
        'description' => 'required',
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

    public function store()
    {
        if($this->idConsult){

            if($this->image){
                $data = $this->validate();
                $data ['image'] = md5($this->image . microtime()) . '.' . $this->image->extension();
                $this->image->storeAS('image', $data['image']);
            }else{
                $data = $this->validate([
                'name' => 'required',
                'phone' => 'required',
                'topic' => 'required',
                'description' => 'required',
                ]);
                $data['image'] = $this->oldImage;
            }

            $consult = ModelConsult::find($this->idConsult);
            $consult->update($data);

            $this->openForm();

        }else{

            $data = $this->validate();
            $data['image'] = md5($this->image . microtime()) . '.' . $data['image']->extension();
            $this->image->storeAs('image', $data['image']);
            
            ModelConsult::create($data);

        }

        $this->closeForm();
    }

    public function edit($id)
    {
        $consult = ModelConsult::find($id);
        $this->idConsult = $id;
        $this->name = $consult->name;
        $this->phone = $consult->phone;
        $this->topic = $consult->topic;
        $this->description = $consult->description;
        $this->oldImage = $consult->image;

        $this->openForm();

    }

    public function delete($id)
    {
        $consult = ModelConsult::where('id',$id)->first();
        
        if($id)
        {
            ModelConsult::where('id', $id)->delete();
        }
        redirect('consultation');
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
        redirect('consultation');
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
