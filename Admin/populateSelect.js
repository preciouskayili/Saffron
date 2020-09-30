
var countries = [
  "Ghana",
  "USA",
  "London",
  "UK",
  "Cameron",
  "Dubai",
  "Nigeria",
  "Turkey",
  "Canada",
];

let populateSelect = () => {
  var html = "";
  html += "<option disabled>-- Choose country --</option>";
  for (let index = 0; index < countries.length; index++) {
    const element = countries[index];
    html += "<option value='" + element + "'>" + element + "</option>";
  }

  $("#from").html(html);
  $("#fromTwo").html(html);
  $("#updateFrom").html(html);
}

let populateSecond = () => {
  var fromValue = document.getElementById("from").value;
  var fromValueTwo = document.getElementById("fromTwo").value;
  var updateFromValue = document.getElementById("updateFrom").value;
  var html = "";
  html += "<option disabled>-- Choose country --</option>";
  for (let index = 0; index < countries.length; index++) {
    const element = countries[index];
    if (fromValue != element || fromValueTwo != element || updateFromValue != element) {
      html += "<option value='" + element + "'>" + element + "</option>";
    }
  }
  $("#to").html(html);
  $("#toTwo").html(html);
  $("#updateTo").html(html);
}