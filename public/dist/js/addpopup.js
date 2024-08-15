//NEW POPUP TEXAREA
document.addEventListener('DOMContentLoaded', () => {
    let editor;

    // Open popup
	document.getElementById('openPopup').addEventListener('click', () => {
        document.getElementById('popup').style.display = 'flex';

    // Initialize CKEditor 5 if not already initialized
    if (!editor) {
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(ckeditor => {
                editor = ckeditor;
                const textareaData = document.getElementById('geteditor').value;
                editor.setData(textareaData);
            })
            .catch(error => {
                console.error('There was a problem initializing CKEditor:', error);
            });
    }
});


    // Close popup
	document.getElementById('closePopupButton').addEventListener('click', function() {
      document.getElementById('popup').style.display = 'none';
    });

        // Close popup
	document.getElementById('closePopup').addEventListener('click', function() {
        document.getElementById('popup').style.display = 'none';
      });
  

	//Save content from CKEditor to textarea
	saveButton = document.getElementById('saveButton').addEventListener('click', async () => {
    try {
        if (editor) {
            // Fetch the data from the editor asynchronously
            const data = await editor.getData();
            // Update the value of geteditor with the retrieved data
            geteditor.value = data;
            displayArea.innerHTML = data;
            
            // Optionally close the popup after saving
            popup.style.display = 'none';
        }
    } catch (error) {
        console.error('There was a problem saving the content:', error);
    }
});


});


//NEW POPUP TEXAREA 1
document.addEventListener('DOMContentLoaded', () => {
    let editor1;

    // Open popup
	document.getElementById('openPopup1').addEventListener('click', () => {
        document.getElementById('popup1').style.display = 'flex';

    // Initialize CKEditor 5 if not already initialized
    if (!editor1) {
        ClassicEditor
            .create(document.querySelector('#editor1'))
            .then(ckeditor => {
                editor1 = ckeditor;
                const textareaData = document.getElementById('geteditor1').value;
                editor1.setData(textareaData);
            })
            .catch(error => {
                console.error('There was a problem initializing CKEditor:', error);
            });
    }
});


    // Close popup
	document.getElementById('closePopupButton1').addEventListener('click', function() {
      document.getElementById('popup1').style.display = 'none';
    });

    // Close popup
	document.getElementById('closePopup1').addEventListener('click', function() {
        document.getElementById('popup1').style.display = 'none';
    });

	//Save content from CKEditor to textarea
	document.getElementById('saveButton1').addEventListener('click', async () => {
    try {
        if (editor1) {
            // Fetch the data from the editor asynchronously
            const data = await editor1.getData();
            // Update the value of geteditor with the retrieved data
            geteditor1.value = data;
            displayArea1.innerHTML = data;
            // Optionally close the popup after saving
            popup1.style.display = 'none';
        }
    } catch (error) {
        console.error('There was a problem saving the content:', error);
    }
});


});

    //NEW POPUP TEXAREA 2
    document.addEventListener('DOMContentLoaded', () => {
    let editor2;

    // Open popup
	document.getElementById('openPopup2').addEventListener('click', () => {
        document.getElementById('popup2').style.display = 'flex';

    // Initialize CKEditor 5 if not already initialized
    if (!editor2) {
        ClassicEditor
            .create(document.querySelector('#editor2'))
            .then(ckeditor => {
                editor2 = ckeditor;
                const textareaData = document.getElementById('geteditor2').value;
                editor2.setData(textareaData);
            })
            .catch(error => {
                console.error('There was a problem initializing CKEditor:', error);
            });
    }
});


    // Close popup
	document.getElementById('closePopupButton2').addEventListener('click', function() {
      document.getElementById('popup2').style.display = 'none';
    });

    // Close popup
	document.getElementById('closePopup2').addEventListener('click', function() {
        document.getElementById('popup2').style.display = 'none';
    });

	//Save content from CKEditor to textarea
	document.getElementById('saveButton2').addEventListener('click', async () => {
    try {
        if (editor2) {
            // Fetch the data from the editor asynchronously
            const data = await editor2.getData();
            // Update the value of geteditor with the retrieved data
            geteditor2.value = data;
            displayArea2.innerHTML = data;
            // Optionally close the popup after saving
            popup2.style.display = 'none';
        }
    } catch (error) {
        console.error('There was a problem saving the content:', error);
    }
});


});
