// create folder for subject once they enter their name
function createData(name){
    $.ajax({
        url: 'add_subject.php',
        type: 'POST',
        data: {subject: name},
        dataType: 'text'})
    };

// add subject/email to master csv
function addMaster(name, email){
    $.ajax({
        url: 'add_subject_master.php',
        type: 'POST',
        data: {subject: name, email: email},
        dataType: 'text'})
};


// saves all jsPsych data to server at end of test as single csv file. 
function saveData(name, email, data){
    $.ajax({
        url: 'write_data.php',
        type: 'POST',
        data: {subject: name, email: email, full_data: data},
        dataType: 'text'})
    };