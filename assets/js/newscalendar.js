document.onreadystatechange = function () {
    if (document.readyState == "complete") {

        console.log("Success in onreadystatechange()");

        //const newsCalendar = document.querySelector('input[id="datepickerId"]');  
        //console.log(newsCalendar);

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

        //console.log(datepickerEl);

        //new Datepicker(datepickerEl, {
        //    todayHighlight: true,
        //    minDate: new Date()
        //});

        //document.querySelectorAll('[datepicker]').forEach((input) => {
        //    new dateRangePicker(input, {
        //        todayHighlight: true,
        //        minDate: new Date()
        //    });
        //});
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



//const newsCalendar = document.getElementById('news-calendar');

//var newsCalendar = document.getElementById("news-calendar");

//const newsCalendar = document.querySelector('div[id="news-calendar"]');

//const newsCalendar = document.querySelector('div[id="news-calendar"]').datepicker;

//newsCalendar.config ({
//    minDate: new Date()
//});

//console.log(newsCalendar);

//const datepicker = new Datepicker(newsCalendar, {
//    todayHighlight: true,
//    minDate: new Date()
//});


/* const newsDatepicker = new datepicker(newsCalendar, {
    todayHighlight: true,
    minDate: new Date()
}); */



//newsCalendar.datepicker.config({
///    todayHighlight: true,
//minDate: new Date()
///});

