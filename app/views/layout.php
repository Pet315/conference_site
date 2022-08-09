<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--    Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!--    Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="public/favicon_data/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/favicon_data/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/favicon_data/favicon-16x16.png">
    <link rel="manifest" href="public/favicon_data/site.webmanifest">

    <style>
        .title {
            color: #1C0878;
            text-align: left;
            padding: 0;
            margin-bottom: 1em;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1C0878">
        <div class="container">
            <a class="navbar-brand p-0" href="/conference_site">
                <img src="public/images/CA.png" alt="CA" width="90">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/conference_site">Conference alerts</a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($title == 'Home page. List of conferences') {echo 'active';} ?>" aria-current="page" href="/conference_site">Home page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($title == 'Create conference') {echo 'active';} ?>" href="/conference_site/create">Create conference</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacts">Contacts</a>
                    </li>
                </ul>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="/conference_site/create" class="btn btn-outline-light me-2" type="button">Create</a>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h4 class="title"><?= $title?></h4>
        <?= $content?>
        <?php if($content == '') {echo '<br><br><br>';} ?>
    </div>

    <br><br><br>
    <a name="contacts"></a>
    <footer class="text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h6 class="text-uppercase">Email</h6>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#" class="text-dark">info@conferencealerts.com</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h6 class="text-uppercase">Phone number</h6>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#" class="text-dark">+91 89250 317834</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h6 class="text-uppercase">Telegram</h6>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#" class="text-dark">@c_alerts_bot</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h6 class="text-uppercase">Instagram</h6>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#" class="text-dark">@conf_alerts</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>© 2022 Copyright:
            <a class="text-dark" href="#">MDB</a>
        </div>
    </footer>
</body>

</html>