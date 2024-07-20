<div class="flex w-[724px] items-center justify-center gap-4 rounded-xl p-6 shadow-xl">
    <div class="flex w-16 flex-col items-center justify-center gap-y-3">
        @foreach (json_decode($product->image) as $image)
            <img src="{{ $image }}" alt="{{ $product->name . '_' . $loop->iteration }}"
                class="h-24 w-16 cursor-pointer rounded-xl object-cover opacity-50" data-image="{{ $image }}"
                data-product-id="{{ $product->id }}">
        @endforeach
    </div>

    <div class="w-[300px]">
        <img id="mainImage-{{ $product->id }}" src="{{ json_decode($product->image)[0] }}" alt="{{ $product->name }}"
            class="h-[450px] w-[300px] rounded-lg object-cover">
    </div>

    <div class="ml-2 flex h-[450px] w-[336px] flex-col">
        <div class="flex flex-col gap-3">
            <p class="font-bold capitalize text-orange-500">{{ $product->brand }}</p>
            <h1 class="text-4xl font-bold capitalize"> {{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
        </div>

        <div class="mt-6 flex flex-col gap-2">
            <div class="flex items-center gap-3">
                <p class="text-3xl font-bold">
                    <span>$</span>{{ number_format($product->price - $product->price * ($product->sale / 100), 2) }}
                </p>
                <p class="rounded-sm bg-orange-300 p-2 font-semibold text-orange-600">-{{ $product->sale }}%</p>
            </div>
            <p class="font-semibold line-through opacity-50"><span>$</span>{{ $product->price }}</p>
        </div>

        <div class="mt-6 flex flex-col gap-2">
            <p class="font-bold uppercase">Choose Size</p>
            <div class="flex items-center justify-start gap-4">
                @foreach (App\Models\Property::where('name', 'size')->first()->options as $option)
                    <div class="size-8 flex cursor-pointer items-center justify-center rounded-full bg-white text-center font-semibold text-black"
                        data-option="{{ $option->value }}">{{ $option->value }}</div>
                @endforeach
            </div>
        </div>
        <div class="my-6 flex h-full">
            <x-form-button class="h-fit w-full self-end">Add To Cart</x-form-button>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const thumbnails = document.querySelectorAll('[data-image]');
        const options = document.querySelectorAll('[data-option]');

        options.forEach(option => {
            option.addEventListener('click', function() {
                options.forEach(option => {
                    options.forEach(option => {
                        option.classList.remove('bg-orange-600', 'text-white');
                        option.classList.add('bg-white', 'text-black');
                    })
                    this.classList.remove('bg-white', 'text-black');
                    this.classList.add('bg-orange-600', 'text-white');
                });
            })
        });

        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', function() {
                const productId = this.getAttribute('data-product-id');
                const mainImage = document.getElementById('mainImage-' + productId);
                const newSrc = this.getAttribute('data-image');
                mainImage.src = newSrc;
                thumbnails.forEach(thumbnail => {
                    thumbnail.classList.remove('opacity-100');
                });
                this.classList.add('opacity-100');
            });
        });
    });
</script>
