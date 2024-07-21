<x-layout>
    <x-slot:heading>Recipe</x-slot:heading>
    @foreach ($recipes as $recipe)
        <div class="overflow-hidden rounded-lg bg-white pb-6 lg:flex lg:pb-0">
            <div class="z-[5] shadow-xl">
                <img src="{{ $recipe->image }}" alt="me"
                    class="mx-auto mt-4 aspect-[9/16] w-[50vw] rounded-lg object-cover object-right lg:mx-0 lg:mt-0 lg:min-w-[480px] lg:max-w-[480px]">
            </div>

            <div class="relative bg-white">
                <div class="relative top-16 z-10 flex w-[480px] flex-col gap-2 rounded-lg bg-white p-6 lg:-left-32">
                    <div class="flex items-center gap-1">
                        @for ($i = 0; $i < 5; $i++)
                            @if ($i < $recipe->rating)
                                <img src="/images/svgs/star-full.svg" alt="star" class="size-4">
                            @else
                                <img src="/images/svgs/star-empty.svg" alt="star" class="size-4">
                            @endif
                        @endfor

                        <p class="ml-1 text-gray-500">({{ number_format($recipe->rating * 3.14231415 * 31.1231) }})</p>
                    </div>

                    <div>
                        <p class="text-4xl font-bold">
                            {{ $recipe->title }}
                        </p>
                    </div>
                </div>

                <div class="mx-6">
                    <div class="flex gap-4">
                        <div class="relative flex items-center gap-x-2 lg:top-16">
                            <img src="/images/svgs/stopwatch.svg" alt="stopwatch" class="size-6">
                            <div class="text-[10px] font-bold capitalize">
                                <p class="text-[#2D2D2D]">TOTAL TIME</p>
                                <p class="text-orange-400">{{ $recipe->total_time }}</p>
                            </div>
                        </div>
                        <div class="relative top-16 flex items-center gap-x-2">
                            <img src="/images/svgs/ribbon.svg" alt="ribbon" class="size-6">
                            <div class="text-[10px] font-bold capitalize">
                                <p class="text-[#2D2D2D]">LEVEL</p>
                                <p class="text-orange-400">{{ $recipe->level }}</p>
                            </div>
                        </div>
                        <div class="relative top-16 flex items-center gap-x-2">
                            <img src="/images/svgs/wallet.svg" alt="wallet" class="size-6">
                            <div class="text-[10px] font-bold capitalize">
                                <p class="text-[#2D2D2D]">BUDGET</p>
                                <p class="text-orange-400">Under ${{ $recipe->budget }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-20">
                        <p class="text-sm font-semibold italic">
                            {{ $recipe->description }}
                        </p>
                    </div>

                    <div class="mt-8 flex flex-col gap-1">
                        <p class="text-xl font-bold">INGREDIENTS</p>
                        @foreach (json_decode($recipe->ingredients) as $ingredient)
                            <div>
                                <input type="checkbox" name="{{ $ingredient }}" id="">
                                <label for="{{ $ingredient }}">{{ $ingredient }}</label>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-8 flex flex-col gap-1">
                        <p class="text-xl font-bold">INSTRUCTIONS</p>
                        <ol class="ml-6 list-decimal">
                            @foreach (json_decode($recipe->instructions) as $instruction)
                                <li>
                                    {{ $instruction }}
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            {{ $recipes->links() }}
        </div>
    @endforeach
</x-layout>
