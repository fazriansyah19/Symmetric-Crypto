@if (session('encrypt'))
    <div class="alert alert-success text-center">{{session('encrypt')}}</div>
@endif

@if (session('decrypt'))
    <div class="alert alert-success text-center">{{session('decrypt')}}</div>
@endif