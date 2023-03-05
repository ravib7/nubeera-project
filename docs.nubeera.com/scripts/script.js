

let sidebar = document.querySelector("#sidebar");
let hideBtn = document.querySelector("#toggle-btn");
let mainContent = document.querySelector("#main_content");
let hideBtn_sm = document.querySelector(".sidebar-toggler");

hideBtn.addEventListener("click", () => {
    sidebar.classList.toggle("hide");
    toggleBtnChange();
});
hideBtn_sm.addEventListener("click", () => {
    sidebar.classList.toggle("d-none");
    // sidebar.classList.toggle("d-none");
    toggleBtnChange();
});

function toggleBtnChange() {
    if (sidebar.classList.contains("hide")) {
        hideBtn.innerHTML = "<i class='fas fa-chevron-right'></i>"; //replacing the iocns class
        // mainContent
    } else {
        hideBtn.innerHTML = "<i class='fas fa-chevron-left'></i>"; //replacing the iocns class
    }
}


//----------------------------------  enabling tooltip  -----------------------------------------------------------------
// ---------------------------------------------------------------------------------------------------------------------- 
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
  });
 //----------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------------------------------- 
 