<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Employer;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->paginate(10);

        return view('jobs.index', [
            'jobs' => $jobs,
        ]);
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store()
    {
        request(null)->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => Employer::where(['user_id' => Auth::user()->id])
                ->first()
                ->id,
        ]);

        Mail::to($job->employer->user)->send(
            new JobPosted($job),
        );
        // To put it in a queue so the user doesnt wait do this:
        // Mail::to($job->employer->user)->queue(
        //     new JobPosted($job),
        // );
        // And then run php artisan queue:work

        return redirect('/jobs');
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }


    public function update(Job $job)
    {
        request(null)->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);

        return redirect('/jobs' . '/' . $job->id);
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect('/jobs');
    }

}
