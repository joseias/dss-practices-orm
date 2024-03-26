<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/styles.post.css')}}" rel="stylesheet" type="text/css">
  </head>
  <body>
     @if ($errors->any())
    
						<div class="alert alert-danger">
							<ul>
            @foreach ($errors->all() as $error)
                
								<li>{{ $error }}</li> @endforeach </ul>
    </div> @endif 
    
    <form id="form_post" action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
      <div class="container">
        <h1>Nuevo post</h1>
        <hr>
        <label for="title">
          <b>Título:</b>
        </label>
        <input value="{{ old('title') }}" type="text" placeholder="Título" name="title" id="title">
        <label for="content">
          <b>Contenido:</b>
        </label>
        <textarea value="{{ old('content') }}" id="Contenido" form="form_post" name="content" placeholder="..." style="height:200px"></textarea>
        <input type="submit" value="Enviar">
      </div>
    </form>
    </div>
  </body>
</html>