$(document).ready(function(){
$('#data_table').Tabledit({
deleteButton: false,
editButton: false,
columns: {
identifier: [0, 'id'],
editable: [[1, 'firstname'], [2, 'lastname'], [3, 'phone'], [4, 'email']]
},
hideIdentifier: true,
url: 'live_edit.php'
});
});