
// $.ajax({
//     url: "process.php",
//     type: "POST",
//     success: function (response) {
//         console.log(response);
//     }
// });

$.post("backend/process.php",
    function(data){
  processData(data);
});


var count = 0;
$(".button").click(function(){
    $.post("backend/process.php",
    {
      input: "click"
    },
    function(data){
      processData(data);
    });
  });


  function getRandomInt(max) {
    return Math.floor(Math.random() * max);
  }

  function randomNum () {
    return getRandomInt(255);
  }



  function remove1k() {
    $.post("backend/process.php",
    {
      input: "remove1k"
    },
    function(data){
      processData(data);
    });
  }
  


  function processData(data) {
    var here = document.getElementById("number");
    var buttonB = document.getElementById("button");
    buttonB.style.backgroundColor = 'rgb('+ randomNum() +', '+ randomNum() +', '+ randomNum() +')';
    
    count = data;
    here.textContent = count;




    var newBu = document.getElementById("remove1k");
    if(Number(count) > 1000 && !(Number(count) < 0))  {
      newBu.style.display = "inline-block";
    }else{
      newBu.style.display = "none";
    }
  }