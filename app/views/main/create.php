<head>
    <!--    Flatpickr-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
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
            <div class="my-5">
                <a href="/conference_site" class="btn btn-primary me-3">Back</a>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>

    <script src="public/scripts/selectCountry.js"></script>
    <script src="public/scripts/selectDate.js"></script>

</body>
