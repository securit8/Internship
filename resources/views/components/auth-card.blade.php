<div  class="welcome_parent_div flex flex-col sm:justify-center items-center pt-6 sm:pt-0 auth_Card mb-6">
    <div id="welcome_img" class="w-full flex justify-center sm:max-w-md mt-6 px-6 py-4 bg-black overflow-hidden sm:rounded-lg">
        <!-- {{ $logo }} -->
        <a href="/">
            <img src="{{ asset('images/internship.png') }}">
        </a>
    </div>

    <div id="welcome_div" class="w-full sm:max-w-md mt-6 px-6 py-4 bg-black overflow-hidden sm:rounded-lg text-bold">
        {{ $slot }}
    </div>
</div>
