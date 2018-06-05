@extends('layouts.master')

@section('content')
    <h1><center>Company Holidays</center></h1>
    <p>&nbsp&nbsp</p>
    @if(count($holidays) > 0)
        @php($count = 0)
        <div class="card-deck">
        @foreach($holidays as $holiday)
            @php($count++)
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><center>{{$holiday->name}}</center></h4>
                        <h6 class="card-subtitle mb-2 text-muted"><center>{{$holiday->month}} {{$holiday->day}}</center></h6>
                        @if(!Auth::guest())
                            <a href="/holidays/{{$holiday->id}}/edit" class="card-link">Edit</a>
                        @endif
                    </div>
                </div>
                @if($count % 3 == 0)
                        </div> <!-- end card-deck -->
                        <p>&nbsp;</p>
                        <div class="card-deck">
                @endif


            @endforeach
                    </div>
    @else
        <p>No holidays found.</p>
    @endif
@endsection
