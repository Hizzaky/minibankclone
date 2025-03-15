<?php 
	
	// use filestack\filestack\FilestackClient;
	include 'filestack\filestack\filestackClient.php';
	$client = new FilestackClient('AhtkLWUf6So2k2776Yckfz');


 

	// $filepath = '/path/to/file';
	$filepath = $_FILES['file']['tmp_name'];
	$filelink = $client->upload($filepath);

	# get metadata of file
	// $metadata = $client->getMetaData($filelink->handle, $fields);

	# get content of a file
	// $content = $client->getContent($filelink->handle);

	# download a file
	// $destination = '/path/to/file';
	// $result = $client->download($filelink->handle, $destination);

	# overwrite a file
	// $filelink2 = $client->overwrite('/path/to/file', $filelink->handle);


 ?>