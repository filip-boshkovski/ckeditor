<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Quote') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('quotes.store') }}" method="POST">
                @csrf
                <textarea name="body" id="editor" cols="30" rows="10"></textarea>
                <x-input-error :messages="$errors->get('body')" class="mt-2" />

                <p class="mt-4">What is your gender?</p>

                <div class="mt-4">
                    <input class=" p-2" id="male" type="radio" name="gender" value="male">
                    <label for="male">Male</label>
                </div>

                <div class="mt-4 mb-4">
                    <input class="p-2" id="female" type="radio" name="gender" value="female">
                    <label for="female">Female</label>
                </div>

                <x-input-error :messages="$errors->get('gender')" class="mt-2" />


                <div class="mt-4 mb-4">
                    <p>Enter Schedule:</p>
                    <input class="block mt-2 " type="datetime-local" name="schedule">
                    <x-input-error :messages="$errors->get('schedule')" class="mt-2" />

                </div>

                <button type="submit"
                    class="block bg-white hover:bg-gray-100 text-gray-800 font-semibold mt-2 py-2 px-4 border border-gray-400 rounded shadow">
                    Save </button>
            </form>
        </div>
    </div>

</x-app-layout>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
