$(document).ready(function(){
$('#data_table').Tabledit({
deleteButton: false,
editButton: false,
columns: {
identifier: [0, 'id'],
editable: [[1, 'first'], [2, 'last'], [3, 'email'], [4, 'city'], [5, 'state'], [6, 'hasbeen'], [7, 'wouldgo'], [8, 'favorite'], [9, 'comment']]
},
hideIdentifier: true,
url: 'dbphp/live_edit.php'
});
});