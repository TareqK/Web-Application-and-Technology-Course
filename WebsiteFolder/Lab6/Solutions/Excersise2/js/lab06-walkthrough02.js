
/* add code here */

var daysOfWeek = new Array("Mon","Tues","Wed","Thur", "Fri");
daysOfWeek.push("Sat");
daysOfWeek.unshift("Sun");
document.write("<table border=1>");
document.write("<tr>");
for (var i = 0; i < daysOfWeek.length; i++){
    day = daysOfWeek[i];
    document.write("<th>" + day + "</th>");
}
var i = 1
var ov= 8;
for (var j = 0; j < daysOfWeek.length ; j++){
    
    document.write("<tr>");
    while(i%ov!=0){
        ov=8;
        document.write("<td>"+ i +"</td>");
        i++;
    }
    ov=7
    document.write("</tr>");
}
document.write("</table>");

