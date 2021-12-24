<div class="d-flex justify-content-around align-items-center mb-4 bg-white border-bottom">
    <a href="/" class="px-6 py-4 sm:block">
        <span class="fs-3">ESC</span>
    </a>
    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <div class=" px-6 py-4 sm:block">
            <div class="px-6 py-4 sm:block">
                @guest
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Войти</a>
                    <a href="{{ 'registration' }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Зарегистироваться</a>
                @endguest
                @auth
                    <div class="p-10">
                        @csrf
                        <a href="{{'profile'}}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{Auth::user()->secondName}} {{Auth::user()->name}}</a>
                        <a href="{{'logout'}}" class="text-sm text-gray-700 dark:text-gray-500 underline pr-5">Выйти</a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>
</div>
