@if ($errors->has($field))
    <span style="position: relative; top:-15px;" class="invalid-feedback" role="alert">{{ $errors->first($field) }}</span>
@endif
