<div class="panel panel-default">
    <div class="panel-heading">
        <span class="glyphicon glyphicon-comment"></span> Leave a comment.
    </div>
    <div class="panel-body" >
        <div class="form-group {{ $errors->has('comment') ? 'has-error' : '' }}">
            {!! Form::open(['action' => 'CommentsController@store']) !!}
                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" id="article_id" name="article_id" value="{{ $article }}">
                {!! Form::textarea('comment', null, ['class' => 'form-control', 'cols' => null, 'rows' => null]) !!}
                {!! $errors->first('comment', '<span class="help-block">:message</span>') !!}
        </div>
        <button type="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-comment"></span> Submit</button>
        {!! Form::close() !!}

    </div>
</div>