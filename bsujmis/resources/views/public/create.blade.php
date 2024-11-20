@yield('create_form')
<div class="py-12" style="display: none;" id="formContainer">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if(session('success'))
                <div class="alert alert-success">{{ session('success')}}</div>
                @endif
                <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight mt-4">Fill Your Affidavit Application Details</h2>

                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900">
                                    <form action="{{ route('affidavit.create') }}" method="POST">
                                        @csrf
                                        <div class="mb-4">
                                            <label for="firstName" class="block text-sm font-medium text-gray-700">First Name</label>
                                            <input type="text" id="firstName" name="first_name" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        </div>

                                        <div class="mb-4">
                                            <label for="middleName" class="block text-sm font-medium text-gray-700">Middle Name</label>
                                            <input type="text" id="middleName" name="middle_name" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500   
                    sm:text-sm">
                                        </div>

                                        <div class="mb-4">
                                            <label for="lastName" class="block text-sm font-medium text-gray-700">Last Name</label>
                                            <input type="text" id="lastName" name="last_name" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500   
                    sm:text-sm">
                                        </div>

                                        <div  class="mb-4">
                                            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                                            <select id="category" name="category" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">                                                  
                                                <option value="" disabled>Select a category</option>
                                                <option value="State High Court Wurukun">Change of Name</option>
                                                <option value="Court of Apeal North Bank">Lost of Certificate</option>
                                            </select>
                                        </div>

                                        <div class="mb-4">
                                            <label for="judiciaryLocation" class="block text-sm font-medium text-gray-700">Judiciary Location</label>
                                            <input type="text" id="judiciaryLocation" name="court_location" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500  sm:text-sm">
                                        </div>

                                        <button type="submit"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">  Submit  </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>

               
            </div>
        </div>
    </div>


 
