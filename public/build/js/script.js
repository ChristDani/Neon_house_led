$(".nav-enlace").slideUp();

$("#ham").on("click", function (e) {
  $(".nav-enlace").slideToggle();
});

const idBtnList = document.querySelector("#btn-list");
const list = document.querySelector(".list-nav");
const list1 = document.querySelector(".list-nav1");
const list2 = document.querySelector(".list-nav2");

const idBtnListApp1 = document.querySelector("#btnApp-1");
const idBtnListApp2 = document.querySelector("#btnApp-2");

idBtnList.addEventListener("click", function (e) {
  list.classList.toggle("height-0");
});

idBtnListApp1.addEventListener("click", function (e) {
  list1.classList.toggle("height-0");
});

idBtnListApp2.addEventListener("click", function (e) {
  list2.classList.toggle("height-0");
});



