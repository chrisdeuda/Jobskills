$(document).ready(function(){
// -----------------------------------------------------------------------------
     $Form = {
        init: function(){
            $Form.processForm();
            $Form.send_get_skill_request();
        },
// -----------------------------------------------------------------------------
        processForm: function(){
            $('button[id=btn_add_hr]').click(function(evt){
                evt.preventDefault();
                $Form.saveFormValues();
                console.log('Saving Form Values');
            });
        },

         // Testing Area for Developing Function
        // =====================================================================

// -----------------------------------------------------------------------------
        saveFormValues: function( ){
            var name = $('#name_hr').val();
            var email_address = $("#email_address").val();
            var contact_no = $('#contact_no').val();
            var url = $('#hr_add_form').attr('action');

            postData = {
                "name_hr": name,
                "email_address": email_address,
                "contact_no" : contact_no
            };


            $.post( url , postData, function(o){

                 if ((o.result) == 1){

                    $Form.successAlert( "<p>New Hr Added</p>" );
                    $Form.focusOnTop();
                    console.log("New Hr Addedd");
                    $('#btn_modal_close').trigger('click');

                 } else {
                    msg = '';
                    msg += "<ul>";
                    for (var key in o.error) {
                        msg += "<li>"+ o.error[key]+ "</li>";
                        console.log("Key: " + o.error[key] );
                    }
                    msg += "</ul>";
                    $Form.errorAlert( msg );
                 }
           }, 'json');
        },



        // Processing Form Values
        // =====================================================================

        // @GUI Manipulation
        // =====================================================================


// -----------------------------------------------------------------------------
        addOption: function(value, data){
            output = '';
            output += "<option value="+ value +">";
            output += data;
            output += "</option >";
            return output;

        },
// -----------------------------------------------------------------------------
        errorAlert: function( msg ){
            $success_message = $('#success_message');
            $success_message.addClass('sr-only');
            $error_message = $('#error_message');
            $error_message.removeClass('sr-only');

            dom = $error_message;

            if ( typeof msg === 'undefined'){
                console.log( 'Undefine msg');
            } else {
                dom.html( msg );
            }

            dom.fadeIn();

            setTimeout(function(){
                dom.fadeOut();

            }, 5000);

            //console.log( $error_message.attr('class'));

        },
// -----------------------------------------------------------------------------
        successAlert: function( msg  ){
            $success_message = $('#success_message');
            $success_message.removeClass('sr-only');

            $error_message = $('#error_message');
            $error_message.addClass('sr-only');

            dom = $success_message;

            if ( typeof msg === 'undefined'){
                dom.html( msg );
            } else {
                dom.html(msg);
            }

            dom.fadeIn();

            setTimeout(function(){
                dom.fadeOut();

            }, 5000);


        },

        focusOnTop: function(){
            window.scrollTo(0,0)

        },
// -----------------------------------------------------------------------------






        // @AJAX Request
        // =====================================================================

// -----------------------------------------------------------------------------
        send_get_skill_request: function() {
          var url = 'http://localhost/hazelnew/api/get_skills';
          var postData = { "request" : 1};
          var $job_title = $('#job_title');

           $.post( url , postData, function(o){
             if ((o.result) == 1){
                for(key = 0; key < o.data.length; key++){
                    print = $Form.addOption( o.data[key].ID ,o.data[key].SKILL_NAME );
                    $job_title.prepend( print );
                }
             } else {
                console.log(o.error);

             }
           }, 'json');

        },
// -----------------------------------------------------------------------------







    }


     $Form.init();




});