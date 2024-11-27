<x-layout>
    <h1 class="title">Welcome back</h1>

    <div class="max-w-screen-sm mx-auto card">
        <form action="{{ route('login') }}" method="post">
            @csrf
            {{-- Email --}}
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="input @error('email') ring-red-500 @enderror">
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            {{-- Password --}}
            <div class="mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" value="{{ old('password') }}" class="input @error('password') ring-red-500 @enderror">
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            
            {{-- Remeber checkbox --}}
            <div class="flex gap-2 mb-4">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember</label>
            </div>

            @error('failed')
                <p class="error">{{ $message }}</p>
            @enderror

            {{-- Submit Gutton --}}
            <button class="btn w-full py-2 bg-[#1e293b] rounded-md text-white">Login</button>
            </form>
        </div>
    </x-layout>
