<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <h2>User Information Form</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <!-- Previous form fields -->

        <!-- Education Section -->
        <h3>Education (Max: 3)</h3>
        <div id="education-container">
            <div class="education-entry">
                <label for="school_1">School/College/University:</label>
                <input type="text" name="school_1" required><br>

                <label for="degree_1">Degree Name:</label>
                <input type="text" name="degree_1" required><br>

                <label for="from_1">From:</label>
                <input type="text" name="from_1" required><br>

                <label for="to_1">To:</label>
                <input type="text" name="to_1" required><br>

                <label for="grade_1">Grade/Score/CGPA:</label>
                <input type="text" name="grade_1" required><br>
                <hr>
            </div>
        </div>

        <button type="button" id="add-education">Add Education</button>

        <!-- Repeat the above block for education entries 2 and 3 -->

        <input type="submit" value="Submit">
    </form>
</body>
</html>
