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
        },

         // Testing Area for Developing Function
        // =====================================================================


        // Processing Form Values
        // =====================================================================

        // @GUI Manipulation
        // =====================================================================


// -----------------------------------------------------------------------------
        displayStatistic: function( index , job_name, total_number){
            output = '';
            output += "<tr>";
            output += "<td>"+ index + "</td>";
            output += "<td>"+ job_name+ "</td>";
            output += "<td>"+ total_number+ "</td>";
            output += "</td>";
            return output;

        },

        errorAlert: function( msg ){

        },

        successAlert: function( msg  ){


        },



        // @AJAX Request
        // =====================================================================

// -----------------------------------------------------------------------------
        send_get_skill_request: function() {
          var url = 'http://localhost/hazelnew/api/get_survey_statistic';
          var postData = { "request" : 1};

          var dom = $('#survey_result');

           $.post( url , postData, function(o){
             if ((o.result) == 1){

                console.log("Display Survey Result");
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







    }


     $Form.init();




});