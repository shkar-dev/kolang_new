<div class="row p-3">
{{--    p-3--}}
    <select class="js-example-basic-single col-11" id="{{ $title }}" name="state"
        placeholder="{{ $title }}" style="width:100% !important;">
        <option>aa</option>
        <option value="WY">Wyoming</option>
        <option value="WY">Wyoming</option>
        <option value="WY">Wyoming</option>


    </select>
    <style>
        /* .select2-selection__arrow {
            left: 2% !important;
        }

        .select2-selection__arrow {
            height: 50px !important;
            padding: 10px !important;
        }

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
        }

        .skills_select2 {
            width: 120px !important;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('#' + "{{ $title }}").select2({
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

            });
        });
    </script>
</div>
