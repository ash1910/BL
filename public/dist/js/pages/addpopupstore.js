document.addEventListener('DOMContentLoaded', () => {
    const openPopupButton = document.getElementById('openPopup');
    //const closePopupButton = document.getElementById('closePopup');
    const saveButton = document.getElementById('saveButton');
    const popup = document.getElementById('popup');
    //const textarea = document.getElementById('editor');
	//const textarea = document.getElementById('geteditor');
    let editor;

    // Open popup
	openPopupButton.addEventListener('click', () => {
    popup.style.display = 'flex';

	       /*// Function to initialize CKEditor 5
			if (!editor) {
            ClassicEditor
                .create(document.querySelector('#editor'))
                .then(ckeditor => {
                    editor = ckeditor;
                    // Set initial data from textarea
                    const textareaData = document.getElementById('geteditor').value;
                    editor.setData(textareaData);
                })
                .catch(error => {
                    console.error('There was a problem initializing CKEditor:', error);
                });
        }*/

    // Initialize CKEditor 5 if not already initialized
    if (!editor) {
        ClassicEditor
            .create(document.querySelector('#editor2'))
            .then(ckeditor => {
                editor = ckeditor;
            })
            .catch(error => {
                console.error('There was a problem initializing CKEditor:', error);
            });
    }
});


    // Close popup
    //closePopupButton.addEventListener('click', () => {
        //popup.style.display = 'none';
    //});
    // Close popup
	document.getElementById('closePopupButton').addEventListener('click', function() {
      document.getElementById('popup').style.display = 'none';
    });

    // Save content from CKEditor to textarea
    /*saveButton.addEventListener('click', () => {
        if (editor) {
            editor.getData().then(data => {
                geteditor.value = data;
                popup.style.display = 'none'; // Optionally close the popup after saving
            }).catch(error => {
                console.error('There was a problem saving the content:', error);
            });
        }
    });*/
	//Save content from CKEditor to textarea
	saveButton.addEventListener('click', async () => {
    try {
        if (editor) {
            // Fetch the data from the editor asynchronously
            const data = await editor.getData();
            // Update the value of geteditor with the retrieved data
            geteditor2.value = data;
            // Optionally close the popup after saving
            popup.style.display = 'none';
        }
    } catch (error) {
        console.error('There was a problem saving the content:', error);
    }
});


});