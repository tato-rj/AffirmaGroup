<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opportunity;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome.index');
    }

    public function about()
    {
        return view('about.index');
    }

    public function ebook()
    {
        return view('ebook.index');
    }

    public function ebookPurchase(Request $request)
    {
        if (! $request->has('successful'))
            abort(404);

        return view('ebook.download');
    }

    public function ebookDownload(Request $request)
    {
        if (! $request->has('successful'))
            abort(404);
        
        return response()->download(public_path('images/ebook/ebook.pdf'));
    }

    public function portfolio()
    {
        $file = \Storage::disk('public')->path('portfolio/Portfolio Affirma Group.pdf');

        return response()->file($file);
    }
}
