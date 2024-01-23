// Function to run on click:
function makeItHappen(elem, elem2) {
    var el = document.getElementById(elem);
    el.style.backgroundColor = "red";
    var el2 = document.getElementById(elem2);
    el2.style.backgroundColor = "blue";
  }
  
  // Autoloading function to add the listeners:
  var elem = document.getElementsByClassName("triggerClass");
  
  for (var i = 0; i < elem.length; i += 2) {
    var k = i + 1;
    var boxa = elem[i].parentNode.id;
    var boxb = elem[k].parentNode.id;
  
    elem[i].addEventListener("click", function() {
      makeItHappen(boxa, boxb);
    }, false);
    elem[k].addEventListener("click", function() {
      makeItHappen(boxb, boxa);
    }, false);
  }