
let updateData = () => {

  var request = new XMLHttpRequest();
  request.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // document.getElementById("txtHint").innerHTML = this.responseText;
      console.log(this.responseText);
    }
  };
  request.open("GET", "flights.php", true);
  request.send();
}