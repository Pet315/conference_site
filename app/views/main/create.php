<head>
<!--    Flatpickr-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!--    JS local files-->
    <script src="public/scripts/countryCreate.js"></script>
    <script src="public/scripts/addressCreate.js"></script>

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
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Enter title">
        </div>

        <div>
            <label for="date" class="form-label">Date</label>
            <input name="date" type="datetime-local" class="form-control" id="date" placeholder="Select date">
        </div>

        <div>
            <label for="country" class="form-label">Country</label>
            <select id="country" name="country" class="form-select search_select_box"></select>
<!--            <select id="inputCountry" class="selectpicker countrypicker form-select" data-live-search="true" ></select>-->
        </div>

        <div>
            <label for="title" class="form-label">Address latitude</label>
            <input name="latitude" type="text" class="form-control" id="lat">
        </div>

        <div>
            <label for="title" class="form-label">Address longitude</label>
            <input name="longitude" type="text" class="form-control" id="lng">
        </div>

        <div id="map"></div>

        <input type='hidden' name='save' value="sv" />

        <div class="my-5">
            <a href="/conference_site" class="btn btn-primary me-3">Back</a>
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>

    <script src=""></script>
    <script src="public/scripts/dateCreate_.js"></script>
</body>
