<div>
    <!-- Modal -->
    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered document-modal">
            <div class="modal-content">
                <div class="modal-header pt-3 pb-2 " style="border: none !important">
                    <h5 class="modal-title" id="staticBackdropLabel">زیادکردنی بەڵگەنامە</h5>
                    <button type="button" style="font-size: 11px" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">

                    <div class="row p-2">
                        <input type="file" class="filepond">
                    </div>
                    <div class="row justify-content-center p-3">
{{--                        <select class="form-control py-2">--}}
{{--                            <option value="" selected disabled>بەڵگەنامە دیاریبکە</option>--}}
{{--                            <option value="">select1</option>--}}
{{--                            <option value="">select2</option>--}}
{{--                            <option value="">select3</option>--}}
{{--                        </select>--}}
                        <div class="row p-0">
                            <div class=" col-12 ">
                                <x-input-select title="بابەت٢٢" name="aa" />
                            </div>
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
    <div class="row pt-3">
        <button class="normal-button" style="width: fit-content;" type="button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <i class="fa fa-plus"></i>
        </button>
    </div>
    <div class="row " style="justify-content: start;align-items: center;flex-direction: row">
        <?php
        $count = [1,2,3,4,5,3];
        ?>
        @foreach($count as $item)
            <div class="card mt-2 mx-2 p-3" style="width: 16rem;">
                <img src="{{asset('admin/images/img.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title">Card title</p>
                </div>
                <div class="card-delete-container">
                    <i class="fa fa-xmark" style="color: #cd0505"></i>
                </div>
            </div>
        @endforeach
    </div>
</div>
