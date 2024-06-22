<?php

namespace App\Livewire\Admin\Setting;

use App\Models\Document;
use App\Models\DocumentType;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Documents extends Component
{
    public $documents;
    public $search_input;
    public function search()
    {
        $this->documents = DocumentType::where('name', 'like', '%' . $this->search_input. '%')->get();
    }
    public function fetchDocuments(){
        $this->documents=DocumentType::all();
    }
    public function mount(){
        $this->fetchDocuments();
    }
    public function render()
    {
        return view('livewire.admin.setting.documents')->extends('components.layouts.app')->section('section');
    }
}
