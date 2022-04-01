var sell = document.getElementById("sell");
sell.addEventListener("click", () => {
  window.alert("Recorded succcesfully");
  clk();
});
// create an anchor element to be automatically clicked
function clk() {
  var element = document.createElement("a");
  element.setAttribute("href", "attendant.html");
  element.setAttribute("target", "blank");
  element.click();
}
