document.addEventListener("DOMContentLoaded", function () {
  const overlay = document.getElementById("overlay");
  const popup = document.getElementById("popup");
  const close = document.getElementById("close");
  const closePopupButton = document.getElementById("close-popup");

  popup.style.display = "block";
  overlay.style.display = "block";

  close.addEventListener("click", function () {
    hidePopup();
  });

  closePopupButton.addEventListener("click", function () {
    hidePopup();
  });

  function hidePopup() {
    popup.style.display = "none";
    overlay.style.display = "none";
  }

  // Additional functionality to handle form submission
  const commentTextarea = document.getElementById("comment");
  const submitButton = document.getElementById("submit");

  submitButton.addEventListener("click", function () {
    const comment = commentTextarea.value;
    // Here you can handle the comment submission, e.g., sending it to a server.
    console.log("Comment:", comment);
    // You can also add further actions like clearing the textarea or showing a thank you message.
  });
});
