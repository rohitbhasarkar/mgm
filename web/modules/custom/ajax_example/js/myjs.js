// alert("Hi, this is using library");

(function ($) {
  Drupal.behaviors.ajax_example = {
    attach: function (context, settings) {
      var numOne, numTwo, operation = 'Nothing Selected';
      var result = 20;

      $("#calculate_result").on('click', function () {
        numOne = Number($('#edit-value-one').val());
        numTwo = Number($('#edit-value-two').val());
        operation = $('#edit-operation').val();
        // console.log(numOne);
        switch (operation) {
          case 'add':
            result = numOne + numTwo;
            break;

          case 'sub':
            result = numOne - numTwo;
            break;

          case 'mul':
            result = numOne * numTwo;
            break;

          case 'div':
            result = numOne / numTwo;
            break;

          default:
            result = 0;
        }
        event.preventDefault();
        confirmationDialog = Drupal.dialog(content, {
          dialogClass: 'confirm-dialog',
          resizable: false,
          closeOnEscape: false,
          width: 600,
          title: operation,
          create: function () {
            // $(this).parent().find('.ui-dialog-titlebar-close').remove();
          },
          beforeClose: false,
          close: function (event) {
            $(event.target).remove();
          }
        });
        confirmationDialog.showModal();
      });
      var content = '<div><p id="version-confirm-form-text">Result: ' + result + '</p>';
      console.log(content);
    }
  };
})(jQuery);
