//disallow dragging
document.getElementById('graph').ondragstart = function() { return false; };

window.setTimeout(function () {
    window.location.reload();
  }, 10000);

var state = document.getElementById("hidden").textContent;
var stateResult = parseInt(state);
console.log(stateResult);

if (stateResult > 0) {
    document.getElementById("replace").innerHTML = " Leak Detected!"
    document.getElementById("bubble").style.background = "red";
}
 
//   if (state > 1) {
//     let animatedElements = document.getElementsByClassName("animate__animated");
//     for (let i = 0; i < animatedElements.length;i++ ) {
//         animatedElements[i].classList.remove("animate_animated");
//     }
//   }
