@extends('auth.layouts')
@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Add New Image</div>
            <div class="card-body">
                <div class="row">
                    @if(count($galleries)>0)
                    @foreach ($galleries as $gallery)
                    <div class="col-sm-2">
                        <div>
                            <a class="example-image-link" href="{{$gallery->original_pict}}" data-lightbox="roadtrip" data-title="{{$gallery->description}}">
                                <img class="example-image img-fluid mb-2" src="{{asset('storage/posts_image/'.$gallery->picture )}}" alt="image-1" />
                            </a>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('gallery.destroy', $gallery->id) }}" method="POST">
                                <a href="{{ route('gallery.edit', $gallery->id)}}" class="btn btn-outline-primary mt-2 ms-4 mb-2">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mt-2 mb-2">Delete</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <h3>Tidak ada data.</h3>
                    @endif
                    <div class="d-flex">
                        {{ $galleries->links() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="text-end">
            <a href="{{ route('gallery.create')}}" class="btn btn-outline-primary mt-2 ">Add Image</a>
        </div>
    </div>
</div>
@endsection