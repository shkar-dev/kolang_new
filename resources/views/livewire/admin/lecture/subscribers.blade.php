@extends('components.layouts.app')
@section('section')
    <div class="px-3 py-2  bg-white   h-100">
        <div class="modal fade " id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered document-modal">
                <div class="modal-content">
                    <div class="modal-header pt-3 pb-2 " style="border: none !important">
                        <h5 class="modal-title" id="staticBackdropLabel">زیادکردنی مامەڵە</h5>
                        <button type="button" style="font-size: 11px" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
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
                        <x-close-button type="button" class="btn btn-light close-button" text="داخستن" />
                        <x-submit-button class="btn btn-primary submit-button" type="submit" text="زیادکردن" />
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
        @if (session('success'))
            <div class="alert alert-success my-2">{{ session('success') }}</div>
        @endif
        @if (session('failed'))
            <div class="alert alert-danger my-2">{{ session('failed') }}</div>
        @endif
        <div class="row p-3">
            <ul class="nav nav-tabs custom-add-subject-tab">
                <li class="nav-item ">
                    <a href="#info" class="nav-link active tab-items" data-bs-toggle="tab"> <i
                            class="fa fa-file-lines mx-2"></i> زانیاریەکان </a>
                </li>
                @if ($subscriber != null)
                    <li class="nav-item tab-items">
                        <a href="#document" class="nav-link tab-items" data-bs-toggle="tab"> <i
                                class="fa fa-money-bills mx-2"></i>بەڵگەنامەکان</a>
                    </li>

                    <li class="nav-item tab-items">
                        <a href="#transaction" class="nav-link tab-items" data-bs-toggle="tab"> <i
                                class="fa fa-money-bills mx-2"></i>مامەڵە داراییەکان </a>
                    </li>
                @endif
            </ul>
            <div class="tab-content ">
                <div class="tab-pane fade show active" id="info">
                    <div class="section  custom-row pt-2  px-5    justify-content-between" style="padding-bottom: 60px;">

                        <form
                            action=" {{ $subscriber != null ? route('admin.course.update-subscriber', $subscriber->id) : route('admin.course.add-subscriber') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @if ($subscriber != null)
                                <input type="hidden" name="id" value={{ $subscriber->id }} />
                            @endif
                            <div class="row ">
                                <div class="row ">
                                    <div class=" col ">
                                        <x-input-text name='name' title='ناو' type='text' isValid='true'
                                            content="{{ $subscriber != null ? $subscriber->name : '' }}" />
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class=" col ">
                                        <x-input-select-gender name='gender' title='ڕەگەز' isValid='true'
                                            content="{{ $subscriber != null ? $subscriber->gender : '' }}" />
                                    </div>
                                    <div class=" col ">
                                        <x-input-date name='date_of_birth' title='تەمەن' isValid='true'
                                            content="{{ $subscriber != null ? $subscriber->date_of_birth : '' }}" />
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class=" col ">
                                        <x-input-text name='mobile_1' title='مۆبایل ١' type='text' isValid='true'
                                            content="{{ $subscriber != null ? $subscriber->mobile_1 : '' }}" />
                                    </div>
                                    <div class=" col ">
                                        <x-input-text name='mobile_2' title='مۆبایل ٢ ' type='text' isValid='true'
                                            content="{{ $subscriber != null ? $subscriber->mobile_2 : '' }}" />
                                    </div>
                                    <div class=" col ">
                                        <x-input-text name='mobile_3' title='مۆبایل ٣ ' type='text' isValid='true'
                                            content="{{ $subscriber != null ? $subscriber->mobile_3 : '' }}" />
                                    </div>
                                </div>
                                <div class="row ">
                                    {{-- <div class=" col ">
                                    <x-input-text name='subject' title=' بەروار' type='text' isValid='true' />
                                </div> --}}
                                    <div class=" col ">
                                        <x-input-text name='username' title='ناوی بەکارهێنەر' type='text'
                                            isValid='true' />
                                    </div>
                                    <div class=" col ">
                                        <x-input-text name='password' title=' وشەی تێپەڕ ' type='text'
                                            isValid='true' />
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class=" col ">
                                        <x-input-text name='city' title='شار' type='text' isValid='true' />
                                    </div>
                                    <div class=" col ">
                                        <x-input-select-academic_level name="academic_level_id" title="ئاستی زانستی "
                                            :options="$academicLevels" content="2" />
                                    </div>
                                </div>

                                <div class="row pt-4">
                                    <p>زیادکردنی وێنە</p>
                                    <input type="file" class="filepond" name="profile" accept="image/*">
                                </div>
                                <button class="btn btn-primary" type="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            @if ($subscriber != null)
                <div class="tab-pane fade    " id="transaction">
                    <div class="p-3 ">
                        <button class="normal-button" type="button" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop1">زیادکردنی مامەڵە </button>
                    </div>
                    <div class="row p-1  group-lectures-container ">
                        <ul>
                            <li>
                                <ul>
                                    <?php
                                    $count = [1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2];
                                    ?>
                                    @foreach ($count as $item)
                                        <li class="sub-lecture">
                                            <div class="  p-0">
                                                <h4> <i class="fa fa-book mx-2"> </i>group -1 transaction1
                                                </h4>
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

                <div class="tab-pane fade    " id="document">
                    <x-document-section id="{{ $subscriber->id }}" route="admin.staff.add-member-attachment"
                        type="paticipant" />
                </div>
            @endif
        </div>

    @endsection
