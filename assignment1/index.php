<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Favorite UI/UX Design Tools</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>My Favorite UI/UX Design Tools</h1>

    <div class="tools-container">
        <?php
        $sql = "SELECT * FROM uiux_tools ORDER BY rating DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0):
            while ($row = $result->fetch_assoc()):
        ?>
            <div class="tool-card">
                <img src="<?= $row['logo_url']; ?>" alt="<?= $row['tool_name']; ?> Logo" class="tool-logo">
                <h2><?= $row['tool_name']; ?></h2>
                <p><strong>Type:</strong> <?= $row['type']; ?></p>
                <p><strong>Platform:</strong> <?= $row['platform']; ?></p>
                <p><strong>Price:</strong> <?= $row['price']; ?></p>
                <p><strong>Rating:</strong> <?= $row['rating']; ?> ⭐</p>
                <p><strong>Released:</strong> <?= $row['release_year']; ?></p>
                <p><?= $row['description']; ?></p>

                <?php if ($row['rating'] >= 9): ?>
                    <p class="highlight">🔥 Top Rated Tool</p>
                <?php endif; ?>
            </div>
        <?php
            endwhile;
        else:
            echo "<p>No tools found.</p>";
        endif;

        $conn->close();
        ?>
    </div>
</body>
</html>
