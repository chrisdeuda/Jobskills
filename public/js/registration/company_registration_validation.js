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

            var company_name = $('#company_name').val();
            var company_address = $('#company_address').val();
            var telephone_no = $('#telephone_no').val();
            var mobile_no = $('#mobile_no').val();
            var fax_no = $('#fax_no').val();
            var email_address = $('#email_address').val();

            var service_offered = $('#service_offered').val();

            var industry_type = $('#industry_type').val();

            $form_data = { "COMPANY_NAME" :company_name,
                "COMPLETE_ADDRESS":company_address,
                "EMAIL":email_address,
                "TEL_NO" : telephone_no,
                "MOBILE_NO" : mobile_no,
                "FAX_NO" : fax_no,
                "INDUSTRY_TYPE": industry_type
                 };

                form_action = "http://localhost/hazelnew/company_register/processForm";

                $.ajax({
                    type: "POST",
                    url: form_action,
                    data: $form_data,
                    dataType: "text",
                    cache:false,
                    success:
                        function(data){
                            console.log(data);
                            window.location = "http://localhost/hazelnew/site/company_employers_side_main";


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