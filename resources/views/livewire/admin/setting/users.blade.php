@extends('components.layouts.app')
@section('section')
    <div class="px-3 py-2  bg-white aaa h-100">
        <link rel="stylesheet" href="{{ asset('admin/fullpage.css') }}">
        <script src="{{ asset('admin/fullpage.js') }}"></script>
        <div class="content-list-buttons" style="background: #023941d4;border-radius:5px;box-shadow: 0 0px 10px #e0e0e0">
            <div class=" list-title">
                <div id="comment-clicker" style="color: white;margin: 0px">زیادکردنی بەکارهێنەر</div>
            </div>
            <x-back-button />
        </div>
        @if (session('success'))
            <div class="alert alert-success my-2">{{ session('success') }}</div>
        @endif
        @if (session('failed'))
            <div class="alert alert-danger my-2">{{ session('failed') }}</div>
        @endif

        <div class="row p-3">
            <form class="needs-validation" data-toggle="validator"
                action="{{ $user != null ? route('admin.setting.update-user', $user->id) : route('admin.setting.add-users') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if ($user != null)
                    <input type="hidden" name="id" value="{{ $user->id }}">
                @endif
                <ul class="nav nav-tabs custom-add-subject-tab">
                    <li class="nav-item ">
                        <a href="#home" class="nav-link active tab-items" data-bs-toggle="tab"> <i
                                class="fa fa-file-lines mx-2"></i> زانیاریەکان </a>
                    </li>
                    {{-- <li class="nav-item tab-items">
                    <a href="#profile" class="nav-link tab-items" data-bs-toggle="tab"> <i
                            class="fa fa-pen-nib mx-2"></i>نووسین </a>
                </li> --}}
                </ul>
                <div class="tab-content ">
                    <div class="tab-pane fade show active" id="home">
                        <div class="section  custom-row pt-2  px-5    justify-content-between"
                            style="padding-bottom: 60px;">
                            <div class="row ">
                                <div class=" col ">
                                    <x-input-text name='username' title='بەکارهێنەر' type='text' isValid='true'
                                        content="{{ $user != null ? $user->username : '' }}" />
                                </div>
                                <div class="row ">
                                    <div class=" col ">
                                        <x-input-text name='email' title='ئیمەیڵ' type='text' isValid='true'
                                            content="{{ $user != null ? $user->email : '' }}" />

                                    </div>
                                    <div class=" col ">
                                        <x-input-text name='mobile' title='مۆبایل' type='text' isValid='true'
                                            content="{{ $user != null ? $user->mobile : '' }}" />
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class=" col ">
                                        <x-input-select title="ڕۆڵ" name="role_id" {{-- :options="$translator"
                                        content="{{ $subject != null ? $subject->translator_id : '' }}" --}} />
                                    </div>
                                    <div class="col">
                                        <x-input-text name='password' title='وشەی تێپەڕ' type='text' isValid='true' />
                                    </div>

                                </div>
                            </div>
                            <x-submit-button type="submit" class="btn btn-primary" text="welcome" />
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        {{-- <x-froala content="{{ $subject != null ? $subject->content : '' }}" /> --}}
                    </div>
            </form>
        </div>
    </div>
    </div>
    </div>
@endsection
