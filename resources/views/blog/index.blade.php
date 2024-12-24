<ul>
    @foreach ($blogs as $blog)
        <li><a href="{{ route('blog.post', $blog) }}">{{ ucfirst(str_replace('-', ' ', $blog)) }}</a></li>
    @endforeach
</ul>
