<ul class="nav nav-tabs custom-add-subject-tab">
    @foreach($tabs as $index=>$tab)
        <li class="nav-item">
            <a href="#{{$tab}}" class="nav-link active" data-bs-toggle="tab">{{$tab}}</a>
        </li>
    @endforeach
</ul>
