@if ($paginator->hasPages())
<center>
    <div class="pagination">
       
        @if ($paginator->onFirstPage())
            <p class="disabled"><span>← Previous</span></p>
        @else
            <p><a href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></p>
        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <p class="disabled"><span> {{ $element }} </span></p>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <p class="active my-active"><span> {{ $page }} </span></p>
                    @else
                        <p><a href="{{ $url }}"> {{ $page }}</a></p>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
            <p><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></p>
        @else
            <p class="disabled"><span>Next →</span></p>
        @endif
</div>
<center>

@endif 