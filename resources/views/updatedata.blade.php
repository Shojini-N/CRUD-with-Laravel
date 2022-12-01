<!DOCTYPE html>
<html>
    <head>
        <title>Test Project</title>
        <meta charset="utf-8" />
</head>
<style>
    .div1{
        margin:10px;
    }
   
    table{
        border:1px solid #ccc;
    }
    
</style>
    <body>
    <div align="right"> <a href="{{url('/')}}"> Home </a> </div>
        <div align="center" class="div1">
        
       <h4> Update Details </h4>

       <form method="post" action="{{url('update',$data->id)}}" enctype="multipart/form-data">
        @csrf
<div>
       <input type="text" name="name" value="{{$data->name}}" />
</div>
<div>
       <input type="text" name="email" value="{{$data->email}}" />
</div>
<div>
       <img src="/student/{{$data->image}}" height="100px" width="100px" />
</div>
<div>
    <input type="file" name="file" />
</div>
<div>
    <input type="submit" name="submit" />
</div>
        </form>

            
        </div>
    </body>
</html>