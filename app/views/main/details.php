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
                    <h5 class="card-title"><?= htmlspecialchars($conf['title']); ?></h5>
                    <p class="card-text"><?= htmlspecialchars($conf['date']); ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item <?php if($conf['address_latitude'] == NULL or $conf['address_longitude'] == NULL) {echo 'd-none';} ?>">Address:<br><br>
                        <div id="map-container-google" class="z-depth-1-half map-container">
                            <iframe src="https://maps.google.com/maps?q=<?=htmlspecialchars($conf['address_latitude'])?>,<?=htmlspecialchars($conf['address_longitude'])?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                                    style="border:0" allowfullscreen></iframe>
                        </div>
                    <li class="list-group-item">Country: <?= htmlspecialchars($conf['country']); ?></li>
                </ul>
                <div class="card-body">
                    <a href="/conference_site" class="btn btn-primary me-2">Back</a>
                    <a href="/conference_site/index?id=<?= $conf['id']?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
</body>