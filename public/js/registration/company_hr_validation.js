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

            var name = $('#name').val();
            var email_address = $('#email_address').val();
            var company_address = $('#company_address').val();
            var telephone_no = $('#telephone_no').val();
            var mobile_no = $('#mobile_no').val();
            var fax_no = $('#fax_no').val();

            var username = $('#username').val();
            var password = $('#password').val();
            var confirm_password = $('#confirm_password').val();


            var service_offered = $('#service_offered').val();

            var industry_type = $('#industry_type').val();





            $form_data = { "NAME" :name,
                "POSITION" :  "Specialist",
                "DEPARTMENT" : "Main",
                "DEGREE" : "Bachelor of Science in Psychology",
                "SCHOOL" : "National College Science of Technology",
                "EMAIL":email_address,
                "TEL_NO" : telephone_no,
                "MOBILE_NO" : mobile_no,
                "FAX_NO" : fax_no,
                "YR_SERVICE" : 1,
                "SURVEY_STATUS": 0
                 };



                form_action = "http://localhost/hazelnew/company_register/processHRForm";

                $.ajax({
                    type: "POST",
                    url: form_action,
                    data: $form_data,
                    dataType: "text",
                    cache:false,
                    success:
                        function(data){
                            console.log(data);
                            $result = JSON.parse(data);

                             $login_data = {
                                "USER_ID_FK" : $result.user_id,
                                "USERNAME" : username,
                                "PASSWORD" : password,
                                "USER_TYPE_ID_FK" : 1
                            }

                            $Form.sendLoginRequest( $login_data );


                            //window.location = "http://localhost/hazelnew/site/company_employers_side_main";


                        },
                });

        },

        sendLoginRequest: function( $login_data ){
            form_action = "http://localhost/hazelnew/company_register/saveLogin";

            $.ajax({
                    type: "POST",
                    url: form_action,
                    data: $login_data,
                    dataType: "text",
                    cache:false,
                    success:
                        function(data){
                            console.log(data);
                            //window.location = "http://localhost/hazelnew/site/company_employers_side_main";


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