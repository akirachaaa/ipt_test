document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("#show-popup").addEventListener("click", function() {
        document.querySelector(".popup").classList.add("active");
    });

    document.querySelector(".popup .close-btn").addEventListener("click", function() {
        document.querySelector(".popup").classList.remove("active");
    });

document.addEventListener("DOMContentLoaded", () => {
    // Get all "Edit" buttons
    const editButtons = document.querySelectorAll(".show-edit");
    const popup = document.querySelector(".edit-popup");
    const closeBtn = popup.querySelector(".close-btn");

    // Add click event to all edit buttons
    editButtons.forEach(button => {
        button.addEventListener("click", event => {
            event.preventDefault();
            const urlParams = new URLSearchParams(button.querySelector("a").href.split("?")[1]);
            const scheduleId = urlParams.get("editSched");

            // Set the schedule_id in the hidden input field
            popup.querySelector('input[name="schedule_id"]').value = scheduleId;

            // Optionally fetch the current time for this schedule and prefill it in the input (AJAX)
            fetch(`get_schedule_time.php?schedule_id=${scheduleId}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        popup.querySelector('input[name="edit_time"]').value = data.time;
                    }
                });

            // Show the popup
            popup.classList.add("active");
        });
    });

    // Close the popup
    closeBtn.addEventListener("click", () => {
        popup.classList.remove("active");
    });
});

document.querySelector(".edit-popup .close-btn").addEventListener("click", function() {
    document.querySelector(".edit-popup").classList.remove("active");
});

