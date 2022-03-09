<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Message;
use App\Notifications;
use App\Privacy;
use App\Quote;
use Vinkla\Instagram\Instagram;
use App\ReplyMessage;
use App\ServiceRequest;
use App\Services;
use App\Industry;
use App\Slider;
use App\Subscriber;
use App\RFP;
use App\Term;
use App\Testimonial;
use App\Portfolio;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use OpenGraph;
use SEOMeta;
use Twitter;
use Dymantic\InstagramFeed\Profile;
use Instagram\Api;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class HomeController extends Controller
{

    public function home()
    {

        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Stagepass Audio Visual | ' . $Settings->sitename . ' - ' . $Settings->intro . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/home');

            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/home');
            OpenGraph::addProperty('type', 'articles');

            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'Stagepass Audio Visual';
            $page_title = 'Comming Soon';
            return view('front.commingsoon', compact('page_title','page_name'));
        }
    }
    public function index()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('' . $Settings->sitename . ' - ' . $Settings->intro . '');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            $About = DB::table('about')->get();
            $Slider = Slider::all();
            $Clients =
            $Blog = DB::table('blog')->paginate(2);
            $Portfolio = DB::table('portfolio')->get();
            $Services = Services::all();
            $Testimonial =DB:: table('testimonial')->paginate(12);
            $Video = DB::table('videos')->paginate(1);
            $SiteSettings = DB::table('sitesettings')->get();
            $page_name = 'Home';
            $page_title = 'Home';
            $instagram = new Instagram(config('services.instagram.access-token'));
            //Instagram feeds
            $images = collect($instagram->get())->map(function ($each) {
                return $each->images->standard_resolution->url;
            });

            $images = Portfolio::all();

            return view('front.index', compact('images','Blog', 'Video', 'About', 'SiteSettings', 'page_title', 'Testimonial', 'Slider', 'Services', 'Portfolio', 'page_name'));
        }
    }

    public function index1()
    {
        // $feed = \Dymantic\InstagramFeed\Profile::where('username', 'stagepassav')->first();
        // $data = [
        //     'instagram_feed' => Profile::where('username', 'stagepassav')->first()->feed(24),
        // ];
        // dd($data);
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('' . $Settings->intro . ' - ' . $Settings->sitename . '');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->intro . ' - ' . $Settings->sitename . '');
            OpenGraph::setUrl('' . $Settings->url . '');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->intro . ' - ' . $Settings->sitename . '');
            Twitter::setSite('' . $Settings->twitter . '');

            $About = DB::table('about')->get();
            $Slider = DB::table('slider')->paginate(1);
            $Clients =
            $Blog = DB::table('blog')->paginate(2);
            $Portfolio = DB::table('portfolio')->get();
            $Services = Services::all();
            $Testimonial =DB:: table('testimonial')->paginate(12);
            $page_title = 'Home';
            $Video = DB::table('videos')->paginate(1);
            $SiteSettings = DB::table('sitesettings')->get();
            $page_name = 'Home1';

            $profile = \Dymantic\InstagramFeed\Profile::where('username', 'stagepassav')->first();
            $data = [
                'instagram_feed' => Profile::where('username', 'stagepassav')->first()->feed(24),
            ];


            return view('front.index1', compact('data','Blog', 'Video', 'About', 'SiteSettings', 'page_title', 'Testimonial', 'Slider', 'Services', 'Portfolio', 'page_name'));
        }
    }

    public static function doBeforeTask() {
        $cachePool = new FilesystemAdapter('Instagram', 0, __DIR__ . '/../cache');
        $api = new Api($cachePool);
        $api->login('stagepassav', 'Gatene234');

        $profile = $api->getProfile('stagepassav');

        return $profile->getMedias();
    }


    public function instafeeds(){

            $profile = Profile::where('username', 'stagepassav')->first();

            return view('get-instgram-auth', ['instagram_auth_url' => $profile->getInstagramAuthUrl() ]);

    }

    public function index2()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('' . $Settings->sitename . ' - ' . $Settings->intro . '');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            $About = DB::table('about')->get();
            $Slider = Slider::all();
            $Clients =
            $Blog = DB::table('blog')->paginate(2);
            $Portfolio = DB::table('portfolio')->get();
            $Services = Services::all();
            $Testimonial =DB:: table('testimonial')->paginate(12);
            $Video = DB::table('videos')->get();
            $SiteSettings = DB::table('sitesettings')->get();
            $page_name = 'Home2';

            return view('front.index2', compact('Blog', 'Video', 'About', 'SiteSettings', 'page_title', 'Testimonial', 'Slider', 'Services', 'Portfolio', 'page_name'));
        }
    }

    public function contact()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Contact Us | ' . $Settings->sitename . '');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/contact');

            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/contact');
            OpenGraph::addProperty('type', 'articles');

            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'Contact';
            $page_title = 'Contact Us';
            $SiteSettings = DB::table('sitesettings')->get();
            return view('front.contact', compact('page_title', 'SiteSettings', 'page_name'));
        }
    }

    public function about()
    {
        $SEOSettings = DB::table('seosettings')->get();
        $Action = DB::table('actions')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('About Us | ' . $Settings->sitename . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/about');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('About Us | ' . $Settings->sitename . ' ');
            OpenGraph::setUrl('' . $Settings->url . '/about');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('About Us | ' . $Settings->sitename . ' ');
            Twitter::setSite('' . $Settings->twitter . '');
            $Admin = Admin::all();
            $About = DB::table('about')->get();
            $SiteSettings = DB::table('sitesettings')->get();
            $Services = DB::table('services')->inRandomOrder()->paginate(2);
            $page_title = 'About Us';
            $Testimonial = DB::table('testimonial')->inRandomOrder()->paginate(3);
            $page_name = 'About';
            return view('front.about', compact('Testimonial','Action', 'page_title', 'page_name', 'Services', 'SiteSettings', 'About', 'Admin'));
        }
    }

    public function terms()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Terms and Conditions | ' . $Settings->sitename . ' - ' . $Settings->intro . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/terms');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/terms');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'Terms';
            $Term = Term::all();
            $page_title = 'Terms Of Service';
            return view('front.terms', compact('page_title', 'Term', 'page_name'));
        }
    }

    public function privacy()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Privacy Policy | ' . $Settings->sitename . ' - ' . $Settings->intro . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/privacy');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/privacy');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'Terms';
            $Privacy = Privacy::all();
            $page_title = 'Privacy Policy';
            return view('front.privacy', compact('page_title', 'Privacy', 'page_name'));
        }
    }

    public function copyright()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Copyright Statement | ' . $Settings->sitename . ' - ' . $Settings->intro . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/copyright');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/copyright');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'Terms';
            $Copyright = DB::table('copyright')->get();
            $page_title = 'Copyright Statement';
            return view('front.copyright', compact('page_title', 'Copyright', 'page_name'));
        }
    }

    public function services()
    {
        $name = "full-production-event-packages";
        $SEOSettings = DB::table('seosettings')->get();
        $page_name = 'Services';
        $Services = DB::table('services')->where('slung', $name)->get();

        foreach($Services as $services){
            $page_title = $services->title;
            foreach ($SEOSettings as $Settings) {
                SEOMeta::setTitle('' . $page_title . ' - ' . $Settings->sitename . ' ');
                SEOMeta::setDescription('' . $Settings->welcome . '');
                SEOMeta::setCanonical('' . $Settings->url . '/our-services/' . $page_title . '');

                OpenGraph::setDescription('' . $Settings->welcome . '');
                OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
                OpenGraph::setUrl('' . $Settings->url . '/services');
                OpenGraph::addProperty('type', 'articles');

                Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
                Twitter::setSite('' . $Settings->twitter . '');

                return view('front.service', compact('Services', 'page_title', 'page_name'));
            }
        }
    }

    public function industries_one()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Our industries | ' . $Settings->sitename . ' - ' . $Settings->intro . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/industries');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/industries');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'Industries';
            $Industries = Industry::all();
            $page_title = 'Our industries';
            return view('front.industries_one', compact('Industries', 'page_title', 'page_name'));
        }
    }

    public function industries_two()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Our industries | ' . $Settings->sitename . ' - ' . $Settings->intro . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/industries');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/industries');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'Industries';
            $Industries = Industry::all();
            $page_title = 'Our industries';
            return view('front.industries_two', compact('Industries', 'page_title', 'page_name'));
        }
    }

    public function industries_three()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Our industries | ' . $Settings->sitename . ' - ' . $Settings->intro . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/industries');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/industries');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'Industries';
            $Industries = Industry::all();
            $page_title = 'Our industries';
            return view('front.industries_three', compact('Industries', 'page_title', 'page_name'));
        }
    }

    public function industries_four()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Our industries | ' . $Settings->sitename . ' - ' . $Settings->intro . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/industries');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/industries');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'Industries';
            $Industries = Industry::all();
            $page_title = 'Our industries';
            return view('front.industries_four', compact('Industries', 'page_title', 'page_name'));
        }
    }

    public function industries_five()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Our industries | ' . $Settings->sitename . ' - ' . $Settings->intro . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/industries');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/industries');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'Industries';
            $Industries = Industry::all();
            $page_title = 'Our industries';
            return view('front.industries_five', compact('Industries', 'page_title', 'page_name'));
        }
    }

    public function industries()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Our industries | ' . $Settings->sitename . ' - ' . $Settings->intro . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/industries');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/industries');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'Industries';
            $Industries = Industry::all();
            $page_title = 'Our industries';
            return view('front.industries', compact('Industries', 'page_title', 'page_name'));
        }
    }

    public function industry($id)
    {
        $Industries = DB::table('industries')->where('id',$id)->get();
        foreach($Industries as $industry){
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle(' '.$industry->title.' | ' . $Settings->sitename . ' - ' . $Settings->intro . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/industries');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/industries');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_name = 'Industries';

            $page_title = 'Our industries';
            return view('front.industry', compact('Industries', 'page_title', 'page_name'));
        }
    }
    }



    public function service_extra($service_title,$extra_title){
        $SEOSettings = DB::table('seosettings')->get();
        $page_name = 'Services';

        $Services = DB::table('services')->where('slung', $service_title)->get();
        foreach($Services as $Ser){
            $Extra = DB::table('extras')->where('service_id',$Ser->id)->where('slung',$extra_title)->get();
            $page_titleSEOSettings = DB::table('seosettings')->get();
            foreach ($SEOSettings as $Settings) {
                foreach($Extra as $theExtras){
                    $page_title = $Ser->title . " - " . $theExtras->title ;
                    $page_sub_title = $Ser->title;
                    SEOMeta::setTitle('' . $page_title . ' - ' . $Settings->sitename . ' ');
                    SEOMeta::setDescription('' . $Settings->welcome . '');
                    SEOMeta::setCanonical('' . $Settings->url . '/service/' . $page_title . '/'.$page_sub_title.'');

                    OpenGraph::setDescription('' . $Settings->welcome . '');
                    OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
                    OpenGraph::setUrl('' . $Settings->url . '/service/' . $page_title . '/'.$page_sub_title.'');
                    OpenGraph::addProperty('type', 'articles');

                    Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
                    Twitter::setSite('' . $Settings->twitter . '');
                }



                return view('front.extra', compact('Extra', 'page_title', 'page_name'));
            }
        }

    }
    public function service($name)
    {
        $SEOSettings = DB::table('seosettings')->get();
        $page_name = 'Services';
        $Services = DB::table('services')->where('slung', $name)->get();

        foreach($Services as $services){
            $page_title = $services->title;
            foreach ($SEOSettings as $Settings) {
                SEOMeta::setTitle('' . $page_title . ' - ' . $Settings->sitename . ' ');
                SEOMeta::setDescription('' . $Settings->welcome . '');
                SEOMeta::setCanonical('' . $Settings->url . '/our-services/' . $page_title . '');

                OpenGraph::setDescription('' . $Settings->welcome . '');
                OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
                OpenGraph::setUrl('' . $Settings->url . '/services');
                OpenGraph::addProperty('type', 'articles');

                Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
                Twitter::setSite('' . $Settings->twitter . '');

                return view('front.service', compact('Services', 'page_title', 'page_name'));
            }
        }
    }

    public function portfolio()
    {
        $SEOSettings = DB::table('seosettings')->get();
        $page_name = 'Work';
        $Portfolio = DB::table('portfolio')->orderBy('orders','ASC')->paginate('6');
        $page_title = 'Our Works';
        $page_titleSEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Our Works | ' . $Settings->sitename . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/portfolio');

            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('Our Works | ' . $Settings->sitename . ' ');
            OpenGraph::setUrl('' . $Settings->url . '/portfolio');
            OpenGraph::addProperty('type', 'articles');

            Twitter::setTitle('Our Works | ' . $Settings->sitename . ' ');
            Twitter::setSite('' . $Settings->twitter . '');


              $profile = \Dymantic\InstagramFeed\Profile::where('username', 'stagepassav')->first();
              $data = [
                'instagram_feed' => Profile::where('username', 'stagepassav')->first()->feed(60),
            ];

            return view('front.portfolio', compact('Portfolio', 'page_title', 'page_name','data'));
        }
    }

     public function portfolio_detail($id)
    {
        $SEOSettings = DB::table('seosettings')->get();
        $page_name = 'Work';
        $Portfolio = DB::table('portfolio')->where('slung',$id)->get();

        $page_title = $id;

        foreach($Portfolio as $value){
            foreach ($SEOSettings as $Settings) {
                SEOMeta::setTitle(' '.$value->title.' | ' . $Settings->sitename . ' ');
                SEOMeta::setDescription('' . $Settings->welcome . '');
                SEOMeta::setCanonical('' . $Settings->url . '/portfolio' . $page_title . '');

                OpenGraph::setDescription('' . $Settings->welcome . '');
                OpenGraph::setTitle(' '.$value->title.' | ' . $Settings->sitename . ' ');
                OpenGraph::setUrl('' . $Settings->url . '/porfolio/'.$page_title.'');
                OpenGraph::addProperty('type', 'articles');

                Twitter::setTitle(' '.$value->title.' | ' . $Settings->sitename . ' ');
                Twitter::setSite('' . $Settings->twitter . '');

                return view('front.portfolio_detail', compact('Portfolio', 'page_title', 'page_name'));
            }
        }
    }

    public function subscribe(Request $request)
    {
        $FindMail = DB::table('subscribers')->where('email', $request->email)->get();
        $Countmails = count($FindMail);
        if ($Countmails == 0) {
            $email = $request->email;
            $Subscriber = new Subscriber;
            $Subscriber->email = $email;
            $Subscriber->save();
            $results = "You have successfully subscribed to our news letters";
            ReplyMessage::notification($email);
            return $results;

        } else {
            $results =  "You are already in our subscribers list thank you for staying with us";
            ReplyMessage::notification($request->email);
            return $results;

        }


    }
    public function request_quote()
    {
        $page_title = 'Request Quote';
        $SiteSettings = DB::table('sitesettings')->get();
        return view('front.request_quote', compact('page_title', 'SiteSettings'));
    }
    public function servicerequest($id)
    {
        $page_title = 'Order Service';
        $Pricings = DB::table('pricing')->where('id', $id)->get();
        return view('front.servicerequest', compact('page_title', 'Pricings'));
    }

    public function service_request(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $id = $request->id;
        $service = $request->service;
        $price = $request->price;
        $content = $request->content;
        $budget = $request->budget;

        $ServiceRequest = new ServiceRequest;
        $ServiceRequest->name = $name;
        $ServiceRequest->email = $email;
        $ServiceRequest->serviceID = $id;
        $ServiceRequest->service = $service;
        $ServiceRequest->content = $content;
        $ServiceRequest->price = $price;
        $ServiceRequest->budget = $budget;
        $ServiceRequest->save();
        ReplyMessage::mailrequest($name, $email, $service, $price, $content, $budget);
        return "Your Request Has Been Received,If we dont respond within an hour kindly contact us through our contact form,call us or use the live chat";
    }

    public function checkEmail(Request $request)
    {
        $email = $request->input('email');
        $isExists = \App\User::where('email', $email)->first();
        //Create The Logics To return AJAX
        if (empty($isExists)) {
            return "";
        } else {
            return "The Email Is already in use by another User";
        }
    }

    public function quote_request(Request $request)
    {
        $fname = $request->fname;
        $lname = $request->lname;
        $email = $request->email;
        $phone = $request->phone;
        $subject = "Quote Request";
        $content = $request->message;
        $Quote = new Quote;
        $Quote->fname = $fname;
        $Quote->lname = $lname;
        $Quote->email = $email;
        $Quote->phone = $phone;
        $Quote->content = $content;
        $Quote->save();
        //Add Notification

        $Notifications = new Notifications;
        $Notifications->type = 'Quote';
        $Notifications->content = 'You have a new Quote Request';
        $Notifications->save();
        ReplyMessage::mailNotificaton($name, $email, $subject, $content);
        return "Your Request Has Been Received";

    }

    public function searchsite(Request $request)
    {
        $SubCategory = DB::table('sub_category')->where('cat_id', '2')->get();
        $Product = DB::table('product')->where('cat', '2')
            ->where('name', 'like', '%' . $request->search . '%')->paginate(18);
        $page_title = $request->search;
        return view('front.shop', compact('page_title', 'Product', 'SubCategory'));
    }

    public function commingsoon()
    {
        $page_title = 'We will be Back Shortly';
        $page_name = 'We will be Back Shortly';
        return view('front.commingsoon', compact('page_title', 'page_name'));
    }
    public function submitMessage(Request $request)
    {
        $email = $request->email;
        $name = $request->name;
        $message = $request->message;
        $subject = $request->subject;

        $Message = new Message;
        $Message->name = $name;
        $Message->email = $email;
        $Message->subject = $subject;
        $Message->content = $message;

        //Send Mail Notification
        ReplyMessage::mailNotificaton($name, $email, $subject, $message);

        $Message->save();
        $Notifications = new Notifications;
        $Notifications->type = 'Message';
        $Notifications->content = 'You have a new Message';
        $Notifications->save();
        return "Your Message Has been Sent, We will Get back To You Shortly";
    }

    public function quote()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Request Quote | ' . $Settings->sitename . ' - ' . $Settings->intro . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/quote');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/quote');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_title = 'Get Quote';
            $page_name = 'Get a Quote';
            return view('front.quote', compact('page_title', 'page_name'));
        }
    }
    public function who()
    {
        $SEOSettings = DB::table('seosettings')->get();
        $page_name = 'What we do';
        $Action = DB::table('actions')->get();
        $page_title = 'What we do';
        $page_titleSEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('What we do | ' . $Settings->sitename . ' - ' . $Settings->intro . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/' . $page_title . '');

            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/who');
            OpenGraph::addProperty('type', 'articles');

            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            return view('front.who', compact('page_title', 'page_name','Action'));
        }
    }

    public function version(){

        return view('version',compact('page_title','page_name'));
    }

    public function rfp(){
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Submit RFP | ' . $Settings->sitename . ' - ' . $Settings->intro . ' ');
            SEOMeta::setDescription('' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/rfp');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/rfp');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $page_title = 'Submit RFP';
            $page_name = 'Submit RFP';
            return view('front.rfp', compact('page_title', 'page_name'));
        }
    }

    public function post_rfp(Request $request){
        // Get Form Data
        $fname = $request->fname;
        $lname = $request->lname;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;

        // Upload
        $path = 'uploads/RFP';
        if(isset($request->file)){
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $rfp_file = $filename;
        }else{
            $rfp_file = $request->logo_cheat;
        }

        // Save
        $RFP = new RFP;
        $RFP->fname = $fname;
        $RFP->lname = $lname;
        $RFP->email = $email;
        $RFP->phone = $phone;
        $RFP->message =  $message;
        $RFP->file = $rfp_file;
        // Email Stagepass
        ReplyMessage::sendrfp($fname,$email,$phone,$message,$phone);

        // Redirect
        Session::flash('message', "Your Info Has Been Received");
        return Redirect::back();
    }
}
