/* ---------- Bouton charger plus ---------- */

let currentPage = 1;
$('#load-more-button').on('click', function() {
  currentPage++; 

  $.ajax({
    type: 'POST',
    url: 'wp-admin/admin-ajax.php',
    dataType: 'json',
    data: {
      action: 'weichie_load_more',
      paged: currentPage,
    },
    success: function (res) {
      $('.indexphoto').append(res.html);
    }
  });
});


/* ---------- Filtres ---------- */

jQuery(function($) {
  $('#category-select, #format-select, #date-select').on('change', function() {
      const selectedCategory = $('#category-select').val();
      const selectedFormat = $('#format-select').val();
      const selectedDateOrder = $('#date-select').val();

      // Effectuez une requête AJAX pour récupérer les photos filtrées en fonction des sélections.
      $.ajax({
          url: 'wp-admin/admin-ajax.php',
          type: 'POST',
          data: {
              action: 'filter_photos',
              category: selectedCategory,
              format: selectedFormat,
              date_order: selectedDateOrder,
          },
          success: function(response) {
              // Remplacez le contenu de la section des photos par les photos filtrées.
              $('.indexphoto').html(response);
          },
      });
  });
});



