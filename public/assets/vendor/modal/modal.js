// modal.js ambik dari gpt

function openModal() {
    // Show the modal by setting its display property to 'block'
    document.getElementById('myModal').style.display = 'block';
}

function closeModal() {
    // Hide the modal by setting its display property to 'none'
    document.getElementById('myModal').style.display = 'none';
}

// Close the modal if the user clicks outside of it
window.onclick = function(event) {
    var modal = document.getElementById('myModal');
    if (event.target == modal) {
        closeModal();
    }
};

