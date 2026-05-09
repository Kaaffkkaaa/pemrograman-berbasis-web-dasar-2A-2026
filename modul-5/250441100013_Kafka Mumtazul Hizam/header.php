<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judulHalaman; ?></title>
    <link rel="stylesheet" href="css/style.css?v=2">
</head>
<body>

    <nav class="navbar">
        <a href="index.php" class="logo">@kaffka_aa</a>
        <div class="nav-links">
            <a href="index.php" <?php if ($halamanAktif == "profil") echo 'class="active"'; ?>>Profil</a>
            <a href="timeline.php" <?php if ($halamanAktif == "timeline") echo 'class="active"'; ?>>Timeline</a>
            <a href="blog.php" <?php if ($halamanAktif == "blog") echo 'class="active"'; ?>>Blog</a>
        </div>
    </nav>

    <div class="container">
