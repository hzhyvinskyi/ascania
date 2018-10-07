@if ($paginator->hasPages())
    <ul class="pagination__menu">
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="pagination__item pagination__item--hidden"><a class="pagination__link">{{ $element }}</a></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="pagination__item active"><a class="pagination__link">{{ $page }}</a></li>
                    @else
                        <li class="pagination__item"><a class="pagination__link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
    </ul>
@endif
