
<!DOCTYPE html>
<?php require "fileHandling.php";?>

<html>
    <head>
        <meta charset="UTF-8">
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
        
        $file = "Uploads/uploadedFile.xml";
$uploadedFile = simplexml_load_file($file);
print_r($uploadedFile->children());
foreach($uploadedFile->children() as $channel) {
    echo $channel -> title.",";
    echo $channel -> start.",";
    echo $channel -> end.",";
    echo $channel -> year. PHP_EOL;
    
    
}
        ?>
        
        
    </body>
</html>
