<html>
   <head>
    <title>create</title>
    <body>

        <form method="post" action="{{action([\App\Http\Controllers\pagescontoller::class,'store']  )}}" enctype="multipart/form-data">
    @csrf
            
            <label>name:</label>
            <input type="text" name="name" required>
            <label>attandence:</label>
            <input type="text" name="attandence" required>
            <label>Age:</label>
            <input type="number" name="age" required>
            <label>image:</label>
            <input type="file" name="image" required>

            <input type="submit">
</form>
</body></head>
</html>



