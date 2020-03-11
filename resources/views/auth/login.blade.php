<x-layout variant="clean">
    <div class="flex flex-col items-center">
        <div class="w-full md:w-84">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <label x-data="{ showError: true }" class="block mb-4">
                    <span class="block text-sm text-gray mb-2">Email</span>
                    
                    <input
                        class="w-full rounded border border-gray mb-1 px-4 py-2" 
                        type="email" 
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                        autofocus
                        @keydown="showError = false"
                    >

                    @error('email')
                        <span x-show="showError" class="text-red-700 text-sm" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </label>

                <label x-data="{ showError: true }" class="block mb-4">
                    <span class="block text-sm text-gray mb-2">Password</span>
                    
                    <input 
                        class="w-full rounded border border-gray px-4 py-2" 
                        type="password" 
                        name="password"
                        required
                        autocomplete="current-password"
                        @keydown="showError = false"
                    >

                    @error('password')
                        <span x-show="showError" class="text-red-700 text-sm" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </label>

                <span class="block mb-4 text-right">
                    <a href="{{ route('password.request') }}" class="text-sm text-gray hover:text-gray-darker">
                        Forgot password?
                    </a>
                </span>

                <div>
                    <button type="submit" class="w-full px-4 py-2 rounded bg-blue-500 hover:opacity-75 text-white">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>