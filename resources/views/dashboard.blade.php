<x-app-layout>
    <x-container>

        <form action="" class="px-4 mb-8">
            <textarea
                name="description"
                rows="2"
                class="w-full mb-2 p-0 text-black bg-transparent border-0 border-b-2 border-slate-800 focus:border-b-slate-400 focus:ring-0 resize-none overflow-hidden"
                placeholder='Description...'
                >
            </textarea>

            <input
                type="submit"
                class="px-4 py-2 bg-blue-400 text-slate-800 sm:rounded-lg text-xs">
        </form>
    </x-container>
    <x-container-row>

        @foreach($products as $product)
        <x-card class="mb-4">
                <a href="" class="text-xl px-xl mb-2 flex items-center gap-2 font-medium text-slate-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                    {{ $product->name }}
                </a>
                <div class="text-slate-200 mb-6">
                    {{ $product->price . ' USD'}}
                </div>
            {{ $product->description }}
            </x-card>
        @endforeach
    </x-container-row>
</x-app-layout>
`
