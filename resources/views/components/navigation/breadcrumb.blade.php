<div class="campl-breadcrumb" id="breadcrumb">
    <ul class="campl-unstyled-list campl-horizontal-navigation clearfix">
        <li class='first-child'>
            <a href="#" class="campl-home ir">Home</a>
        </li>
        <li>
            <a href="">Department A-Z</a>
        </li>
        <li>
            <p class="campl-current">Modern &amp; Medieval Languages</p>
        </li>
    </ul>
</div>

{{-- 
@unless ($breadcrumbs->isEmpty())

    <ol class="breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)

            @if (!is_null($breadcrumb->url) && !$loop->last)
                <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
            @endif

        @endforeach
    </ol>

@endunless --}}