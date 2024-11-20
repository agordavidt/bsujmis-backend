<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div> -->
                <button id="showFormButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-4">
                    Affidavit Application
                </button>
            </div>
        </div>
    </div>
    @include('public.create')

      
</x-app-layout>
   <script>
           const showFormButton = document.getElementById('showFormButton');
            const formContainer = document.getElementById('formContainer');
            let isFormVisible = false;

            showFormButton.addEventListener('click', () => {
            isFormVisible = !isFormVisible;
            formContainer.style.display = isFormVisible ? 'block' : 'none';
            });
    </script>




