<x-layout>
    <x-slot:heading>Training Projects</x-slot:heading>
    <div class="flex flex-col gap-4">
        <x-training-projects-card>
            <x-slot:projectLink>/training-projects/profile-cards</x-slot:projectLink>
            <x-slot:title>100 Free Frontend Challenges</x-slot:title>
            <x-slot:project>Profile Cards</x-slot:project>
            <x-slot:description>Nice UI Profile cards.</x-slot:description>
            <x-slot:link>https://dev.to/bigsondev/100-free-frontend-challenges-3f0</x-slot:link>
        </x-training-projects-card>
        <x-training-projects-card>
            <x-slot:projectLink>/training-projects/add-to-cart</x-slot:projectLink>
            <x-slot:title>100 Free Frontend Challenges</x-slot:title>
            <x-slot:project>Add to Cart</x-slot:project>
            <x-slot:description>A product show with add to cart.</x-slot:description>
            <x-slot:link>https://dev.to/bigsondev/100-free-frontend-challenges-3f0</x-slot:link>
        </x-training-projects-card>
    </div>
</x-layout>
