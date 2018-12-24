function historyVideo(video_id) {
    $.ajax({
        url: '/admin/video/history_video/'+video_id,
        method: 'get',
        dataType: 'json',
    }).fail(function (ui, status) {
    }).done(function (data, status) {
        $("#history_video").html(data.content);
        $("#history_video").modal('show');
    });
}

function historyArticel(id) {
    $.ajax({
        url: '/admin/articel/history_articel/'+id,
        method: 'get',
        dataType: 'json',
    }).fail(function (ui, status) {
    }).done(function (data, status) {
        $("#history_articel").html(data.content);
        $("#history_articel").modal('show');
    });
}

function open_comment(comment) {
    $('.modal-body').html(comment);
    $('#show_comment').modal('show');
}

// function update_comment(id) {
//     var btnThis = $(this);
//     var btnNext = btnThis.parent().next().find('.text-danger');
//     var url = $('.currentUrl').text();
//     alert(btnThis.attr('class'));
//     $.ajax({    
//         url: url+'/admin/comment/update_comment/'+id,
//         method: 'get',
//         dataType: 'json',
//     }).fail(function (ui, status) {
//         aler('Error');
//         // $('#cm-status').removeClass('disabled');
//     }).done(function (data, status) {
//         if(data.data == 0){

//             btnThis.attr('class', 'btn btn-sm btn-danger');
//             btnThis.text('Chưa duyệt');

//             btnNext.attr('style', 'display: block');
            
//         }else {
//             btnThis.attr('class', 'btn btn-sm btn-success');
//             btnThis.text('Đã duyệt');

//             btnNext.attr('style', 'display: none');
            
//         }
        
//     });
// }

function updateWebsiteInfo(id) {
    $.ajax({
        url: '/admin/website_info/get_detail/'+id,
        method: 'get',
        dataType: 'json',
    }).fail(function (ui, status) {
    }).done(function (data, status) {
        $("#add_info").html(data.content);
        $("#add_info").modal('show');
    });
}

function getMunuChild(id) {
    $.ajax({
        url: '/admin/group/form_sort_group/'+id,
        method: 'get',
        dataType: 'json',
    }).fail(function (ui, status) {
    }).done(function (data, status) {
        $("#group-child").html(data.content);
    });
}

function getMunuChildCate(id) {
    $.ajax({
        url: '/admin/group/form_sort_group_category/'+id,
        method: 'get',
        dataType: 'json',
    }).fail(function (ui, status) {
    }).done(function (data, status) {
        $("#group-child").html(data.content);
    });
}

function change_status(video_id,status_video) {
    $('#status_video').addClass('disabled');
    $.ajax({
        url: '/admin/video/update_status/'+video_id,
        method: 'get',
        dataType: 'json',
    }).fail(function (ui, status) {
        $('#status_video').removeClass('disabled');
    }).done(function (data, status) {
        if(data.status == 1){
            console.log('đúng rồi mà');
            if(status_video == 0){
                var html = "<button onclick=\"change_status("+video_id+","+data.video_status+")\" class=\"btn btn-block btn-sm btn-success\">Đã duyệt</button>"
                $('#status_video').html(html);
            }else {
                var html = "<button onclick=\"change_status("+video_id+","+data.video_status+")\" class=\"btn btn-block btn-sm btn-danger\">Chưa duyệt</button>"
                $('#status_video').html(html);
            }

        }
        $('#status_video').removeClass('disabled');
    });
}

function change_lang(type = 0) {
    $.ajax({
        url: '/set_lang/' + $('#lang').val(),
        method: 'get',
        dataType: 'json',
    }).fail(function (ui, status) {
    }).done(function (data, status) {
        if (data.status == 1){
            if(type = 1) window.location= $('.currentUrl').text()+'/admin';
            else window.location= $('.currentUrl').text();
        }
    })
}

function chang_status_articel(articel_id,atr) {
    $.ajax({
        url: '/admin/articel/update_status/' + articel_id + '?status=' + atr.value,
        method: 'get',
        dataType: 'json',
    }).fail(function (ui, status) {
        $('.errorAlert').css('bottom','100px');
        setTimeout(function(){
            $('.errorAlert').css('bottom', '-200px');
        }, 3000);
        setTimeout(function(){
            $('.errorAlert').fadeOut();
        }, 3900);
        location.reload();
    }).done(function (data, status) {
        $('.errorAlert').css('bottom','100px');
        setTimeout(function(){
            $('.errorAlert').css('bottom', '-200px');
        }, 3000);
        setTimeout(function(){
            $('.errorAlert').fadeOut();
        }, 3900);
        if (data.status == 1){
            location.reload();
        }
    })
}

function add_menu_video(id) {
    $.ajax({
        url: '/admin/group_video/form_group_video/'+id,
        method: 'get',
        dataType: 'json',
    }).fail(function (ui, status) {
    }).done(function (data, status) {
        $('#form_menu_video').html(data.content);
        $('#form_menu_video').modal('show');
    });
}