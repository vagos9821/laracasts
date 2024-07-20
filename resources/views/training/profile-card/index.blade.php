<x-layout>
    <x-slot:heading>Training Projects</x-slot:heading>
    <div class="flex flex-wrap items-center justify-center gap-6">
        @foreach ($profiles as $profile)
            <x-training-profile-card :profile="$profile"></x-training-profile-card>
        @endforeach
    </div>
    <div class="m-10">
        {{ $profiles->links() }}
    </div>
</x-layout>
