@extends('source.main')



@section('container')
<h2>I WANNA SEE YOU SHINE</h2>

<table class="table table-hover mt-4">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Author</th>
        <th scope="col">Description</th>
      </tr>
    </thead>
    @if(is_countable($authors) && count($authors)>0)
    @foreach($authors as $author)
    <tbody>
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $author->image }}</td>
          <td>{{ $author->name }}</td>
          <td>{{ $author->description }}</td>
        </tr>
    </tbody>
    @endforeach
    @endif
</table>
{{ $authors->links() }}
@endsection
