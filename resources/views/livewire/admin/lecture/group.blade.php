<div class="px-3 py-2  bg-white   h-100">

    <script src="https://jsuites.net/v5/jsuites.js"></script>
    <link rel="stylesheet" href="https://jsuites.net/v5/jsuites.css" type="text/css" />
{{--    lecture modal--}}
    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered document-modal">
            <div class="modal-content">
                <div class="modal-header pt-3 pb-2 " style="border: none !important">
                    <h5 class="modal-title" id="staticBackdropLabel">زیادکردنی وانە</h5>
                    <button type="button" style="font-size: 11px" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
{{--                    <div class="row p-2">--}}
{{--                        <input type="file" class="filepond">--}}
{{--                    </div>--}}
                    <div class="row justify-content-center p-3">

                        <div class="row p-0">
                            <div class=" col-12 ">
                                <x-input-text title="وانە" name="aa" />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <x-close-button  type="button" class="btn btn-light close-button"  text="داخستن"/>
                    <x-submit-button class="btn btn-primary submit-button" type="submit"   text="زیادکردن" />
                </div>
            </div>
        </div>
    </div>
{{--sub section modal--}}
    <div class="modal fade " id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered document-modal">
            <div class="modal-content">
                <div class="modal-header pt-3 pb-2 " style="border: none !important">
                    <h5 class="modal-title" id="staticBackdropLabel">وانەی یەکەم</h5>
                    <button type="button" style="font-size: 11px" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">

                    <div class="row justify-content-center p-3">
                            <div class=" col-12 ">
                                <x-input-select title="ڤیدیۆ" name="aa" />
                            </div>
                            <div class=" col-12 ">
                                <x-input-select title="وانە" name="aa" />
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <x-close-button  type="button" class="btn btn-light close-button"  text="داخستن"/>
                    <x-submit-button class="btn btn-primary submit-button" type="submit"   text="زیادکردن" />
                </div>
            </div>
        </div>
    </div>


{{--    subscribers modal--}}
    <div class="modal fade " id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered document-modal">
            <div class="modal-content">
                <div class="modal-header pt-3 pb-2 " style="border: none !important">
                    <h5 class="modal-title" id="staticBackdropLabel">زیادکردنی بەشداربوو</h5>
                    <button type="button" style="font-size: 11px" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="row justify-content-center p-3">
                        <div class="row p-0">
                            <div class=" col-12 ">
                                <x-input-text title="وانە" name="aa" />
                            </div>
                        </div>
                    </div>
                    <div class="subscriber-modal-container">
                        <?php
                        $count1 = [1,2,2,2,2,2,2,2,2];
                        ?>
                        @foreach($count1 as $item)
                            <x-subscriber-item class="col-12"/>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                    <x-close-button  type="button" class="btn btn-light close-button"  text="داخستن"/>
                    <x-submit-button class="btn btn-primary submit-button" type="submit"   text="زیادکردن" />
                </div>
            </div>
        </div>
    </div>

    <div class="content-list-buttons" style="background: #023941d4;border-radius:5px;box-shadow: 0 0px 10px #e0e0e0">
        <div class=" list-title">
            <div id="comment-clicker" style="color: white;margin: 0px">گروپ</div>
        </div>
        <x-back-button />
    </div>
    <div class="row p-3">
        <ul class="nav nav-tabs custom-add-subject-tab">
            <li class="nav-item ">
                <a href="#info" class="nav-link active tab-items" data-bs-toggle="tab"> <i class="fa fa-file-lines mx-2" ></i> زانیاریەکان </a>
            </li>
            <li class="nav-item tab-items">
                <a href="#subscribers" class="nav-link tab-items" data-bs-toggle="tab">  <i class="fa fa-pen-nib mx-2" ></i>بەشداربووان </a>
            </li>
            <li class="nav-item tab-items">
                <a href="#lectures" class="nav-link tab-items" data-bs-toggle="tab">  <i class="fa fa-video mx-2" ></i>وانەکان </a>
            </li>
        </ul>
        <div class="tab-content ">
            <div class="tab-pane fade show active" id="info">
                <div class="section  custom-row pt-2  px-5    justify-content-between" style="padding-bottom: 60px;">
                    <div class="row ">
                        <div class=" col ">
                            <x-input-text name='subject' title='ناو' type='text' isValid='true' />
                        </div>
                        <div class="row ">
                            <div class=" col ">
                                <x-input-date  name="بەرواری دەستپێك"  title="بەرواری دەستپێك" />
                            </div>
                            <div class=" col ">
                                <x-input-date name="بەرواری کۆتایی" title="بەرواری کۆتایی" />
                             </div>
                        </div>
                        <div class="row ">
                            <div class=" col ">
                                <x-input-text   name='price' title='سەرپەرشتیار' type='text' isValid='true'/>
                            </div>
                            <div class=" col ">
                                <x-input-text   name='price' title='وانەبێژ' type='text' isValid='true'/>
                            </div>
                            <div class=" col ">
                                <x-input-text   name='price' title='نرخ' type='text' isValid='true'/>
                            </div>
                        </div>
                        <div class="row ">
                            <div class=" col ">
                                <x-input-select title="کۆرس" name="aa" />
                            </div>
                        </div>
{{--                        <div class="row ">--}}
{{--                            <p>کۆرس بووک </p>--}}
{{--                            <livewire:admin.components.upload-input />--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="tab-pane fade    " id="subscribers">
                <div class="row p-3">
                    <button class="normal-button"  type="button"  data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop2">زیادکردنی بەشداربووان</button>
                </div>
                <div class="subscribers-main-container p-3">

                    <?php
                    $count = [1,2,2,2,2,2,2,2,2];
                    ?>
                    @foreach($count as $item)
                        <x-subscriber-item   class="col-3"/>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade  " id="lectures">
                <div class="row p-2 group-lectures-container" >
                    <div class="row">
                        <button class="normal-button"  type="button"
                                data-bs-target="#staticBackdrop" data-bs-toggle="modal"  >زیادکردنی وانە</button>
                    </div>
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
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="  p-0">
                                <h4> <i class="fa fa-book mx-2" > </i>وانەی یەکەم   </h4>
                                <i class="fa fa-plus icon-button"></i>
                            </div>
                            <ul id='draggable-elements1' class='cursor'>
                                <li class="sub-lecture">
                                    <h4 > <i class="fa fa-book mx-2" > </i>وانەی یەکەم   </h4>
                                </li>
                                <li class="sub-lecture">
                                    <h4  > <i class="fa fa-book mx-2" > </i>وانەی یەکەم   </h4>
                                </li>
                                <li class="sub-lecture">
                                    <h4  > <i class="fa fa-book mx-2" > </i>وانەی یەکەم   </h4>
                                </li>
                                <li class="sub-lecture">
                                    <h4  > <i class="fa fa-book mx-2" > </i>وانەی یەکەم   </h4>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        jSuites.sorting(document.getElementById('draggable-elements'), {
            ondrop: function() {
                console.log(arguments);
            }
        });
        jSuites.sorting(document.getElementById('draggable-elements1'), {
            ondrop: function() {
                console.log(arguments);
            }
        });
    </script>
</div>


