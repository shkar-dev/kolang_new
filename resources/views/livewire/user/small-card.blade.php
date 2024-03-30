<div class="card small-card my-1" data-aos-once="true"  data-aos="fade-up"
     data-aos-duration="1800" >

    <div class="card-body">
        <div class="small-card-image-container">
            <img src="{{asset('assets/images/erbil.jpg')}}" class="small-card-image" />
        </div>
        <div class="small-card-content-container">
            @component('livewire.user.title-two')
                @slot('title')
                    <p style="font-size: 22px" > بابەت
                    <div class="title-two-border"></div>
                    </p>
                @endslot
            @endcomponent
            <p class="small-paragraph"> کتێبی سەرکەوتن  و هەندێک یادگار   کتێبی سەرکەوتن و هەندێک یادگار کتێبی
                سەرکەوتن و هەو هەندێک یاد   و  رکەوتن  و هەندێک یادگارو هەندێک یادگار کتێبی
                سەرکەوتر
            </p>
            <span class="writer"><i class="fa fa-pencil pencil-color"></i>ئارا ڕێبوار</span>
        </div>
    </div>
</div>
