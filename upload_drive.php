<?php
require 'vendor/autoload.php';

$client = new Google_Client();
$client->setAuthConfig('service-account.json.json');
$client->addScope(Google_Service_Drive::DRIVE);

$service = new Google_Service_Drive($client);
$folderId = "1WcrDzowfH_XqDZbgOn1brxknsKNUhR4c"; 

if(isset($_FILES['file'])){
    $file = $_FILES['file'];

    $fileMetadata = new Google_Service_Drive_DriveFile([
        'name' => $file['name'],
        'parents' => [$folderId]
    ]);

    $content = file_get_contents($file['tmp_name']);

    $uploadedFile = $service->files->create($fileMetadata, [
        'data' => $content,
        'mimeType' => $file['type'],
        'uploadType' => 'multipart'
    ]);

    echo json_encode(['success'=>true, 'id'=>$uploadedFile->id, 'name'=>$uploadedFile->name]);
} else {
    echo json_encode(['success'=>false, 'msg'=>'No file uploaded']);
}