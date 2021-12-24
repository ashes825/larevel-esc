<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('registerAsEmployee') }}">
        @csrf

        <!-- Name -->
            <div>
                <x-label for="name" :value="__('Имя')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('Имя')" required autofocus />
            </div>
            <div>
                <x-label for="secondName" :value="__('Фамилия')" />

                <x-input id="secondName" class="block mt-1 w-full" type="text" name="secondName" :value="old('Фамилия')" required autofocus />
            </div>
            <div>
                <x-label for="patronymic" :value="__('Отчество')" />

                <x-input id="patronymic" class="block mt-1 w-full" type="text" name="patronymic" :value="old('Отчество')" required autofocus />
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Почта')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('Почта')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Пароль')" />

                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Повторите пароль')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                         type="password"
                         name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Уже зарегестрированы?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Зерегистироваться') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
