<?php

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

Route::group([],function(){

    Route::match(['get','post'],'/',['uses'=>'IndexController@execute','as'=>'home']);
    Route::get('/page/{alias}',['uses'=>'PageContoller@execute','as'=>'page']);

    Route::auth();
});
//admin/service
Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){
    //admin
    Route::get('/',function (){

        if(view()->exists('admin.index')){
            $data = ['title' => 'Панель администратора'];

            return view('admin.index',$data);
        }

    });
    //admin/pages
    Route::group( ['prefix' =>'page'],function (){
        //admin//pages
        Route::get('/',['uses'=>'PageController@execute','as'=>'pages']);
        //admin/pages/add
        Route::match(['get','post'],'/add',['uses'=>'PagesAddController@execute','as'=>'pagesAdd']);
        //admin/edit/2
        Route::match(['get','post','delete'],'/edit/{page}',['uses'=>'PagesEditontroller@execute','as'=>'pagesEdit']);
    });
//
//
    Route::group( ['prefix' =>'portfolios'],function (){

        Route::get('/',['uses'=>'PortfolioController@execute','as'=>'portfolios']);

        Route::match(['get','post'],'/add',['uses'=>'PortfolioAddController@execute','as'=>'portfolioAdd']);

        Route::match(['get','post','delete'],'/edit/{portfolio}',['uses'=>'PortfolioEditontroller@execute','as'=>'portfolioEdit']);
    });

    Route::group( ['prefix' =>'services'],function (){

        Route::get('/',['uses'=>'ServiceController@execute','as'=>'services']);

        Route::match(['get','post'],'/add',['uses'=>'ServiceAddController@execute','as'=>'serviceAdd']);

        Route::match(['get','post','delete'],'/edit/{services}',['uses'=>'ServiceEditontroller@execute','as'=>'servicesEdit']);
    });

    Route::group( ['prefix' =>'menus'],function (){
        //admin//pages
        Route::get('/',['uses'=>'MenusController@execute','as'=>'menus']);
        //admin/pages/add
        Route::match(['get','post'],'/add',['uses'=>'MenusAddController@execute','as'=>'menusAdd']);
        //admin/edit/2
        Route::match(['get','post','delete'],'/edit/{menus}',['uses'=>'MenusEditontroller@execute','as'=>'menusEdit']);
    });

    Route::group( ['prefix' =>'intro'],function (){
        //admin//pages
        Route::get('/',['uses'=>'IntroController@execute','as'=>'intro']);
        //admin/pages/add
        Route::match(['get','post'],'/add',['uses'=>'IntroAddController@execute','as'=>'introAdd']);
        //admin/edit/2
        Route::match(['get','post','delete'],'/edit/{intro}',['uses'=>'IntroEditController@execute','as'=>'introEdit']);
    });

    Route::group( ['prefix' =>'highlights'],function (){
        //admin//pages
        Route::get('/',['uses'=>'HighlightsController@execute','as'=>'highlights']);
        //admin/pages/add
        Route::match(['get','post'],'/add',['uses'=>'HighlightsAddController@execute','as'=>'highlightsAdd']);
        //admin/edit/2
        Route::match(['get','post','delete'],'/edit/{highlights}',['uses'=>'HighlightsEditController@execute','as'=>'highlightsEdit']);
    });

    Route::group( ['prefix' =>'features'],function (){
        //admin//pages
        Route::get('/',['uses'=>'FeaturesController@execute','as'=>'features']);
        //admin/pages/add
        Route::match(['get','post'],'/add',['uses'=>'FeaturesAddController@execute','as'=>'featuresAdd']);
        //admin/edit/2
        Route::match(['get','post','delete'],'/edit/{features}',['uses'=>'FeaturesEditController@execute','as'=>'featuresEdit']);
    });
    Route::group( ['prefix' =>'getstarted'],function (){
            //admin//pages
            Route::get('/',['uses'=>'GetstartedController@execute','as'=>'getstarted']);
            //admin/pages/add
            Route::match(['get','post'],'/add',['uses'=>'GetstartedAddController@execute','as'=>'getstartedAdd']);
            //admin/edit/2
            Route::match(['get','post','delete'],'/edit/{getstarted}',['uses'=>'GetstartedEditController@execute','as'=>'getstartedEdit']);
        });
    Route::group( ['prefix' =>'gallery'],function (){
            //admin//pages
            Route::get('/',['uses'=>'GalleryController@execute','as'=>'gallery']);
            //admin/pages/add
            Route::match(['get','post'],'/add',['uses'=>'GalleryAddController@execute','as'=>'galleryAdd']);
            //admin/edit/2
            Route::match(['get','post','delete'],'/edit/{gallery}',['uses'=>'GalleryEditController@execute','as'=>'galleryEdit']);
        });
    Route::group( ['prefix' =>'menus'],function (){
            //admin//pages
            Route::get('/',['uses'=>'MenusController@execute','as'=>'menus']);
            //admin/pages/add
            Route::match(['get','post'],'/add',['uses'=>'MenusAddController@execute','as'=>'menusAdd']);
            //admin/edit/2
            Route::match(['get','post','delete'],'/edit/{menus}',['uses'=>'MenusEditController@execute','as'=>'menusEdit']);
        });




});



Auth::routes();

Route::get('/home', 'HomeController@index');
