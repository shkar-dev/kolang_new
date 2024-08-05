@extends('components.layouts.app')
@section('section')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.2.0/css/froala_editor.pkgd.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.2.0/css/plugins.pkgd.min.css">
    {{-- @php --}}
    {{--    $data = \App\Models\FroalaUploadImage::findOrFail(1) --}}
    {{-- @endphp --}}

    <div class="px-3 py-2  bg-white aaa h-100">
        <link rel="stylesheet" href="{{ asset('admin/fullpage.css') }}">
        <script src="{{ asset('admin/fullpage.js') }}"></script>
        <div class="content-list-buttons" style="background: #023941d4;border-radius:5px;box-shadow: 0 0px 10px #e0e0e0">
            <div class=" list-title">
                <div id="comment-clicker" style="color: white;margin: 0px">زیادکردنی بابەت</div>
            </div>
            <x-back-button />
        </div>
        @if (session('success'))
            <div class="alert alert-success my-2">{{ session('success') }}</div>
        @endif
        @if (session('failed'))
            <div class="alert alert-danger my-2">{{ session('failed') }}</div>
        @endif

        {{-- @if ($user)
        {{ $user }}
    @endif --}}
        <div class="row p-3">
            <form class="needs-validation" data-toggle="validator"
                action="{{ $subject != null ? route('admin.subject.update-subject') : route('admin.subject.add-subject') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if ($subject != null)
                    <input type="hidden" name="id" value="{{ $subject->id }}">
                @endif
                <ul class="nav nav-tabs custom-add-subject-tab">
                    <li class="nav-item ">
                        <a href="#home" class="nav-link active tab-items" data-bs-toggle="tab"> <i
                                class="fa fa-file-lines mx-2"></i> زانیاریەکان </a>
                    </li>
                    <li class="nav-item tab-items">
                        <a href="#profile" class="nav-link tab-items" data-bs-toggle="tab"> <i
                                class="fa fa-pen-nib mx-2"></i>نووسین </a>
                    </li>
                </ul>
                <div class="tab-content ">
                    <div class="tab-pane fade show active" id="home">
                        <div class="section  custom-row pt-2  px-5    justify-content-between"
                            style="padding-bottom: 60px;">
                            <div class="row ">
                                <div class=" col ">
                                    <x-input-text name='title' title='بابەت' type='text' isValid='true'
                                        content="{{ $subject != null ? $subject->title : '' }}" />
                                </div>
                                <div class="row ">
                                    <div class=" col ">

                                        <x-input-select title="جۆری بابەت" name="subject_id" :options="$subjectType"
                                            content="{{ $subject != null ? $subject->subject_id : '' }}" />

                                    </div>
                                    <div class=" col ">
                                        <x-input-select title="نووسەر" name="writer_id" :options="$writer"
                                            content="{{ $subject != null ? $subject->writer_id : '' }}" />
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class=" col ">
                                        <x-input-select title="وەرگێڕ" name="translator_id" :options="$translator"
                                            content="{{ $subject != null ? $subject->translator_id : '' }}" />
                                    </div>
                                    <div class="
                                        col ">
                                        {{-- <x-input-text name='start_date' title='بەرواری دەستپێک' type='date' isValid='true' /> --}}
                                        <x-input-date-time name='date' title='ڕێکەوت'
                                            content="{{ $subject != null ? $subject->date : '' }}" />
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class=" col ">
                                        <div class="form-floating ">
                                            <x-input-text-area title='تێبینی ' name="description" type='text'
                                                isValid='true'
                                                content="{{ $subject != null ? $subject->description : '' }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <x-submit-button type="submit" class="btn btn-primary" text="welcome" />

                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <x-froala content="{{ $subject != null ? $subject->content : '' }}" />
                    </div>
            </form>
        </div>
    </div>
    </div>
    </div>
@endsection
