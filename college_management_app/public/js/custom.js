document.getElementById('toggleDirection').addEventListener('click', function() {
    var icon = document.getElementById('directionIcon');
    if (icon.name === 'chevron-down-outline') {
        icon.name = 'chevron-up-outline';
    } else {
        icon.name = 'chevron-down-outline';
    }
});
