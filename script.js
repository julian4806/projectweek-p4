function validateForm() {
  var a = document.forms["contact"]["name"].value;
  var b = document.forms["contact"]["email"].value;
  var c = document.forms["contact"]["category"].value;
  var d = document.forms["contact"]["message"].value;
  if (a == "" || a == "" || b == "" || b == "" || c == "" || d == "") {
    alert("Vul alle velden in");
    return;
  } else {
    submit();
  }
}
