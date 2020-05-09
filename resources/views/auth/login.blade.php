<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
            <div class="col-md-8">
                    <div class="font-bold text-lg mb-4">Login</div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                             <div class="mb-6">
                                 <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
                                 <input type="email" name="email" id="email" required class="border border-gray-400 p-2 w-full" value="{{'email'}}">
                                 @error('email')
                                 <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                                 @enderror
                             </div>

                            <div class="mb-6">
                                <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
                                <input type="password" name="password" id="password" required class="border border-gray-400 p-2 w-full">
                                @error('password')
                                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <div>
                                        <input class="mr-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="text-xs text-gray-700 font-bold uppercase" for="remember">
                                            Remember Me
                                        </label>
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="px-4 py-2 rounded bg-blue-400 hover:bg-blue-500 text-white mr-2">
                                        Login
                                </button>
                                    <a class="text-cs text-gray-700" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                            </div>
                        </form>
            </div>
        </div>
    </div>
</x-master>
