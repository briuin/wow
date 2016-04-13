Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PATCH'])
/* 略 */
Form::close()