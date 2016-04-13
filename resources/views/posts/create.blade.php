{{ Form::open(['route' => 'posts.store', 'method' => 'POST']) }}

{{ Form::text('title', 'test') }}
{{ Form::text('sub_title', '{value}') }}
{{ Form::text('page_views', '{value}') }}
{{ Form::textarea('content', '{value}') }}
{{  Form::submit('submit') }}

{{ Form::close() }}