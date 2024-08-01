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

//BACKUP JS
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
                const textareaData = document.getElementById('displayArea').innerText;
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
                const textareaData = document.getElementById('displayArea1').innerText;
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
                const textareaData = document.getElementById('displayArea2').innerText;
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
