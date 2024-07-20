<x-layout>
    <x-slot:heading>Training Projects</x-slot:heading>
    <div class="flex flex-wrap items-center justify-center gap-6">
        @foreach ($products as $product)
            <x-training.add-to-cart :product="$product"></x-training.add-to-cart>
        @endforeach
    </div>
    <div class="m-10">
        {{ $products->links() }}
    </div>
</x-layout>
