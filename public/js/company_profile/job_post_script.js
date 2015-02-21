$(document).ready(function(){
     $job_title             = $("#job_title");
     $new_job_title         = $('#new_job_post_title');
     $new_job_post_title_id = $('#new_job_post_title_id');
     $skills_need_count     = $('#skills_need_count');
     $description           = $("#requirements_description");


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

           $job_title.change(function() {

                if ( $job_title.val() == 0 ) {
                    $new_job_title.removeClass('sr-only');
                     $job_title.prop('disabled', 'disabled');
                } else {

                }
            });

           $new_job_title.blur(function(){
                $Form.saveNewTitleRequest( $new_job_title.val(), $new_job_title.attr('data-sendurl')  );
           });

        },

         // Testing Area for Developing Function
        // =====================================================================
        saveFormValues: function( ){
            var job_title           = $job_title.val();
            var description         = $description.val();
            var skills_need_count   = $skills_need_count.val();
            var new_job_title       = $new_job_title.val();
            var new_job_post_title_id = $new_job_post_title_id.val();
            var url                 = $('#myForm').attr('action');;

            postData = {
                "job_title": job_title,
                "description": description,
                "skills_need_count" : skills_need_count,
                "new_job_title" : new_job_title,
                "new_job_post_title_id" :new_job_post_title_id
            };

            $.post( url , postData, function(o){
             if ((o.result) == 1){
                $Form.successAlert( "<p>New Job Post Added</p>" );

             } else {
                $Form.errorAlert();
                msg = '';
                msg += "<ul>";
                for (var key in o.error) {
                    msg += "<li>"+ o.error[key]+ "</li>";
                }

                msg += "</ul>";
                $Form.errorAlert( msg );

             }
           }, 'json');
        },

        saveNewTitleRequest: function( the_title, $url ){

            var postData = {
                "new_job_title" : the_title

            };

             $.post( $url , postData, function(o){
             if ((o.result) == 1){
                $Form.successAlert( "<p>New Job Title Added</p>" );
                $new_job_post_title_id.val( o.ID);

             } else if ((o.result) == 0) {
                var msg = "<p>" + o.error+ "</p>";
                $new_job_post_title_id.val( o.ID);
                $Form.errorAlert( msg  );

             } else {   //database error
                var msg = "<p>" + o.error+ "</p>";
                $Form.errorAlert( msg  );

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
                dom.html( msg );
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
                    $job_title.append( print );
                }
                print = $Form.addOption( 0 , "OTHERS" );
                $job_title.append( print );
             } else {
                console.log(o.error);

             }
           }, 'json');

        },
// -----------------------------------------------------------------------------







    }


     $Form.init();




});