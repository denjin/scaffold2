{{--article title--}}
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
</div>
{{-- input for body --}}
<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    {!! $errors->first('body', '<span class="help-block">:message</span>') !!}
</div>
{{--article slug--}}
<div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
    {!! $errors->first('slug', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group">
    <div class="btn-group">
        <button class="btn btn-success" id="form-submit"><span class="glyphicon glyphicon-ok"></span> Save</button>
        <a href="/" class="btn btn-warning" id="form-cancel"><span class="glyphicon glyphicon-remove"></span> Cancel</a>
    </div>
</div>