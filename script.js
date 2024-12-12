$(document).ready(function () {
    const moviesByLanguage = {
        English: ["Inception", "Titanic", "Avengers: Endgame"],
        Hindi: ["3 Idiots", "Dangal", "Chhichhore"],
        Kannada: ["Kantara", "KGF", "Lucia"]
    };

    // When the language changes, update the movie dropdown
    $("#language").change(function () {
        const selectedLanguage = $(this).val();
        const movies = moviesByLanguage[selectedLanguage];

        // Clear the movie dropdown
        $("#movie").html('<option value="" disabled selected>Select a Movie</option>');

        // Populate movies based on the selected language
        movies.forEach(function (movie) {
            $("#movie").append(`<option value="${movie}">${movie}</option>`);
        });
    });
});