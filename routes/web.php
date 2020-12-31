<?php



use Illuminate\Support\Facades\Route;

 use App\Acce; 



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


Route::get('myrole',function(){

    $acces = array("liste","ajouter","modifier","supprimer","afficher","files");
  
    $tables =array("backlinks");
  
        foreach ($tables as $table) 
        {
            foreach ($acces as $obj) 
            {
                $acce =Acce::firstOrNew(['table' => $table,"action" =>$obj ]);
                $acce->table = $table;
                $acce->action = $obj;
                $acce->save();
            }
        }
    echo "success !";
});



Route::get('template-email',function(){
     $details= (object) array('nom' => 'badr');
	return view('emails.sendMail', compact('details'));
});

Route::get('/send-mail',function()
{
    $details = [
        "title" =>" Test email Laravel",
        "body" =>" Email laravel body"
    ];
    \Mail::to("web.ideal.maroc@gmail.com")->send(new \App\Mail\SendMail($details));
    echo "Email has been sent !";
});

Auth::routes();


Route::group(
    ['middleware' => ['auth']],
    function () {

        Route::get(Config::get('constants.ADMIN_PATH'), 'AdminController@index');
        Route::resource(Config::get('constants.ADMIN_PATH').'categories', 'Admin\\CategoriesController');
        Route::resource(Config::get('constants.ADMIN_PATH').'tags', 'Admin\\TagsController');
        Route::resource(Config::get('constants.ADMIN_PATH').'posts', 'Admin\\PostsController');
        Route::resource(Config::get('constants.ADMIN_PATH').'users', 'Admin\\UsersController');
        Route::resource(Config::get('constants.ADMIN_PATH').'roles', 'Admin\\RolesController');
        Route::resource(Config::get('constants.ADMIN_PATH').'mailings', 'Admin\\MailingsController');
        Route::resource(Config::get('constants.ADMIN_PATH').'backlinks', 'Admin\BacklinksController');
        
        Route::post(Config::get('constants.ADMIN_PATH').'mailings/send-mail','Admin\\MailingsController@send_mail');  
        Route::post(Config::get('constants.ADMIN_PATH').'mailings/import-excel','Admin\\MailingsController@import_excel');
        Route::get(Config::get('constants.ADMIN_PATH').'testMailings','Admin\\MailingsController@testMailings');
        Route::get(Config::get('constants.ADMIN_PATH').'sendTestMailings','Admin\\MailingsController@sendTestMailings');

    }
);



Route::group(['middleware' => ['web']], function () {
    


    Route::get('/','HomeController@index')->name('home');
    

    Route::get('a-propos-web-ideal-creation-des-sites-et-des-applications-web-a-casablanca','HomeController@about')->name('about');

    Route::get('nos-services-de-la-conception-et-de-la-creation-des-sites-internet-a-casablanca','HomeController@services')->name('services');

    Route::get('portfolio-des-sites-et-des-appications-web-a-casablanca','HomeController@portfolio')->name('portfolio');

    Route::get('contact-web-ideal-a-casablanca','HomeController@contact')->name('contact');
    Route::post('contact-send-mail','HomeController@sendForm')->name('send-form');
    
    Route::get('blog','HomeController@blog')->name('blog');

    Route::get('fr/blog/{locale}/{id}/{titre}','HomeController@detailArticle')->name('detailArticle');

    Route::get('/creation-des-applications-web-a-casablanca','HomeController@web_application')->name('web_application');
    Route::get('/creation-des-sites-web-a-casablanca','HomeController@sites_web')->name('sites_web');



	Route::get('/{locale}','HomeController@index')->name('homeEn');

	Route::get('{locale}/about-webideal-creation-of-websites-and-web-applications-in-casablanca','HomeController@about')->name('aboutEn');

    Route::get('{locale}/our-services-of-creation-and-design-website-in-casablanca','HomeController@services')->name('servicesEn');

    Route::get('{locale}/portfolio-of-sites-and-web-applications-in-casablanca','HomeController@portfolio')->name('portfolioEn');

    Route::get('{locale}/contact-web-ideal-in-casablanca','HomeController@contact')->name('contactEn');
    Route::post('{locale}/contact-send-mail','HomeController@sendForm')->name('send-formEn');

    Route::get('{locale}/blog','HomeController@blog')->name('blogEn');

    Route::get('en/blog/{locale}/{id}/{titre}','HomeController@detailArticle')->name('detailArticleEn');

    Route::get('{locale}/creation-of-web-applications-in-casablanca','HomeController@web_application')->name('web_applicationEn');
    Route::get('{locale}/creation-of-websites-in-casablanca','HomeController@sites_web')->name('sites_webEn');

});