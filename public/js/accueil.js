function toggleCheckboxes(clickedCheckbox, otherCheckboxId) {
    var otherCheckbox = document.getElementById(otherCheckboxId);
    if (clickedCheckbox.checked) {
        otherCheckbox.checked = false;
    }
}

// Auto-toggle function
function autoToggle() {
    var checkbox1 = document.getElementById('checkbox1');
    var checkbox2 = document.getElementById('checkbox2');

    if (checkbox1.checked) {
        checkbox1.checked = false;
        checkbox2.checked = true;
    } else {
        checkbox1.checked = true;
        checkbox2.checked = false;
    }
}


setInterval(autoToggle, 60000);