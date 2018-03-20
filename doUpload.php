<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "dbconn.php";
$requestfile = $_FILES['fileUploadRequest'];


$targetPath = "documents/";

//TODO: modify the following code to store the name of the image file into variable $fileName

$fileName = basename($_FILES['fileUploadRequest']['name']);
$completePath = $targetPath . $fileName;
//$fileType = strtolower(pathinfo($targetPath, PATHINFO_EXTENSION));
$fileType = $_FILES['fileUploadRequest']['type'];

//allowed file types
$allowed = array('application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/pdf');
$allowedExts = array("pdf", "doc", "docx");
$extension = end(explode(".", $_FILES['fileUploadRequest']['name']));
$result = false;
if (isset($requestfile)) {
    
    if (($_FILES["fileUploadRequest"]["type"] == $allowed[0]) ||( $_FILES["fileUploadRequest"]["type"] == $allowed[1]) && in_array($extension, $allowedExts)) {
        if (move_uploaded_file($_FILES['fileUploadRequest']['tmp_name'], $completePath)) {
            // build query to update database
            $queryInsert = "INSERT INTO testDb(`file`)VALUES('$fileName')";
            // execute query
            $result = mysqli_query($link, $queryInsert) or die;
            
           
        } 
    }
    
    mysqli_close($link);

    echo json_encode($result);

}


