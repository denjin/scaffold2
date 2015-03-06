<div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
    {!! Form::label('username', 'Username:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        {!! $errors->first('username', '<span class="help-block">:message</span>') !!}
    </div>
</div>