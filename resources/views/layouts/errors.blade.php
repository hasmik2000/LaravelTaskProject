@if(count($errors))
    <div class="form-group">
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <div class="text-danger">
                    {{ $error }}
                </div>
            @endforeach
        </div>
    </div>
@endif