$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#input-2').on('change', function (e) {
        var route = $('.hide').data('route');
        var point = $('input[name="rate"]').val();
        var productId = $('#product_id').val();
        var userId = $('#user_id').val();
        console.log(userId);

        $.ajax({
            type: 'POST',
            url: route,
            dataType: "JSON",
            data: {
                'product_id': productId,
                'point' : point,
                'user_id': userId,
            },
            success: function(data){
                if (data.success) {
                    alert('ok');
                    console.log(route);
                }else alert("not");
            }});
    });

    $(document).on('click','.delete-comment', function(e) {
        return confirm("Do you want to delete this comment?");
    });

    $(document).on('click','.edit-comment', function(e) {
        e.preventDefault();
        var id = $(this).attr('id');
        var content = $('#content-comment' + id).text();
        var html ="<textarea class='form-control aria-edit-comment fix-comment' cols='50' rows='3' id=" + id + "></textarea>" ;
        $('#edit-comment-aria').html(html);
        $('.aria-edit-comment').focus().val(content);
    });

    $(document).on('keydown', '#comment1', function (e){
        if(e.keyCode == 13){
            var route2 = $('.urlcomment').data('route');
            var content = $('#comment1').val();
            var productId = $('#product_id').val();
            var userId = $('#user_id').val();
            $.ajax({
            type: 'POST',
            url: route2,
            dataType: 'JSON',
            data: {
                'product_id': productId,
                'content' : content,
                'user_id': userId,
            },
            success: function(data){
                if (data.success) {
                    $('#before-comment').prepend(data.htmlComment);
                    $('#comment1').val('');
                } else {
                    alert("Sorry. Comment fail");
                }
            }});
        }
    });

    $(document).on('keydown', '.aria-edit-comment', function (e){
        if(e.keyCode == 13){
            var id = $(this).attr('id');
            var content = $(this).val();
            $.ajax({
            type: 'POST',
            url: '/editComment',
            dataType: 'JSON',
            data: {
                'id': id,
                'content' : content,
            },
            success: function(data){
                if (data.success) {
                $('#location-comment' + id).html(data.htmlComment);
                $('.aria-edit-comment').remove();
                } else {
                    alert("Sorry. Comment fail");
                }
            }});
        }
    });

    $(document).on('click','.reply-comment', function(e) {
        e.preventDefault();
        var id = $(this).attr('id');
        var content = $('#content-comment' + id).text();
        var html ="<textarea class='form-control aria-reply-comment' cols='50' rows='3' id=" + id + "></textarea>" ;
        $('#reply-comment-aria' + id).html(html);
    });

    $(document).on('keydown', '.aria-reply-comment', function (e){
        if(e.keyCode == 13){
            var route2 = $('.urlreplycomment').data('route');
            var content = $('.aria-reply-comment ').val();
            var productId = $('#product_id').val();
            var commentParentId = $('#comment_parent_id').val();
            var userId = $('#user_reply_id').val();

            $.ajax({
                type: 'GET',
                url: route2,
                dataType: 'JSON',
                data: {
                    'product_id': productId,
                    'comment_parent_id': commentParentId,
                    'content' : content,
                    'user_id': userId
                },
                success: function(data){
                    if (data.success) {
                        $('#before-reply-comment' + commentParentId).prepend(data.htmlComment);
                        $('.aria-reply-comment').remove();
                    } else {
                        alert("Sorry. Comment fail");
                    }
            }});
        }
    });
});
