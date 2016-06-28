<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use Mail;

class PortfolioController extends Controller
{
    /**
     * GET /
     * Displaying home page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('portfolio.index');
    }

    /**
     * GET /resume
     * Showing resume page
     */
    public function resume()
    {
        return view('portfolio.resume');
    }

    public function portfolio()
    {
        return view('portfolio.portfolio');
    }

    public function contact()
    {
        return view('portfolio.contact');
    }

    public function sendMail(Request $request)
    {
        $this->validate($request, [
            'contact_name' => 'required',
            'contact_email' => 'required|email',
            'contact_subject' => 'required|max:255',
            'contact_message' => 'required'
        ]);

        Mail::send('emails.message', $request->all(), function ($message) use ($request) {

            $message->from('pablo.lucv@gmail.com', $request->contact_name);

            $message->to('poldmente@gmail.com')->subject($request->contact_subject);

        });

        return redirect()->back()->withSuccess("Su mensaje ha sido enviado.");


    }

}
