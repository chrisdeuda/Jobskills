$(document).ready(function(){

     $Form = {
        init: function(){

            $Form.clearValue('username');
            $Form.clearValue('password');

            $Form.processForm();
            $Form.hideError();
        },

        processForm: function(){

            $('#btn_login').click( function (event){
                event.preventDefault();
                //alert('working');

                $Form.collectData();
            });

        },

         // Testing Area for Developing function
        // =====================================================================

        collectData: function(){
            username = $('#sign_text').val();
            password = $('#pass_text').val();
            send_url = $('#frm_login').attr('action');

            if ( $.trim(password) == "" ||  $.trim(username)== "" ) {
                //alert("Empty variable");

            } else {
                $form_data = { "username" :username,
                "password": password

                 };

                $Form.sendLoginRequest( $form_data, send_url );

            }
        },





        // Processing Form Values
        // =====================================================================

        // @GUI Manipulation
        // =====================================================================

        hideError: function(){
            $error_message = $('#error-message');
            $error_message.addClass('sr-only');

        },

        showError: function(){
            $error_message = $('#error-message');
            $error_message.removeClass('sr-only');
        },

        clearValue: function( input_field_id ){
            $('#' + input_field_id).val( "" );
        },

        // @AJAX Request
        // =====================================================================

        sendLoginRequest: function( $form_data, login_url){

            $.ajax({
                type: "POST",
                url: login_url,
                data: $form_data,
                dataType: "text",
                cache:false,
                success:
                    function(data){
                       $result = JSON.parse(data);

                        if ( $result.status == false) {
                            $Form.showError();
                            $Form.clearValue('password');
                        } else if ($result.status == true){
                            $Form.hideError();

                            window.location =  $result.forward_url;

                        }
                    },
            });


        }







    }


     $Form.init();




});