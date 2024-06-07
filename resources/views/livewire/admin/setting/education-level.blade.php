<div class="bg-white h-100 px-3">
    <div class="content-list-buttons" style="background: #023941d4;border-radius:5px;box-shadow: 0 0px 10px #e0e0e0">
        <div class="list-button-item list-title">
            <div id="comment-clicker" style="color: white;margin: 0px">ئاستی زانستی</div>
        </div>
    </div>
    <div class=" justify-content-around px-3  py-4 d-flex ">
        <div class="col-6 px-4 pt-2 pb-5 document-sides ">
            <form action="{{route('admin.setting.documents.store')}}" method="post" >
                @csrf
                <div class="row " >
                    <div class=" col ">
                        <x-input-text name="name" title="ئاستی زانستی"/>
                    </div>
                </div>
                <div class="row " >
                    <div class=" col ">
                        <x-input-select name="name" title="دیاریبکە"/>
                    </div>
                </div>
                <button type="submit" class="custom-button"  >  زیادکردن<i class="fa fa-plus mx-1"></i></button>
            </form>
        </div>
        <div class="col-5 px-4 document-sides">
            <div class=" row justify-content-between align-items-center d-flex " >
                <div class="col-12 pb-3 pt-0">
                    <div class="form-floating ">
                        <input type="text" class="form-control custom-input form-control-sm" id="floatingInput" placeholder="name@example.com" wire:model="search_input" wire:keydown="search">
                        <label for="floatingInput">گەڕان</label>
                    </div>
                </div>
            </div>
            <div class="row  group-lectures-container">
                <ul >
                    <li>
                        <div class="  p-0">
                            <h4> <i class="fa fa-book mx-2" > </i>وانەی یەکەم   </h4>
                            <i  style="width: fit-content;" type="button"
                                data-bs-target="#staticBackdrop1" class="fa fa-plus icon-button" data-bs-toggle="modal"  ></i>
                        </div>
                        <ul id='draggable-elements' class='cursor'>
                            <li class="sub-lecture">
                                <div class="  p-0">
                                    <h4 > <i class="fa fa-book mx-2" > </i>وانەی یەکەم 1  </h4>
                                    <i style="width: fit-content; " type="button"
                                       data-bs-target="#staticBackdrop1" class="fa fa-trash icon-button" data-bs-toggle="modal"  ></i>
                                </div>
                            </li>
                            <li class="sub-lecture">
                                <div class="  p-0">
                                    <h4 > <i class="fa fa-book mx-2" > </i>وانەی یەکەم   2</h4>
                                    <i style="width: fit-content; " type="button"
                                       data-bs-target="#staticBackdrop1" class="fa fa-trash icon-button" data-bs-toggle="modal"  > </i>
                                </div>
                            </li>
                            <li class="sub-lecture">
                                <div class="  p-0">
                                    <h4 > <i class="fa fa-book mx-2" > </i>وانەی یەکەم3   </h4>
                                    <i style="width: fit-content; " type="button"
                                       data-bs-target="#staticBackdrop1" class="fa fa-trash icon-button" data-bs-toggle="modal"  ></i>
                                </div>
                            </li>
                            <li class="sub-lecture">
                                <div class="  p-0">
                                    <h4 > <i class="fa fa-book mx-2" > </i>وانەی یەکەم4   </h4>
                                    <i style="width: fit-content; " type="button"
                                       data-bs-target="#staticBackdrop1" class="fa fa-trash icon-button" data-bs-toggle="modal"  ></i>
                                </div>
                                <ul class="px-0 " style="padding-right: 30px !important;">
                                    <li class="  ">
                                        <div class="  p-0">
                                            <h4 > <i class="fa fa-book mx-2" > </i>وانەی یەکەم3   </h4>
                                            <i style="width: fit-content; " type="button"
                                               data-bs-target="#staticBackdrop1" class="fa fa-trash icon-button" data-bs-toggle="modal"  ></i>
                                        </div>
                                    </li>
                                    <li class="  ">
                                        <div class="  p-0">
                                            <h4 > <i class="fa fa-book mx-2" > </i>وانەی یەکەم3   </h4>
                                            <i style="width: fit-content; " type="button"
                                               data-bs-target="#staticBackdrop1" class="fa fa-trash icon-button" data-bs-toggle="modal"  ></i>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>



            </div>
{{--            @foreach($documents as $index => $item)--}}
{{--                <div class="documents-list-item ">--}}
{{--                    {{++$index}} - {{$item->name}}--}}
{{--                    <form action="{{route('admin.setting.documents.destroy',$item)}}" method="post" >--}}
{{--                        @csrf--}}
{{--                        @method('Delete')--}}
{{--                        --}}{{--                        <input type="hidden" value="{{$item->id}}" name="id">--}}
{{--                        <button type="submit" class="document-delete-icon btn btn-sm btn-light" ><i class="fa fa-trash-can "></i></button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            @endforeach--}}
        </div>
    </div>
</div>
