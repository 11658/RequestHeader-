<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTTP Request Header Viewer</title>
    <style>
        pre {
            background-color: #f7f7f7;
            padding: 1rem;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <h1>HTTP Request Header</h1>
    <pre><?php echo json_encode(apache_request_headers() ?: getallheaders(), JSON_PRETTY_PRINT); ?></pre>
</body>
</html>
