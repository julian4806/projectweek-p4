function validateForm() {
  var a = document.forms["contact"]["name"].value;
  var b = document.forms["contact"]["email"].value;
  var c = document.forms["contact"]["category"].value;
  var s1 = document.forms["contact"]["subcategory-one"].value;
  var s2 = document.forms["contact"]["subcategory-two"].value;
  var d = document.forms["contact"]["message"].value;

  if (a == "" || b == "" || c == "" || d == "" || (s1 == "" && s2 == "")) {
    alert("Vul alle velden in");
    console.log(s1);
    console.log(s2);
    return;
  } else {
    submit();
  }
}

// Subcategorieen
let catOne = document.getElementById("subcategory-one"); //goederen
let catTwo = document.getElementById("subcategory-two"); //diensten

document.querySelector(".goederen");
document.querySelector(".diensten");

document.forms["contact"]["category"].addEventListener("change", function (e) {
  if (e.target.value === "goederen") {
    Object.assign(catOne.style, { display: "block" });
    catTwo.style.display = "none";
  }

  if (e.target.value === "diensten") {
    catOne.style.display = "none";
    Object.assign(catTwo.style, { display: "block" });
  }
});
