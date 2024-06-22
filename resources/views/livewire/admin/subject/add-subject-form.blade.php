<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.2.0/css/froala_editor.pkgd.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.2.0/css/plugins.pkgd.min.css"  >
{{--@php--}}
{{--    $data = \App\Models\FroalaUploadImage::findOrFail(1)--}}
{{--@endphp--}}

<div class="px-3 py-2  bg-white aaa h-100">
    <link rel="stylesheet" href="{{ asset('admin/fullpage.css') }}">
    <script src="{{ asset('admin/fullpage.js') }}"></script>
    <div class="content-list-buttons" style="background: #023941d4;border-radius:5px;box-shadow: 0 0px 10px #e0e0e0">
        <div class=" list-title">
            <div id="comment-clicker" style="color: white;margin: 0px">زیادکردنی بابەت</div>
        </div>
        <x-back-button />
    </div>
    <div class="row p-3">
        <ul class="nav nav-tabs custom-add-subject-tab">
            <li class="nav-item ">
                <a href="#home" class="nav-link active tab-items" data-bs-toggle="tab"> <i class="fa fa-file-lines mx-2" ></i> زانیاریەکان </a>
            </li>
            <li class="nav-item tab-items">
                <a href="#profile" class="nav-link tab-items" data-bs-toggle="tab">  <i class="fa fa-pen-nib mx-2" ></i>نووسین </a>
            </li>
        </ul>
        <div class="tab-content ">
            <div class="tab-pane fade show active" id="home">
                <div class="section  custom-row pt-2  px-5    justify-content-between" style="padding-bottom: 60px;">
                    <form class="needs-validation"  data-toggle="validator">
                        <div class="row ">
                            <div class=" col ">
                                <x-input-text name='subject' title='بابەت' type='text' isValid='true' />
                            </div>
                            <div class="row ">
                                <div class=" col ">
                                    <x-input-select title="بابەت" name="aa" />

                                </div>
                                <div class=" col ">
                                    <x-input-select title="بابەت٢" name="aa"/>
                                </div>
                            </div>
                            <div class="row ">
                                <div class=" col ">
                                    <x-input-select title="بابەت٢٢" name="aa"/>
                                </div>
                                <div class="
                                        col ">
                                    {{-- <x-input-text name='start_date' title='بەرواری دەستپێک' type='date' isValid='true' /> --}}
                                    <x-input-date name='date' title='ڕێکەوت' />
                                </div>
                            </div>
                            <div class="row ">
                                <div class=" col ">
                                    <div class="form-floating ">
                                        <x-input-text-area name='note' title='تێبینی ' type='text' isValid='true' />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <x-submit-button type="submit" class="btn btn-primary" text="welcome" />
                    </form>
                </div>
            </div>
            <div class="tab-pane fade" id="profile">
                <x-froala />
            </div>
        </div>
    </div>

    {{--         <div class="row   p-0 justify-content-between"> --}}
    {{--            <div class=" col "> --}}
    {{--                <div class="form-floating mb-3"> --}}
    {{--                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"> --}}
    {{--                    <label for="floatingInput">جۆری بابەت</label> --}}
    {{--                </div> --}}
    {{--            </div> --}}
    {{--            <div class=" col "> --}}
    {{--                <div class="form-floating mb-3"> --}}
    {{--                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"> --}}
    {{--                    <label for="floatingInput">وەرگێڕ</label> --}}
    {{--                </div> --}}
    {{--            </div> --}}

    {{--        <div class="row my-2 p-0 justify-content-between"> --}}
    {{--            <div class=" col "> --}}
    {{--                <div class="form-floating mb-3"> --}}
    {{--                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"> --}}
    {{--                    <label for="floatingInput">نووسەر</label> --}}
    {{--                </div> --}}
    {{--            </div> --}}
    {{--            <div class=" col "> --}}
    {{--                <div class="form-floating mb-3"> --}}
    {{--                    <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com"> --}}
    {{--                </div> --}}
    {{--            </div> --}}
    {{--        </div> --}}

    {{--        <div class="row  p-0 justify-content-between"> --}}
    {{--            <div class=" col "> --}}
    {{--                <input type="file" class="form-control py-3" id="floatingInput" placeholder="name@example.com"> --}}
    {{--            </div> --}}
    {{--        </div> --}}
    {{--        <div class="row my-2 p-0 justify-content-between"> --}}
    {{--            <div class=" col " style="padding: 20px 15px;background: #deede6;border-radius: 5px;border: 1px solid #e0e0e0;"> --}}
    {{--                <div class="form-floating " style="height: 30vh;"> --}}
    {{--                    <textarea class="form-control h-100" rows="12" placeholder="Leave a comment here" id="floatingTextarea"></textarea> --}}
    {{--                    <label for="floatingTextarea">تێبینی</label> --}}
    {{--                </div> --}}
    {{--            </div> --}}
    {{--        </div> --}}
    {{--    <a href="#comment-section"  style="visibility: hidden"></a> --}}
</div>
<script>
    // function scrolldiv() {
    //     var elem = document.getElementById("comment-section");
    //     elem.scrollIntoView({ behavior: "smooth"} );
    // }
    // var scroll = 0;
    // var list_container = document.getElementById('list-container');
    // if(list_container.scrollTop < 10) {
    //      list_container.addEventListener('scroll',function(e){
    //         if(e.target.scrollTop > 80){
    //           // $('#comment-clicker')[0].click()
    //           //   list_container.animate({scrollTop: $('#comment-section').offset().top});
    //                  // Add smooth scrolling to all links
    //             // scrolldiv();
    //             // $('html, body, #list-container').animate({
    //             //         scrollTop: $('#comment-section').offset().top
    //             // }, 800);
    //
    //                     // Prevent default anchor click behavior
    //
    //                     // Store hash
    //                     // Using jQuery's animate() method to add smooth page scroll
    //                     // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    //                     // $('#list-container').animate({
    //                     //     scrollTop: $('#comment-section').offset().top
    //                     // }, 800);
    //
    //          }
    //         // console.log(e.target.scrollTop)
    //     })
    // }


    // list_container.addEventListener('scroll',function(e){
    //    if(e.target.scrollTop < 312){
    //        list_container.animate({scrollTop:0}
    //    );                }
    // })

    // if(list_container.scrollTop == 0) {
    //     list_container.addEventListener('scroll',function(e){
    //         if(e.target.scrollTop > 10){
    //             // $('#comment-clicker')[0].trigger();
    //             //  $(this).scroll({top: 200, behavior: "smooth"})
    //             scroll=312;
    //             $(this).animate({ scrollTop: $('#comment-section') }, 'slow');
    //             // $.scrollTo('#comment-section')
    //         }
    //         // console.log(e.target.scrollTop)
    //     })
    //
    // }
    //
    // if($('.list-content-container').scrollTop() == 312){
    //     $('.list-content-container').on('scroll',function(e){
    //         console.log(e.target.scrollTop)
    //
    //         if(e.target.scrollTop < 312){
    //             // $('#comment-clicker')[0].trigger();
    //             //  $(this).scroll({top: 200, behavior: "smooth"})
    //             $(this).animate({ scrollTop: 0 }, 'slow');
    //             // $.scrollTo('#comment-section')
    //         }
    //         // console.log(e.target.scrollTop)
    //     })
    // }
    // $('.list-content-container').on('scroll',function(e){
    //     if(e.target.scrollTop < 311){
    //         // $('#comment-clicker')[0].trigger();
    //         //  $(this).scroll({top: 200, behavior: "smooth"})
    //         $(this).animate({ scrollTop: 0 }, 'slow');
    //         // $.scrollTo('#comment-section')
    //     }
    //
    //     // console.log(e.target.scrollTop)
    // })




    // $('#comment-clicker').on('click',function (){
    //     alert('a')
    // })
</script>

</div>

{{-- <div class="js-problem-details-overlay js-overlay-enabled o30 t0 b0 bg-black-200 p24 c-not-allowed"> --}}
{{--    <div class="d-flex gs4 gsy fd-column js-stacks-validation"> --}}
{{--        <div class="flex--item"> --}}
{{--            <label for="problem-details" class="d-block s-label c-not-allowed"> --}}
{{--                What are the details of your problem? --}}
{{--                <p class="s-description mt2 mb6">Introduce the problem and expand on what you put in the title. Minimum 20 characters.</p> --}}
{{--            </label> --}}
{{--        </div> --}}
{{--        <div class="js-problem-details-field" id="problem-details" data-stacks-editor-instance-id="571"><div class="ps-relative z-base s-textarea overflow-auto hmn2 w100 p0 d-flex fd-column s-editor-resizable" readonly="" aria-readonly="true"><div class="js-sticky-sentinel"></div><div class="py6 bg-inherit btr-sm w100 ps-sticky t0 l0 z-nav s-editor-shadow js-plugin-container js-sticky"><div class="d-flex overflow-x-auto ai-center px12 py4 pb0"><div class="d-flex g16 fl-grow1 ai-center js-editor-menu pe-none"><div class="s-editor-menu-block d-flex g2  js-block-formatting1"><button class="s-editor-btn s-btn s-btn__muted js-editor-btn js-heading-btn" aria-label="Heading (Ctrl-H)" data-controller="s-tooltip" data-s-tooltip-placement="top" data-key="toggleHeading" type="button" disabled="" aria-describedby="--stacks-s-tooltip-6430fwb1"><span class="svg-icon-bg iconHeader"></span></button><div id="--stacks-s-tooltip-6430fwb1" class="s-popover s-popover__tooltip" role="tooltip">Heading (Ctrl-H)<div class="s-popover--arrow"></div></div><button class="s-editor-btn s-btn s-btn__muted js-editor-btn js-bold-btn" aria-label="Bold (Ctrl-B)" data-controller="s-tooltip" data-s-tooltip-placement="top" data-key="toggleBold" type="button" disabled="" aria-describedby="--stacks-s-tooltip-bps7ityq"><span class="svg-icon-bg iconBold"></span></button><div id="--stacks-s-tooltip-bps7ityq" class="s-popover s-popover__tooltip" role="tooltip">Bold (Ctrl-B)<div class="s-popover--arrow"></div></div><button class="s-editor-btn s-btn s-btn__muted js-editor-btn js-italic-btn" aria-label="Italic (Ctrl-I)" data-controller="s-tooltip" data-s-tooltip-placement="top" data-key="toggleEmphasis" type="button" disabled="" aria-describedby="--stacks-s-tooltip-w4r8zimq"><span class="svg-icon-bg iconItalic"></span></button><div id="--stacks-s-tooltip-w4r8zimq" class="s-popover s-popover__tooltip" role="tooltip">Italic (Ctrl-I)<div class="s-popover--arrow"></div></div></div><div class="s-editor-menu-block d-flex g2  js-block-code-formatting"><button class="s-editor-btn s-btn s-btn__muted js-editor-btn js-code-btn" aria-label="Inline code (Ctrl-K)" data-controller="s-tooltip" data-s-tooltip-placement="top" data-key="toggleCode" type="button" disabled="" aria-describedby="--stacks-s-tooltip-exlazht5"><span class="svg-icon-bg iconCode"></span></button><div id="--stacks-s-tooltip-exlazht5" class="s-popover s-popover__tooltip" role="tooltip"><p class="mb4">Inline code (Ctrl-K)</p><p class="fs-caption fc-light m0">Single line code span for use within a block of text</p><div class="s-popover--arrow"></div></div><button class="s-editor-btn s-btn s-btn__muted js-editor-btn js-code-block-btn" aria-label="Code block (Ctrl-M)" data-controller="s-tooltip" data-s-tooltip-placement="top" data-key="toggleCodeblock" type="button" disabled="" aria-describedby="--stacks-s-tooltip-7de22o7c"><span class="svg-icon-bg iconCodeblockAlt"></span></button><div id="--stacks-s-tooltip-7de22o7c" class="s-popover s-popover__tooltip" role="tooltip"><p class="mb4">Code block (Ctrl-M)</p><p class="fs-caption fc-light m0">Multiline block of code with syntax highlighting</p><div class="s-popover--arrow"></div></div></div><div class="s-editor-menu-block d-flex g2  js-block-formatting2"><button class="s-editor-btn s-btn s-btn__muted js-editor-btn js-insert-link-btn" aria-label="Link (Ctrl-L)" data-controller="s-tooltip" data-s-tooltip-placement="top" data-key="toggleLink" type="button" disabled="" aria-describedby="--stacks-s-tooltip-v06muyj4"><span class="svg-icon-bg iconLink"></span></button><div id="--stacks-s-tooltip-v06muyj4" class="s-popover s-popover__tooltip" role="tooltip">Link (Ctrl-L)<div class="s-popover--arrow"></div></div><button class="s-editor-btn s-btn s-btn__muted js-editor-btn js-blockquote-btn" aria-label="Blockquote (Ctrl-Q)" data-controller="s-tooltip" data-s-tooltip-placement="top" data-key="toggleBlockquote" type="button" disabled="" aria-describedby="--stacks-s-tooltip-ugq9yj8w"><span class="svg-icon-bg iconQuote"></span></button><div id="--stacks-s-tooltip-ugq9yj8w" class="s-popover s-popover__tooltip" role="tooltip">Blockquote (Ctrl-Q)<div class="s-popover--arrow"></div></div><button class="s-editor-btn s-btn s-btn__muted js-editor-btn js-insert-image-btn" aria-label="Image (Ctrl-G)" data-controller="s-tooltip" data-s-tooltip-placement="top" data-key="insertImage" type="button" disabled="" aria-describedby="--stacks-s-tooltip-cnskiqm9"><span class="svg-icon-bg iconImage"></span></button><div id="--stacks-s-tooltip-cnskiqm9" class="s-popover s-popover__tooltip" role="tooltip">Image (Ctrl-G)<div class="s-popover--arrow"></div></div><button class="s-editor-btn s-btn s-btn__muted js-editor-btn js-insert-table-btn" aria-label="Table (Ctrl-E)" data-controller="s-tooltip" data-s-tooltip-placement="top" data-key="insertTable" type="button" disabled="" aria-describedby="--stacks-s-tooltip-06nhtsej"><span class="svg-icon-bg iconTable"></span></button><div id="--stacks-s-tooltip-06nhtsej" class="s-popover s-popover__tooltip" role="tooltip">Table (Ctrl-E)<div class="s-popover--arrow"></div></div></div><div class="s-editor-menu-block d-flex g2  js-block-formatting3"><button class="s-editor-btn s-btn s-btn__muted js-editor-btn js-numbered-list-btn" aria-label="Numbered list (Ctrl-O)" data-controller="s-tooltip" data-s-tooltip-placement="top" data-key="toggleOrderedList" type="button" disabled="" aria-describedby="--stacks-s-tooltip-i571d51s"><span class="svg-icon-bg iconOrderedList"></span></button><div id="--stacks-s-tooltip-i571d51s" class="s-popover s-popover__tooltip" role="tooltip">Numbered list (Ctrl-O)<div class="s-popover--arrow"></div></div><button class="s-editor-btn s-btn s-btn__muted js-editor-btn js-bullet-list-btn" aria-label="Bulleted list (Ctrl-U)" data-controller="s-tooltip" data-s-tooltip-placement="top" data-key="toggleUnorderedList" type="button" disabled="" aria-describedby="--stacks-s-tooltip-tk7rnpso"><span class="svg-icon-bg iconUnorderedList"></span></button><div id="--stacks-s-tooltip-tk7rnpso" class="s-popover s-popover__tooltip" role="tooltip">Bulleted list (Ctrl-U)<div class="s-popover--arrow"></div></div><button class="s-editor-btn s-btn s-btn__muted js-editor-btn js-horizontal-rule-btn" aria-label="Horizontal rule (Ctrl-R)" data-controller="s-tooltip" data-s-tooltip-placement="top" data-key="insertRule" type="button" disabled="" aria-describedby="--stacks-s-tooltip-v5i11h7u"><span class="svg-icon-bg iconHorizontalRule"></span></button><div id="--stacks-s-tooltip-v5i11h7u" class="s-popover s-popover__tooltip" role="tooltip">Horizontal rule (Ctrl-R)<div class="s-popover--arrow"></div></div><div data-controller="s-popover" data-s-popover-toggle-class="is-selected" data-s-popover-placement="bottom" data-s-popover-reference-selector="#more-formatting-dropdown-btn-2504"><button class="s-editor-btn s-btn s-btn__muted js-editor-btn js-more-formatting-dropdown s-btn__dropdown" aria-label="More formatting" data-controller="s-tooltip" data-s-tooltip-placement="top" data-key="more-formatting-dropdown" type="button" aria-controls="more-formatting-dropdown-popover-2504" data-action="s-popover#toggle" id="more-formatting-dropdown-btn-2504" disabled="" aria-expanded="false" aria-describedby="--stacks-s-tooltip-8zpothhq"><span class="svg-icon-bg iconEllipsisHorizontal"></span></button><div id="--stacks-s-tooltip-8zpothhq" class="s-popover s-popover__tooltip" role="tooltip">More formatting<div class="s-popover--arrow"></div></div><div class="s-popover wmn-initial w-auto px0 pt0 py8" id="more-formatting-dropdown-popover-2504" role="menu"><div class="s-popover--arrow" aria-hidden="true"></div><div class="d-flex fd-column" role="presentation"><button type="button" data-key="tag-btn" role="menuitem" class="s-block-link s-editor--dropdown-item js-editor-btn" disabled="">Tag (Ctrl-[)</button><button type="button" data-key="spoiler-btn" role="menuitem" class="s-block-link s-editor--dropdown-item js-editor-btn" disabled="">Spoiler (Ctrl-/)</button><button type="button" data-key="subscript-btn" role="menuitem" class="s-block-link s-editor--dropdown-item js-editor-btn" disabled="">Subscript (Ctrl-,)</button><button type="button" data-key="superscript-btn" role="menuitem" class="s-block-link s-editor--dropdown-item js-editor-btn" disabled="">Superscript (Ctrl-.)</button><button type="button" data-key="kbd-btn" role="menuitem" class="s-block-link s-editor--dropdown-item js-editor-btn" disabled="">Keyboard (Ctrl-')</button></div></div></div></div><div class="s-editor-menu-block d-flex g2 d-none sm:d-inline-flex vk:d-inline-flex js-block-history"><button class="s-editor-btn s-btn s-btn__muted js-editor-btn js-undo-btn" aria-label="Undo (Ctrl-Z)" data-controller="s-tooltip" data-s-tooltip-placement="top" data-key="undo-btn" type="button" disabled="" aria-describedby="--stacks-s-tooltip-et1m2pva"><span class="svg-icon-bg iconUndo"></span></button><div id="--stacks-s-tooltip-et1m2pva" class="s-popover s-popover__tooltip" role="tooltip">Undo (Ctrl-Z)<div class="s-popover--arrow"></div></div><button class="s-editor-btn s-btn s-btn__muted js-editor-btn js-redo-btn" aria-label="Redo (Ctrl-Y)" data-controller="s-tooltip" data-s-tooltip-placement="top" data-key="redo-btn" type="button" disabled="" aria-describedby="--stacks-s-tooltip-jlpabgvq"><span class="svg-icon-bg iconRefresh"></span></button><div id="--stacks-s-tooltip-jlpabgvq" class="s-popover s-popover__tooltip" role="tooltip">Redo (Ctrl-Y)<div class="s-popover--arrow"></div></div></div><div class="s-editor-menu-block d-flex g2  js-block-other"><a class="s-editor-btn s-btn s-btn__muted flex--item js-editor-btn js-help-link" href="/editing-help" target="_blank" aria-label="Help" data-controller="s-tooltip" data-s-tooltip-placement="top" data-key="help-link" disabled="" aria-describedby="--stacks-s-tooltip-f1csmdd3"><span class="svg-icon-bg iconHelp"></span></a><div id="--stacks-s-tooltip-f1csmdd3" class="s-popover s-popover__tooltip" role="tooltip">Help<div class="s-popover--arrow"></div></div></div></div><div class="flex--item d-flex ai-center ml24 fc-medium"><div class="s-btn-group s-btn-group--radio fw-nowrap"> --}}
{{--                                <input type="radio" name="mode-toggle-414" id="mode-toggle-rich-414" class="s-btn--radio js-editor-toggle-btn" data-mode="0"> --}}
{{--                                <label class="s-btn s-btn__muted s-btn__outlined s-editor-btn px6" for="mode-toggle-rich-414" title="Rich text mode"> --}}
{{--                                    <span class="svg-icon-bg iconRichText"></span> --}}
{{--                                    <span class="v-visible-sr">Rich text mode</span> --}}
{{--                                </label> --}}
{{--                                <input type="radio" name="mode-toggle-414" id="mode-toggle-markdown-414" class="s-btn--radio js-editor-toggle-btn" data-mode="1" data-preview="false" checked=""> --}}
{{--                                <label class="s-btn s-btn__muted s-btn__outlined s-editor-btn px6" for="mode-toggle-markdown-414" title="Markdown mode"> --}}
{{--                                    <span class="svg-icon-bg iconMarkdown"></span> --}}
{{--                                    <span class="v-visible-sr">Markdown mode</span> --}}
{{--                                </label> --}}
{{--                                <input type="radio" name="mode-toggle-414" id="mode-toggle-preview-414" class="s-btn--radio js-editor-toggle-btn" data-mode="1" data-preview="true"><label class="s-btn s-btn__muted s-btn__outlined s-editor-btn px6" for="mode-toggle-preview-414" title="Markdown with preview mode"> --}}
{{--                                    <span class="svg-icon-bg iconMarkdownPreview"></span> --}}
{{--                                    <span class="v-visible-sr">Markdown with preview mode</span> --}}
{{--                                </label></div></div></div><div></div></div><div class="fl-grow1 outline-none p12 pt6 w100 s-prose js-editor ProseMirror" role="textbox" aria-multiline="true" aria-label="Body" contenteditable="false" translate="no"><pre class="s-code-block markdown" style="position: relative;"><code><br class="ProseMirror-trailingBreak"></code><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre></div></div><div></div></div> --}}
{{--        <div id="problem-details-validation-message" class="flex--item s-input-message d-none js-stacks-validation-message"></div> --}}
{{--    </div> --}}
{{--    <button class="s-btn s-btn__filled mt12 js-next-problem-details js-next-buttons d-none" disabled="" type="button">Next</button> --}}
{{-- </div> --}}
