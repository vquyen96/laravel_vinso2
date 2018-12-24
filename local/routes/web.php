<?php
use \Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::group(['middleware' => 'Start'],function(){
//
//});


//,'middleware' => 'Start'
Route::group(['namespace' => 'Client'],function (){
    Route::get('/','IndexController@index')->name('home');
    Route::group(['prefix'=>'article'],function(){
        Route::get('/{slug}','ArticelController@get_detail')->name('get_detail_articel');
        Route::post('action_comment','ArticelController@action_comment')->name('action_comment');
    });

    Route::group(['prefix' => 'group'],function(){
        Route::get('/{slug}','GroupController@get_articel_by_group')->name('get_articel_by_group');
    });
    Route::get('/open_video/{id}','VideosController@open_video')->name('open_video');

    Route::post('ad_view', 'IndexController@ad_view');
    Route::post('article_view', 'IndexController@article_view');

    Route::get('about', 'IndexController@about');
    Route::get('contact', 'IndexController@contact');
    Route::get('news', 'IndexController@listnews');
    Route::get('quality', 'IndexController@listnews');
    Route::get('recruit', 'IndexController@listnews');
    Route::get('document', 'IndexController@listnews');
    Route::get('news/{slug}', 'IndexController@detailnews');
    Route::get('quality/{slug}', 'IndexController@detailnews');
    Route::get('recruit/{slug}', 'IndexController@detailnews');
    Route::get('document/{slug}', 'IndexController@detailnews');
    Route::post('search', 'IndexController@getSearch');


});

Route::get('/set_lang/{lang}','ClientController@set_lang')->name('set_lang');

Route::get('login', 'Admin\LoginController@getLogin')->middleware('CheckLogout');
// Route::post('login', 'Admin\LoginController@postLogin');

Route::post('login', [ 'as' => 'login', 'uses' => 'Admin\LoginController@postLogin']);



Route::get('logout', 'Admin\LoginController@getLogout');
Route::get('lockscreen', 'Admin\LoginController@getLockScreen');
Route::post('lockscreen', 'Admin\LoginController@postLockScreen');


Route::group(['namespace' => 'Admin'], function (){
	Route::group(['prefix' => 'admin', 'middleware' => 'CheckLogin'], function (){
		Route::get('/', 'HomeController@getHome')->name('admin');
		// Route::get('/{slug}', 'HomeController@getHome');

        /*
         * articel
         */

        Route::group(['prefix' => 'articel'], function(){
            Route::get('/','ArticelController@get_list')->name('admin_articel');
            Route::get('/form_articel/{id}','ArticelController@form_articel')->name('form_articel');
            Route::post('/action_articel','ArticelController@action_articel')->name('action_articel');
            Route::get('/delete_articel/{id}','ArticelController@delete_articel')->name('delete_articel');
            Route::get('/history_articel/{id}','ArticelController@history_articel')->name('history_articel');
            Route::get('/view_log/{id}','ArticelController@view_log')->name('view_log');
            Route::get('/view_log_now/{id}','ArticelController@view_log_now')->name('view_log_now');
            Route::get('/sort_hot_articel','ArticelController@sort_hot_articel')->name('sort_hot_articel');
            Route::post('/sort_hot_articel_post','ArticelController@sort_hot_articel_post')->name('sort_hot_articel_post');
            Route::post('/update_order_articel','ArticelController@update_order_articel')->name('update_order_articel');
            Route::get('/delete_articel_hot/{groupid}/{id}','ArticelController@delete_articel_hot')->name('delete_articel_hot');
            Route::get('/update_status/{id}','ArticelController@update_status')->name('update_status');
            Route::get('/approved', 'ArticelController@approved');
            Route::get('/approved_cgroup', 'ArticelController@approved_cgroup');
            //for bien tap vien
            Route::get('/post_article', 'ArticelController@post_article')->name('post_article');
            Route::get('/returned_article', 'ArticelController@returned_article')->name('returned_article');
            Route::get('/wait_article', 'ArticelController@wait_article')->name('wait_article');
            Route::get('/draft_article', 'ArticelController@draft_article')->name('draft_article');
            

            Route::post('on', 'ArticelController@getOn');
            Route::post('off', 'ArticelController@getOff');

            Route::post('return', 'ArticelController@getReturn');

            Route::post('status1', 'ArticelController@get1');
            Route::post('status2', 'ArticelController@get2');
            Route::post('status3', 'ArticelController@get3');
            Route::post('status4', 'ArticelController@get4');
            Route::post('send_article', 'ArticelController@send_article');
            
            Route::post('getComment', 'ArticelController@getComment');

            Route::post('get_relate', 'ArticelController@get_relate');

            Route::post('set_time', 'ArticelController@set_time');

            Route::post('group_child_from', 'ArticelController@get_group_child_form');

            Route::get('/fix_bug','ArticelController@fix_bug');


        });
        Route::group(['prefix' => 'topic'], function(){
            Route::get('/', 'TopicController@getList')->name('admin_topic');
            Route::get('/sort', 'TopicController@getSort')->name('sort_hot_topic');
            Route::post('/sort', 'TopicController@postSort')->name('sort_hot_topic_post');
            Route::get('/form/{id}', 'TopicController@getForm')->name('form_topic');
            Route::post('/form/{id}', 'TopicController@postForm')->name('form_topic_post');
            
            Route::get('/delete/{id}', 'TopicController@getDelete')->name('delete_topic');

        });
        Route::group(['prefix' => 'profile'], function(){
            Route::get('/', 'ProfileController@getDetail');
            Route::post('/', 'ProfileController@postDetail');

            Route::get('change_pass', 'ProfileController@getChangePass');
            Route::post('change_pass', 'ProfileController@postChangePass');

        });
        Route::group(['prefix' => 'video'], function(){
            Route::get('/','VideoController@get_list')->name('admin_video');
            Route::get('/form_video/{id}','VideoController@form_video')->name('form_video');
            Route::post('/action_video','VideoController@action_video')->name('action_video');
            Route::get('/delete_video/{id}','VideoController@delete_video')->name('delete_video');
            Route::get('/history_video/{id}','VideoController@history_video')->name('history_video');
            Route::get('/update_status/{id}','VideoController@update_status')->name('update_status');

            Route::post('status', 'VideoController@action_status');
        });
        Route::group(['prefix' => 'group_video'], function(){
            Route::get('/','GroupVideoController@index')->name('admin_video_group');
            Route::get('/form_group_video/{id}','GroupVideoController@form_group_video')->name('form_group_video');
            Route::post('/action_menu_video','GroupVideoController@action_menu_video')->name('action_menu_video');
            Route::get('/delete_menu/{id}','GroupVideoController@delete_menu')->name('delete_menu');
            Route::get('/form_sort','GroupVideoController@form_sort')->name('form_sort');
            Route::post('/sort_menu','GroupVideoController@sort_menu')->name('sort_menu');

            Route::post('on', 'GroupVideoController@getOn');
            Route::post('off', 'GroupVideoController@getOff');

        });

        Route::group(['prefix' => 'magazine'], function(){
            Route::get('/', 'MagazineNewController@getList');

            Route::get('add','MagazineNewController@getAdd');
            Route::post('add','MagazineNewController@postAdd');

            Route::get('edit/{id}','MagazineNewController@getEdit');
            Route::post('edit/{id}','MagazineNewController@postEdit');

            Route::get('delete/{id}','MagazineNewController@getDelete');

            Route::get('sort', 'MagazineNewController@getSort');
            Route::post('sort', 'MagazineNewController@postSort');

            Route::post('status', 'MagazineNewController@action_status');

        });

        Route::group(['prefix'=>'report'], function(){
            Route::get('report_article', 'ReportController@report_article')->name('report_article');
            Route::get('detail_report_article/{id}', 'ReportController@detail_report_article')->name('detail_report_article');
        });

        Route::group(['prefix' => 'advert'], function(){
            Route::get('/', 'AdvertController@index');

            Route::get('add','AdvertController@create');
            Route::post('add','AdvertController@store');

            Route::get('edit/{id}','AdvertController@edit');
            Route::post('edit/{id}','AdvertController@update');

            Route::get('delete/{id}','AdvertController@destroy');

            Route::get('top', 'AdvertController@getTop');
            Route::get('top/{id}/{lo_id}', 'AdvertController@getGroup');
            Route::get('top_add/{id}/{lo_id}/{ad_id}', 'AdvertController@addTopAdvert');
            Route::get('top_delete/{id}', 'AdvertController@deleteTopAdvert');

            Route::post('on', 'AdvertController@getOn');
            Route::post('off', 'AdvertController@getOff');
        });


        Route::group(['prefix' => 'website_info'],function(){
            Route::get('/','WebsiteInfoController@index')->name('website_info');
            Route::post('/add_info','WebsiteInfoController@add_info')->name('add_info');
            Route::post('/update_info','WebsiteInfoController@update_info')->name('update_info');
            Route::post('/update_info_raw','WebsiteInfoController@update_info_raw')->name('update_info_raw');
            Route::get('/delete_info/{id}','WebsiteInfoController@delete_info')->name('delete_info');
        });

        Route::group(['prefix'=>'comment'],function(){
            Route::get('/','CommentController@index')->name('admin_comment');
            Route::get('/update_comment/{id}','CommentController@update_status')->name('update_comment');
            Route::get('/delete_comment/{id}','CommentController@delete_comment')->name('delete_comment');
        });

        
        Route::group(['middleware' => 'CheckSite'], function(){
            Route::group(['prefix' => 'account'], function(){
                Route::get('/', 'AccountController@getList');

                Route::get('add','AccountController@getAdd');
                Route::post('add','AccountController@postAdd');

                Route::get('edit/{id}','AccountController@getEdit');
                Route::post('edit/{id}','AccountController@postEdit');

                Route::get('delete/{id}','AccountController@getDelete');

            });

            Route::group(['prefix' => 'emagazine'], function(){
                Route::get('/', 'EmagazineController@getList');

                Route::get('add','EmagazineController@getAdd');
                Route::post('add','EmagazineController@postAdd');

                Route::get('edit/{id}','EmagazineController@getEdit');
                Route::post('edit/{id}','EmagazineController@postEdit');

                Route::get('delete/{id}','EmagazineController@getDelete');

                Route::get('sort', 'EmagazineController@getSort');
                Route::post('sort', 'EmagazineController@postSort');

                Route::post('status', 'EmagazineController@action_status');

            });

            Route::group(['prefix' => 'group'], function(){
                Route::post('on', 'GroupController@getOn');
                Route::post('off', 'GroupController@getOff');
                Route::get('delete_home_index/{id}', 'GroupController@delete_home_index')->name('delete_home_index');

            });

            Route::group(['prefix' => 'about'], function(){
                Route::get('/', 'AboutController@getList');

                Route::get('add','AboutController@getAdd');
                Route::post('add','AboutController@postAdd');

                Route::get('edit/{id}','AboutController@getEdit');
                Route::post('edit/{id}','AboutController@postEdit');

                Route::get('delete/{id}','AboutController@getDelete');

            });

            Route::group(['prefix' => 'certification'], function() {
                Route::get('/','CertificationController@getList');
                Route::post('add','CertificationController@postAdd');
                Route::post('edit/{id}','CertificationController@postEdit');
                Route::get('delete/{id}','CertificationController@getDelete');
            });


            Route::get('/group','GroupController@getList')->name('admin_group');
            Route::get('/group/form_group/{id}',['as' => 'form_group','uses' => 'GroupController@form_group']);
            Route::post('/action_group',['as' => 'action_group','uses' => 'GroupController@action_group']);
            Route::post('/merge_group',['as' => 'merge_group','uses' => 'GroupController@merge_group']);
            Route::get('/delete_group/{id}/{group_id}',['as' => 'delete_group','uses' => 'GroupController@delete_group']);
            Route::get('/group/form_sort_group/{id}',['as' => 'form_sort_group','uses' => 'GroupController@form_sort_group']);
            Route::get('/group/form_sort_group_category/{id}',['as' => 'form_sort_group_category','uses' => 'GroupController@form_sort_group_category']);
            Route::post('/group/update_order',['as' => 'update_order','uses' => 'GroupController@update_order']);

            




            // Route::group(['prefix' => 'magazine'], function(){
            //     Route::get('/','MagazineController@index')->name('admin_magazine');
            //     Route::get('/form_magazine/{id}','MagazineController@form_magazine')->name('form_magazine');
            //     Route::post('/action_magazine','MagazineController@action_magazine')->name('action_magazine');
            //     Route::get('/delete_magazine/{id}','MagazineController@delete_magazine')->name('delete_magazine');


            // });





            Route::group(['prefix'=>'contact'], function(){
                Route::get('contact', 'ContactController@getAdvertContact');
                Route::post('contact', 'ContactController@getDetailAdvertContact');

                Route::get('order', 'ContactController@getAdvertOrder');
                Route::post('order', 'ContactController@getDetailAdvertOrder');
            });

            // Route::get('about', 'ArticelController@getAbout');
        });


	});
});

Route::post('/upload_image',['as' => 'upload_image','uses' => 'ClientController@upload_image']);
Route::get('/desktop_mobile',['as' => 'desktop_mobile','uses' => 'ClientController@desktop_mobile']);

Route::get('{slug}', 'Client\IndexController@home');
Route::get('local/resources/assets/{slug}', 'Client\IndexController@home');

