<section class="text-gray-200">

    <header class="mb-6">
        <h2 class="text-lg font-medium text-green-400">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" class="text-gray-200" />

            <x-text-input id="name"
                name="name"
                type="text"
                class="mt-1 block w-full bg-[#0b1736] border-blue-900 text-white focus:border-green-400 focus:ring-green-400"
                :value="old('name', $user->name)"
                required autofocus autocomplete="name" />

            <x-input-error class="mt-2 text-red-400" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" class="text-gray-200" />

            <x-text-input id="email"
                name="email"
                type="email"
                class="mt-1 block w-full bg-[#0b1736] border-blue-900 text-white focus:border-green-400 focus:ring-green-400"
                :value="old('email', $user->email)"
                required autocomplete="username" />

            <x-input-error class="mt-2 text-red-400" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())

                <div class="mt-4 text-sm text-gray-300">
                    <p>
                        {{ __('Your email address is unverified.') }}
                    </p>

                    <button form="send-verification"
                        class="underline text-green-400 hover:text-green-300 focus:outline-none">

                        {{ __('Click here to re-send the verification email.') }}

                    </button>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>

            @endif
        </div>

        <div class="flex items-center gap-4">

            <x-primary-button class="bg-green-500 hover:bg-green-400 text-black">
                {{ __('Save') }}
            </x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-400"
                >
                    {{ __('Saved.') }}
                </p>
            @endif

        </div>

    </form>

</section>