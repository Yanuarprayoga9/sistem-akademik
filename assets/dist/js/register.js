
function toggleSubmit() {
  var checkBox = document.getElementById("agree");
  var submitButton = document.getElementById("registerBtn");

  if (checkBox.checked) {
    submitButton.disabled = false;
  } else {
    submitButton.disabled = true;
  }
}

