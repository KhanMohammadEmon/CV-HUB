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
    <form action="" method="post" enctype="multipart/form-data">

        <h3>Skills (Max: 3)</h3>
        <div id="skills-container">
            <div class="skills-entry">
                <label for="skill_name_1">Skillset Name:</label>
                <input type="text" name="skill_name_1" required><br>

                <label for="skill_level_1">Skill Level:</label>
                <select name="skill_level_1" required>
                    <option value="1">Novice</option>
                    <option value="2">Beginner</option>
                    <option value="3">Competent</option>
                    <option value="4">Proficient</option>
                    <option value="5">Expert</option>
                </select><br>

                <hr>
            </div>
        </div>

        <button type="button" id="add-skill">Add Skill</button>

        <input type="submit" value="Submit">
    </form>

    <script>
    $(document).ready(function() {
        var skillsCount = 1; // Initial entry count

        $("#add-skill").click(function() {
            if (skillsCount < 3) {
                skillsCount++;

                var newSkillsEntry = $(".skills-entry:first").clone();
                newSkillsEntry.find("input").val(""); // Clear input values
                newSkillsEntry.find("label").each(function() {
                    var labelFor = $(this).attr("for");
                    $(this).attr("for", labelFor.replace("_1", "_" + skillsCount));
                });
                newSkillsEntry.find("input").each(function() {
                    var inputName = $(this).attr("name");
                    $(this).attr("name", inputName.replace("_1", "_" + skillsCount));
                });

                $("#skills-container").append(newSkillsEntry);
            } else {
                alert("Maximum of 3 skills entries allowed.");
            }
        });
    });
    </script>
</body>

</html>