<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto">
            <form method="POST" action="/register">
                @csrf 
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                           for="name"> 
                        Name
                    </label>   
                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="name"
                           id="name"
                           required >
                          
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                           for="username"> 
                        Username
                    </label>   
                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="username" >
                          
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                           for="password"> 
                       Password
                    </label>   
                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="password"
                           id ="password"
                           required >
                          
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">
                        Register
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
