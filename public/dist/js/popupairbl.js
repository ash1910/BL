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

    //NEW POPUP TEXAREA 3
    document.addEventListener('DOMContentLoaded', () => {
        let editor3;
    
    // Open popup
    document.getElementById('openPopup3').addEventListener('click', () => {
        document.getElementById('popup3').style.display = 'flex';
    
    // Initialize CKEditor 5 if not already initialized
    if (!editor3) {
        ClassicEditor
            .create(document.querySelector('#editor3'))
            .then(ckeditor => {
                editor3 = ckeditor;
                const textareaData = document.getElementById('geteditor3').value;
                editor3.setData(textareaData);
            })
            .catch(error => {
                console.error('There was a problem initializing CKEditor:', error);
            });
    }
});
    
    
    // Close popup
    document.getElementById('closePopupButton3').addEventListener('click', function() {
      document.getElementById('popup3').style.display = 'none';
    });
    
    // Close popup
    document.getElementById('closePopup3').addEventListener('click', function() {
        document.getElementById('popup3').style.display = 'none';
    });
    
    //Save content from CKEditor to textarea
    document.getElementById('saveButton3').addEventListener('click', async () => {
    try {
        if (editor3) {
            // Fetch the data from the editor asynchronously
            const data = await editor3.getData();
            // Update the value of geteditor with the retrieved data
            geteditor3.value = data;
            displayArea3.innerHTML = data;
            // Optionally close the popup after saving
            popup3.style.display = 'none';
        }
    } catch (error) {
        console.error('There was a problem saving the content:', error);
    }
});
    
    
});


    //NEW POPUP TEXAREA 4
    document.addEventListener('DOMContentLoaded', () => {
        let editor4;
        
        // Open popup
    document.getElementById('openPopup4').addEventListener('click', () => {
        document.getElementById('popup4').style.display = 'flex';
    
        // Initialize CKEditor 5 if not already initialized
    if (!editor4) {
        ClassicEditor
            .create(document.querySelector('#editor4'))
            .then(ckeditor => {
                editor4 = ckeditor;
                const textareaData = document.getElementById('geteditor4').value;
                editor4.setData(textareaData);
            })
            .catch(error => {
                console.error('There was a problem initializing CKEditor:', error);
            });
    }
});
    
    
    // Close popup
    document.getElementById('closePopupButton4').addEventListener('click', function() {
      document.getElementById('popup4').style.display = 'none';
    });

    // Close popup
    document.getElementById('closePopup4').addEventListener('click', function() {
        document.getElementById('popup4').style.display = 'none';
    });

    //Save content from CKEditor to textarea
    document.getElementById('saveButton4').addEventListener('click', async () => {
    try {
        if (editor4) {
            // Fetch the data from the editor asynchronously
            const data = await editor4.getData();
            // Update the value of geteditor with the retrieved data
            geteditor4.value = data;
            displayArea4.innerHTML = data;
            // Optionally close the popup after saving
            popup4.style.display = 'none';
        }
    } catch (error) {
        console.error('There was a problem saving the content:', error);
    }
});


});


    //NEW POPUP TEXAREA 5
    document.addEventListener('DOMContentLoaded', () => {
        let editor5;
        
        // Open popup
    document.getElementById('openPopup5').addEventListener('click', () => {
        document.getElementById('popup5').style.display = 'flex';
    
        // Initialize CKEditor 5 if not already initialized
    if (!editor5) {
        ClassicEditor
            .create(document.querySelector('#editor5'))
            .then(ckeditor => {
                editor5 = ckeditor;
                const textareaData = document.getElementById('geteditor5').value;
                editor5.setData(textareaData);
            })
            .catch(error => {
                console.error('There was a problem initializing CKEditor:', error);
            });
    }
});
    
    
    // Close popup
    document.getElementById('closePopupButton5').addEventListener('click', function() {
      document.getElementById('popup5').style.display = 'none';
    });

    // Close popup
    document.getElementById('closePopup5').addEventListener('click', function() {
        document.getElementById('popup5').style.display = 'none';
    });

    //Save content from CKEditor to textarea
    document.getElementById('saveButton5').addEventListener('click', async () => {
    try {
        if (editor5) {
            // Fetch the data from the editor asynchronously
            const data = await editor5.getData();
            // Update the value of geteditor with the retrieved data
            geteditor5.value = data;
            displayArea5.innerHTML = data;
            // Optionally close the popup after saving
            popup5.style.display = 'none';
        }
    } catch (error) {
        console.error('There was a problem saving the content:', error);
    }
});


});


    //NEW POPUP TEXAREA 6
    document.addEventListener('DOMContentLoaded', () => {
        let editor6;
        
        // Open popup
    document.getElementById('openPopup6').addEventListener('click', () => {
        document.getElementById('popup6').style.display = 'flex';
    
        // Initialize CKEditor 5 if not already initialized
    if (!editor6) {
        ClassicEditor
            .create(document.querySelector('#editor6'))
            .then(ckeditor => {
                editor6 = ckeditor;
                const textareaData = document.getElementById('geteditor6').value;
                editor6.setData(textareaData);
            })
            .catch(error => {
                console.error('There was a problem initializing CKEditor:', error);
            });
    }
});
    
    
    // Close popup
    document.getElementById('closePopupButton6').addEventListener('click', function() {
      document.getElementById('popup6').style.display = 'none';
    });

    // Close popup
    document.getElementById('closePopup6').addEventListener('click', function() {
        document.getElementById('popup6').style.display = 'none';
    });

    //Save content from CKEditor to textarea
    document.getElementById('saveButton6').addEventListener('click', async () => {
    try {
        if (editor6) {
            // Fetch the data from the editor asynchronously
            const data = await editor6.getData();
            // Update the value of geteditor with the retrieved data
            geteditor6.value = data;
            displayArea6.innerHTML = data;
            // Optionally close the popup after saving
            popup6.style.display = 'none';
        }
    } catch (error) {
        console.error('There was a problem saving the content:', error);
    }
});


});