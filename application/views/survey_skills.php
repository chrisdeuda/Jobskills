
    <head>
    <title>Sample Survey</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/hr_register_section/hr_register1.css" type="text/css" />

    </head>


    <!-- Main Content-->
    <div id="main_container">
        <div id="header">
            <!-- insert header here -->
                <?php include_once('includes/header_section/header.php'); ?>
            <!-- end header here -->
        </div>
            <br></br>

        <div class="container" style="max-width: 900px;">

            <div class="row">
                <div  id="hr-reg">
                    <br/>
                    <h2 style="color:#3f3f3f;font-size: 40px;font-family: lato;font-weight: bold;margin:20px;"><b>Sample Survey</b></h2>
                    <center>
                        <form id="surveyForm" class="" action="<?php echo base_url();?>survey/processSurvey" method="POST">
                            <input type="checkbox" id ="skill_1" name ="READING" value="1" />Reading<br>
                            <input type="checkbox" id ="skill_2" name ="WRITING" value="1" />Writing<br>
                            <input type="checkbox" id ="skill_3" name ="MATH"       value="1" />Maths<br>
                            <input type="checkbox" id ="skill_4" name ="LANGUAGE"   value="1" />Language<br>
                            <input type="checkbox" id ="skill_5" name ="DEXTERITY"  value="1" />Dexterity<br>
                            <input type="checkbox" id ="skill_6" name ="TEAM_WORKING" value="1" />Team Working<br>
                            <input type="checkbox" id ="skill_7" name ="LEARNING" value="1" />Learning<br>
                            <input type="checkbox" id ="skill_8" name ="ADAPTING" value="1" />Adapting<br>
                            <input type="checkbox" id ="skill_9" name ="INSTRUCTING" value="1" />Instructing<br>
                            <input type="checkbox" id ="skill_10" name ="TASK_DISCRETION" value="1" />Task Discretion<br>
                            <input type="checkbox" id ="skill_11" name ="COMPUTING" value="1" />Computing<br>
                            <input type="checkbox" id ="skill_12" name ="MANAGERIAL_SKILLS" value="1" />Manegerial Skill<br>
                            <input type="checkbox" id ="skill_13" name ="PROBLEM_SOLVING" value="1" />Problem Solving <br>
                            <input type="checkbox" id ="skill_14" name ="PRESENTATIONS" value="1" />Presentation<br>
                            <input type="checkbox" id ="skill_15" name ="PERSUADING" value="1" />Persuading<br>
                            <input type="checkbox" id ="skill_16" name ="PLANNING" value="1" />Planning<br>
                            <input type="checkbox" id ="skill_17" name ="GREEN_SKILLS" value="1" />Green Skills<br>
                            <input type="checkbox" id ="skill_18" name ="RESOURCE_SAVING" value="1" />Resource Saving<br>
                            <input type="checkbox" id ="skill_19" name ="POLLUTION_SAVING" value="1" />Pollution Saving<br>





                            <button  name="Submit"  name="btn_submit" id="btn_submit">Submit </button>

                        </form>



                            <!--
                            INSERT INTO `project`.`basic_skills_data` (`ID`, `USER_ID_FK`, `READING`, `WRITING`, `MATH`, `LANGUAGE`, `DEXTERITY`, `TEAM_WORKING`, `LEARNING`, `ADAPTING`, `INSTRUCTING`, `TASK_DISCRETION`, `COMPUTING`, `MANAGERIAL_SKILLS`, `PROBLEM_SOLVING`, `PRESENTATIONS`, `PERSUADING`, `PLANNING`, `GREEN_SKILLS`, `RESOURCE_SAVING`, `POLLUTION_SAVING`) VALUES (NULL, '1', '0', '0', '1', '0', '1', '1', '1', '1', '0', '0', '0', '0', '1', '0', '1', '0', '0', '0', '1');


                            -->



                            <script src="<?php echo base_url().'public/js/survey_validation.js'; ?>" type="text/javascript"> </script>






                    </center>



                </div>

            </div>

        </div>

    </div>
    <!-- End of Main Content -->
    <!-- insert footer here -->
                 <?php include_once('includes/footer_section/footer.php'); ?>
                 <!-- end footer -->
    </div>

    </body>

</html>