<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\AdvisoryItem;
use Stevebauman\Location\Facades\Location;

class LandingController extends Controller
{
    
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function ourBusinessApproach()
    {
        return view('pages.businessApproach');
    }

    public function strengthAndValues()
    {
        return view('pages.strength');
    }

    public function missionStatement()
    {
        return view('pages.mission_statement');
    }

    public function leadership()
    {
        return view('pages.leadership');
    }

    public function subsidiaries()
    {
        return view('pages.subsidiaries');
    }

    public function procurements()
    {
        return view('pages.procurement');
    }

    public function realEstate()
    {
        return view('pages.realestate');
    }

    public function printSolution()
    {
        return view('pages.printSolution');
    }

    public function itSolution()
    {
        return view('pages.itsolution');
    }
    
    public function womenInGrc()
    {
        return view('pages.womeningrc');
    }

    public function cyberSecurity()
    {
        return view('pages.cyberSecurity');
    }

    public function mediaSolutions()
    {
        return view('pages.mediaSolutions');
    }

    public function backgroundChecks()
    {
        
        return view('pages.backgroundChecks');
    }

    public function recruitments()
    {
        return view('pages.recruitments');
    }

    public function tmcInstitute()
    {
        return view('pages.tmc_institute');
    }

    public function facilityManagement(){
        return view('pages.facility_mgt');
    }

    public function advisory(){
        return view('pages.advisory', );
    }

    public function advisoryCouncil(){
        $items = AdvisoryItem::all();
        return view('pages.advisory_council', compact('items'));
    }
    
    public function grcFinCrimeAwards(){
        return view('pages.grcfincrimeawards');
    }
    public function careers(){
        return view('pages.careers');
    }
    public function contactUs(){
        if ($position = Location::get(request()->getClientIp())){
            return view('pages.contact_us')->with(['position' => $position]);
        }
        // return view('pages.contact_us');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy_policy');
    }

    public function esgPolicy()
    {
        return view('pages.esg_policy');
    }

    public function complaintPolicy()
    {
        return view('pages.complaint_policy');
    }

    public function newsletterSignup(Request $request)
    {
        
        $newsletter_signup_email = $request->newsletter_signup_email;

        // \Illuminate\Support\Facades\Mail::to(env('MAIL_FROM_ADDRESS'))->send(new \App\Mail\NewsletterSignupEmail($newsletter_signup_email));
        if(event(new \App\Events\NewsletterSignupEvent($newsletter_signup_email))){
            return response()->json(['status'=> 1]);
        }else{
            return response()->json(['status'=> 0]);
        }

    }

    public function contactusCreate(Request $request)
    {
        $contact_name = $request->contact_name;
        $contact_email = $request->contact_email;
        $contact_subject =$request->contact_subject;
        $contact_message = $request->contact_message;

        if(event(new \App\Events\ContactusEvent($contact_email,$contact_message,$contact_name,$contact_subject))){
            return response()->json(['status'=> 1]);
        }else{
            return response()->json(['status' => 0]);
        }
    }
}
