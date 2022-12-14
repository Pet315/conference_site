document.addEventListener('DOMContentLoaded', () => {

    const myCountry = document.querySelector('.country').getAttribute('data-attr');
    const selectDrop = document.querySelector('#country');

    fetch('https://restcountries.com/v3.1/all').then(res => {
        return res.json();
    }).then(data => {
        let a = [];
        data.forEach(country => {
            a.push(country.name['common'])
        })
        a.sort();
        let output = `<option value="${myCountry}">${myCountry}</option>`;
        for (let i = 0; i < a.length; i++) {
            if (a[i] !== myCountry) {
                output += `<option value="${a[i]}">${a[i]}</option>`;
            }
        }
        selectDrop.innerHTML = output;
    }).catch(err => {
        console.log(err);
    })
});