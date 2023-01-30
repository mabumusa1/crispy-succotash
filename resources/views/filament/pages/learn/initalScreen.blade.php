<x-filament::card>
        <h1 class="mt-4 text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200 text-center">{{ __('Learn Mautic') }}</h1>
        <p class="mt-4 mb-4 text-lg text-slate-700 dark:text-slate-400 text-center">{{ __('You are one step away from getting your Mautic installation running.') }}</p>
        <hr/>
        <p class="mt-4 mb-4 text-lg text-slate-700 dark:text-slate-400">{{ __('Before you can start, please make sure you agree on the following requirements:') }}</p>
        <ul class="space-y-5 text-gray-500 list-inside dark:text-gray-400">
            <li class="flex items-center text-lg text-slate-700 dark:text-slate-400">
                @if(Auth::user()->hasVerifiedEmail())
                    <svg class="w-5 h-5 mr-3 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                @else
                    <svg class="w-5 h-5 mr-3 text-red-400 dark:text-red-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                @endif
                {{ __('You must have your email verified') }}
            </li>
            <li class="flex items-center mt-5 mb-5 text-lg text-slate-700 dark:text-slate-400">
                <svg class="w-5 h-5 mr-3 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                {{ __('This Mautic installation will be deleted after 7 days, do not worry you still can create a new one') }}
            </li>
            <li class="flex items-center mt-5 mb-5 text-lg text-slate-700 dark:text-slate-400">
                <svg class="w-5 h-5 mr-3 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                {{ __('This Mautic installation will not send real Emails or SMS') }}
            </li>
            <li class="flex items-center mt-5 mb-5 text-lg text-slate-700 dark:text-slate-400">
                <svg class="w-5 h-5 mr-3 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                {{ __('This Mautic installation will not hold more 100 leads for learning purposes') }}
            </li>
        </ul>
        <hr/>
        <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
            @if(Auth::user()->hasVerifiedEmail())
                <button type="submit" class="disabled inline-flex items-center px-3 py-2 text-lg font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    {{ __('I agree, Create Mautic') }}
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            @else
                <button type="button" class="text-white bg-blue-400 dark:bg-blue-500 cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center" disabled>{{ __('I agree, Create Mautic') }}</button>
            @endif
        </div>
    </x-filament::card>
