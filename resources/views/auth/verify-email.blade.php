@auth
    @if(session()->has('resentMessage'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">{{ @session()->get('resentMessage') }}</span>
        </div>
    @elseif(!Auth::user()->hasVerifiedEmail())
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <div class="mt-2 mb-4 text-sm">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('verification.send') }}">
                {!! csrf_field() !!}

            <span class="font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 inline w-5 h-5 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                </svg>
                {{ __('Some features requires your email to be verified, please check your email for a verification link. If you did not receive the email.') }}
                    <button type="submit" class="text-blue-500 background-transparent font-bold uppercase px-3 py-1 text-xs outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                        {{ __('Request another one') }}
                    </button>
                </form>
            </span>
        </div>
    </div>
    @endif
@endauth
