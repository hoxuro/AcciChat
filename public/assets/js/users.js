"use strict";

const searchBar = document.querySelector(".search-box input");
const searchBtn = document.querySelector(".search-box .btn-search");
const usersList = document.querySelector(".users-list");

searchBtn.addEventListener("click", function () {
  searchBar.focus();
});

searchBar.onkeyup = () => {
  let searchName = searchBar.value;
  if (searchName != "") {
    searchBar.classList.add("active");

    let xhr = new XMLHttpRequest(); // creating xml object
    xhr.open("POST", "http://localhost/accichat/home/search", true);
    xhr.addEventListener("load", function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          let data = xhr.response;
          usersList.innerHTML = data;
        }
      }
    });

    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchName=" + searchName);
  } else {
    searchBar.classList.remove("active");
  }
};

setInterval(() => {
  // AJAX start
  let xhr = new XMLHttpRequest(); // creating xml object
  xhr.open("GET", "http://localhost/accichat/home/searchUsers", true);
  xhr.addEventListener("load", function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if (!searchBar.classList.contains("active")) {
          usersList.innerHTML = data;
        }
      }
    }
  });

  xhr.send();
}, 500); // function to run every 500ms
