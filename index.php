
<!DOCTYPE html>
<?php require "fileHandling.php";?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="moodsliderStyle.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <title>Sky</title>
    </head>
    <body>
        <div class="userUpload">
            <div class="container-fluid">
                <div class="row">  
                    <h1> Upload your file here</h1>
                </div>
                <div class="form-row form-group">

                    <form action="index.php" 
                          method="post"
                          enctype="multipart/form-data">

                        <input type="hidden"
                               name="MAX_FILE_SIZE"
                               value="10000000" />

                        <input class="btn btn-md btn-primary" type="file" name="uploadedFile" />

                        <input class="btn btn-md btn-primary" type="submit" value="send"/>
                    </form>
                </div>

            </div>

        </div>
        <?php
        try {
            if (!empty($_FILES)) {
                $file = 'uploadedFile';
                $AllowedTypes = ["text/xml"];
                checkFile($file, $AllowedTypes);
            }
        } catch (Exception $e) {
            $e->getMessage();
        }
        ?>
    </body>
</html>
