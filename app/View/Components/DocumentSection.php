<?php

namespace App\View\Components;

use App\Models\DocumentType;
use App\Models\MemberDocument;
use App\Models\Staff;
use App\Models\StaffDocument;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DocumentSection extends Component
{
    /**
     * Create a new component instance.
     */
    public $route;
    public $id;
    public $documents;
    public $type;
    public $attachments;

    public function __construct($route = '', $id = '', $type)
    {
        $this->route = $route;
        $this->id = $id;
        $this->type = $type;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->documents = DocumentType::all();
        if ($this->type == 'lecturer' || $this->type == 'paticipant') {
            $this->attachments = MemberDocument::join('document_types', 'member_documents.document_type_id', '=', 'document_types.id')
                ->join('members', 'member_documents.member_id', '=', 'members.id')
                ->select('document_types.*', 'member_documents.*')
                ->where('member_id', '=', $this->id)
                ->where('members.type', '=', $this->type)
                ->get();
        }


        if ($this->type == 'translator' || $this->type == 'writer') {
            $this->attachments = StaffDocument::join('document_types', 'staff_documents.document_type_id', '=', 'document_types.id')
                ->join('staff', 'staff_documents.staff_id', '=', 'staff.id')
                ->select('document_types.*', 'staff_documents.*')
                ->where('staff_id', '=', $this->id)
                ->where('staff.type', '=', $this->type)
                ->get();
        }
        // if ($this->type == 'subscriber') {
        //     $this->attachments = MemberDocument::join('document_types', 'member_documents.document_type_id', '=', 'document_types.id')
        //         ->select('document_types.*', 'staff_documents.*')
        //         ->where('member_id', '=', $this->id)
        //         ->get();
        // }
        return view('components.document-section');
    }
}
