$(document).ready(function() {
    $( ".datepicker" ).datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
    });
});


$(document).ready(function() {
    $(".autocomplete1").autocomplete({
        data: [
            ['Cali', 1],
            ['Buga', 2],
            ['Tulua', 3],
            ['Armenia', 4],
            ['San pedro', 5],
            ['Yumbo', 6],
            ['Anserma', 7]
        ]
    });
});

