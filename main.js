// Get the modal
    var modal = document.getElementById('id01');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    // Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
// shake my jar 
const clickableImg = document.getElementById('clickable-img');
const noteImg = document.getElementById('note-img');
const userNote = document.getElementById('user-note');
const saveNoteButton = document.getElementById('save-note');

let savedNote = ''; // Store the saved note

saveNoteButton.addEventListener('click', () => {
  savedNote = userNote.value;
});

clickableImg.addEventListener('click', () => {
  clickableImg.style.opacity = 0.5; // Example: Apply click styles

  setTimeout(() => {
    if (savedNote) {
      noteImg.src = `path/to/note-image-generator?note=${savedNote}`; // Example: Generate note image with saved note
      noteImg.style.display = 'block';
    } else {
      // Handle the case where no note is saved yet
      // You can display a reminder to save a note or take other actions
    }
  }, 3000);
});
/*______________search button ________________________________________*/
function showSearchForm() {
    const searchForm = document.getElementById('search-form');
    searchForm.style.display = 'block'; // Show the search form
    searchInput.focus(); // Focus on the input field
  }