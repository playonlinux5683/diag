jQuery(document).ready(function ($) {

    /* === Sortable Multi-CheckBoxes === */

    /* Make it sortable. */
    $('ul.ink-multicheck-sortable-list').sortable({
        handle: '.ink-multicheck-sortable-handle',
        axis: 'y',
        update: function (e, ui) {
            $('input.ink-multicheck-sortable-item').trigger('change');
        }
    });

    /* On changing the value. */
    $("input.ink-multicheck-sortable-item").on('change', function () {

        /* Get the value, and convert to string. */
        this_checkboxes_values = $(this).parents('ul.ink-multicheck-sortable-list').find('input.ink-multicheck-sortable-item').map(function () {
            var active = '0';
            if ($(this).prop("checked")) {
                var active = '1';
            }
            return this.name + ':' + active;
        }).get().join(',');

        /* Add the value to hidden input. */
        $(this).parents('ul.ink-multicheck-sortable-list').find('input.ink-multicheck-sortable').val(this_checkboxes_values).trigger('change');

    });
});
