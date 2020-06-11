@if (session($key ?? 'status'))
    <div class="alert alert-success" role="alert" style="">
        {{ session($key ?? 'status') }}
    </div>
@endif
