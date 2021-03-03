
@if ($breadcrumbs = Breadcrumbs::generate($route))
    <div class="campl-breadcrumb" id="breadcrumb">
        <ul class="campl-unstyled-list campl-horizontal-navigation clearfix">
            @foreach ($breadcrumbs as $breadcrumb)
                @if (!is_null($breadcrumb->url) && $loop->first)
                    <li class='first-child'>
                        <a href="{{ $breadcrumb->url }}" class="campl-home ir">{{ $breadcrumb->title }}</a>
                    </li>
                @elseif (!is_null($breadcrumb->url) && !$loop->last)
                    <li>
                        <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                    </li>
                @else
                    <li>
                        <p class="campl-current">{{ $breadcrumb->title }}</p>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>

@endif

