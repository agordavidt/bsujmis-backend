<x-app-layout>
<div class="container mx-auto max-w-screen-xl p-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center justify-center">
            <h2 class="text-xl font-bold mb-4">Total Users</h2>
            <p class="text-4xl font-bold text-gray-800">1234</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center justify-center">
            <h2 class="text-xl font-bold mb-4">Total Applications</h2>
            <p class="text-4xl font-bold text-green-500">567</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center justify-center">
            <h2 class="text-xl font-bold mb-4">Approved Applications</h2>
            <p class="text-4xl font-bold text-yellow-500">678</p>
        </div>
    </div>
</div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div> -->
                <button id="showFormButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-4">
                View Application
                </button>
            </div>
        </div>
    </div>
   <div class="mcontainer mx-auto max-w-screen-xl py-5" style="display: none;" id="formContainer">             
            <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">First Name</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Middle Name</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Name</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judiciary Location</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                   
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                 @foreach ($affidavits as $affidavit)
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $affidavit->first_name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $affidavit->middle_name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $affidavit->last_name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $affidavit->category }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $affidavit->court_location }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $affidavit->status }}</td>                    
                </tr>          
                
                @endforeach           
                         
            </tbody>
        </table>
    </div>

    
     


    <script>
           const showFormButton = document.getElementById('showFormButton');
            const formContainer = document.getElementById('formContainer');
            let isFormVisible = false;

            showFormButton.addEventListener('click', () => {
            isFormVisible = !isFormVisible;
            formContainer.style.display = isFormVisible ? 'block' : 'none';
            });
</script>
</x-app-layout>
