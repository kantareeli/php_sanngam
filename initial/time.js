<!-- Star t-TIme-->

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->
<!--  Author: www.cgiscript.net  -->

// Get today's current date.
var now = new Date();

// Array list of days.
var days = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

// Array list of months.
var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');

// Calculate the number of the current day in the week.
var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();

// Calculate four digit year.
function fourdigits(number)	
{
   return (number < 1000) ? number + 1900 : number;
}

// Join it all together
today =  days[now.getDay()] + "&nbsp;&nbsp;<br>" +
         months[now.getMonth()] + " " +
         date + ", " +
         (fourdigits(now.getYear()))+ "&nbsp;&nbsp;" ;


basicdate.innerHTML = today;
// Print out the data.
//document.write(today);





<!-- End TIme-->