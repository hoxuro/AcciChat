"use strict";

const iconEyeEl = document.querySelector(".password-box .icon-eye");
const iconEyeSlashEl = document.querySelector(".password-box .icon-eye-slash");
const inputPassEl = document.querySelector(".password-box input");

function togglePassVisibility() {
  const isPassword = inputPassEl.type === "password";

  inputPassEl.type = isPassword ? "text" : "password";

  iconEyeEl.classList.toggle("icon-active", !isPassword);
  iconEyeSlashEl.classList.toggle("icon-active", isPassword);
}

iconEyeEl.addEventListener("click", togglePassVisibility);
iconEyeSlashEl.addEventListener("click", togglePassVisibility);
