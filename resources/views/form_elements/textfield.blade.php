<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    {!! Form::label($name, $label, ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text($name, $value, ['class' => 'form-control']) !!}
        {!! $errors->first($name, '<span class="help-block">:message</span>') !!}
    </div>
</div>