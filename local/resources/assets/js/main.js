$(document).ready(function(){
    $('.sectionMain').slideUp();
	// var arr_sm_top = [];
	// for (let i = 0; i < $('.sectionMain').length ; i++){
    //     arr_sm_top.push($('.sectionMain').eq(i).offset().top);
	// }
	// console.log(arr_sm_top);
    $(window).scroll(function(){
        var scrollTop = $(window).scrollTop();
        var winHeight = $(window).height();
        // for (let i = 0; i < $('.sectionMain').length ; i++){
		//
        // 	if (scrollTop > $('.sectionMain').eq(i).offset().top){
        //         console.log(scrollTop+"____"+$('.sectionMain').eq(i).offset().top);
        //         console.log(i);
        //         console.log($('.sectionMain').eq(0).offset().top);
        //         $('.sectionMain').eq(i).slideDown("slow");
		// 	}
        // }
        for (let i = 0; i < $('section').length ; i++){
            if (scrollTop+winHeight-100 > $('section').eq(i).offset().top){
				setTimeout(function () {
                    $('section').eq(i).find('.sectionMain').slideDown("slow");
                },300)

            }
        }
    });

    $(document).on('click','.welcomeItemNav', function () {
        console.log("oke");
        $(this).attr('class', 'welcomeItemNav active');
        $(this).siblings().attr('class', 'welcomeItemNav');
        var index_this = $(this).index();
        console.log(index_this);
        $('.welcomeItemNavContent').hide();
        $('.welcomeItemNavContent').eq(index_this).show();
    })
});