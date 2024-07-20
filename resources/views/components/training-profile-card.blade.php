<div class="h-[600px] w-[400px] overflow-hidden rounded-[2rem] bg-white shadow-xl">
    <div class="relative">
        <div class="flex h-[150px] w-full items-center justify-center bg-[{{ $profile->bg_color }}]">
            <img src="{{ $profile->image }}" alt="{{ $profile->name }}" class="size-32 relative mt-6 rounded-full">
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 950 200" fill="{{ $profile->bg_color }}" class>
            <path d="M0 2v198c134.3 0 153.7-198 296-198H0Z" opacity=".5"></path>
            <path d="M1000 8v172C833.3 180 833.3 7.2 666.7 7.2S500 180 333.3 180 166.7 8 0 8h1000Z" opacity=".5">
            </path>
            <path d="M617 2v172C372 238 384 2 196 2h421Z" opacity=".5"></path>
            <path d="M2040 10H0v194C62.5 56 125 8 1250 8c250 0 1250 192 500 192 125 0 187.5-48 250-96V0Z"
                opacity=".5">
            </path>
            <path d="M0 2v198c134.3 0 153.7-198 296-198H0" opacity=".2"></path>
            <path
                d="M1000 8v172C833.3 7.2S500 180 333.3 180 166.7 8 0 8h1000Z 180 833.3 7.2 666.7 7.2S500 180 333.3 180 166.7 8 0 8h1000Z"
                opacity=".6"></path>
            <path d="M617 2v172C372 238 384 202 196 2h421Z" opacity=".3"></path>
            <path d="M1000 0H0v104C62.5 56 125 8 250 8c250 0 250 192 500 192 125 0 187.5-48 250-96V0Z"></path>
        </svg>
    </div>

    <div class="mx-6 flex flex-col">
        <div class="mx-5 flex flex-col items-center justify-center text-center">
            <h2 class="text-3xl font-semibold leading-10 tracking-wider">{{ $profile->name }}</h2>
            <p class="lowercase text-gray-500">{{ $profile->twitter_tag }}</p>
            <div class="my-10 flex gap-6">
                <a href="{{ $profile->facebook_url }}" rel="noopener" target="_blank">
                    <img src="/images/svgs/facebook.svg" alt="facebook" class="size-5">
                </a>
                <a href="{{ $profile->linkedin_url }}" rel="noopener" target="_blank">
                    <img src="/images/svgs/linkedin.svg" alt="linkedin" class="size-5">
                </a>
                <a href="{{ $profile->twitter_url }}" rel="noopener" target="_blank">
                    <img src="/images/svgs/twitter-alt.svg" alt="twitter" class="size-5">
                </a>
                <a href="{{ $profile->instagram_url }}" rel="noopener" target="_blank">
                    <img src="/images/svgs/instagram.svg" alt="instagram" class="size-5">
                </a>
                <a href="{{ $profile->github_url }}" rel="noopener" target="_blank">
                    <img src="/images/svgs/github.svg" alt="github" class="size-5">
                </a>
            </div>
            <p class="mb-10 h-10">{{ $profile->description }}</p>
        </div>
        <div class="flex items-center justify-center gap-6">
            <button class="h-[40px] w-[150px] rounded-full bg-[#FF895E] text-white">
                Follow
            </button>
            <button class="h-[40px] w-[150px] rounded-full border-2 border-gray-400 font-semibold text-gray-400">
                Message
            </button>
        </div>
    </div>
</div>
