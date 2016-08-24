<input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" style="float: left;" />
<div id="autocomplete-container" style="position: relative; float: left; width: 400px; margin: 10px;"></div>

<script>
    $(document).ready(function() {
        var countriesArray = $.map(countries, function(value, key) {
            return {
                value: value,
                data: key
            };
        });

        // initialize autocomplete with custom appendTo
        $('#autocomplete-custom-append').autocomplete({
            lookup: countriesArray,
            appendTo: '#autocomplete-container'
        });
    });
</script>