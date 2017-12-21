<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>Airtable</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" type="text/css" media="all" href="../css/stylesheet.css" />		
	</head>

	<body>	
	
		<div class="page-wrapper">
	
			<div class="header-wrapper">	
				<h1>Airtable->MySQL</h1>
				<a href="/datasync" style="font-size: 25px; color: #00B9E6;     text-decoration: underline;">Back</a>
			</div>
		
			<div class="content-wrapper">
		
				<ul>
		
					<?php
						//dbconnet
						$servername = "localhost";
						$username = "root";
						$password = "root";
						$dbname = "nycbudgets";
						$sql = '';

						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);

						// Check connection
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						} 
						echo "Connected successfully. ";

						$sql = "TRUNCATE TABLE organizations;";

						if ($conn->query($sql) === TRUE) {
						    echo "New record created successfully";
						} else {
						    echo "Error: " . $sql . "<br>" . $conn->error;
						}

						// Airtable API key. 
						// To get your API key, visit: https://airtable.com/api
						define ( 'AIRTABLE_API_KEY', 'keyIvQZcMYmjNbtUO' );

						// Airtable App ID.
						// To get this value, look at the Authentication notes in the API docs.
						// Example: $ curl https://api.airtable.com/v0/appZZ12rVdg6qzyC/foo...
						// .. where "appZZ12rVdg6qzyC" is the App ID.
						define ( 'AIRTABLE_APP_ID', 'appd1eQuF0gFcOMsV' );
						
						// Airtable API URL.
						// Default: https://api.airtable.com/v0/
						define ( 'AIRTABLE_API_URL', 'https://api.airtable.com/v0/' );
					
						// Initialize a curl session.
						$ch = curl_init();
						
						// Specify the type of HTTP request that we'll be sending.
						// In this case, we'll be sending GET requests.
						curl_setopt( $ch, CURLOPT_HTTPGET, 1 );		
						
						// Request that the raw output be returned.
						curl_setopt( $ch, CURLOPT_RETURNTRANSFER, TRUE );	
						
						// Specify a timeout value (in seconds).
						curl_setopt( $ch, CURLOPT_TIMEOUT, 10 );

						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);	

						// Create an array to use to pass parameters via HTTP headers.
						$http_headers = array();						
						
						// We need to pass the AirTable API key as an HTTP header, so add it to the array.
						$http_headers[] = 'Authorization: Bearer ' . AIRTABLE_API_KEY;		
						
						// Specify the HTTP headers to send.
						curl_setopt( $ch, CURLOPT_HTTPHEADER, $http_headers );	
						// Initialize the offset.
						$offset = '';

						while ( ! is_null ( $offset ) ) {

						$airtable_url = AIRTABLE_API_URL . AIRTABLE_APP_ID;
							// We're also specifying a table.
							$airtable_url .= '/Organizations';
							// And we're specifying a view. The API will honor any filters 
							// that have been applied to the view, as well as any sort
							// order that has been applied to it.
							$airtable_url .= '?api_key=' . AIRTABLE_API_KEY;
							// By default, the APi will return 100 records per request.
							// You can specify smaller batch sizes using the "limit"
							// query parameter, as we are here.																					
							//$airtable_url .= '&limit=10';
							// We're using an offset to get specific batches of records.
							$airtable_url .= '&offset=' . $offset;							
							// We're also specifying a sort order for the request,
							// which will override any sort order that has been 
							// applied on the view.
							$airtable_url .= '&sortField=ID&sortDirection=asc';

							curl_setopt( $ch, CURLOPT_URL, $airtable_url );		
									
							// Execute the request.
							$response_json = curl_exec( $ch );
		
							// If there was a curl error encountered while making the call...
							if ( curl_errno( $ch ) != 0 ) {
		
								// Show an error message with the CURL error code.
								// For a complete list of error codes, see:
								// http://curl.haxx.se/libcurl/c/libcurl-errors.html 
								echo '<h2>CURL Error</h2>';
								echo 'Code: ' . curl_errno( $ch );
								die;
		
							} 

							// Decode the JSON-formatted response that was received from the Airtable API.
							$airtable_response = json_decode( $response_json, TRUE );
		
							// If the Airtable API returned an error...
							if ( array_key_exists ( 'error', $airtable_response ) ) {
		
								// Show an error message.
								echo '<h2>Airtable Error</h2>';
								echo 'Type: ' . $airtable_response['error']['type'] . '<br />';
								echo 'Message: ' . $airtable_response['error']['message'] . '<br />';
								die;			
		
							}

							$sql = '';

							foreach ( $airtable_response['records'] as $record ) {
					
								// Add each artist to the list, wrapped with a URL to the details page.
								// Note that we're passing the Airtable-assigned record ID.
								echo '<li>';
								echo '<a href="artist.php?id=' . $record['id'] . '">';
								echo $record['fields']['name'] . '</a>';
								echo '</li>';

								$organizations_id = str_replace("'","\'",$record['fields']['ID']);
								$alternate_name = str_replace("'","\'",$record['fields']['alternate_name']);
								$name = str_replace("'","\'",$record['fields']['Name']);
								$contacts = implode(",", $record['fields']['Contacts']);		
								$description = str_replace("'","\'",$record['fields']['short description']);
								$description =  mb_convert_encoding($description, "HTML-ENTITIES", "UTF-8");
								$services = implode(",", $record['fields']['services']);
								$phones = implode(",", $record['fields']['phones']);
								$locations = implode(",", $record['fields']['locations']);
								$contact = implode(",", $record['fields']['contact']);
								$details = implode(",", $record['fields']['details']);
								$program = implode(",", $record['fields']['program']);
								$sources = implode(",", $record['fields']['Sources']);
								$logo = '';
								foreach ($record['fields']['Logo'] as $key => $image) {
									try {
										$logo .= $image["url"].',';
									} catch (Exception $e) {
										echo 'Caught exception: ',  $e->getMessage(), "\n";
									}
								}

								$sql = "INSERT INTO organizations (organization_id, organizations_id, alternate_name, name, dedupe, type, child_of, contacts, website, description, logo, checkbook, internalnotes, contacts_link, services, phones, locations, contact, details, program, email, legal_status, tax_status, tax_id, year_incorporated, sources)
								VALUES ('{$record['id']}', '{$organizations_id}', '{$alternate_name}', '{$name}', '{$record['fields']['dedupe']}', '{$record['fields']['Type']}', '{$record['fields']['Child of']}', '{$contacts}', '{$record['fields']['website']}',  '{$description}', '{$logo}', '{$record['fields']['checkbook']}', '{$record['fields']['internalnotes']}', '{$record['fields']['contacts link']}', '{$services}', '{$phones}', '{$locations}', '{$contact}', '{$details}', '{$program}', '{$record['fields']['email']}', '{$record['fields']['legal_status']}', '{$record['fields']['tax_status']}', '{$record['fields']['tax_id']}', '{$record['fields']['year_incorporated']}', '{$sources}');";

								if ($conn->query($sql) === TRUE) {
								    echo "New record created successfully";
								} else {
								    echo "Error: " . $sql . "<br>" . $conn->error;
								}
							}
							$offset = $airtable_response['offset'];
						}
						$conn->close();
						// Close the curl session.
						curl_close( $ch );

		
					?>				
	
				</ul>
		
			</div>
		
		</div>
		
	</body>
	
</html>