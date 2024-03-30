<div class="filter-box-container row" id="filterbox"  >
    <div class="row filter-title-container">
        <h5 class="filter-title" wire:click="clear"> <i class="fa fa-filter-circle-xmark"></i></h5>
    </div>
    <div class="row  my-1">
        <input type="text" class="form-control filter-input    " wire:keydown="changeFilter" wire:model="staffId" placeholder="کۆد" />
    </div>
    <div class="row my-2 p-0 justify-content-between">
        <div class=" col ">
            <input type="text" class="form-control  filter-input  " wire:keydown="changeFilter"  wire:model="name" placeholder="ناو" />
        </div>
        <div class=" col ">
            <input type="text" class="form-control  filter-input  " wire:keydown="changeFilter" wire:model="educationLevel" placeholder="ئاستی خوێندن" />
        </div>
    </div>
    <div class="row  my-1">
        <input type="text" class="form-control filter-input    " wire:keydown="changeFilter" wire:model="staffType" placeholder="جۆری ستاف" />
    </div>
    <div class="row  my-1">
        <input type="text" class="form-control filter-input  "  wire:keydown="changeFilter" wire:model="phone1" placeholder="تەلەفون ١ " />
    </div>
    <div class="row  my-1">
        <input type="text" class="form-control filter-input  "  wire:keydown="changeFilter" wire:model="phone2" placeholder="تەلەفون ٢ " />
    </div>
    <div class="row  my-1">
        <input type="text" class="form-control filter-input  "  wire:keydown="changeFilter" wire:model="phone3" placeholder="تەلەفون ٣ " />
    </div>
    <div class="row  my-1 p-0 align-items-center">
        <div class="col">
             <input type="date"  class="form-control filter-input  " wire:model="dateOfBirth" wire:change="changeFilter" placeholder="بەرواری لەدایکبوون" />
        </div>
        <span style="display: contents;">:</span>
        <div class="col">
             <input type="text"  class="form-control filter-input " wire:model="gender" wire:change="changeFilter" placeholder="ڕەگەز" />
        </div>
    </div>
</div>
