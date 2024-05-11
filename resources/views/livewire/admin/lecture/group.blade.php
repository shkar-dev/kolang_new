<div class="px-3 py-2  bg-white   h-100">
    <div class="content-list-buttons" style="background: #023941d4;border-radius:5px;box-shadow: 0 0px 10px #e0e0e0">
        <div class=" list-title">
            <div id="comment-clicker" style="color: white;margin: 0px">گروپ</div>
        </div>
        <x-back-button />
    </div>
    <div class="row p-3">
        <div class="section  custom-row pt-2  px-5    justify-content-between" style="padding-bottom: 60px;">
            <div class="row ">
                <div class=" col ">
                    <x-input-text name='subject' title='ناو' type='text' isValid='true' />
                </div>
                <div class="row ">
                    <div class=" col ">
                        <x-input-date  name="بەرواری دەستپێك"  title="بەرواری دەستپێك" />
                    </div>
                    <div class=" col ">
                        <x-input-date name="بەرواری کۆتایی" title="بەرواری کۆتایی" />
                     </div>
                </div>
                <div class="row ">
                    <div class=" col ">
                        <x-input-text   name='price' title='سەرپەرشتیار' type='text' isValid='true'/>
                    </div>
                </div>
                <div class="row ">
                    <div class=" col ">
                        <x-input-select title="کۆرس" name="aa" />
                    </div>
                    <div class=" col ">
                        <x-input-select title="بەشداربوان"  name="aa"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


