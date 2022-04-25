$(document).ready(function() {
    var text = $(".load-more-submit").html();
    $(".load-more-submit").on("click", function() {
        $(this).html("Loading..");
        showMore(
            $(this).attr("loadPage"),
            $(this).attr("loadType"),
            $(this).attr("loadCategory"),
            $(this).attr("loadTag")
        );
        return false;
    });

    

    function showMore(page = 2, type = "", category = "", tag = "") 
    {
        var load_data = load_data;
        var url = "/loading-more";
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        });

        $.ajax({
            type: "GET",
            url: url,
            data: {
                page: page,
                type: type,
                category: category,
                tag: tag
            },
            beforeSend: function() {
            },
            success: function(data) {
                $("#result-list").append(data);
                $(".load-more-submit").html(text);
                $(".load-more-submit").attr("loadPage", ++page);
                if($(".load-more-submit").attr("lastPage") <= page) {
                    $(".load-more-submit").hide();
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {}
        });
    }

    // Search loadmore

    var text_search = $(".load-more-submit-search").html();
    $(".load-more-submit-search").on("click", function() {
        $(this).html("Loading..");
        showMoreSearch(
            $(this).attr("loadPage"),
        );
        return false;
    });

    function showMoreSearch(page = 2) 
    {
        var load_data = load_data;
        var url = "/loading-more-search";
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        });

        $.ajax({
            type: "GET",
            url: url,
            data: {
                page: page,
            },
            beforeSend: function() {
            },
            success: function(data) {
                $("#result-list").append(data);
                $(".load-more-submit-search").html(text_search);
                $(".load-more-submit-search").attr("loadPage", ++page);
                if($(".load-more-submit-search").attr("lastPage") <= page) {
                    $(".load-more-submit-search").hide();
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {}
        });
    }
});