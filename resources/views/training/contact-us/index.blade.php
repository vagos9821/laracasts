<x-layout>
    <x-slot:heading>Contact Us</x-slot:heading>

    <div class="flex h-full w-full flex-col overflow-hidden rounded-2xl bg-orange-900 shadow-2xl md:flex-row">
        <div class="w-full max-w-[720px] bg-gradient-to-b from-[#333] to-transparent md:h-[611px] md:w-[50vw]">
            <div class="p-10 pb-0 text-white">
                <p class="text-3xl font-semibold">Contact Us</p>
                <p class="mt-3 max-w-[350px]">
                    Get in touch with us! Whether you have questions, feedback,
                    or just want to say hello, we're here for you.
                </p>
            </div>

            <div class="relative md:absolute">
                <img src="/images/fullmap.png"
                    class="relative mt-[3.5vh] md:absolute md:w-[50vw] md:min-w-[720px] md:max-w-[720px]">
            </div>
        </div>
        <div class="relative w-full from-[#333] to-transparent md:w-[50vw] md:bg-gradient-to-b">
            <form method="POST" action="{{ route('training.contact-us.send') }}"
                class="z-[60] m-10 mx-auto -mt-10 flex max-w-[480px] flex-col gap-2 rounded-2xl bg-white px-10 py-5 shadow-xl md:mb-0 md:ml-0 md:mt-10">
                @csrf
                <div class="mb-2">
                    <p class="text-xl font-semibold">Send us a Message</p>
                </div>
                <x-form-field>
                    <div class="mt-2">
                        <x-form-input name="name" id="name" placeholder="Name" required />

                        <x-form-error name="name" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <div class="mt-2">
                        <x-form-input name="email" id="email" placeholder="Email" required />

                        <x-form-error name="email" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <div class="mt-2">
                        <x-form-input name="phone" id="phone" placeholder="Phone" required />

                        <x-form-error name="phone" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <div class="my-2 text-gray-500 md:max-h-[40px]">
                        <p>Preffered method of contact</p>
                    </div>
                    <div class="flex gap-6 text-sm font-semibold text-gray-500">
                        <div>
                            <input type="radio" id="email" name="contact_method" value="email" checked />
                            <label for="email">Email</label>
                        </div>
                        <div>
                            <input type="radio" id="phone" name="contact_method" value="phone" />
                            <label for="phone">Phone</label>
                        </div>
                    </div>
                </x-form-field>

                <x-form-field>
                    <div
                        class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-orange-600 sm:max-w-md">
                        <textarea name="message" id="message"
                            class="block h-[100px] flex-1 resize-none border-0 bg-transparent px-3 py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                            placeholder="Message"></textarea>
                </x-form-field>

                <x-form-button class="mt-20 w-full !rounded-full !py-3">Submit</x-form-button>
        </div>
        </form>
    </div>
</x-layout>
