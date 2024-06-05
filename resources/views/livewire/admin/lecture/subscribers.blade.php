<div class="px-3 py-2  bg-white   h-100">

    {{--    transaction modal--}}
    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered document-modal">
            <div class="modal-content">
                <div class="modal-header pt-3 pb-2 " style="border: none !important">
                    <h5 class="modal-title" id="staticBackdropLabel">زیادکردنی مامەڵە</h5>
                    <button type="button" style="font-size: 11px" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="row justify-content-center p-3">
                        <div class="row p-0">
                             <x-input-select title="گروپ" name="aa" />
                             <x-input-text title="بڕی پارە" name="aa" />
                             <x-input-select title="شێوازی پارەدان" name="aa" />
                             <x-input-text-area title="تێبینی" name="aa" />
                         </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" style="background: none !important" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" style="background: #023941 !important">submit</button>
                </div>
            </div>
        </div>
    </div>


    <div class="content-list-buttons" style="background: #023941d4;border-radius:5px;box-shadow: 0 0px 10px #e0e0e0">
        <div class=" list-title">
            <div id="comment-clicker" style="color: white;margin: 0px">بەشداربووان</div>
        </div>
        <x-back-button />
    </div>
    <div class="row p-3">
        <ul class="nav nav-tabs custom-add-subject-tab">
            <li class="nav-item ">
                <a href="#info" class="nav-link active tab-items" data-bs-toggle="tab"> <i class="fa fa-file-lines mx-2" ></i> زانیاریەکان </a>
            </li>
            <li class="nav-item tab-items">
                <a href="#transaction" class="nav-link tab-items" data-bs-toggle="tab">  <i class="fa fa-money-bills mx-2" ></i>مامەڵە داراییەکان </a>
            </li>
        </ul>
        <div class="tab-content ">
            <div class="tab-pane fade show active" id="info">
                <div class="section  custom-row pt-2  px-5    justify-content-between" style="padding-bottom: 60px;">
            <div class="row ">
                <div class="row ">
                    <div class=" col ">
                        <x-input-text name='subject' title='ناو' type='text' isValid='true' />
                    </div>
                </div>
                <div class="row ">
{{--                    <div class=" col ">--}}
{{--                        <x-input-select title="گروپ" name="a" />--}}
{{--                    </div>--}}
                    <div class=" col ">
                        <x-input-text name='subject' title='ڕەگەز' type='text' isValid='true' />
                    </div>
                    <div class=" col ">
                        <x-input-text   name='course_duration' title='تەمەن' type='text' isValid='true'/>
                    </div>
                </div>
                <div class="row ">
                    <div class=" col ">
                        <x-input-text name='subject' title='مۆبایل ١' type='text' isValid='true' />
                    </div>
                    <div class=" col ">
                        <x-input-text   name='course_duration' title='مۆبایل ٢ ' type='text' isValid='true'/>
                    </div>
                </div>

                <div class="row ">
                    <div class=" col ">
                        <x-input-text name='subject' title=' بەروار' type='text' isValid='true' />
                    </div>
{{--                    <div class=" col ">--}}
{{--                        <x-input-text   name='course_duration' title=' ڕێگەی پارەدان ' type='text' isValid='true'/>--}}
{{--                    </div>--}}
{{--                    <div class=" col ">--}}
{{--                        <x-input-text name='subject' title=' کۆدی پارەدان' type='text' isValid='true' />--}}
{{--                    </div>--}}
                    <div class=" col ">
                        <x-input-text name='subject' title='ناوی بەکارهێنەر' type='text' isValid='true' />
                    </div>
                    <div class=" col ">
                        <x-input-text   name='course_duration' title=' وشەی تێپەڕ ' type='text' isValid='true'/>
                    </div>
                </div>
                <div class="row ">
                    <div class=" col ">
                        <x-input-text name='subject' title='شار' type='text' isValid='true' />
                    </div>
                    <div class=" col ">
                        <x-input-text   name='course_duration' title=' ئاستی خوێندن  ' type='text' isValid='true'/>
                    </div>
                </div>

                <div class="row pt-4">
                    <input type="file" class="filepond"  >
                </div>

            </div>
        </div>
            </div>
            <div class="tab-pane fade    " id="transaction">
                <div  class="p-3 ">
                    <button class="normal-button"  type="button"  data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">زیادکردنی مامەڵەی دارایی</button>
                </div>
                <div class="row p-1  group-lectures-container " >
                    <ul>
                        <li>
                            <ul>
                                <?php
                                $count = [1,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2];
                                ?>
                                @foreach($count as $item)
                                    <li class="sub-lecture">
                                        <div class="  p-0">
                                            <h4 > <i class="fa fa-book mx-2" > </i>group -1 transaction1   </h4>
                                            <i style="width: fit-content; " type="button" data-bs-toggle="modal"
                                               data-bs-target="#staticBackdrop1" class="fa fa-trash icon-button"></i>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>




