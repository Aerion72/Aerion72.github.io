 $(document).ready(function(){

            $('#checkall').change(function(){
            $('.checkcat').prop("checked", $(this).prop('checked'))
              if ($(this).is(':checked')) {
              $('#delete').removeAttr('disabled');
        } else {
            $('#delete').attr('disabled', 'disabled');
        }
      });

      });

 
        