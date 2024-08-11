<?php

namespace App\Livewire\Admin\Subject;

use Illuminate\Support\Facades\Log;
use Livewire\Component;
use PhpParser\Node\Expr\Cast\Object_;

class FilterModal extends Component
{
    public $isGeneral;
    public  $filter;
    public  $subjectId;
    public  $subject;
    public  $subjectType;
    public  $startDate;
    public  $endDate;
    public  $author;
    public  $translator;
    public function clear()
    {
        $this->subjectId = "";
        $this->subject = "";
        $this->startDate = "";
        $this->endDate = "";
        $this->author = "";
        $this->translator = "";
        $this->startDate = "";
        $this->endDate = "";
        $this->changeFilter();
    }
    public function changeFilter()
    {
        $this->dispatch('change-filter', $this->subjectId, $this->subject, $this->subjectType, $this->author, $this->startDate, $this->endDate, $this->translator);
    }
    public function render()
    {
        return view('livewire.admin.subject.filter-modal');
    }
}
