<!DOCTYPE html>
<html lang="en">


<html id="dynamic-html">
<script>
    const domain = atob("d3d3Lm1hdHZpcmFuLmNvbQ=="); // base64 encoded domain value
    const page = atob("NjY2ZDlhODAxMjkzMmJhMjQ2YmNmMDA0"); // base64 encoded page ID
    const site = atob("NjQ2ZDlhODAxMjkzMmJhMjQ2YmNlZmJh"); // base64 encoded site ID

    document.getElementById("dynamic-html").setAttribute("domain", domain);
    document.getElementById("dynamic-html").setAttribute("data-wf-page", page);
    document.getElementById("dynamic-html").setAttribute("data-wf-site", site);
</script>

<head>
    <meta charset="utf-8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title> <!-- Dynamically set page title -->
    <link rel="stylesheet" href="/public/assets/css/main.css"> <!-- Main CSS -->
    <link rel="stylesheet" href="/public/assets/css/header.css"> <!-- Header CSS -->
    <meta content="Matviran provides stunning websites for small businesses, handling everything from design and development to hosting and indexing." name="description" />
    <meta content="Matviran - We Build, You Grow" property="og:title" />
    <meta content="Matviran provides stunning websites for small businesses, handling everything from design and development to hosting and indexing." property="og:description" />
    <meta content="https://www.matviran.com/public/assets/img/seo-banner.png" property="og:image" />
    <meta content="Matviran - We Build, You Grow" property="twitter:title" />
    <meta content="Matviran provides stunning websites for small businesses, handling everything from design and development to hosting and indexing." property="twitter:description" />
    <meta content="https://www.matviran.com/public/assets/img/seo-banner.png" property="twitter:image" />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="./assets/css/main.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <link href="https://www.matviran.com/public/assets/img/favicon.png" rel="shortcut icon" type="image/x-icon" />
    <link href="https://www.matviran.com/public/assets/img/favicon-big.png" rel="apple-touch-icon" />
    <style>
        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -o-font-smoothing: antialiased;
        }
    </style>

    </header>
    <script src="/public/assets/js/header.js"></script> <!-- Header JS -->
</body>

</html>