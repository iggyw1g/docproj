<?php
// Default content based on template (you can expand this for other templates)
$template = isset($_GET['template']) ? $_GET['template'] : 'default';

// Default content for a new document
$content = "";
if ($template === 'default') {
    $content = "Title: New Document\n\nDate: " . date('Y-m-d') . "\n\nContent: \n\n";
} else {
    $content = "Default template content. Customize this!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Create a New Document</h1>
        <form action="save_doc.php" method="POST">
            <div class="form-group">
                <label for="docName">Document Name:</label>
                <input type="text" class="form-control" id="docName" name="docName" required>
            </div>
            <div class="form-group">
                <label for="docContent">Document Content:</label>
                <!-- Pre-fill the textarea with dynamic content -->
                <textarea class="form-control" id="docContent" name="docContent" rows="10" required><?php echo htmlspecialchars($content); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save Document</button>
        </form>
    </div>
</body>
</html>