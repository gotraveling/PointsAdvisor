<ul class="nav navbar-nav">
    <li><a href="{{ url('admin/posts') }}">Posts</a></li>
    <li><a href="{{ url('admin/categories') }}">Categories</a></li>
    <li><a href="{{ url('admin/comments') }}">Comments</a></li>
    <li><a href="{{ url('admin/tags') }}">Tags</a></li>
    <li><a href="{{ url('admin/files') }}">Files</a></li>

    @if (Auth::user()->hasRole("admin"))
        <li><a href="{{ url('admin/users') }}">Users</a></li>
    @endif
</ul>
