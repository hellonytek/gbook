<?php include("sql/conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>GBook</title>
</head>
<body>
    <div style="border: 1px solid black;padding-bottom: 10px;">
        <?php include("include/header.php"); ?>
        <div id="content">
            <div id="container" class="yellow">
                <strong>GBook is better with an account.</strong><br>
                <span>Get access to liking and disliking posts, following and blocking people, posting, and much more when you join GBook.</span>
            </div><br>
            <div style="display: flex;">
                <?php include("include/nav-out.php"); ?>
                <div style="margin-left: 20px; width: 100%;">
                    <?php
                        $query = "SELECT * FROM posts ORDER BY statusid DESC";

                        $result = $conn->query($query);

                        /* fetch associative array */
                        while ($row = $result->fetch_assoc()) {
                            echo "<div id=\"container\">";
                            echo "<strong>@" . $row["postauthor"] . " </strong> <img src=\"static/verified.png\" height=\"12\"><br>";
                            echo "<span>" . $row["postcontent"] . "</span><br>";
                            echo "<span style=\"color: gray;font-size: 10px;\">" . date_format(date_create($row["posted"]), 'F t, Y') . "</span>";
                            echo "</div><br>";
                        }
                    ?>
                </div>
            </div>
            <?php include("include/footer.php"); ?>
        </div>
    </div>
</body>
</html>