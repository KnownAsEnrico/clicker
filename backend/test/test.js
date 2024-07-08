var count = 0;
var precount = 0;
var postcount = 0;

let time = 0;
let timeout;
let timer_on = 0;

var here = document.getElementById("toHTML");

    $.post("calc.php",
    function(data){
    processData(data);
    });




  function getInfo () {
        $.post("calc.php",
        function(data){
        processData(data);
    });
    }
  function processData(data) {
    return data;
  }
  console.log(getInfo());

  
  function timedCount() {
    time++;
    timeout = setTimeout(timedCount, 1000);
  }
  
  function startCount() {
    if (!timer_on) {
      timer_on = 1;
      timedCount();
    }
  }
  
  setTimeout(10000);

  function stopCount() {
    clearTimeout(timeout);
    timer_on = 0;
  }

  function calculate () {
    return postcount - precount;
  }


  if(time === 0) {
    startCount();
    postcount = getInfo();
  } else
  if(time === 10) {
    stopCount();
  }

  console.log(getInfo());