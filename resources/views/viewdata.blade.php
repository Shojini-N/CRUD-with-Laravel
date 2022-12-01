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
    <div align="center" >
        <form method="post" action="{{url('/search')}}" > 
            @csrf
            <input type="text" name="search" placeholder="Search..." />
            <br>
            <input type="submit" name="sub" />
        </form>
    </div>
        <div align="center" class="div1">
            <table border="1">
                <tr> 
                    <th> Name </th>
                    <th> Email </th>
                    <th> Image </th>
                    <th> Delete </th>
                    <th> Update </th>
                </tr>
                @foreach($data as $student)
                <tr>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td><img src="student/{{$student->image}}" height="50px" width="50px" /></td>
                    <td> <a href="{{url('delete',$student->id)}}" > Delete <a> </td>
                    <td> <a href="{{url('update_view',$student->id)}}"> Update </a> </td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>