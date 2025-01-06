<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script>
        function openNewPage() {
            window.location.href = "new_doc.html";
        }
        function toggleUploadForm() {
            const uploadDiv = document.getElementById("uploadForm");
            uploadDiv.style.display = uploadDiv.style.display === "none" ? "block" : "none";
        }
    </script>
   <body>
    <div class="container mt-5">
        <!-- Button to show the upload form -->
        <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='new_doc.php?template=default'">Create New Doc</button>
        <button type="button" class="btn btn-secondary btn-lg" onclick="toggleUploadForm()">Upload Doc</button>
        <!-- Hidden upload form -->
        <div id="uploadForm" style="display: none;" class="mt-3">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload file</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
        </div>
    </div>
</html>