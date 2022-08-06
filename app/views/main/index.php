<head>
    <style>
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
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
        <?php foreach ($confs as $val): ?>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $val['title']; ?></h5>
                    <p class="card-text"><?= $val['date']; ?></p>
                    <div class="btn-group me-2">
                        <form action='/conference_site/details' method='post'>
                            <input type='hidden' name='id' value="<?= $val['id']; ?>" />
                            <input type='submit' class="btn btn-primary" value='Details'>
                        </form>
                    </div>
                    <div class="btn-group me-2">
                        <form action='/conference_site/edit' method='post'>
                            <input type='hidden' name='id' value="<?= $val['id']; ?>" />
                            <input type='submit' class="btn btn-secondary" value='Edit'>
                        </form>
                    </div>
                    <div class="btn-group">
                        <form action='/conference_site/deleted' method='post'>
                            <input type='hidden' name='del' value="<?= $val['id']; ?>" />
                            <input type='submit' class="btn btn-danger" value='Delete'>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</body>