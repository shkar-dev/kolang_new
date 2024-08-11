@extends('components.layouts.app')
@section('section')
    <div class="px-3 py-2  bg-white   h-100">

        <script src="https://jsuites.net/v5/jsuites.js"></script>
        <link rel="stylesheet" href="https://jsuites.net/v5/jsuites.css" type="text/css" />
        {{--    lecture modal --}}
        <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered document-modal">
                <div class="modal-content">
                    <div class="modal-header pt-3 pb-2 " style="border: none !important">
                        <h5 class="modal-title" id="staticBackdropLabel">زیادکردنی وانە</h5>
                        <button type="button" style="font-size: 11px" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body ">
                        {{-- <div class="row p-2">
                            <input type="file" class="filepond">
                        </div> --}}
                        <div class="row justify-content-center p-3">

                            <div class="row p-0">
                                <div class=" col-12 ">
                                    <x-input-text title="وانە" name="aa" />
                                </div>
                            </div>
                            <div class="row p-0">
                                <div class=" col-12 ">
                                    <?php $type = ['ڤیدیۆ', 'خوێندنەوە']; ?>
                                    <x-input-select title="جۆر دیاریبکە" name="aa" />
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
        {{-- sub section modal --}}
        <div class="modal fade " id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered document-modal">
                <div class="modal-content">
                    <div class="modal-header pt-3 pb-2 " style="border: none !important">
                        <h5 class="modal-title" id="staticBackdropLabel">وانەی یەکەم</h5>
                        <button type="button" style="font-size: 11px" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
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
                        <x-close-button type="button" class="btn btn-light close-button" text="داخستن" />
                        <x-submit-button class="btn btn-primary submit-button" type="submit" text="زیادکردن" />
                    </div>
                </div>
            </div>
        </div>

        {{--    subscribers modal --}}
        <div class="modal fade " id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered document-modal">
                <div class="modal-content">
                    <div class="modal-header pt-3 pb-2 " style="border: none !important">
                        <h5 class="modal-title" id="staticBackdropLabel">زیادکردنی بەشداربوو</h5>
                        <button type="button" style="font-size: 11px" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
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
                            @if ($subscribers)
                                @foreach ($subscribers as $item)
                                    <x-subscriber-item class="col-12" :content="$item" id="{{ $item->id }}"
                                        :isCheckAvailable="true" />
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <x-close-button type="button" class="btn btn-light close-button" text="داخستن" />

                        <button type="button"class="btn btn-primary submit-button" id="test">زیادکردن</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-list-buttons" id="message"
            style="background: #023941d4;border-radius:5px;box-shadow: 0 0px 10px #e0e0e0">
            <div class=" list-title">
                <div id="comment-clicker" style="color: white;margin: 0px">گروپ</div>
            </div>
            <x-back-button />
        </div>

        @if (session('success'))
            <div class="alert alert-success my-2">{{ session('success') }}</div>
        @endif
        <div class="row p-3">
            <ul class="nav nav-tabs custom-add-subject-tab">
                <li class="nav-item ">
                    <a href="#info" class="nav-link active tab-items" data-bs-toggle="tab"> <i
                            class="fa fa-file-lines mx-2"></i> زانیاریەکان </a>
                </li>
                @if ($group != null)
                    <li class="nav-item tab-items">
                        <a href="#subscribers" class="nav-link tab-items" data-bs-toggle="tab"> <i
                                class="fa fa-pen-nib mx-2"></i>بەشداربووان </a>
                    </li>
                    <li class="nav-item tab-items">
                        <a href="#lectures" class="nav-link tab-items" data-bs-toggle="tab"> <i
                                class="fa fa-video mx-2"></i>وانەکان </a>
                    </li>
                @endif
            </ul>
            <div class="tab-content ">
                <div class="tab-pane fade show active" id="info">
                    <div class="section  custom-row pt-2  px-5    justify-content-between" style="padding-bottom: 60px;">
                        <form
                            action=" {{ $group != null ? route('admin.course.update-group', $group->id) : route('admin.course.add-group') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @if ($group != null)
                                <input type="hidden" name="id" value="{{ $group->id }}">
                            @endif
                            <div class="row ">
                                <div class=" col ">
                                    <x-input-text name='name' title='ناو' type='text' isValid='true'
                                        content="{{ $group != null ? $group->name : '' }}" />
                                </div>
                                <div class="row ">
                                    <div class=" col ">
                                        <x-input-date name="start_date" title="بەرواری دەستپێك"
                                            content="{{ $group != null ? $group->start_date : '' }}" />
                                    </div>
                                    <div class=" col ">
                                        <x-input-date name="end_date" title="بەرواری کۆتایی"
                                            content="{{ $group != null ? $group->end_date : '' }}" />
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class=" col ">
                                        <x-input-select name='supervisor_id' title='سەرپەرشتیار' type='text'
                                            isValid='true' :options="$lecturers"
                                            content="{{ $group != null ? $group->supervisor_id : '' }}" />
                                    </div>
                                    <div class=" col ">
                                        <x-input-select name='lecturer_id' title='وانەبێژ' type='text' isValid='true'
                                            :options="$lecturers" content="{{ $group != null ? $group->lecturer_id : '' }}" />
                                    </div>
                                    <div class=" col ">
                                        <x-input-text name='price' title='نرخ' type='text' isValid='true'
                                            content="{{ $group != null ? $group->price : '' }}" />
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class=" col ">
                                        <x-input-select title="کۆرس" name="course_id" :options="$courses"
                                            content="{{ $group != null ? $group->course_id : '' }}" />
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">save</button>
                        </form>
                    </div>
                </div>
                @if ($group != null)
                    <div class="tab-pane fade    " id="subscribers">
                        <div class="row p-3">
                            <button class="normal-button" type="button" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop2">زیادکردنی بەشداربووان</button>
                        </div>
                        <div class="subscribers-main-container p-3">

                            @if ($groupSubscribers)
                                @foreach ($groupSubscribers->members as $item)
                                    <x-subscriber-item class="col-3" :content="$item" id="{{ $group->id }}"
                                        :isCheckAvailable="false" />
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="tab-pane fade  " id="lectures">
                        <div class="row p-2 group-lectures-container">
                            <div class=" ">
                                <button class="normal-button" type="button" data-bs-target="#staticBackdrop"
                                    data-bs-toggle="modal">زیادکردنی وانە</button>
                            </div>
                            <div class="py-3">

                                <div class="container">
                                    <div class="container-item">
                                        <i class="fa fa-grip-vertical"></i>
                                        <div class="container">
                                            <div class="content">
                                                وانەی یەکەم
                                            </div>
                                            <div class="content">
                                                C1
                                            </div>
                                            <div class="content">
                                                C2
                                            </div>
                                            <div class="content">
                                                C3
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container-item">
                                        <i class="fa fa-grip-vertical"></i>
                                        <div class="container">
                                            <div class="content">
                                                وانەی دووەم
                                            </div>
                                            <div class="content">
                                                C6
                                            </div>
                                            <div class="content">
                                                C6
                                            </div>
                                            <div class="content">
                                                C6
                                            </div>
                                            <div class="content">
                                                C6
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.2/Sortable.min.js"
            integrity="sha512-TelkP3PCMJv+viMWynjKcvLsQzx6dJHvIGhfqzFtZKgAjKM1YPqcwzzDEoTc/BHjf43PcPzTQOjuTr4YdE8lNQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/nestedSortable/2.0.0/Scripts/jquery.mjs.nestedSortable.js"></script>

        <script>
            var sortableOptions2 = {
                group: {
                    name: "sortable-list-2",
                    pull: true,
                    put: true,
                },
                animation: 250,
                forceFallback: true
            };
            var containers = null;
            containers = document.querySelectorAll(".container");
            for (var i = 0; i < containers.length; i++) {
                new Sortable(containers[i], sortableOptions2);
            }
            console.log(containers);
        </script>
        @if ($group)
            <script>
                var $j = jQuery.noConflict();
                $('#test').click(function(e) {
                    e.preventDefault();
                    var all_ids = [];
                    $('input:checkbox[name=ids]:checked').each(function(e) {
                        all_ids.push($(this).val());
                    })
                    $j.ajax({
                        url: "{{ route('admin.course.add-group-subscriber') }}",
                        type: 'POST',
                        data: {
                            group_id: "{{ $group->id }}",
                            ids: all_ids,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(data) {
                            if (data == 1) {
                                showMessage('success', 'success');

                            }
                        }
                    })
                })

                function showMessage(message, type) {
                    $('#staticBackdrop2').hide(function() {
                        $(".modal-backdrop").remove();
                    });
                }
            </script>
        @endif

    </div>
@endsection
