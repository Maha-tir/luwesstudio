const SELECT_DROPDOWN = document.querySelectorAll(".app-select-dropdown");
SELECT_DROPDOWN.forEach((SELECT, IDX) => {
  const SELECT_HEADER = SELECT.querySelector(".app-select-dropdown-header");
  const SELECT_PLACEHOLDER = SELECT.querySelector(".app-select-placeholder");
  const SELECT_PLACEHOLDER_INPUT = SELECT.querySelector(
    ".app-select-placeholder input"
  );
  const SELECT_MENU = SELECT.querySelector(".app-select-dropdown-menu");
  const SELECT_OPTION = SELECT_MENU.querySelectorAll(".select-option");

  SELECT_HEADER.addEventListener("click", (e) => {
    SELECT.classList.toggle("show-menu");
    SELECT_MENU.classList.toggle("show-menu");
    REMOVETOGGLE(IDX);
  });
  SELECT_OPTION.forEach((OPTION) => {
    OPTION.addEventListener("click", (e) => {
      let SELECTED_OPTION = e.target.textContent;
      SELECT_PLACEHOLDER_INPUT.setAttribute("value", SELECTED_OPTION.trim());
      SELECT.classList.remove("show-menu");
      SELECT_MENU.classList.remove("show-menu");
    });
  });

  document.addEventListener("click", (e) => {
    if (
      e.target.className == "app-select-placeholder" ||
      e.target.className == "app-select-dropdown-header"
    ) {
      console.log(e.target);
    } else {
      SELECT.classList.remove("show-menu");
      SELECT_MENU.classList.remove("show-menu");
    }
  });
});
function REMOVETOGGLE(IDX) {
  SELECT_DROPDOWN.forEach((SELECT, IDXI) => {
    const SELECT_HEADER = SELECT.querySelector(".app-select-dropdown-header");
    const SELECT_MENU = SELECT.querySelector(".app-select-dropdown-menu");
    if (IDX != IDXI) {
      SELECT.classList.remove("show-menu");
      SELECT_MENU.classList.remove("show-menu");
    }
  });
}
const BgIconRandom = document.querySelectorAll(".icon-random-bg");
BgIconRandom.forEach((icon) => {
  const randomColor = Math.floor(Math.random() * 16777215).toString(16);
  icon.style.backgroundColor = "#" + randomColor + "20";
  icon.style.color = "#" + randomColor;
});

const InputImg = document.getElementById("image");
const BtnInputImg = document.getElementById("get-file");
const ImgRead = document.querySelector(".profile-img");
let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
if (BtnInputImg) {
  BtnInputImg.onclick = () => {
    defaultBtnActive();
  };
}

function defaultBtnActive() {
  InputImg.click();
}
if (InputImg) {
  InputImg.addEventListener("change", function () {
    const file = this.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function () {
        const result = reader.result;
        ImgRead.src = result;
      };
      reader.readAsDataURL(file);
    }
    if (this.value) {
      var Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
      });
      let valueStore = this.value.match(regExp);
      Toast.fire({
        icon: "success",
        title: `Success Upload ${valueStore}`,
      });
    }
  });
}

const date = new Date();
const months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];
const days = [
  "Sunday",
  "Monday",
  "Tuesday",
  "Wednesday",
  "Thursday",
  "Friday",
  "Saturday",
];
const currentMonth = document.getElementById("current-month");
const calendarActionBtn = document.querySelectorAll(".calendar-action-btn");
const listBook = document.querySelector(".list-book");
let currentDay = date.getDay();
let fullYear = date.getFullYear();
let fullMonth = date.getMonth();
let lastDateofMonth = new Date(fullYear, fullMonth + 1, 0).getDate();
let weeks = "";

currentMonth.textContent += months[date.getMonth()];

if (currentDay) {
  weeks += ` <div class="card-date-book">
  <div
    class="d-flex align-items-center justify-content-between on-divider"
  >
    <h1 class="book-time-divider" id="days">
      ${days[currentDay]}, ${months[date.getMonth()]} ${currentDay}, ${fullYear}
    </h1>
    <span class="badge-today">Today</span>
    </div>
  <div class="usr-book-list">
    <a href="confirm-booking.html" class="btn-book-list">09:00</a>
    <a href="confirm-booking.html" class="btn-book-list">10:00</a>
    <a href="confirm-booking.html" class="btn-book-list">11:00</a>
  </div>
  </div>`;
}

listBook.innerHTML += weeks;

calendarActionBtn.forEach((btn) => {
  btn.addEventListener("click", () => {
    console.log(btn);
  });
});
