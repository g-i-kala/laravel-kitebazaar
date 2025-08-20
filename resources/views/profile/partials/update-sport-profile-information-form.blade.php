<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Sport Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Update your water sports profile information.') }}
        </p>
    </header>

    <form method="post" action="{{ route('userDetail.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        {{-- Display Name --}}
        <div>
            <x-input-label for="display_name" :value="__('Display Name')" />
            <x-text-input id="display_name" name="display_name" type="text" class="mt-1 block w-full" :value="old('display_name', optional($userDetail)->display_name)"
                required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('display_name')" />
        </div>

        {{-- Location --}}
        <div>
            <x-input-label for="location" :value="__('Location')" />
            <x-text-input id="location" name="location" type="text" class="mt-1 block w-full" :value="old('location', optional($userDetail)->location)"
                required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('location')" />
        </div>

        {{-- Skill Level --}}
        <div>
            <x-input-label for="skill_level" :value="__('Skill Level')" />
            <x-text-input id="skill_level" name="skill_level" type="text" class="mt-1 block w-full" :value="old('skill_level', optional($userDetail)->skill_level)"
                autocomplete="skill_level" />
            <x-input-error class="mt-2" :messages="$errors->get('skill_level')" />
        </div>

        {{-- Favourite Spot --}}
        <div>
            <x-input-label for="favourtie_spot" :value="__('Favourite Spot')" />
            <x-text-input id="favourtie_spot" name="favourtie_spot" type="text" class="mt-1 block w-full"
                :value="old('favourtie_spot', optional($userDetail)->favourtie_spot)" autocomplete="favourtie_spot" />
            <x-input-error class="mt-2" :messages="$errors->get('favourtie_spot')" />
        </div>

        {{-- Riding Style --}}
        <div>
            <x-input-label for="riding_style" :value="__('Riding Style')" />
            <x-text-input id="riding_style" name="riding_style" type="text" class="mt-1 block w-full"
                :value="old('riding_style', optional($userDetail)->riding_style)" autocomplete="riding_style" />
            <x-input-error class="mt-2" :messages="$errors->get('riding_style')" />
        </div>

        {{-- Bio --}}
        <div>
            <x-input-label for="bio" :value="__('Bio')" />
            <textarea id="bio" name="bio" rows="4"
                class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('bio', optional($userDetail)->bio) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('bio')" />
        </div>

        {{-- Tagline --}}
        <div>
            <x-input-label for="tagline" :value="__('Tagline')" />
            <x-text-input id="tagline" name="tagline" type="text" class="mt-1 block w-full" :value="old('tagline', optional($userDetail)->tagline)"
                autocomplete="tagline" />
            <x-input-error class="mt-2" :messages="$errors->get('tagline')" />
        </div>

        {{-- Social Links (JSON as text for now) --}}
        <div>
            <x-input-label for="social_links" :value="__('Social Links, comma separated')" />
            <textarea id="social_links" name="social_links" rows="3"
                class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                placeholder='e.g. www.instagram.com/yourProfie, www.facebook.com/yourAccount'>{{ old('social_links', implode(",\n", optional($userDetail)->social_links)) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('social_links')" />
        </div>

        {{-- Current Setup (JSON as text for now) --}}
        <div>
            <x-input-label for="current_setup" :value="__('Current Setup')" />
            <textarea id="current_setup" name="current_setup" rows="3"
                class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                placeholder='e.g. {"board": "Duotone Jaime", "kite": "Cabrinha Switchblade"}'>{{ old('current_setup', optional($userDetail)->current_setup) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('current_setup')" />
        </div>

        {{-- Profile Picture --}}
        <div>
            <x-input-label for="profile_picture" :value="__('Profile Picture')" />
            <input id="profile_picture" name="profile_picture" type="file"
                class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
               file:rounded-md file:border-0
               file:text-sm file:font-semibold
               file:bg-indigo-50 file:text-indigo-700
               hover:file:bg-indigo-100" />
            <x-input-error class="mt-2" :messages="$errors->get('profile_picture')" />
        </div>



        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
