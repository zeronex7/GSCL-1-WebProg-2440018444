@extends('template')

@section('content')


    @for ($i = 0; $i < $random; $i++)

        @for ($a = 0; $a <= $i; $a++)
            @if ($a == 0  && $i == 0)
                <b class="fs-3 text-warning">{{ "*" }}</b>        
            @else
                @if ($a % 2 == 0)
                    {{ "*" }}
                @else
                    {{ "#" }}
                @endif
            @endif
            
        @endfor
       
        <br>

    @endfor

@endsection