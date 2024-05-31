<div>
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link
        href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet"
    />

    <input type="file" class="filepond" multiple>

    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script>
            FilePond.registerPlugin(FilePondPluginImagePreview);
            // Create the FilePond instance
            var pond = FilePond.create( document.querySelector('input[class="filepond"]'));
     </script>
</div>
