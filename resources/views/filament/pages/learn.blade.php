<x-filament::page>
    @if(Auth::user()->installs()->learn()->count() >= 1)
    <div class="grid grid-cols-8 gap-3">
        <div class="col-span-6 flex flex-col">
            <?php $install = Auth::user()->installs()->learn()->first() ?>
            <x-filament::card>
                <p class="mb-3 text-md font-medium text-gray-500 dark:text-white">{{ __('Your installation is ready, please access it with the information below') }}</p>
                <div class="flex flex-row">
                    <div class="basis-1/4"><span class="mb-3 text-md font-medium text-gray-500 dark:text-white">{{ __('Login URL: ') }}</span></div>
                    <div class="basis-3/4"><a class="text-blue-600 inline-block" href="https://{{ $install->name }}.steercampaign.com">https://{{ $install->name }}.steercampaign.com</a></div>
                </div>
                <div class="flex flex-row">
                    <div class="basis-1/4"><span class="mb-3 text-md font-medium text-gray-500 dark:text-white">{{ __('Username: ') }}</span></div>
                    <div class="basis-3/4"></div>
                </div>
                <div class="flex flex-row">
                    <div class="basis-1/4"><span class="mb-3 text-md font-medium text-gray-500 dark:text-white">{{ __('Password: ') }}</span></div>
                    <div class="basis-3/4"></div>
                </div>

                <div class="flex flex-row">
                    <div class="basis-1/4"><span class="mb-3 text-md font-medium text-gray-500 dark:text-white">{{ __('Days until expire: ') }}</span></div>
                    <div class="basis-3/4">
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-blue-700 dark:text-white">{{ $install->daysUntilExpire }} Days</span>
                            <span class="text-sm font-medium text-blue-700 dark:text-white">{{ $install->daysUntilExpireRatio }}%</span>
                          </div>
                          <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{ $install->daysUntilExpireRatio }}%"></div>
                          </div>
                    </div>
                </div>
                <hr />
                <div class="flex flex-col items-center pb-10">
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ __('If you are not done learning, you can always renew your installation') }}</span>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('Renew my install') }}</a>
                    </div>
                </div>
            </x-filament::card>
        </div>
        <div class="col-span-2 flex flex-col">
            @include('filament.pages.learn.learning_resources')
        </div>
    </div>
    @else
        @include('filament.pages.learn.initalScreen')
    @endif
</x-filament::page>
