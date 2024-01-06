function validateEmail(userEmail) {
  new Ajax.Request("emailcheck.php", {
    method: "POST",
    parameters: { email: userEmail },
    onSuccess: displayResult,
  });
}

function displayResult(ajax) {
  $("msgbox").innerHTML = ajax.responseText;
}
