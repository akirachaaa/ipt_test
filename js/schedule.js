document.addEventListener("DOMContentLoaded", function () {
    // Add Schedule Popup
    const addButton = document.querySelector("#show-popup");
    const addPopup = document.querySelector(".popup");
    const closeAddPopupBtn = addPopup.querySelector(".close-btn");

    addButton.addEventListener("click", function () {
        addPopup.classList.add("active");
    });

    closeAddPopupBtn.addEventListener("click", function () {
        addPopup.classList.remove("active");
    });

    // Edit Schedule Popup
    const editButtons = document.querySelectorAll(".show-edit");
    const editPopup = document.querySelector(".edit-popup");
    const closeEditPopupBtn = editPopup.querySelector(".close-btn");

    editButtons.forEach(button => {
        button.addEventListener("click", function (event) {
            event.preventDefault();
            const scheduleId = button.getAttribute("data-id");
            const scheduleIdInput = document.querySelector('input[name="schedule_id"]');
            scheduleIdInput.value = scheduleId;

            // Fetch current schedule time and populate the form
            fetch(`get_schedule_time.php?schedule_id=${scheduleId}`)
                .then(response => response.json())
                .then(data => {
                    console.log("Fetched Data:", data); // Debugging
                    if (data.success) {
                        document.querySelector('input[name="schedule_time"]').value = data.time;
                    } else {
                        alert("Failed to fetch schedule time");
                    }
                })
                .catch(error => console.error("Fetch Error:", error));

            editPopup.classList.add("active");
        });
    });

    closeEditPopupBtn.addEventListener("click", function () {
        editPopup.classList.remove("active");
    });
});
