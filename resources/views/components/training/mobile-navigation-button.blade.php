<div class="flex cursor-pointer">
    <div class="size-6 min-w-6 mr-2 flex items-center justify-center rounded-lg bg-orange-300">
        <img src="{{ $svg }}" class="size-5">
    </div>

    <div class="flex w-full items-center justify-between">
        <p class="font-semibold">{{ $slot }}</p>
        <img src="/images/svgs/angle.svg" class="size-4 -rotate-90">
    </div>
</div>
