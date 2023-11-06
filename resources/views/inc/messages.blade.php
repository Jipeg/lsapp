@if(count($errors))>0)
    @foreach ($errors as $error)
        <div class="card">
            {{$error}}
        </div>
    @endforeach
@endif
