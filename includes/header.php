<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>                             <?php echo $metaTitle; ?> | Mathieu Portfolio</title>
    <meta name="description" content="  <?php echo $metaDescription; ?>">

    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="icon" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" sizes="192x192" href="img/android-chrome-192x192.png">
    <link rel="icon" sizes="512x512" href="img/android-chrome-512x512.png">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/image-zoom.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&family=Yeseva+One&display=swap" rel="stylesheet">

    <script defer src="https://code.jquery.com/jquery-3.6.3.js" ></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"  referrerpolicy="no-referrer"></script>

    <script defer src="js/jquery.validate.min.js"></script>  <!-- JS pour le formulaire -->

    <script defer src="js/script.js" ></script>
</head>
<body>

<header class="navbar container">
        <nav>
            <ul class="row ac nav-menu">
                <li class="nav-item">
                    <a href="index.php"         <?php if ($pageId === 'homepage') echo ' class="active"'; ?>    >Homepage</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php"       <?php if ($pageId === 'contact') echo ' class="active-none"'; ?>      >Contact</a>
                </li>
                <li class="nav-item">
                    <a href="production.php"    <?php if ($pageId === 'production') echo ' class="active"'; ?> >Production</a>
                </li>
            </ul>
            
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

    <main>            