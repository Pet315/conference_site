<head>
    <!--    Flatpickr-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <style>
        #map {
            margin: 10px;
            height: 400px;
        }
    </style>
</head>

<body>
    <div>
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
<!--                <select id="inputCountry" class="selectpicker countrypicker form-select" data-live-search="true" ></select>-->
            </div>

<!--            <div><label for="title" class="form-label">Address</label></div>-->
<!--            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3">-->
<!--                <div class="col">-->
<!--                    <input id="lat" type="text" class="form-control" placeholder="Latitude">-->
<!--                </div>-->
<!--                <div class="col">-->
<!--                    <input id="lng" type="text" class="form-control" placeholder="Longitude">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div id="map"></div>-->

            <div class="my-5">
                <a href="/conference_site" class="btn btn-primary me-3">Back</a>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>

    <div id="coordinates">
        Click somewhere on the map. Drag the marker to update the coordinates.
    </div>
    <div>
        <label>
            lat
            <input type="text" id="lat"/>
        </label>
        <label>
            lng
            <input type="text" id="lng"/>
        </label>
    </div>

    <div id="map"></div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbz9SsxmvvV-mXRkRGTH8F4cENndiecOk&libraries=places&callback=initMap"></script>

    <script src="public/scripts/selectCountry.js"></script>
    <script src="public/scripts/selectDate.js"></script>
    <script src="public/scripts/selectAddress.js"></script>

</body>
