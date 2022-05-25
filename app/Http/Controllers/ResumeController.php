<?php

namespace App\Http\Controllers;

use App\{Resume, Opportunity};
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\ManageFiles;
use App\Mail\User\ResumeSubmittedEmail as UserResumeSubmittedEmail;
use App\Mail\Admin\ResumeSubmittedEmail as AdminResumeSubmittedEmail;

class ResumeController extends Controller
{
    use ManageFiles;

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function submit()
    {
        $opportunities = Opportunity::all();

        return view('resume.submit.index', compact('opportunities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'location' => 'same:test',
            'first_name' => 'string|required',
            'last_name' => 'string|required',
            'email' => 'email|required',
            'resume' => 'mimes:pdf,doc,docx|required',
        ]);
        
        $resume = Resume::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name, 
            'email' => $request->email, 
            'employment_type' => serialize($request->employment_type),
            'employment_position' => serialize($request->employment_position),
            'additional_info' => $request->additional_info,
            'resume_path' => $this->hasFile('resume')->upload('email', 'resumes')
        ]);

        \Mail::to($request->email)->send((new UserResumeSubmittedEmail($request->first_name)));

        \Mail::to(config('mail.from.address'))->send((new AdminResumeSubmittedEmail($resume)));

        return back()->with('success', "Thank you for submitting your resume");
    }

    public function download(Resume $resume)
    {
        return \Storage::disk('public')->download($resume->resume_path);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function show(Resume $resume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function edit(Resume $resume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resume $resume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resume $resume)
    {
        //
    }
}
