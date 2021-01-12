<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a New Thread') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="/threads">
                    @csrf
                    <input type="text" name="title" id="title" class="form-input"> <br>
                    <textarea name="body" id="body" rows="8" class="form-textarea">

                    </textarea>
                    <button type="submit">Publish</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
