<div class="px-3 py-2  bg-white h-100" >
     <div class="content-list-buttons" style="background: #023941d4;border-radius:5px;box-shadow: 0 0px 10px #e0e0e0">
        <div class="list-button-item list-title">
            <div id="comment-clicker" style="color: white;margin: 0px">زیادکردنی ستاف</div>
         </div>
    </div>


    <div class="row p-3">
{{--        <?php $tab = ['زیادکردنی ستاف','بەڵگەنامەکان'];?>--}}
{{--        <x-tab-section :tabs="$tab"/>--}}
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">زیادکردنی ستاف</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">بەڵگەنامەکان</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="section  custom-row pt-2  px-5    justify-content-between" style="padding-bottom: 60px;">
                    <div class="row " >
                        <div class=" col ">
                            <div class="form-floating ">
                                <input type="text" class="form-control custom-input form-control-sm" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">ناوی سیانی</label>
                            </div>
                        </div>
                    </div>
                    <div class="row " >
                        <div class=" col ">
                            <div class="form-floating ">
                                <input type="text" class="form-control custom-input form-control-sm" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">جۆری ستاف</label>
                            </div>
                        </div>
                        <div class=" col ">
                            <div class="form-floating ">
                                <input type="date" class="form-control custom-input form-control-sm" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">لەدایکبوون</label>
                            </div>
                        </div>
                    </div>
                    <div class="row " >
                        <div class=" col ">
                            <div class="form-floating ">
                                <input type="email" class="form-control  custom-input form-control-sm" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">تەلەفوون١</label>
                            </div>
                        </div>
                        <div class=" col ">
                            <div class="form-floating ">
                                <input type="email" class="form-control custom-input form-control-sm" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">تەلەفوون٢</label>
                            </div>
                        </div>
                        <div class=" col ">
                            <div class="form-floating ">
                                <input type="email" class="form-control custom-input form-control-sm" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">تەلەفوون٣</label>
                            </div>
                        </div>
                    </div>
                    <div class="row " >
                        <div class=" col ">
                            <div class="form-floating ">
                                <input type="email" class="form-control  custom-input form-control-sm" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">ئاستی خوێندن</label>
                            </div>
                        </div>
                        <div class=" col ">
                            <div class="form-floating ">
                                <input type="email" class="form-control custom-input form-control-sm" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">ڕەگەز</label>
                            </div>
                        </div>
                    </div>
                    <div class="row " >
                        <div class=" col ">
                            <div class="form-floating ">
                    <textarea type="email" rows="6" class="form-control custom-input form-control-sm" id="floatingInput" placeholder="name@example.com" style="height: auto;">
                    </textarea>
                                <label for="floatingInput">تێبینی</label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <x-document-section />
            </div>
        </div>
    </div>
</div>






