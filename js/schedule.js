document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("#show-popup").addEventListener("click", function() {
        document.querySelector(".popup").classList.add("active");
    });

    document.querySelector(".popup .close-btn").addEventListener("click", function() {
        document.querySelector(".popup").classList.remove("active");
    });

    document.querySelectorAll(".show-edit").forEach(button => {
        button.addEventListener("click", function() {
            const scheduleId = this.dataset.id;
            document.querySelector(".edit-popup").classList.add("active");

            document.querySelector(".edit-popup input[name='schedule_id']").value = scheduleId;
        });
    });

    document.querySelector(".edit-popup .close-btn").addEventListener("click", function() {
        document.querySelector(".edit-popup").classList.remove("active");
    });
});



// document.querySelector(".edit-popup form").addEventListener("submit", function(e) {
//     e.preventDefault(); 

//     const formData = new FormData(this);
//     fetch('./updateSched.php', {
//         method: 'POST',
//         body: formData
//     })
//     .then(response => response.text())
//     .then(result => {
//         if (result.includes('meow edited!!!')) {
//             const scheduleId = formData.get('schedule_id');
//             const newTime = formData.get('edit_time');

//             document.querySelector(`[data-id='${scheduleId}']`).parentElement.querySelector('.sched-time h1').textContent = newTime;
            
//             document.querySelector(".edit-popup").classList.remove("active");
//         } else {
//             alert('Failed to update schedule');
//         }
//     })
//     .catch(error => console.error('Error:', error));
// });



