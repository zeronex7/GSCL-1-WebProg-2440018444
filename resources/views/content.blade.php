@extends('template')

@section('content')
   
    @for ($i = 0; $i < 20; $i++)

        @for ($a = 0; $a <= $i; $a++)
            @if ($a % 2 == 0)
                 {{ "*" }}
            @else
                {{ "#" }}
            @endif
        @endfor
        {{ "-> baris ke" . " " . $i+1 }}
        <br>

    @endfor

@endsection