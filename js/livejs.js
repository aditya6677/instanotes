$(document).ready(function(){
$('input.typeahead').typeahead({
    name: 'typeahead',
    remote:'live.php?key=%QUERY',
    limit : 10
});
});
