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
                View Application
                </button>
            </div>
        </div>
    </div>

      <div class="py-12" style="display: none;" id="formContainer">
            <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">First Name</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Middle Name</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Name</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judiciary Location</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Created</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">John</td>
                    <td class="px-6 py-4 whitespace-nowrap">Doe</td>
                    <td class="px-6 py-4 whitespace-nowrap">Smith</td>
                    <td class="px-6 py-4 whitespace-nowrap">Category A</td>
                    <td class="px-6 py-4 whitespace-nowrap">Federal High Court</td>
                    <td class="px-6 py-4 whitespace-nowrap">Pending</td>
                    <td class="px-6 py-4 whitespace-nowrap">2023-11-19</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">Jane</td>
                    <td class="px-6 py-4 whitespace-nowrap">Doe</td>
                    <td class="px-6 py-4 whitespace-nowrap">Johnson</td>
                    <td class="px-6 py-4 whitespace-nowrap">Category B</td>
                    <td class="px-6 py-4 whitespace-nowrap">State High Court</td>
                    <td class="px-6 py-4 whitespace-nowrap">Approved</td>
                    <td class="px-6 py-4 whitespace-nowrap">2023-11-18</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">Michael</td>
                    <td class="px-6 py-4 whitespace-nowrap">David</td>
                    <td class="px-6 py-4 whitespace-nowrap">Williams</td>
                    <td class="px-6 py-4 whitespace-nowrap">Category C</td>
                    <td class="px-6 py-4 whitespace-nowrap">Magistrate Court</td>
                    <td class="px-6 py-4 whitespace-nowrap">Rejected</td>
                    <td class="px-6 py-4 whitespace-nowrap">2023-11-17</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">Emily</td>
                    <td class="px-6 py-4 whitespace-nowrap">Rose</td>
                    <td class="px-6 py-4 whitespace-nowrap">Brown</td>
                    <td class="px-6 py-4 whitespace-nowrap">Category A</td>
                    <td class="px-6 py-4 whitespace-nowrap">Federal High Court</td>
                    <td class="px-6 py-4 whitespace-nowrap">Pending</td>
                    <td class="px-6 py-4 whitespace-nowrap">2023-11-16</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">David</td>
                    <td class="px-6 py-4 whitespace-nowrap">Lee</td>
                    <td class="px-6 py-4 whitespace-nowrap">Davis</td>
                    <td class="px-6 py-4 whitespace-nowrap">Category B</td>
                    <td class="px-6 py-4 whitespace-nowrap">State High Court</td>
                    <td class="px-6 py-4 whitespace-nowrap">Approved</td>
                    <td class="px-6 py-4 whitespace-nowrap">2023-11-15</td>
                </tr>
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
