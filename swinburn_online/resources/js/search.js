import $ from 'jquery';

$(document).ready(function () 
{
    $('#searchToggle').click(function () {
        $("#searchFrom").fadeIn("normal");
        $('#turnSearchModalOn').fadeIn("normal");
    });
    
    $('#turnSearchModalOn').click(function () {
        $("#searchFrom").fadeOut("fast");
        $('#turnSearchModalOn').fadeOut("fast");
    });
    
    $('#searchToggle1').click(function () {
        $("#searchFrom").fadeIn("normal");
        $('#turnSearchModalOn').fadeIn("normal");
    });

    filterHintByTyping($('#searchFrom input[name="search"]'));

    $('#searchFrom input[name="search"]').keyup(function () {
        filterHintByTyping($(this));
    });
    $('#search-type-hints li').click(function () {
        $('#searchFrom input[name="search"]').val($(this).text());
        filterHintByTyping($('#searchFrom input[name="search"]'));
    });

    function filterHintByTyping(search_input) {
        var typing_shop_code = $(search_input).val().toUpperCase();
        if (typing_shop_code.length) {
            $('#search-type-hints li').each(function (i, obj) {
                var hint_value = $(obj).text().toUpperCase();
                if (hint_value.indexOf(typing_shop_code) == -1) {
                    $(obj).css('display', 'none');
                } else {
                    $(obj).css('display', '');
                }
            });
        } else {
            $('#search-type-hints li').each(function (i, obj) {
                $(obj).css('display', 'none');
            });
        }
    }
});