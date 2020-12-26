@extends('index')

@section('konten')
<p class="title greys pt-4 text-capitalize" id="">Blog Kami</p>
<hr>
<div class="blog-container text-capitalize">
    <div class="blog-row">

        <!-- looping disini -->
        @foreach($artikel as $p)
        <a href="/blog/konten/{{ $p->id }}">
            <div class="blogs-item ">
                <div class="image-item-wrapper mb-1">
                    <img src="{{ $p->gambar}}" alt="{{ $p->judul}}">
                </div>
                <a href="/blog/konten/{{ $p->id }}" class="blog-item-title h4">{{ $p->judul}}</a>
                <p class="desc-blog-item mt-1">{{ $p->isi}}</p>
            </div>
        </a>

        <!-- berakhir looping disini -->
        @endforeach
    </div>
    <div class="pagination">
        {{ $artikel->links("pagination::bootstrap-4") }}
    </div>


</div>



@endsection
