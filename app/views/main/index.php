<head>
    <style>
        .error {
            color: red;
            text-align: left;
            padding: 0;
            margin-bottom: 1em;
        }
        .card {
            border-color: #1C0878;
            color: #1C0878;
            border-radius: 1em;
            text-align: center;
            padding: 1em;
        }
    </style>
</head>

<body>
    <h4 class="error"><?php if($err != '') { echo $err; }?></h4>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
        <?php foreach ($confs as $val): ?>
        <div class="col">
            <a href="/conference_site/details?id=<?= $val['id']?>" style="text-decoration: none; color: #1C0878">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($val['title']); ?></h5>
                        <p class="card-text"><?= htmlspecialchars($val['date']); ?></p>
                    </div>
                    <div class="card-body">
                        <a href="/conference_site/edit?id=<?= $val['id']?>" class="btn btn-primary me-2">Edit</a>
                        <a href="/conference_site/index?id=<?= $val['id']?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</body>