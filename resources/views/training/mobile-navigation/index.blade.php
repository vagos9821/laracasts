@php
    $profile = \App\Models\Profile::first();
@endphp
<x-layout>
    <x-slot:heading>Mobile Navigation</x-slot:heading>
    <div class="mx-auto min-w-[296px] max-w-[480px] rounded-2xl p-3 shadow-xl">
        <div>
            <div class="flex items-center gap-4 border-b-2 pb-6">
                <img src="/images/me-abs.png" class="w-12 rounded-2xl">
                <div>
                    <p class="font-semibold">{{ $profile->name }}</p>
                    <p>{{ $profile->twitter_tag }}</p>
                </div>
            </div>

            <div class="my-6 flex flex-col gap-y-3 border-b-2 pb-6">
                <x-training.mobile-navigation-button>
                    <x-slot:svg>/images/svgs/users.svg</x-slot:svg>
                    Personal Data
                </x-training.mobile-navigation-button>
                <x-training.mobile-navigation-button>
                    <x-slot:svg>/images/svgs/message.svg</x-slot:svg>
                    Messages
                </x-training.mobile-navigation-button>
                <x-training.mobile-navigation-button>
                    <x-slot:svg>/images/svgs/bell.svg</x-slot:svg>
                    Notifications
                </x-training.mobile-navigation-button>
                <x-training.mobile-navigation-button>
                    <x-slot:svg>/images/svgs/location.svg</x-slot:svg>
                    Location
                </x-training.mobile-navigation-button>
                <x-training.mobile-navigation-button>
                    <x-slot:svg>/images/svgs/group.svg</x-slot:svg>
                    Community
                </x-training.mobile-navigation-button>
            </div>

            <div class="my-6 flex flex-col gap-y-3 pb-6">
                <x-training.mobile-navigation-button>
                    <x-slot:svg>/images/svgs/location.svg</x-slot:svg>
                    FAQs
                </x-training.mobile-navigation-button>
                <x-training.mobile-navigation-button>
                    <x-slot:svg>/images/svgs/group.svg</x-slot:svg>
                    Settings
                </x-training.mobile-navigation-button>
            </div>
        </div>

        <div class="flex items-center justify-between">
            <div
                class="size-8 min-w-8 mr-2 flex cursor-pointer items-center justify-center rounded-lg transition-all duration-300 hover:bg-orange-200">
                <img src="/images/svgs/home.svg" class="size-6">
            </div>
            <div
                class="size-8 min-w-8 mr-2 flex cursor-pointer items-center justify-center rounded-lg transition-all duration-300 hover:bg-orange-200">
                <img src="/images/svgs/chart.svg" class="size-6">
            </div>
            <div
                class="size-8 min-w-8 mr-2 flex cursor-pointer items-center justify-center rounded-lg transition-all duration-300 hover:bg-orange-200">
                <img src="/images/svgs/message.svg" class="size-6">
            </div>
            <div
                class="size-8 min-w-8 mr-2 flex cursor-pointer items-center justify-center rounded-lg transition-all duration-300 hover:bg-orange-200">
                <img src="/images/svgs/user.svg" class="size-6">
            </div>
        </div>
    </div>
</x-layout>
