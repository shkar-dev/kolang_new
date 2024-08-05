@extends('components.layouts.app')
@section('section')
    <div class="px-3 py-2  bg-white h-100">
        <div class="content-list-buttons" style="background: #023941d4;border-radius:5px;box-shadow: 0 0px 10px #e0e0e0">
            <div class="list-button-item list-title">
                <div id="comment-clicker" style="color: white;margin: 0px">زیادکردنی ستاف</div>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success my-2">{{ session('success') }}</div>
        @endif
        @if (session('failed'))
            <div class="alert alert-danger my-2">{{ session('failed') }}</div>
        @endif
        <div class="row p-3">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active tab-items" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                        type="button" role="tab" aria-controls="home" aria-selected="true"><i
                            class="fa fa-user-plus mx-2"></i> زیادکردنی ستاف </button>
                </li>
                @if ($staff != null)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link tab-items" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false"><i
                                class="fa fa-id-card-clip mx-2"></i>بەڵگەنامەکان </button>
                    </li>
                @endif
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="section  custom-row pt-2  px-5    justify-content-between" style="padding-bottom: 60px;">
                        <form
                            action=" {{ $staff != null ? route('admin.staff.update-staff', $staff->id) : route('admin.staff.add-staff') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @if ($staff != null)
                                <input type="hidden" name="staff_id" value="{{ $staff->id }}" />
                            @endif
                            <div class="row ">
                                <div class=" col ">
                                    <x-input-text name='name' title='ناوی سیانی' type='text' isValid='true'
                                        content="{{ $staff != null ? $staff->name : '' }}" />
                                </div>
                            </div>
                            <div class="row ">
                                <div class=" col ">
                                    <x-input-select-type name='type' title='جۆری ستاف' isValid='true'
                                        content="{{ $staff != null ? $staff->type : '' }}" />
                                </div>

                                <div class=" col ">
                                    <x-input-date name='date_of_birth' title='لەدایکبوون  ' isValid='true'
                                        content="{{ $staff != null ? $staff->date_of_birth : '' }}" />
                                </div>
                            </div>
                            <div class="row ">
                                <div class=" col ">
                                    <x-input-text name='mobile_1' title='تەلەفوون١  ' isValid='true'
                                        content="{{ $staff != null ? $staff->mobile_1 : '' }}" />
                                </div>
                                <div class=" col ">
                                    <x-input-text name='mobile_2' title='تەلەفوون٢  ' isValid='true'
                                        content="{{ $staff != null ? $staff->mobile_2 : '' }}" />
                                </div>
                                <div class=" col ">
                                    <x-input-text name='mobile_3' title='تەلەفوون٣  ' isValid='true'
                                        content="{{ $staff != null ? $staff->mobile_3 : '' }}" />
                                </div>
                            </div>
                            <div class="row ">

                                <div class=" col ">
                                    <x-input-select-academic_level name="academic_level_id" title="ئاستی زانستی "
                                        :options="$academic_level"
                                        content="{{ $staff != null ? $staff->academic_level_id : '' }}" />
                                </div>
                                <div class=" col ">
                                    <x-input-select-gender name='gender' title='ڕەگەز' isValid='true'
                                        content="{{ $staff != null ? $staff->gender : '' }}" />
                                </div>

                            </div>
                            <div class="row ">
                                <div class=" col ">
                                    <x-input-textarea name='description' title='تێبینی' isValid='true'
                                        content="{{ $staff != null ? $staff->description : '' }}" />
                                </div>
                            </div>
                            <p class="py-3"> زیادکردنی وێنە</p>
                            <input type="file" class="filepond" name='image' accept="image/*">
                            <button type="submit" class="btn btn-primary">save</button>
                        </form>
                    </div>
                </div>
                @if ($staff != null)
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <x-document-section id="{{ $staff != null ? $staff->id : '' }}"
                            route="admin.staff.add-member-attachment" type="{{ $staff != null ? $staff->type : '' }}" />
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
