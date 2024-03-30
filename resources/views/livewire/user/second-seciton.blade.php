<div class="second-section" id="second-section">
    <img src="{{asset('assets/images/wave.png')}}" class="wave-1" />
    <img src="{{asset('assets/images/wave.png')}}" class="wave-2" />
    <div class="row px-5 justify-content-evenly">
        <div class="col-md-8  second-section-right">
            <div class="row">
                @component('livewire.user.title-one')
                    @slot('title')
                        <p> بابەت
                        <div class="title-one-border"></div>
                        </p>
                    @endslot
                @endcomponent
            </div>
            <div class="row">
                @component('livewire.user.first-content')
                @endcomponent
            </div>
        </div>
        <div class="col-md-3 py-2 second-section-left">
            @component('livewire.user.title-one')
                @slot('title')
                    <p> زیاتر
                    <div class="title-one-border"></div>
                    </p>
                @endslot
            @endcomponent
            @component('livewire.user.small-card')
            @endcomponent
            @component('livewire.user.small-card')
            @endcomponent
        </div>
    </div>
</div>
