<h1>
    {{ $title or null }}
    <small>{{ $subtitle or null }}</small>
</h1>
@if (isset($breadcrumb))
    @foreach ($breadcrumb as $item)
        <ol class="breadcrumb">
            @if ($item->url != null)
                <li><a href="{{ url($item->url) }}"><i class="fa fa-{{ $item->icon }}"></i> {{ $item->name }}</a></li>
            @else
                <li class="active">{{ $item->name }}</li>
            @endif
        </ol>
    @endforeach
@endif