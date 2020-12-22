<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Post;

use App\Category;

use App\Tag;

use App\postesTags;

use Carbon\Carbon;





class HomeController extends Controller

{

    public function __construct()

    {

        

    

    }

    

    public function index($locale = "fr")

    {

        if (! in_array($locale, ['en' , 'fr'])) {

           abort(404);

        }

        app()->setLocale($locale);

        return view('public.index');

    }

     public function about($locale = "fr")

    {

        if (! in_array($locale, ['en' , 'fr'])) {

           abort(404);

        }

        app()->setLocale($locale);

        return view('public.about');

    }

     public function services($locale = "fr")

    {

        if (! in_array($locale, ['en' , 'fr'])) {

           abort(404);

        }

        app()->setLocale($locale);

        return view('public.services');

    }

    public function portfolio($locale = "fr")

    {

        if (! in_array($locale, ['en' , 'fr'])) {

           abort(404);

        }

        app()->setLocale($locale);

        return view('public.portfolio');

    }

     public function contact($locale = "fr")

    {

        if (! in_array($locale, ['en' , 'fr'])) {

           abort(404);

        }

        app()->setLocale($locale);

        return view('public.contact');

    }
     
    public function sendForm(Request $request,$locale = "fr")
    {

        if (! in_array($locale, ['en' , 'fr'])) {

           abort(404);

        }

        app()->setLocale($locale);

    	$name = $request->input('name');
    	$email = $request->input('email');
    	$phone = $request->input('phone');
    	$subject = $request->input('subject');
    	$comment = $request->input('comment');

    	$details = [
        "title" =>"Message de Contactez nous - WEB IDEAL",
        "name" =>$name,
        "email" =>$email,
        "phone" =>$phone,
        "subject" =>$subject,
        "comment" =>$comment
   		 ];
    	
    	\Mail::to("web.ideal.maroc@gmail.com")->send(new \App\Mail\MailContact($details));

    	if ($locale =="fr") {
    		return redirect()->route('contact')->with('flash_message', 'Message envoyé avec Succès !');
    	} else {
    		return redirect()->route('contact')->with('flash_message', 'Message sent successfully !');
    	}
    	


    }

    public function web_application($locale = "fr")

    {

        if (! in_array($locale, ['en' , 'fr'])) {

           abort(404);

        }

        app()->setLocale($locale);

        return view('public.creation_des_applications_web');

    }


    public function sites_web($locale = "fr")

    {

        if (! in_array($locale, ['en' , 'fr'])) {

           abort(404);

        }

        app()->setLocale($locale);

        return view('public.creation_des_sites_web');

    }



    public function blog($locale = "fr")

    {

        if (! in_array($locale, ['en' , 'fr'])) {

           abort(404);

        }

        app()->setLocale($locale);

        $perPage = 25;



        if(!empty(request()->get('cat')))

        {

            $keyword = request()->get('cat');$search="cat";

        }

        elseif (!empty(request()->get('tag'))) 

        {

            $keyword = request()->get('tag');$search="tag";

        }

        elseif (!empty(request()->get('search'))) 

        {

            $keyword = request()->get('search');$search="search";

        }

        elseif (!empty(request()->get('date'))) 

        {

            $keyword = request()->get('date');$search="date";

        }





        if (!empty($keyword)) {

            if($search == "cat")

            {

                $posts = Category::where('libelle', '=', $keyword)->first()->posts;

            }

            elseif ($search == "tag")

            {

                 $postesTags = Tag::where('libelle', '=', $keyword)->first()->postesTags;

                 $posts = array();

                 foreach ($postesTags as $item) 

                 {

                    $posts[] = postesTags::find($item->id)->post;

                 }

            }

            elseif ($search == "date")

            {

                $date = explode("-", $keyword);

                $year = $date[0];

                $month = $date[1];

                $posts = Post::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', $month)->latest()->paginate($perPage);

            }

            else

            {

                $posts = Post::where('titre', 'LIKE', "%$keyword%")

                ->orWhere('content', 'LIKE', "%$keyword%")

                ->orWhere('description', 'LIKE', "%$keyword%")

                ->latest()->paginate($perPage);

            }

        } else {

            $posts = Post::latest()->paginate($perPage);

        }        

        $categories = Category::all();

        $tags = Tag::all();

        return view('public.blog',compact('posts','categories','tags'));

    }



    public function detailArticle($id,$titre,$locale = "fr")

    {

        if (! in_array($locale, ['en' , 'fr'])) {

           abort(404);

        }

        app()->setLocale($locale);

        $post = Post::where('id', '=', $id)->where("titre","=",$titre)->firstOrFail();



         return view('public.detail',compact('post'));

    }

}