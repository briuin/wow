@if ($errors->any())
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close"
                data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>錯誤!</strong> 請修正您輸 的資料
        @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach
    </div>
@endif

{{ Form::open(['route' => 'posts.store', 'method' => 'POST']) }}

{{ Form::text('title', 'test') }}
{{ Form::text('sub_title', '{value}') }}
{{ Form::text('page_views', '{value}') }}
{{ Form::textarea('content', '{value}') }}
{{  Form::submit('submit') }}

{{ Form::close() }}