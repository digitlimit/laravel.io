<div class="thread-summary">
    {{ $thread->author->thumbnail }}
    <div class="info">
        <h3><a href="{{ $thread->forumThreadUrl }}">{{ $thread->title }}</a></h3>
        <ul class="meta">
            <li>{{ $thread->created_ago }}</li>
            <li>by <a href="{{ $thread->author->profileUrl }}">{{ $thread->author->name }}</a></li>
        </ul>
    </div>
    <div class="comment-count">{{ $thread->child_count }}</div>
</div>