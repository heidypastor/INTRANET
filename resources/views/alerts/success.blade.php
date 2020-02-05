@if (session($key ?? 'status'))
    <div class="alert alert-success" role="alert" style="margin: 2em 2em 2em 2em; ">
        {{ session($key ?? 'status') }}
    </div>
@endif
