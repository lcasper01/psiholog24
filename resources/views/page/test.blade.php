    <form method="post" action="{{ route('UploadImage') }}" enctype="multipart/form-data" id="upload-image-form">
        {{csrf_field()}}
        <input type="file" name="image">
        <button class="button full-width button-sliding-icon ripple-effect" type="submit" form="upload-image-form">Загрузить</button>
    </form>