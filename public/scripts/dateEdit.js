var myDate = document.querySelector('.date').getAttribute('data-attr');
flatpickr("input[type=datetime-local]", {
    dateFormat: "d.m.Y",
    defaultDate: myDate
});