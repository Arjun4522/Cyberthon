let modalBtns = document.querySelectorAll(".radio");

modalBtns.forEach((btn) => {
    btn.onclick = ()=>{
        let modal = btn.getAttribute("data-modal");

        document.getElementById(modal).style.display = "block";
    }
});


let closeBtns = document.querySelectorAll(".modal-close");

closeBtns.forEach((btn) => {
    btn.onclick = ()=>{

        let modal = (btn.closest(".modal").style.display = "none");
    }
});