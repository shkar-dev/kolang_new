<div class="px-3 py-2  bg-white   h-100">

    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered document-modal">
            <div class="modal-content">
                <div class="modal-header pt-3 pb-2 " style="border: none !important">
                    <h5 class="modal-title" id="staticBackdropLabel">زیادکردنی هاوپێچ</h5>
                    <button type="button" style="font-size: 11px" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="row p-2">
                        <p>هاوپێچ</p>
                        <input type="file" class="filepond" name="attachment" accept="image/*">
                    </div>
                    <div class="row justify-content-center p-3">
                        <div class="row p-0">
                            <div class=" col-12 ">
                                <x-input-text title="ناوی وانە " name="name" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <x-close-button type="button" class="btn btn-light close-button" text="داخستن" />
                    <x-submit-button class="btn btn-primary submit-button" type="submit" text="زیادکردن" />
                </div>
            </div>
        </div>
    </div>
    {{--    end modal --}}
    <div class="content-list-buttons" style="background: #023941d4;border-radius:5px;box-shadow: 0 0px 10px #e0e0e0">
        <div class=" list-title">
            <div id="comment-clicker" style="color: white;margin: 0px">کۆرس</div>
        </div>
        <x-back-button />
    </div>
    <div class="row p-3">
        <ul class="nav nav-tabs custom-add-subject-tab">
            <li class="nav-item ">
                <a href="#info" class="nav-link active tab-items" data-bs-toggle="tab"> <i
                        class="fa fa-file-lines mx-2"></i> زانیاریەکان </a>
            </li>
            <li class="nav-item tab-items">
                <a href="#attachments" class="nav-link tab-items" data-bs-toggle="tab"> <i
                        class="fa fa-paperclip mx-2"></i>هاوپێچەکان </a>
            </li>
        </ul>
        <div class="tab-content ">
            <div class="tab-pane fade show active" id="info">
                <form action="{{ route('admin.course.add-course') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="section  custom-row pt-2  px-5    justify-content-between"
                        style="padding-bottom: 60px;">
                        <div class="row ">
                            <div class=" col ">
                                <x-input-text name='name' title='بابەت' type='text' isValid='true' />
                            </div>
                            <div class="row ">
                                <div class=" col ">
                                    <x-input-text name='duration' title='ماوەی کۆرس' type='text' isValid='true' />
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col">
                                    <x-input-textarea title="دەربارەی کۆرس" name="description" />
                                </div>
                            </div>
                            <div class="row py-2">
                                <p>کەڤەری کۆرس</p>
                                <input type="file" name="image" class="filepond" accept="image/*">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </form>

            </div>
            <div class="tab-pane fade show  " id="attachments">
                <div class="row pt-3">
                    <button class="normal-button" style="width: fit-content;" type="button" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
                <div class="row" style="justify-content: start;align-items: center;flex-direction: row">
                    <?php
                    $count = [1, 2, 3, 4, 5, 3];
                    ?>
                    {{-- @foreach ($count as $item)
                        <div class="card mt-2 mx-2 p-3" style="width: 16rem;">
                            <img src="{{ asset('admin/images/img.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-title">Card title</p>
                            </div>
                            <div class="card-delete-container">
                                <i class="fa fa-xmark" style="color: #cd0505"></i>
                            </div>
                        </div>
                    @endforeach --}}
                </div>
            </div>
        </div>
    </div>

</div>
