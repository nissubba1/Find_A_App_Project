function validateForm() {
  var review = document.getElementById("newreviews").value.trim();

  if (review === "") {
    alert("Please fill in the review field to submit");
    return false;
  }
  return true;
}
