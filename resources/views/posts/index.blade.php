@if (session('message'))
    <div class="alert alert-danger alert-dismissible"
         role="alert">
        <button type="button" class="close"
                data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>錯誤!</strong> {{ session('message') }} </div>
@endif

@foreach($posts as $post)
    <h2>{{ $post->title }}</h2>
    <h3>{{ $post->sub_title }}</h3>
    <p>{!! $post->content !!}</p>
@endforeach