"use strict";

// selecting DOM elements
const formEl = document.querySelector(".loginForm");
const btnSendEl = document.querySelector(".btn-send");
const errorBox = document.querySelector(".error-box");
const errorText = document.querySelector(".error-box__text");

formEl.addEventListener("submit", function (e) {
  e.preventDefault();
});

btnSendEl.addEventListener("click", function () {
  // AJAX start
  let xhr = new XMLHttpRequest(); // creating xml object
  xhr.open("POST", "http://localhost/accichat/home/login", true);
  xhr.addEventListener("load", function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if (data == "success") {
          location.href = "users";
        } else {
          errorBox.style.display = "block";
          errorText.textContent = data;
        }
      }
    }
  });

  // we have to send the form data through ajax to php
  let formData = new FormData(formEl); // creating new formData object

  xhr.send(formData);
});
