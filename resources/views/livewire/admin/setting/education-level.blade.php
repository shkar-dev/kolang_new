<div class="bg-white h-100 px-3">

    <div class="content-list-buttons" style="background: #023941d4;border-radius:5px;box-shadow: 0 0px 10px #e0e0e0">
        <div class="list-button-item list-title">
            <div id="comment-clicker" style="color: white;margin: 0px">ئاستی زانستی</div>
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success my-2">{{ session('success') }}</div>
    @endif
    <div class=" justify-content-around px-3  py-4 d-flex ">

        <div class="col-6 px-4 pt-2 pb-5 document-sides ">
            <form action="{{ route('admin.setting.add-education-level') }}" method="post">
                @csrf
                <div class="row ">
                    <div class=" col ">
                        <x-input-text name="name" title="ئاستی زانستی" />
                    </div>
                </div>
                <div class="row ">
                    <div class=" col ">

                        {{-- <x-input-select name="parent_id" title="دیاریبکە" :options="$academicLevels" /> --}}
                        <x-input-select-academic_level name="parent_id" title="دیاریبکە" :options="$parent" />
                    </div>
                </div>
                <button type="submit" class="custom-button"> زیادکردن<i class="fa fa-plus mx-1"></i></button>
            </form>
        </div>
        <div class="col-5 px-4 document-sides">
            <div class=" row justify-content-between align-items-center d-flex ">
                <div class="col-12 pb-3 pt-0">
                    <div class="form-floating ">
                        <input type="text" class="form-control custom-input form-control-sm" id="floatingInput"
                            placeholder="name@example.com" wire:model="search_input" wire:keydown="search">
                        <label for="floatingInput">گەڕان</label>
                    </div>
                </div>
            </div>
            <div class="row  group-lectures-container">

                <ul>
                    <li class="">
                        @foreach ($parent as $child)
                            <div class="parent  p-0">
                                <h4> {{ $child->name }} </h4>
                                <i class="fa fa-sort-down "></i>
                                <x-delete-item-button :id="$child->id" :routeName="route('admin.setting.delete-education-level')" />

                            </div>
                            <ul id=' ' class='cursor first-child-container'>
                                @foreach ($child->parent_id as $children)
                                    <li class="sub-lecture first-child">

                                        <div class="  p-0">
                                            <h4>{{ $children->name }} </h4>
                                            <x-delete-item-button :id="$children->id" :routeName="route('admin.setting.delete-education-level')" />
                                        </div>

                                        <ul id=' ' class='cursor first-child-container'>
                                            @foreach ($children->parent_id as $grandchildren)
                                                <li class="sub-lecture first-child">

                                                    <div class="  p-0">
                                                        <h4>{{ $grandchildren->name }} </h4>
                                                        <x-delete-item-button :id="$grandchildren->id" :routeName="route('admin.setting.delete-education-level')" />
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        @endforeach
                        {{-- <li class="sub-lecture first-child">
                        <div class="  p-0">
                            <h4> وانەی یەکەم 1 </h4>
                        </div>
                    </li>
                    <li class="sub-lecture first-child ">
                        <div class="second_parent  p-0">
                            <h4> وانەی یەکەم4 </h4>
                            <i class="fa fa-sort-down "></i>
                        </div>
                        <ul class="px-0 second-child-container" style="padding-right: 30px !important;">
                            <li class="  ">
                                <div class="  p-0">
                                    <h4> وانەی یەکەم3 </h4>
                                </div>
                            </li>
                            <li class="  ">
                                <div class="  p-0">
                                    <h4> وانەی یەکەم3 </h4>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <div class="parent  p-0">
                        <h4> وانەی یەکەم </h4>
                        <i class="fa fa-sort-down "></i>
                    </div>
                    <ul id='draggable-elements' class='cursor first-child-container'>
                        <li class="sub-lecture first-child">
                            <div class="  p-0">
                                <h4> وانەی یەکەم 1 </h4>
                            </div>
                        </li>
                        <li class="sub-lecture first-child">
                            <div class="  p-0">
                                <h4> وانەی یەکەم 1 </h4>
                            </div>
                        </li>
                        <li class="sub-lecture first-child ">
                            <div class="second_parent  p-0">
                                <h4> وانەی یەکەم4 </h4>
                                <i class="fa fa-sort-down "></i>
                            </div>
                            <ul class="px-0 second-child-container" style="padding-right: 30px !important;">
                                <li class="  ">
                                    <div class="  p-0">
                                        <h4> وانەی یەکەم3 </h4>
                                    </div>
                                </li>
                                <li class="  ">
                                    <div class="  p-0">
                                        <h4> وانەی یەکەم3 </h4>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul> --}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        var check_first_parent = false;
        var check_second_parent = false;
        $('.parent').click(function() {
            check_first_parent = !check_first_parent;
            $(this).siblings().toggle();
            check_first_parent ? $(this).children('i').addClass(' rotate45deg') : $(this).children('i').removeClass(
                'rotate45deg');
        })

        $('.second_parent').click(function() {
            check_second_parent = !check_second_parent;
            $(this).siblings().toggle();
            check_second_parent ? $(this).children('i').addClass(' rotate45deg') : $(this).children('i')
                .removeClass('rotate45deg');
        })
    </script>
</div>
