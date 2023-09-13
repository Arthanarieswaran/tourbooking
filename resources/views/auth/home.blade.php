@extends('auth.navigation')


@section('content')

<html>
    <head>
        <style>
            .con{
                margin-top: 20px;
                display: inline-grid;
                
            }
            .card{
                height: 60vh;
                width: 40vh;
                background-color: #f7f7f7;

            }
            </style>

    </head>

    <body>
        
        @foreach($places as $place)
            
        
        <div class="con">
            <div class="card" style="position: relative;"> 
                <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3"> 
                    <div class="col"> <div class="card h-100 shadow-sm"> 
                        <img src="https://www.freepnglogos.com/uploads/notebook-png/download-laptop-notebook-png-image-png-image-pngimg-2.png" class="card-img-top" alt="...">
                         <div class="card-body">
                             <div class="clearfix mb-3">
                                 <span class="float-start badge rounded-pill bg-primary">ASUS Rog</span>
                                  <span class="float-end price-hp">12354.00&euro;</span> 
                             </div>
                                 <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit.  Saepe, iste optio laudantium sed aliquam sequi.</h5> 
                            <div class="text-center my-4"> <a href="#" class="btn btn-warning">Check offer</a></div>
                         </div>
                    </div>
                </div>
            </div> 
        </div>
        @endforeach

        
    </body>
</html>
    
@endsection