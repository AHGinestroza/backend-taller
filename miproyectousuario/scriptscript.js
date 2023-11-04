(function ($) {
  'use strict';

  $(document).ready(function () {
    $('.table-filter').on('input', function () {
      var value = $(this).val().toLowerCase();

      $('.filtered-table tbody tr').filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      });
    });
  });
})(window.jQuery);
