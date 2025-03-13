document.getElementById('filter_college_id').addEventListener('change',
    function() {
        let collegeId = this.value || this.option[this.selectedIndex].value
        window.location.href = window.location.href.split('?')[0] + '?college_id=' + collegeId // This will show the id of the chosen college within the url
    }
)