@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" 
         class="flex items-center justify-center space-x-2 mt-10">
        
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="px-3 py-1 bg-gray-800 text-gray-500 rounded-lg cursor-not-allowed">
                ← Prev
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" 
               class="px-3 py-1 bg-gray-700 text-gray-200 rounded-lg hover:bg-gray-600 transition">
                ← Prev
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="px-3 py-1 text-gray-500">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        {{-- الزر الحالي --}}
                        <span class="px-3 py-1 bg-gradient-to-r from-gray-700 via-slate-600 to-gray-700 
                                     text-white rounded-lg shadow-md shadow-gray-900/40">
                            {{ $page }}
                        </span>
                    @else
                        {{-- الروابط العادية --}}
                        <a href="{{ $url }}" 
                           class="px-3 py-1 bg-gray-800 text-gray-300 rounded-lg hover:bg-gray-700 hover:text-white transition">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" 
               class="px-3 py-1 bg-gray-700 text-gray-200 rounded-lg hover:bg-gray-600 transition">
                Next →
            </a>
        @else
            <span class="px-3 py-1 bg-gray-800 text-gray-500 rounded-lg cursor-not-allowed">
                Next →
            </span>
        @endif
    </nav>
@endif
