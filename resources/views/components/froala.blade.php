<div class=" section custom-row p-4 px-3 justify-content-between">
    {{-- <form action="{{route('admin.upload.store')}}" method="post" enctype="multipart/form-data">
        @csrf --}}
    <textarea id="editor" name="content">
        {!! $content !!}
        </textarea>
    {{-- <button class="btn btn-primary" type="submit"> submit</button> --}}
    {{-- </form> --}}
    <div class="fr-view">
        {{--              {!!  $data->description !!} --}}
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-qFOQ9YFAeGj1gDOuUD61g3D+tLDv3u1ECYWqT82WQoaWrOhAY+5mRMTTVsQdWutbA5FORCnkEPEgU0OF8IzGvA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {

        new FroalaEditor('#editor', {

            // Set the image upload URL.
            imageUploadURL: '/upload_image',

            // Additional upload params.
            imageUploadParams: {
                _token: '{{ csrf_token() }}', // CSRF token
                id: "#editor",
            },
            // Set request type.
            imageUploadMethod: 'POST',
            //
            // // Set max image size to 5MB.
            imageMaxSize: 5 * 1024 * 1024,

            // Allow to upload PNG and JPG.
            fontFamilySelection: true,
            fontFamily: {
                'Arial,Helvetica,sans-serif': 'Arial',
                'Georgia,serif': 'Georgia',
                'Tahoma,Geneva,sans-serif': 'Tahoma',
                'Times New Roman,Times,serif': 'Times New Roman',
                'Verdana,Geneva,sans-serif': 'Verdana',
                'Courier New,Courier,monospace': 'Courier New',
                'Arial Black,Gadget,sans-serif': 'Arial Black',
                'Comic Sans MS,Textile,cursive': 'Comic Sans MS',
                // Add more custom font families as needed
                'Sakkal Majalla, sans-serif': 'shkar',
            },

            events: {
                'image.beforeUpload': function(images) {
                    console.log(images)
                },
                'image.uploaded': function(response) {
                    console.log(response)
                },
                'image.inserted': function($img, response) {

                    console.log($img)
                },
                'image.replaced': function($img, response) {
                    console.log("replace")
                },
                'image.error': function(error, response) {
                    console.log(error)
                    console.log(response)
                }
            }
        });
    })
    // $(function() {
    //     $('#editor').froalaEditor({
    //         imageUploadURL: '{{ route('admin.upload.store') }}', // Laravel route for image upload
    //         imageUploadParams: {
    //             _token: '{{ csrf_token() }}', // CSRF token
    //         },
    //         // Other Froala Editor configurations
    //     });
    // });
</script>
