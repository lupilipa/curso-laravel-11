@if (session()->has('success'))
    <div class="success">
        {{ session('success') }}
    </div>
@endif

@if (session()->has('message'))
    <div class="message">
        {{ session('message') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="error">
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif