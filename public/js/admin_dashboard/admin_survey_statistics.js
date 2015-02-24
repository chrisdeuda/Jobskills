$(document).ready(function(){

     $Form = {
        init: function(){
            $Form.processForm();
            $Form.send_get_skill_request();
        },

        processForm: function(){
            $('#btn_submit').click(function(evt){
                evt.preventDefault();

            });

            $('#update_statistics').bind('click',function(e){
                e.preventDefault();
                $Form.send_update_survey_request( this);
            });


        },

         // Testing Area for Developing Function
        // =====================================================================


        // Processing Form Values
        // =====================================================================

        // @GUI Manipulation
        // =====================================================================


// -----------------------------------------------------------------------------
        displayStatistic: function( index , job_name, total_number){
            var output = '';
            output += "<tr>";
            output += "<td>"+ index + "</td>";
            output += "<td>"+ job_name+ "</td>";
            output += "<td>"+ total_number+ "</td>";
            output += "</td>";
            return output;

        },

        errorAlert: function( msg ){
            var $success_message = $('#success_message');
            $success_message.addClass('sr-only');
            var $error_message = $('#error_message');
            $error_message.removeClass('sr-only');

            var dom = $error_message;

            if ( typeof msg === 'undefined'){
                console.log( 'Undefine msg');
            } else {
                dom.html( "<strong>" + msg + "</strong>" );
            }

            dom.fadeIn();

            setTimeout(function(){
                dom.fadeOut();

            }, 7000);

            //console.log( $error_message.attr('class'));

        },

        successAlert: function( msg  ){
            var $success_message = $('#success_message');
            $success_message.removeClass('sr-only');

            var $error_message = $('#error_message');
             $error_message.addClass('sr-only');

            dom = $success_message;

            if ( typeof msg === 'undefined'){
                dom.html( "<strong>" + msg + "</strong>" );
            } else {
                dom.html(msg);
            }

            dom.fadeIn();

            setTimeout(function(){
                dom.fadeOut();

            }, 7000);


        },


        // @AJAX Request
        // =====================================================================

// -----------------------------------------------------------------------------
        send_get_skill_request: function() {
          var postData = { "request" : 1};
          var dom = $('#survey_result');
          var url = dom.attr('data-sendurl');

           $.post( url , postData, function(o){
             if ((o.result) == 1){

                console.log("Displayed Survey Result");
                dom.empty();
                for(key = 0; key < o.data.length; key++){
                    print = $Form.displayStatistic( (key + 1), o.data[key].NAME ,o.data[key].TOTAL );
                    dom.append( print );
                }
             } else {
                console.log(o.error);

             }
           }, 'json');

        },
// -----------------------------------------------------------------------------
        send_update_survey_request: function( the_url) {
          var url = the_url;
          var postData = { "request" : 1};

          console.log("Send Update Request");

           $.post( url , postData, function(o){
             if ((o.result) == 1){
                $Form.successAlert(o.data);
                $Form.send_get_skill_request();
                window.scrollTo(0,0);
             } else {
              $Form.errorAlert( "Unable To Update Survey Statistics");
                console.log(o.error);

             }
           }, 'json');

        },
    }


     $Form.init();
// -----------------------------------------------------------------------------




});