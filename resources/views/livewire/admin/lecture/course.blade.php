@extends('components.layouts.app')
@section('section')
    <div class="px-3 py-2  bg-white   h-100">

        <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered document-modal">
                <div class="modal-content">
                    <form class="modalForm" method="post" action="{{ route('admin.course.add-course-attachment') }}">
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $course != null ? $course->id : '' }}" />
                        <div class="modal-header pt-3 pb-2 " style="border: none !important">
                            <h5 class="modal-title" id="staticBackdropLabel">زیادکردنی هاوپێچ</h5>
                            <button type="button" style="font-size: 11px" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body ">
                            <div class="row p-2">
                                <p>هاوپێچ</p>
                                <input type="file" class="filepond  " id="attachment" name="attachment">
                            </div>
                            <div class="row justify-content-center p-3">
                                <div class="row p-0">
                                    <div class=" col-12 ">
                                        <x-input-text title="ناوی وانە " name="name" content="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <x-close-button type="button" class="btn btn-light close-button" text="داخستن" />
                            <x-submit-button class="btn btn-primary submit-button" type="submit" text="زیادکردن" />
                        </div>
                    </form>
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
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('failed'))
                <div class="alert alert-danger">{{ session('failed') }}</div>
            @endif
            <ul class="nav nav-tabs custom-add-subject-tab">
                <li class="nav-item ">
                    <a href="#info" class="nav-link active tab-items" data-bs-toggle="tab"> <i
                            class="fa fa-file-lines mx-2"></i> زانیاریەکان </a>
                </li>
                @if ($course != null)
                    <li class="nav-item tab-items">
                        <a href="#attachments" class="nav-link tab-items" data-bs-toggle="tab"> <i
                                class="fa fa-paperclip mx-2"></i>هاوپێچەکان </a>
                    </li>
                @endif
            </ul>
            <div class="tab-content ">
                <div class="tab-pane fade show active" id="info">
                    <form
                        action="{{ $course != null ? route('admin.course.update-course', $course->id) : route('admin.course.add-course') }}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $course != null ? $course->id : '' }}" />
                        <div class="section  custom-row pt-2  px-5    justify-content-between"
                            style="padding-bottom: 60px;">
                            <div class="row ">
                                <div class=" col ">
                                    <x-input-text name='name' title='بابەت' type='text' isValid='true'
                                        content="{{ $course != null ? $course->name : '' }} " />
                                </div>
                                <div class="row ">
                                    <div class=" col ">
                                        <x-input-text name='duration' title='ماوەی کۆرس' type='text' isValid='true'
                                            content="{{ $course != null ? $course->duration : '' }}" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class=" col">
                                        <x-input-textarea title="دەربارەی کۆرس" name="description"
                                            content="{{ $course != null ? $course->description : '' }}" />
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
                <div class="tab-pane fade show " id="attachments">
                    <div class="row pt-3">
                        <button class="normal-button" style="width: fit-content;" type="button" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <div class="row" style="justify-content: start;align-items: center;flex-direction: row">

                        @if ($course_attachments != null)
                            @foreach ($course_attachments as $item)
                                <div class="card mt-2 mx-2 p-3" style="width: 16rem;">
                                    <img src="{{ asset('admin/images/img.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <p class="card-title">
                                            {{ $item->courseName }} <i class="fa-solid fa-arrow-right-long"></i>
                                            {{ $item->name }}
                                        </p>
                                    </div>

                                    <div class="card-delete-container">
                                        <x-delete-item-button :id="$item->id" :routeName="route('admin.course.delete-course-attachment')" />
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <script>
            var aa = document.getElementById('attachment');
            aa.addEventListener('change', function(e) {
                console.log(e.target);
            });
        </script>
    </div>
@endsection
