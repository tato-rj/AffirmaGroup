<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eBookController extends Controller
{
    public function index()
    {

        return view('ebook.index');
    }

    public function purchase()
    {
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
