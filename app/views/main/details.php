<head>
    <style>
        .card {
            border-color: #1C0878;
            color: #1C0878;
        }
        .list-group-item {
            border-color: #1C0878;
            color: #1C0878;
        }
        .map-container{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
        .map-container iframe{
            left:0;
            top:0;
            height:90%;
            width:90%;
            position:absolute;
        }
    </style>
</head>

<body>
    <div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $conf['title']; ?></h5>
                    <p class="card-text"><?= $conf['date']; ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item <?php if($conf['address_latitude'] == NULL or $conf['address_longitude'] == NULL) {echo 'd-none';} ?>">Address:<br><br>
                        <div id="map-container-google" class="z-depth-1-half map-container">
                            <iframe src="https://maps.google.com/maps?q=<?=$conf['address_latitude']?>,<?=$conf['address_longitude']?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                                    style="border:0" allowfullscreen></iframe>
                        </div>
                    <li class="list-group-item">Country: <?= $conf['country']; ?></li>
                </ul>
                <div class="card-body">
                    <div class="btn-group me-2">
                        <a href="/conference_site" class="btn btn-primary">Back</a>
                    </div>
                    <div class="btn-group">
                        <form action='/conference_site/deleted' method='post'>
                            <input type='hidden' name='del' value="<?= $conf['id']; ?>" />
                            <input type='submit' class="btn btn-danger" value='Delete'>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>