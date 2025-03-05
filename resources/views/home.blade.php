<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
    
</head>
<body>
    <div class="container">
        <div class=""> <h3 style="text-align:center">Sampel wedsite</h3></div>
        <br>
        @if (session('status'))
               
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ session('status') }}.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
          </button>
       </div>
        @endif
       <div class="container"> <a href="/posts/create" type="button" class="btn btn-success">Create New</a></div>
    
        <div class="card">
           
            <div class="card-header" style="text-align:center">
                <h5>Content</h5>
               
            </div>
          
            <div class="card-body">
                
                 @foreach ($post as $post)
                 <div class="">
                    <h5 class="card-title" >{{$post->name}}</h5>
                    <p class="card-text">{{$post->description}}</p>
                 </div>                     
                 <br>
                    <div class="btn-group" >
                              <div class=""><a href="/posts/{{$post->id}}" class="btn btn-primary" >View</a></div>
                               <div class=""><a href="/posts/{{$post->id}}/edit" class="btn btn-warning" >Edit</a></div>
                          <form action="/posts/{{$post->id}}" method="post">
                                @csrf
                                 @method('DELETE')
                                <button type="submit"  class="btn btn-danger">Delete</button>
                           </form>
                    </div>
                 <hr>
                @endforeach
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>