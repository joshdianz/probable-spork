const rotate = () => {
    const cubes = document.querySelectorAll(".cube");
  
    Array.from(cubes).forEach(
      (cube) => (cube.style.transform = `rotateY(${x}deg)`)
    );
  };
  
  const changePlayPause = () => {
    const i = document.querySelector(".play-pause i");
    const cls = i.classList[1];
    if (cls === "fa-play") {
      i.classList.remove("fa-play");
      i.classList.add("fa-pause");
    } else {
      i.classList.remove("fa-pause");
      i.classList.add("fa-play");
    }
  };
  
  let x = 0;
  let bool = false;
  let interval;
  
  const playPause = () => {
    if (!bool) {
      interval = setInterval(() => {
        x -= 90;
        rotate();
      }, 3000);
      changePlayPause();
      bool = true;
    } else {
      clearInterval(interval);
      changePlayPause();
      bool = false;
    }
  };
  
  document.querySelector(".left-arrow").addEventListener("click", () => {
    x += 90;
    rotate();
    if (bool) {
      playPause();
    }
  });
  
  document.querySelector(".left-arrow").addEventListener("mouseover", () => {
    x += 25;
    rotate();
  });
  
  document.querySelector(".left-arrow").addEventListener("mouseout", () => {
    x -= 25;
    rotate();
  });
  
  document.querySelector(".right-arrow").addEventListener("click", () => {
    x -= 90;
    rotate();
    if (bool) {
      playPause();
    }
  });
  
  document.querySelector(".right-arrow").addEventListener("mouseover", () => {
    x -= 25;
    rotate();
  });
  
  document.querySelector(".right-arrow").addEventListener("mouseout", () => {
    x += 25;
    rotate();
  });
  
  document.querySelector(".play-pause").addEventListener("click", () => {
    playPause();
  });
 // FORM
  
  //$(function(){
  // $("#authorisation").show();
  // $(".btn1").on("click", function(){
   //    $("#part1").hide(1000)
  //     $("#authorisation").show(1000)
  // })
//});

//$(function(){
 //   $("#part1").hide();
 //   $("#btn1").on("click", function(){
 //       $("#part1").hide(1000)
 //       $("#idType").show(1000)
  //  })
//})

$(function(){
    $("#search").show();
    $("#pDetails").on("click" , function(){
        $("#part2").hide(1000)
    })
})

$(function(){
    $("#search").show();
    $("#idType").on("click" , function(){
        $("#part1").hide(1000)
    })
})

$(document).ready(function(){
    $("#mNum").click(function(){
        $("#Part2").hide();
    })
})

// RETIREMENT PLAN

var myWindow
function done() {
    alert("Progress saved!");
}

function cancel() {
    alert("Please try again!");
}
function close(){
    var close = document.getElementsByClassName("close");
}
function selects(){
    var ele = document.getElementsByName("check");
    for (var i = 0; i < ele.length; i++) {
        if (ele[i].type == "checkbox")
            ele[i].checked = true;
    }  
}