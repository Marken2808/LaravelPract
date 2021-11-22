<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- 1st: livewire file name, 
            2nd: livewire posts, match route live_posts, 
            3rd: its tag-->
            @livewire('post', ['live_posts' => $live_posts])
        </div>
    </div>
</x-app-layout>