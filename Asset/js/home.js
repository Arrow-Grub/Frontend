$("#head3").load("head.php"); /*access the header*/
$(".footer").load("Footer.html"); /*access the header*/
$(".sider").load("sider1.html"); /*access the sider*/
const prev = document.getElementById("prev-btn");
const next = document.getElementById("next-btn");
const list = document.getElementById("item-list");
const itemWidth = 200;
const padding = 90;
prev.addEventListener("click", () => {
  list.scrollLeft -= itemWidth + padding;
});

next.addEventListener("click", () => {
  list.scrollLeft += itemWidth + padding;
});
