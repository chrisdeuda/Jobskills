$(document).ready(function(){

     $Form = {
        init: function(){
            $Form.processForm();
        },

        processForm: function(){

        },

         // Testing Area for Developing Function
        // =====================================================================


        getFormValues: function(){
            $.ajax({
                type: "POST",
                url: form_action,
                data: data,
                dataType: "text",
                cache:false,
                success:
                    function(data){
                        console.log(data);


                    },
            });

        },



        // Processing Form Values
        // =====================================================================

        // @GUI Manipulation
        // =====================================================================


        displayResult: function(){
            //to clone the template message and modify its content
            // do something about clone
            template_name = "#progress_template";
            var $tag_image      = 'ul.message-text';
            var $tag_name       = 'span.message-name';
            var $tag_date       = 'span.message-date';
            var $tag_message    = 'li.message-data';
            var first_message_id    = "";


            $current_message = "#message-container #messages";

            var $template = $(template_name).clone( false );

             $template.find( $tag_name ).text( username)
                            .end()
                      .find($tag_date ).text( date_now)
                            .end()
                      .find($tag_message).text( message)
                            .end();
                    //  .find( $tag_image).text( image_path )
                            //.end();

            $template.attr('id', template_name + ($current_message_count + 1 ) );

            if ( display_location == "after" || display_location == "" || display_location == undefined) {
                $template.appendTo( $current_message );
            } else if (display_location == "before"){
                $($current_message).children().eq(0).before( $template);
                first_message_id = $('#messages').children().eq(0).attr('id') ;

                $(first_message_id).before( $template);
            }

            $template.hide();
            $template.fadeIn(1000);




        },



        // @AJAX Request
        // =====================================================================




    }


     $Form.init();




});