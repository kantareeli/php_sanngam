 // Source: CodeFoot.com

// set the speed
// larger numbers = slower scroll
var howQuick = 10;

// do not edit below
// -----------------

var beIE = document.all?true:false;
var iWhere = 0;

function scrollBackGround(){
  if (beIE){
     iWhere = iWhere + 1;
     if (iWhere > 1000000) iWhere = 1;
     document.body.style.backgroundPosition = "0 " + iWhere;
     window.setTimeout("scrollBackGround()",howQuick);
  }
}