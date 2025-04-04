<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eBookController extends Controller
{
    public function index()
    {
        return view('ebook.index');
    }

    public function purchase(Request $request)
    {
        $referer = $request->headers->get('referer');

        if (!$referer || !str_contains(parse_url($referer, PHP_URL_HOST), 'stripe.com'))
            abort(403);

        session(['ebook_purchased' => true]);

        return redirect(route('ebook.success'));
    }

    public function success()
    {
        return view('ebook.success');
    }

    public function download(Request $request)
    {
        $filepath = public_path('images/ebook/ebook.'.$request->ext);

        if (! \File::exists($filepath))
            abort(404);

        return response()->download($filepath);
    }
}
