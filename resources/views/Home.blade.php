@for ($i = 0; $i < 10; $i++)
    @if($i%2==0)
    <button >{{ $i }}</button>
    @else
    <a herf="#" >{{ $i }}</a>
    @endif


@endfor