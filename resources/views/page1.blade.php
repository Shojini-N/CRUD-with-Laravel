<!DOCTYPE html>
<html>
    <head>
        <title>Test Project</title>
        <meta charset="utf-8" />
</head>
<style>
.div1{
    display:flex;
    gap:15px;
}
.div1 div{
    background:#ccc;
    padding:10px;
    border-radius:5px;
}
</style>
    <body>
        <h1> Test Project </h1>
        <div class="div1">
            <div><a href="{{url('/')}}"> Home Page</a> </div>
            <div><a href="{{url('/insert')}}"> Form Insert Page </a></div>
            <div><a href="{{url('/view')}}"> Form View Page </a></div>
            <div><a href="{{url('/view')}}"> Form Delete Page </a></div>
        </div>
    </body>
</html>