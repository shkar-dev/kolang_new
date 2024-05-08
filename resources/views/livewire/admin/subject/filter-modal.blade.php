<div class="filter-box-container row" id="filterbox"  >
    <div class="row filter-title-container">
        <h5 class="filter-title" wire:click="clear"> <i class="fa fa-filter-circle-xmark"></i></h5>
    </div>
    <div class="row  my-1">
        <input type="text" class="form-control filter-input" wire:keydown="changeFilter" wire:model="subjectId" placeholder="کۆد" />
    </div>
    <div class="row my-2 p-0 justify-content-between">
        <div class=" col ">
             <input type="text" class="form-control  filter-input  " wire:keydown="changeFilter"  wire:model="subject" placeholder="بابەت" />
        </div>
        <div class=" col ">
            <input type="text" class="form-control  filter-input  " wire:keydown="changeFilter" wire:model="author" placeholder="نووسەر" />
        </div>
    </div>
    <div class="row  my-1">
        <input type="text" class="form-control filter-input    " wire:keydown="changeFilter" wire:model="translator" placeholder="وەرگێڕ" />
    </div>
    <div class="row  my-1">
        @if($this->isGeneral == 'true')
            <input type="text" class="form-control filter-input  "    wire:keydown="changeFilter"   placeholder="جۆری بابەت" />
        @else
            <input type="text" class="form-control filter-input  " disabled  wire:keydown="changeFilter" wire:model="subjectType" placeholder="جۆری بابەت" />
        @endif
    </div>
    <div class="row  my-1 p-0 align-items-center">
        <div class="col">
             <input type="date"  class="form-control filter-input  " wire:model="startDate" wire:change="changeFilter" placeholder="بەرواری دەستپێک" />
        </div>
             <span style="display: contents;">:</span>
        <div class="col">
             <input type="date"  class="form-control filter-input " wire:model="endDate" wire:change="changeFilter" placeholder="بەرواری کۆتایی" />
        </div>
    </div>
</div>

