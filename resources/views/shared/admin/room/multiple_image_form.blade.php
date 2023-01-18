<input id="images" class="form-control-file" type="file" name="images[]"
multiple>


 <script>
    const image = document.querySelector('input[id="images"]');

    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginImageResize,
        FilePondPluginImageEdit,
        FilePondPluginImageExifOrientation,
        FilePondPluginImageCrop,
        FilePondPluginImageTransform,
    );
    const pond1 = FilePond.create(
        document.querySelector('input[id="images"]'),
        {
            imagePreviewHeight: 200,
            // imageResizeTargetWidth: 800,
            // imageResizeTargetHeight: 500,
        }
    );

    FilePond.setOptions({
        server: {
            url: '/upload/images',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        }
    });
</script>
{{-- @endsection --}}
