document.onreadystatechange = function () {
    if (document.readyState == "complete") {
        console.log("Success in index.html onreadystatechange()"); 

        //const newsCalendar = document.querySelector('div[id="news-calendar"]');  
        const newsCalendar = document.getElementById('news-calendar'); 

        //new Datepicker(newsCalendar, {
        //    todayHighlight: true,
        //    minDate: new Date()
        //});

        console.log(newsCalendar);
    }
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

