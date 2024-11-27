<x-layout>
    <h1 class="title">Register a new account</h1>

    <div class="max-w-screen-sm mx-auto card">
        <form action="{{ route('register') }}" method="post">
            @csrf
            {{-- Username --}}
            <div class="mb-4">
                <label for="username">Username</label>
                <input type="text" name="username" value="{{ old('username') }}" class="input @error('username') ring-red-500 @enderror">
                @error('username')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
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
            {{-- Confirm Password --}}
            <div class="mb-4">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="input @error('password') ring-red-500 @enderror">
            </div>

            {{-- Submit Gutton --}}
            <button class="btn w-full py-2 bg-[#1e293b] rounded-md text-white">Register</button>
        </form>
    </div>
</x-layout>
