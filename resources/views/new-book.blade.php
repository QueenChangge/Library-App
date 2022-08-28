@extends('source.main')

@section('container')
<h2>I LOVE THE WAY YOU NOT GIVE UP</h2>
{{-- @for($i = 0; $i<count($creates); $i++) --}}
    
{{-- @foreach($creates as $create)    
        <div class="card-group">
            @if(count($creates)%3!==0)
                <div class="card col-3">
                    <img src={{ $create->image }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $create->name }}</h5>
                        <p class="card-text">{{ $create->description }}</p>
                        <p class="card-text"><small class="text-muted">{{ $create->author->name ?? '' }}</small></p>
                    </div>
                </div>
            @else
            <br>
            @endif
        </div>
    @endforeach
@endfor --}}

<table class="table table-hover mt-4">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Book Name</th>
        <th scope="col">Book Description</th>
        <th scope="col">Author</th>
      </tr>
    </thead>
    @if(is_countable($creates) && count($creates)>0)
    @foreach($creates as $create)
    <tbody>
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $create->image }}</td>
          <td>{{ $create->name }}</td>
          <td>{{ $create->description }}</td>
          <td>{{ $create->author->name }}</td>
        </tr>
    </tbody>
    @endforeach
    @endif
</table>

        {{-- <div class="card-group">
            <div class="card col-3 m-1">
                <img src={{ $create->image }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $create->name }}</h5>
                    <p class="card-text">{{ $create->description }}</p>
                    <p class="card-text"><small class="text-muted">{{ $create->author->name ?? '' }}</small></p>
                </div>
            </div>
        </div> --}}
@endsection


