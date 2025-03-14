// Checking if the element exists within the page to cater for errors
var filterCollegeId = document.getElementById('filter_college_id');
if(filterCollegeId) { // If the element is present then the college drop-down will work
    filterCollegeId.addEventListener('change',
        function() {
            let collegeId = this.value || this.options[this.selectedIndex].value;
            window.location.href = window.location.href.split('?')[0] + '?college_id=' + collegeId; // This will show the id of the chosen college within the url
        }
    );
}

document.addEventListener('DOMContentLoaded', 
    function() {
        // First we get the element within the page
        var successAlert = document.getElementById('success-alert');
        // Then we check if the element exists to set a timeout
        if(successAlert) {
            setTimeout(function() {
                successAlert.style.display = 'none';
            }, 4000); // The alert will be removed after 4 seconds
        }
    }
);

// Checking if the elemnt exists within the page
var toggleDirection = document.getElementById('toggleDirection');
if(toggleDirection) { // If the arrow button is visible
    toggleDirection.addEventListener('click', function() {
        var icon = document.getElementById('directionIcon');
        // Checking the element name for ordering purposes
        if (icon.name === 'chevron-down-outline') {
            icon.name = 'chevron-up-outline';
        } else {
            icon.name = 'chevron-down-outline';
        }
    });
}