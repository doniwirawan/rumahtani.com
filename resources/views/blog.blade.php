@extends('index')

@section('konten')
    <p class="title greys pt-4 text-capitalize" id="">Blog Kami</p>
        <hr>
        <div class="blog-container text-capitalize">
            <div class="blog-row">

                <!-- looping disini -->
            @foreach($artikel as $p)
                <div class="blogs-item ">
                    <div class="image-item-wrapper mb-1">
                        <img src="{{ $p->gambar}}"
                            alt="{{ $p->judul}}">
                    </div>
                    <a href="content1.html" class="blog-item-title h4">{{ $p->judul}}</a>
                    <p class="desc-blog-item mt-1">{{ $p->isi}}</p>
                </div>
                <!-- berakhir looping disini -->
                @endforeach
            </div>
            
        </div>
@endsection