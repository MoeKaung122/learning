<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container">
    <div class=""> <h3 style="text-align:center">Sampel wedsite</h3></div>
    <br>
        <div class="card">
           
        <div class="card-header" style="text-align:center">
                <h5>Show</h5>
            </div>
            <br>
            
            <br>
            <div class="card-body">
                
                <div class="" style="text-align:center">
                    <h5 class="card-title" >{{$post->name}}</h5>
                    <p class="card-text">{{$post->description}}</p>
                    <p>{{ 'Categoise :' .  $post->category->name}}</p>
                 </div>  
                 <br>
                 <a href="/posts" type="button"  class="btn btn-warning"> Back</a> 
                    <hr>
                
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>