document.querySelector("#show-popup").addEventListener("click", function(){
    document.querySelector(".popup").classList.add("active");
});
  
document.querySelector(".popup .close-btn").addEventListener("click", function(){
    document.querySelector(".popup").classList.remove("active");
});

document.querySelectorAll(".show-edit").forEach(button => {
    button.addEventListener("click", function() {
        document.querySelector(".edit-popup").classList.add("active");
    });
});

document.querySelector(".edit-popup .close-btn").addEventListener("click", function() {
    document.querySelector(".edit-popup").classList.remove("active");
});

