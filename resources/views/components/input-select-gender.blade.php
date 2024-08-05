<div class="row p-3">

    <select class="js-example-basic-single col-11 {{ $title }}" id="{{ $name }}" name="{{ $name }}"
        placeholder="{{ $title }}" style="width:100% !important;">
        <option> </option>
        @if ($content == 'male')
            <option value="male" selected>نێر</option>
            <option value="female">مێ</option>
        @else
            <option value="male">نێر</option>
            <option value="female" selected>مێ</option>
        @endif
    </select>
    @error($name)
        <div class="row">
            <p class="input-invalid-text">تکایە {{ $title }} تۆمار بکە </p>
        </div>
    @enderror
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

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
    </style>
    <script>
        $("#" + '{{ $name }}').select2({
            placeholder: "{{ $title }}",
            allowClear: true,
            theme: 'bootstrap-5',
        });
    </script>
</div>
