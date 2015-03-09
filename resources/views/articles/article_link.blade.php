<div class="well well-sm">
        <h1><a href="{{ url('articles/'.$slug) }}">{{ $title }}</a> </h1>
        <small class="text-muted">Posted: {{ $created_at }} by </small><small>{{ $author }}</small>
        <p>{{ $body }}</p>
</div>