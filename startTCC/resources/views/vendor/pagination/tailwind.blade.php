@if ($paginator->hasPages())
    <nav role="navigation " aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">


        <ul class="pagination text-center ml-2 mt-4">
            {{-- Pagination Elements --}}

            <span class="h3 mr-4">Semana:  </span>
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Anterior</a>
                </li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">Anterior</a></li>
            @endif



            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))


                    <span class="ml-4" aria-disabled="true">
                                <span
                                    class=" relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5">{{ $element }}</span>
                            </span>
                @endif

                {{-- Array Of Links --}}



                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())




                            <li class="page-item active">
                                <a class="page-link bg-secondary text-white border-secondary">{{$page}}<span class="sr-only">{{$page}}</span></a>
                            </li>

                        @else


                            <li class="page-item "><a class="page-link " href="{{ $url }}"
                                                     aria-label="{{ __('Go to page :page', ['page' => $page]) }}">{{$page}}</a>
                            </li>
                        @endif
                    @endforeach
                @endif

            @endforeach
            @if ($paginator->hasMorePages())
                <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}">Próxima</a></li>
            @else
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Próxima</a>
                </li>
            @endif

            @else
             <span class="h3 mt-3 page-item disabled">Semana:
  <span
      class=" relative inline-flex items-center px-2  -ml-px text-sm text-white font-medium text-gray-700 bg-secondary  cursor-default ">1</span>

             </span>


            @endif





        </ul>

    </nav>













