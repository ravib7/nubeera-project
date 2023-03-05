function showresults() {
    if (inputval) {
        let inputval = document.getElementById("searchbarbox").value.toUpperCase();
        let ul = document.getElementById("lists");
        let list = ul.getElementsByTagName("li");
        document.getElementById("clearBtn").style.display = "block";

        for (var i = 0; i < list.length; i++) {
            let a = list[i].getElementsByTagName("a")[0].innerHTML;

            if (a.toUpperCase().indexOf(inputval) > -1) {
                list[i].style.display = "flex";
            } else {
                list[i].style.display = "none";
            }
        }
    } else {
        document.getElementById("lists").style.display = "none";
        document.getElementById("clearBtn").style.display = "none";
        //list[i].style.display = "none";
    } //inputval condition closed
}

//  searchVal = document.getElementById("searchbarbox").value;
//  if (searchVal) {
//      document.getElementById("clearBtn").style.display = "block";
//  } else {
//      document.getElementById("clearBtn").style.display = "none";
//  }

window.addEventListener('load', () => {
    const button = document.querySelector('#clearBtn');
    button.addEventListener('click', () => {
        document.querySelector('#searchbarbox').value = " ";
    });
});

// 	 function getResults() {
//   var xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//       alert("hello");
//     }
//   };
//   searchVal = document.getElementById("searchbarbox").value;
//   xhttp.open("GET", "./pages/python/python concepts/class and objects.php?search="+searchVal, true);
//   xhttp.send();
//}