import $ from 'jquery';

$(document).ready(function () {
    $('.content>table').each(function (i, obj) {
        var table_cellspacing = $(obj).attr('cellspacing') ;
        $(obj).css({
            'width': 'calc(100% + ' + table_cellspacing*2 + 'px',
            'max-width': 'calc(100% + ' + table_cellspacing*2 + 'px',
            'margin': '-' + table_cellspacing + 'px',
        });
    });
});