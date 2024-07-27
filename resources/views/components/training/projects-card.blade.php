<div
    class="flex items-center justify-between rounded-lg border border-gray-200 px-4 py-6 transition-all duration-300 hover:scale-[1.02] hover:shadow-lg">
    <a href="{{ $projectLink }}">
        <div class="text-sm font-bold text-orange-500">{{ $title }}</div>
        <div>
            <strong>{{ $project }} :</strong> {{ $description }}
        </div>
    </a>
    @isset($link)
        <x-button href="{{ $link }}" target="_blank" rel="noopener">
            Visit Link
        </x-button>
    @endisset
</div>
