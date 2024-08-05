<div class="row p-3">
    {{--    p-3 --}}
    <?php
    $id = rand(1, 20);
    ?>
    {{-- @dd($options) --}}
    <select class="js-example-basic-single col-11 {{ $title }}" id="{{ $name }}" name="{{ $name }}"
        placeholder="{{ $title }}" style="width:100% !important;">
        <option> </option>
        @foreach ($options as $child)
            @if ($content == $child->id)
                <option value={{ $child->id }} selected>{{ $child->name }}</option>
            @else
                <option value={{ $child->id }}>{{ $child->name }}</option>
            @endif
            @foreach ($child->parent_id as $children)
                @if ($content == $children->id)
                    <option value={{ $children->id }} selected>{{ $child->name . ' > ' . $children->name }}</option>
                @else
                    <option value={{ $children->id }}>{{ $child->name . ' > ' . $children->name }}</option>
                @endif

                @foreach ($children->parent_id as $grandchildren)
                    @if ($content == $grandchildren->id)
                        <option value={{ $grandchildren->id }} selected>
                            {{ $child->name . ' > ' . $children->name . ' > ' . $grandchildren->name }}</option>
                    @else
                        <option value={{ $grandchildren->id }}>
                            {{ $child->name . ' > ' . $children->name . ' > ' . $grandchildren->name }}</option>
                    @endif
                @endforeach
            @endforeach
        @endforeach
    </select>
    @error($name)
        <div class="row">
            <p class="input-invalid-text">تکایە{{ $title }} تۆمار بکە </p>
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
        /* $(document).ready(function() {
                                                                                                                                            $('#' + "{{ $id }}").select2({
                                                                                                                                                placeholder: {
                                                                                                                                                    id: 'aa', // the value of the option
                                                                                                                                                    text: "{{ $title }}"
                                                                                                                                                },
                                                                                                                                                allowClear: true,
                                                                                                                                                theme: 'bootstrap-5',
                                                                                                                                                templateSelection: function(data) {
                                                                                                                                                    console.log(data);
                                                                                                                                                    if (data.id === 'aa') { // adjust for custom placeholder values
                                                                                                                                                        return "{{ $title }}";
                                                                                                                                                    }
                                                                                                                                                    return data.text;
                                                                                                                                                }
                                                                                                                                            }); */
        /* }); */
        $("#" + '{{ $name }}').select2({
            placeholder: "{{ $title }}",
            allowClear: true,
            theme: 'bootstrap-5',

        });
    </script>
</div>
