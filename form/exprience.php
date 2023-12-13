<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <h2>User Information Form</h2>
    <form action="process.php" method="post" enctype="multipart/form-data">

        <h3>Experience (Max: 3)</h3>
        <div id="experience-container">
            <div class="experience-entry">
                <label for="title_1">Title:</label>
                <input type="text" name="title_1" required><br>

                <label for="description_1">Description:</label>
                <textarea name="description_1" rows="4" required></textarea><br>
                <hr>
            </div>
        </div>

        <button type="button" id="add-experience">Add Experience</button>

        <!-- Repeat the above block for experience entries 2 and 3 -->

        <input type="submit" value="Submit">
    </form>


    <script>
    $(document).ready(function() {
        var experienceCount = 1; // Initial entry count

        $("#add-experience").click(function() {
            if (experienceCount < 3) {
                experienceCount++;

                var newExperienceEntry = $(".experience-entry:first").clone();
                newExperienceEntry.find("input, textarea").val(""); // Clear input values
                newExperienceEntry.find("label").each(function() {
                    var labelFor = $(this).attr("for");
                    $(this).attr("for", labelFor.replace("_1", "_" + experienceCount));
                });
                newExperienceEntry.find("input, textarea").each(function() {
                    var inputName = $(this).attr("name");
                    $(this).attr("name", inputName.replace("_1", "_" + experienceCount));
                });

                $("#experience-container").append(newExperienceEntry);
            } else {
                alert("Maximum of 3 experience entries allowed.");
            }
        });
    });
    </script>
</body>

</html>