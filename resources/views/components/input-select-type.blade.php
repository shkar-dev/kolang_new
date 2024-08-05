<div class="row p-3">
    {{--    p-3 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <?php
    $id = rand(1, 20);
    ?>
    <select class="js-example-basic-single js-states   col-11 {{ $title }}" id="{{ $name }}"
        name="{{ $name }}" style="width:100% !important;">
        {{-- <option disabled value="0" selected>aa</option> --}}
        <option></option>
        @if ($content == 'writer')
            <option value="writer" selected>نووسەر</option>
            <option value="translator"> وەرگێڕ</option>
            <option value="other">جۆریتر</option>
        @elseif ($content == 'translator')
            <option value="writer">نووسەر</option>
            <option value="translator" selected> وەرگێڕ</option>
            <option value="other">جۆریتر</option>
        @else
            <option value="writer">نووسەر</option>
            <option value="translator"> وەرگێڕ</option>
            <option value="other" selected>جۆریتر</option>
        @endif

        {{-- @foreach ($options as $item)
            <option value={{ $item->id }}>{{ $item->name }}</option>
        @endforeach --}}

    </select>
    @error($name)
        <div class="row">
            <p class="input-invalid-text">تکایە {{ $title }} تۆمار بکە </p>
        </div>
    @enderror

    <style>
        /* .select2-selection__arrow {
            left: 2% !important;
        }

        .select2-selection__arrow {
            height: 50px !important;
            padding: 10px !important;
        }all(), $valiall(), $validateded

        .select2-container--default>span {
            height: 50px !important;
        } */
        .select2-container {
            padding: 0px !important;
            outline: none !important;
        }

        .select2-search__field {
            outline: none !important;
        }

        .select2-selection {
            box-shadow: none !important;
            border: none !important;
            border-bottom: 1px solid #e0e0e0 !important;
            border-radius: 0px !important;
            height: 42px !important;
        }

        /* @if (1 == 2)
        .select2-selection {
            border-bottom: 1px solid red !important;
        }
        @endif
        .skills_select2 {
            width: 120px !important;
        }

        */
    </style>
    <script>
        // $(document).ready(function() {
        //     $('#' + "{{ $id }}").select2({
        //         // placeholder: {
        //         //     id: "$id",
        //         //     text: "{{ $title }}"
        //         // },
        //         allowClear: true,
        //         theme: 'bootstrap-5',
        //         templateSelection: function(data) {
        //             // console.log(data);
        //             // if (data.id === $id) { // adjust for custom placeholder values
        //             //     return "{{ $title }}";
        //             // }
        //             // return data.text;
        //         }
        //     });
        // });


        $("#" + '{{ $name }}').select2({
            placeholder: "{{ $title }}",
            allowClear: true,
            theme: 'bootstrap-5',

        });
    </script>
</div>
