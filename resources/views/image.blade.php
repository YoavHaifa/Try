<!doctype html>
<html>
    <head>
        <title> Image Page </title>
    </head>
    <body>
        <h1> Image will be here </h1>

        <form method="post" enctype="multipart/form-data">
            @csrf
            <label for="fileToUpload"> Select image to upload: </label>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>

        <img src='/profileImage'>
        
    </body>
</html>
