@extends('admin/admin_layout/main')
@section('title', 'dashboard-berandapost')
@section('content-title', 'Beranda Post')

@section('content')
    <div class="section-body">
    @foreach ($post as $post)
        
        <div class="row">
            <div class="col-12 col-md-3 col-lg-3"></div>
            <div class="col-12 col-md-6 col-lg-6">
                <article class="article article-style-c">
                  <div class="article-header">
                    <div class="article-image" data-background="{{asset('assets/img/news/img13.jpg')}}">
                    </div>
                  </div>
                  <div class="article-details">
                    <div class="article-category"><a href="#">update</a> <div class="bullet"></div> <a href="#">{{ $post->created_at->format('d-m-Y') }}</a></div>
                    <div class="article-title">
                      <h2><a href="#">{{ $post->judul_post }}</a></h2>
                    </div>
                    <p>{{ $post->deskripsi_post }}</p>
                    <div class="article-user">
                      <img alt="image" src="{{asset('assets/img/avatar/avatar-1.png')}}">
                      <div class="article-user-details">
                        <div class="user-detail-name">
                          <a href="#">{{ $post->user->name }}</a> |
                          <a href="#">{{ $post->user->email }}</a>
                        </div>
                        <div class="text-job">Web Developer</div>
                      </div>
                    </div>
                  </div>
                  <div class="article-user">
                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="comment...">
                    
                    
                  </div>
                </article>
              </div>
            <div class="col-12 col-md-3 col-lg-3"></div>
        </div>
    @endforeach
    </div>
@endsection