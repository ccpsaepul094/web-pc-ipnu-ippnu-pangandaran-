@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">

        {{-- MOBILE --}}
        <div class="flex justify-between flex-1 sm:hidden">

            {{-- Previous --}}
            @if ($paginator->onFirstPage())
                <span
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 border border-blue-700 cursor-default leading-5 rounded-md">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-blue-600 leading-5 rounded-md hover:bg-blue-700">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            {{-- Next --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-white bg-blue-600 border border-blue-600 leading-5 rounded-md hover:bg-blue-700">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span
                    class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-white bg-blue-700 border border-blue-700 cursor-default leading-5 rounded-md">
                    {!! __('pagination.next') !!}
                </span>
            @endif

        </div>


        {{-- DESKTOP --}}
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">

            {{-- Info text --}}
            <div>
                <p class="text-sm text-gray-200 leading-5">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            {{-- Pagination --}}
            <div>
                <span class="relative z-0 inline-flex rtl:flex-row-reverse shadow-sm rounded-md">

                    {{-- Previous Page --}}
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true">
                            <span
                                class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-white bg-blue-700 border border-blue-700 cursor-default rounded-l-md leading-5">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" />
                                </svg>
                            </span>
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}"
                            class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-white bg-blue-600 border border-blue-600 rounded-l-md hover:bg-blue-700">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" />
                            </svg>
                        </a>
                    @endif


                    {{-- Page Numbers --}}
                    @foreach ($elements as $element)
                        {{-- Dots separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span
                                    class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-white bg-blue-700 border border-blue-700 cursor-default leading-5">
                                    {{ $element }}
                                </span>
                            </span>
                        @endif

                        {{-- Page links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                {{-- Active page --}}
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span
                                            class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-white bg-blue-800 border border-blue-800 cursor-default leading-5">
                                            {{ $page }}
                                        </span>
                                    </span>

                                    {{-- Normal page --}}
                                @else
                                    <a href="{{ $url }}"
                                        class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-white bg-blue-600 border border-blue-600 leading-5 hover:bg-blue-700">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach


                    {{-- Next Page --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}"
                            class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-white bg-blue-600 border border-blue-600 rounded-r-md hover:bg-blue-700">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" />
                            </svg>
                        </a>
                    @else
                        <span aria-disabled="true">
                            <span
                                class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-white bg-blue-700 border border-blue-700 cursor-default rounded-r-md leading-5">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" />
                                </svg>
                            </span>
                        </span>
                    @endif

                </span>
            </div>
        </div>

    </nav>
@endif
