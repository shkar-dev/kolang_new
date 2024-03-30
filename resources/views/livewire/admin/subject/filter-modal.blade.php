<div class="filter-box-container row" id="filterbox"  >
    <div class="row filter-title-container">
        <h5 class="filter-title" wire:click="clear"> <i class="fa fa-filter-circle-xmark"></i></h5>
    </div>
    <div class="row  my-1">
        <input type="text" class="form-control filter-input" wire:keydown="changeFilter" wire:model="subjectId" placeholder="کۆد" />
    </div>
    <div class="row my-2 p-0 justify-content-between">
        <div class=" col ">
{{--            <label class="rebar form-label" >بابەت  </label>--}}
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
        <input type="text" class="form-control filter-input  "  wire:keydown="changeFilter" wire:model="subjectType" placeholder="جۆری بابەت" />
    </div>
    <div class="row  my-1 p-0 align-items-center">
        <div class="col">
{{--            <label class="rebar form-label" >بەرواری دەستپێک</label>--}}
            <input type="date"  class="form-control filter-input  " wire:model="startDate" wire:change="changeFilter" placeholder="بەرواری دەستپێک" />
        </div>
             <span style="display: contents;">:</span>

        <div class="col">
{{--            <label class="rebar form-label" >بەرواری کۆتایی</label>--}}
            <input type="date"  class="form-control filter-input " wire:model="endDate" wire:change="changeFilter" placeholder="بەرواری کۆتایی" />
        </div>
    </div>
</div>

