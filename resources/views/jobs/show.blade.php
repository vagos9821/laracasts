<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="text-lg font-bold">
        {{ $job->title }}
    </h2>

    <p>
        This job pays {{ $job->salary }} per year.
    </p>

    @can('edit', $job)
        <p class="mt-6 cursor-pointer">
            <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
        </p>
    @endcan
</x-layout>
