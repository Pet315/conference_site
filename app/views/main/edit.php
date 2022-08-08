<head>
    <!--    Flatpickr-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!--    JS local files-->
    <script src="public/scripts/selectAddressC.js"></script>

    <style>
        #map {
            margin: 10px;
            height: 400px;
            width: 600px;
        }
        @media (min-width: 760px) {
            form {
                width: 60%;
            }
        }
    </style>
</head>

<body>
    <form class="row g-3" action='/conference_site/saved' method='post'>
        <div>
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control" value="<?=$conf['title'] ?>">
        </div>

        <div>
            <label class="form-label">Date</label>
            <input name="date" type="datetime-local" class="form-control" placeholder="">
        </div>

        <?php $country = $conf['country'] ?>
        <div class="ctr" data-country="<?=$country ?>">
            <label class="form-label">Country</label>
            <select id="country" name="country" class="form-select search_select_box"></select>
<!--            <select id="inputCountry" class="selectpicker countrypicker form-select" data-live-search="true" ></select>-->
        </div>

        <div>
            <label class="form-label">Address latitude</label>
            <input name="latitude" type="text" class="form-control" id="lat">
        </div>

        <div>
            <label class="form-label">Address longitude</label>
            <input name="longitude" type="text" class="form-control" id="lng">
        </div>

        <div id="map"></div>

        <input type='hidden' name='id' value="<?= $conf['id']; ?>" />
        <input type='hidden' name='save' value="sv" />

        <div class="my-5">
            <a href="/conference_site" class="btn btn-primary me-2">Back</a>
            <button type="submit" class="btn btn-success me-2">Save</button>
            <a href="/conference_site/index?id=<?= $conf['id']?>" class="btn btn-danger">Delete</a>
        </div>
    </form>

    <script src="public/scripts/editCountry.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbz9SsxmvvV-mXRkRGTH8F4cENndiecOk&libraries=places&callback=initMap"></script>
    <script src="public/scripts/selectDate.js"></script>
</body>