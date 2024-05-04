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
function saveDataJP(name, email, data){
    $.ajax({
        url: 'write_dataJP.php',
        type: 'POST',
        data: {subject: name, email: email, full_data: data},
        dataType: 'text'})
    };

    // saves all jsPsych data to server at end of test as single csv file. 
function saveDataPL(name, email, data){
    $.ajax({
        url: 'write_dataPL.php',
        type: 'POST',
        data: {subject: name, email: email, full_data: data},
        dataType: 'text'})
    };


// saves all jsPsych data to server at end of test as single csv file. 
function saveDataNES(name, data){
    $.ajax({
        url: 'write_data_nes.php',
        type: 'POST',
        data: {subject: name, full_data: data},
        dataType: 'text'})
    };