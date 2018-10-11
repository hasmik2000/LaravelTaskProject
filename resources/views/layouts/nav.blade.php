<nav class="navbar navbar-light bg-light mb-4">
    <div class="navbar-header">
        <h3 class="navbar-brand">
            <a href="/tasks">
                Task List
            </a>
        </h3>
    </div>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            User Tasks
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a href="{{ route('profile.index') }}" class="dropdown-item">All Tasks</a>
            @foreach($categories as $category)
                <a href="/tasks/categories/{{ $category }}" class="dropdown-item">
                    {{ $category }}
                </a>
            @endforeach
        </div>
        <div class="d-inline ml-3">
            <a href="{{ route('home') }}">{{ Auth::user()->name }} </a>
        </div>
    </div>
</nav>
