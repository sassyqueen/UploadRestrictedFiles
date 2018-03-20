<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="jquery-3.1.1.min.js" type="text/javascript"></script>
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap.min.js" type="text/javascript"></script>
        <script src="validator.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $("#defaultForm").on('submit', function (e) {
                    e.preventDefault();

                    // Create a formdata object and add the files
                    var file = $('#fileUploadRequest')[0].files[0]
                    var fileData = new FormData();
                    fileData.append("fileUploadRequest", file);

                    $.ajax({
                        type: "POST",
                        url: "doUpload.php",
                        processData: false,
                        contentType: false,
                        data: fileData,
                        success: function (data) {
                            console.log(data); 
                            if (data == "1") {
                                alert("uploaded successfully");
                            } 
                            else {
                                alert("uploaded failed disgracefully");
                            }
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <div class="container">
            <form id="defaultForm" role="form" action="doUpload.php" method="post" data-toggle="validator"  enctype="multipart/form-data">
                <div class="form-group">
                    Upload oiip request email
                    <div class="input-group">

                        <input type="file" class="form-control" id="fileUploadRequest" name="fileUploadRequest" 
                               required data-error="Please upload a file" />

                    </div>
                    <div class="help-block with-errors"></div>
                </div>


                <div class="col-md-6 col-xs-6">
                    <input type="submit" class="btn btn-primary btn-block" value="Register"/></div>
                <div class="col-md-6 col-xs-6">
                    <input type="reset" class="btn btn-default btn-block" value="Clear Fields"/></div>
            </form> </div> 
    </body>
</html>
