{{--<a class="menubar-item  subject-item {{ str_contains(request()->getPathInfo(), 'general') ? 'menubar-item-active' : '' }}"--}}
{{--   href="{{ route('admin.subject.subjectGeneral') }}" wire:navigate>--}}
{{--    <p>گشتی</p>--}}
{{--</a>--}}
    <div class="menubar-item {{$cssClass}}"  >
        <a href="{{$routeDirection}}" wire:navigate>{{$text}}</a>
        @if($isIconNeeded)
        <object>
                <a href="{{$innerRouteDirection}}" wire:navigate> <i class="{{$icon}}"></i></a>
        </object>
        @endif
    </div>

