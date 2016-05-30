<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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
}
