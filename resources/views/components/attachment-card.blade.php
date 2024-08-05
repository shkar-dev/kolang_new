<div class="card mt-2 mx-2 p-3" style="width: 16rem;">
    <img src="{{ asset('admin/images/img.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-title">{{ $title }}</p>
    </div>
    <div class="card-delete-container">
        <i class="fa fa-xmark" style="color: #cd0505"></i>
    </div>
    <input type="hidden" name="{{ 'course_name' . $title }}" id="{{ 'course_name' . $title }}">
    <input type="file" name="{{ 'course_file' . $title }}" id="{{ 'course_file' . $title }}">
</div>
