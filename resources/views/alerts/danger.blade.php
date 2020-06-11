{{-- @if (session($key ?? 'status'))
    <div class="alert alert-warning" role="alert" style="margin: 2em 2em 2em 2em; ">
        {{ session($key ?? 'status') }}
    </div>
@endif --}}

@if ($errors->any())
    <div class="alert alert-warning" role="alert">
    	<ul>
    		@foreach($errors->all() as $error)
    			<li>{{ $error }}</li>
    		@endforeach
    	</ul>
    </div>
@endif