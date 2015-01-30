$(document).ready(function(){

     $Form = {
        init: function(){
            $Form.processForm();
        },

        processForm: function(){

            $('#btn_submit').click( function (event){
                event.preventDefault();
                $Form.getFormValues();
            });

        },

         // Testing Area for Developing Function
        // =====================================================================


        getFormValues: function(){
            var index = 0;
            var div_name = "";
            var input_name = "";

            var max_value = 20;

            var form_action = $('#surveyForm').prop('action');

            var data = {};

                for( index = 1; index < max_value; index++ ){
                    div_name = "#skill_" + index ;
                    input_name = $( div_name ).prop('name');
                    result = $( div_name ).prop('checked') ? 1 : 0;

                    data[input_name] = result;
                }

                $.ajax({
                    type: "POST",
                    url: form_action,
                    data: data,
                    dataType: "text",
                    cache:false,
                    success:
                        function(data){
                            console.log(data);
                            window.location = "http://localhost/hazelnew/survey/get_survey_result";

                        },
                });

        },



        // Processing Form Values
        // =====================================================================

        // @GUI Manipulation
        // =====================================================================

        // @AJAX Request
        // =====================================================================




    }


     $Form.init();




});