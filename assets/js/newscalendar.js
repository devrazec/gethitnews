document.onreadystatechange = function () {
    if (document.readyState == "complete") {

        console.log("Success in onreadystatechange()");
        
        const datepickerEl = document.getElementById('datepickerId');
        //console.log(datepickerEl);

        datepickerEl.addEventListener('changeDate', function () {
            console.log('selectedDate', this.datepicker.getDate('yyyy/mm/dd'));
        });

        new Datepicker(datepickerEl, {
            todayHighlight: true,
            maxDate: new Date(),
            autohide: true,
            endDate: new Date(),
            format: 'yyyy/mm/dd'
        });
    }
}

function loadContent(url) {
    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", url);
    xhttp.send();
    xhttp.onreadystatechange = (e) => {
        document.getElementById("demo").innerHTML = xhttp.responseText;
    }
}

function call_php() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // MANAGE THE RESPONSE
            var response = this.responseText;
        }
    }
    xmlhttp.open('GET', 'example.php', true);
    xmlhttp.send();
}