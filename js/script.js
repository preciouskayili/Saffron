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
function populateSelect() {
  var html = "";
  html += "<option disabled>-- Choose country --</option>";
  for (let index = 0; index < countries.length; index++) {
    const element = countries[index];
    html += "<option value='" + element + "'>" + element + "</option>";
  }

  $("#from").html(html);
}

function populateSecond() {
  var fromValue = document.getElementById("from").value;
  var html = "";
  html += "<option disabled>-- Choose country --</option>";
  for (let index = 0; index < countries.length; index++) {
    const element = countries[index];
    if (fromValue != element) {
      html += "<option value='" + element + "'>" + element + "</option>";
    }
  }
  $("#to").html(html);
}

function deleteItem() {
  var html = "";

  html -= "<div></div>";

  $("#delete").html(html);
}

// function deleteItem(){
//   // var noResult = document.getElementById('delete');
//   var card = document.getElementById('deleteThisItem');
//   card.remove();
// };

function deleteCard() {
  var html = "";

  html -= "<div></div>";

  $("#delete").html(html);
}

function deleteInput() {
  document.getElementById("deleteItem").disabled = true;
}

function restoreInput() {
  document.getElementById("deleteItem").disabled = false;
}
var dark = document.getElementById("dark");
var makewhite = document.getElementById("makeWhite");
function darkMode() {
  dark.style.backgroundColor = "black";
  document.getElementById("makeWhite2").style.color = "white";
  dark.classList.add("navbar-dark");
  document.getElementById("body").style.backgroundColor = "black";

  document.getElementById("bgImg").style.backgroundColor = "black";
  makeWhite.style.color = "white";
  document.getElementById("makeWhite1").style.color = "white";
  document.getElementById("lightButton").style.display = "block";
  document.getElementById("darkButton").style.display = "none";
}

function lightMode() {
  document.getElementById("body").style.backgroundColor = "white";
  dark.classList.add("navbar-dark");
  dark.style.backgroundColor = "#779add";
  document.getElementById("bgImg").style.backgroundColor = "#779add";
  makeWhite.style.color = "black";
  document.getElementById("makeWhite1").style.color = "black";
  document.getElementById("makeWhite2").style.color = "black";
  document.getElementById("darkButton").style.display = "block";
  document.getElementById("lightButton").style.display = "none";
}
