<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block rounded-lg border border-gray-200 px-4 py-6">
                <div class="text-sm font-bold text-orange-500">{{ $job->employer->name }}</div>
                <div>
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </div>
            </a>
        @endforeach
    </div>

    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>
