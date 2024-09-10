function toggleDropdown(dropdownId) {
    var dropdownContent = document.getElementById(dropdownId);
    // Toggle the display property between 'none' and 'block'
    if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
    } else {
        // Hide other open dropdowns
        closeAllDropdowns();
        dropdownContent.style.display = "block";
    }
}

// Close all dropdowns if the user clicks outside of them
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        closeAllDropdowns();
    }
}

function closeAllDropdowns() {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var i = 0; i < dropdowns.length; i++) {
        dropdowns[i].style.display = "none";
    }
}
