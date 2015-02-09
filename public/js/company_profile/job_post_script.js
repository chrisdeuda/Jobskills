$(document).ready(function(){

     $Form = {
        init: function(){
            $Form.processForm();
            $Form.send_get_skill_request();
        },

        processForm: function(){
            $('#btn_submit').click(function(evt){
                evt.preventDefault();
                $Form.saveFormValues();
                console.log('Saving Form Values');
            });
        },

         // Testing Area for Developing Function
        // =====================================================================


        saveFormValues: function( ){
            var job_title = $('#job_title').val();
            var description = $("#requirements_description").val();
            var skills_need_count = $('#skills_need_count').val();
            var url = $('#myForm').attr('action');;

            postData = {
                "job_title": job_title,
                "description": description,
                "skills_need_count" : skills_need_count
            };

            $.post( url , postData, function(o){
             if ((o.result) == 1){
                $Form.successAlert( "<p>New Job Post Added</p>" );
                //window.location = "http://localhost/hazelnew/site/default_company_profile";

             } else {
                $Form.errorAlert();
                msg = '';
                msg += "<ul>";
                for (var key in o.error) {
                    msg += "<li>"+ o.error[key]+ "</li>";
                    //console.log("Key: " + key);
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