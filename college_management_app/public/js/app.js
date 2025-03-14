document.getElementById('filter_college_id').addEventListener('change',
    function() {
        let collegeId = this.value || this.option[this.selectedIndex].value
        window.location.href = window.location.href.split('?')[0] + '?college_id=' + collegeId // This will show the id of the chosen college within the url
    }
)

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
)