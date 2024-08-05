<div>
    <!-- Modal -->
    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered document-modal">
            <div class="modal-content">
                <div class="modal-header pt-3 pb-2 " style="border: none !important">
                    <h5 class="modal-title" id="staticBackdropLabel">زیادکردنی بەڵگەنامە</h5>
                    <button type="button" style="font-size: 11px" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="{{ route($route) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $id }}" />
                    <input type="hidden" name="type" value="{{ $type }}" />
                    <div class="modal-body ">

                        <div class="row p-2">
                            <p>بەڵگەنامە </p>
                            <input type="file" class="filepond" name="document">
                        </div>
                        <div class="row justify-content-center p-3">
                            <div class="row p-0">
                                <div class=" col-12 ">
                                    <x-input-select title="بەڵگەنامە" name="document_type_id" :options="$documents" />
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

    <div class="row pt-3">
        <button class="normal-button" style="width: fit-content;" type="button" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop">
            <i class="fa fa-plus"></i>
        </button>
    </div>

    <div class="row " style="justify-content: start;align-items: center;flex-direction: row">
        @if ($attachments != null)
            @foreach ($attachments as $item)
                <div class="card mt-2 mx-2 p-3" style="width: 16rem;">
                    <img src="{{ asset('admin/images/img.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">{{ $item->name }}</p>
                    </div>
                    <div class="card-delete-container">
                        <i class="fa fa-xmark" style="color: #cd0505"></i>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
