<h2>
    {{ $job->title }}
</h2>

<p>
    Congrats! Your job has been posted on our website.
</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View your Job Listings.</a>
</p>
