@if (session()->has('success'))
    <div class="p-4 mb-4 text-sm text-light-purple-dark rounded-lg bg-light-purple-light">
        {{ session('success') }}
    </div>
@endif

@if (session()->has('message'))
    <div class="p-4 mb-4 text-sm text-white rounded-lg bg-light-orange">
        {{ session('message') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-200">
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-green-200">{{ $error }}</li>
            @endforeach
        </ul>
@endif