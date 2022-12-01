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
    .div2{
        padding:50px;
    }
    .div2 div{
        gap:10px;
        padding:10px;
    }
</style>
    <body>

    <div align="right"> <a href="{{url('/')}}"> Home </a> </div>
        <div align="center" class="div1">
            <form method="post" enctype="multipart/form-data" action="{{url('upload')}}">
                @csrf
                <div class="div2">
                    <div>
                        <label> Student Name </label>
                        <input type="text" name="name" />
                    </div>
                    <div>
                        <label> Student Email </label>
                        <input type="text" name="email" />
                    </div>
                    <div>
                        <label> Student Photo </label>
                        <input type="file" name="image" />
                    </div>
                    <div>
                        <input type="submit" name="sub" />
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>