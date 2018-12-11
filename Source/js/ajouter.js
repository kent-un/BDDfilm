$('#inputOrigineFilm').autocomplete({
    source : 'php/autocompOrigine.php',
    minLength : 1,
    autoFocus: true
});
$('#inputPays1Film').autocomplete({
    source : 'php/autocompOrigine.php',
    minLength : 1,
    autoFocus: true
});
$('#inputPays2Film').autocomplete({
    source : 'php/autocompOrigine.php',
    minLength : 1,
    autoFocus: true
});
$('#inputPaysRealFilm').autocomplete({
    source : 'php/autocompOrigine.php',
    minLength : 1,
    autoFocus: true
});


$('#formAjouter').validate();
jQuery.extend(jQuery.validator.messages, {
    required: "<small><em>Ce champ est requis.</em></small>",
});