<?php

namespace App\Http\Controllers;


use Input;
use Validator;
use Redirect;
use Hash;
use Request;
use Route;
use Response;
use Auth;
use URL;
use Session;
use Laracasts\Flash\Flash;
use View;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Job;
use App\User;
use App\Thread;
use App\Category;
use App\Search;
use App\Inventory;
use App\Page;
use App\Menu;
use App\Layout;
use App\Invoice;
use App\Event;
use App\WebsiteBrand;
use App\Like;
use App\SiteView;
use Symfony\Component\HttpFoundation\StreamedResponse;

class HomeController extends Controller
{
    public function __construct() {
        $this->layout = "layouts.index-layouts.index";
        //CHECK IF THE HOMEPAGE IS SET
    }

    public function getSetPreferedLayoutSession($layout_title=null,$id=null)
    {
        $data = [];
        $error = true;
        if (isset($layout_title,$id)) {
            $data['layout_title'] = $layout_title;
            $data['layout_id'] = $id;
            $error = false;
        } 
        Session::forget('prefered_layout_session');
        Session::put('prefered_layout_session',$data);

        if (Session::get('_previous')) {
            $route_ = Session::get('_previous');
            return Redirect::to($route_['url']);
            $error = false;
        } 
        if ($error == true) {
            return Redirect::route('home_index');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

        public function getHomePage()
    {

        $layout_title = 'layouts.master';
        $pages = Page::take(1)->first();
        if (isset($pages)) {
            $all_pages = Page::select('title','description','image_src','param_one')->where('id', '>', 1)->get();
            $prefered_layout_set = null;
            $param1_lowered = $pages->param_one;
            $webbrand= WebsiteBrand::find(1);
            return view('index')
            ->with('layout',$layout_title)
            ->with('all_pages',$all_pages)
            ->with('param1_lowered',$param1_lowered)
            ->with('is_home',1);
        }
    }

    public function postSendEmail(){

        $pform = null;
        parse_str(Input::get('pform'), $pform);
        $email = $pform['email'];//useremail
        $name = $pform['name'];
        $subject = $pform['subject'];
        $message = $pform['message'];

        $mdata = array( 'name' => $name,
                'message' => $message,
                'email' => $email,
                'subject' => $subject
                );

        $sender_email = [$email];
        Mail::send('emails.thankyou', ['mdata' => $mdata], function ($m) use ($sender_email) {
                    $m->from('support@www.webprinciples.com', 'Thank You! From Kpike Consulting Solutions');
                    $m->to($sender_email)->subject('Thank You, from Kpike Consulting Solutions');
            });
        $all_emails = ['pedramkhoshnevis@gmail.com','kassie@kpikeconsultingsolutions.com','aidigitalsuite@gmail.com'];
        if (Mail::send('emails.purchase_request', ['mdata' => $mdata], function ($m) use ($all_emails) {
                    $m->from('support@www.webprinciples.com', 'PostMaster-Kpike');
                    $m->to($all_emails)->subject('Kpike-New-Message');
            })) {
            return Response::json(array(
                'status' => 200
                ));
        } else {
            return Response::json(array(
                'status' => 400
            ));   
        }

    }


}
