
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
                <div  id="hr-reg" style="height:1024px;" >
                    <br/>
                    <h2 style="color:#3f3f3f;font-size: 40px;font-family: lato;font-weight: bold;margin:20px;"><b>Sample Survey</b></h2>
                    <center>
                        <form id="surveyForm" class="" action="<?php echo base_url();?>survey/processSurvey" method="POST">

                        <table class="table table-bordered table-striped" style="width:65%;">
                            <thead>
                                <tr id="table_head">
                                    <th style="width:10%; text-align:right;" class="" > CheckMarck</th>
                                    <th style="width:60%;" > Basic Skills</th>

                                </tr>

                            </thead>
                            <tbody>

                                <tr>
                                    <td><input type="checkbox" id ="skill_1" name ="READING" value="1" /></td>
                                    <td>Reading</td>
                                 </tr>
                                 <tr>
                                    <td><input type="checkbox" id ="skill_2" name ="WRITING" value="1" /></td>
                                    <td>Writing</td>
                                 </tr>
                                 <tr>
                                    <td><input type="checkbox" id ="skill_3" name ="MATH"       value="1" /></td>
                                    <td>Maths</td>
                                 </tr>
                                 <tr>
                                    <td><input type="checkbox" id ="skill_4" name ="LANGUAGE"   value="1" /></td>
                                    <td>Language</td>
                                 </tr>
                                 <tr>
                                    <td><input type="checkbox" id ="skill_5" name ="DEXTERITY"  value="1" /></td>
                                    <td>Dexterity</td>
                                 </tr>
                                 <tr>
                                    <td><input type="checkbox" id ="skill_6" name ="TEAM_WORKING" value="1" /></td>
                                    <td>Team Working</td>
                                 </tr>
                                 <tr>
                                    <td><input type="checkbox" id ="skill_7" name ="LEARNING" value="1" /></td>
                                    <td>Learning</td>
                                 </tr>
                                 <tr>
                                    <td><input type="checkbox" id ="skill_8" name ="ADAPTING" value="1" /></td>
                                    <td>Adapting</td>
                                 </tr>
                                 <tr>
                                    <td><input type="checkbox" id ="skill_9" name ="INSTRUCTING" value="1" /></td>
                                    <td>Instructing</td>
                                 </tr>
                                 <tr>
                                    <td><input type="checkbox" id ="skill_10" name ="TASK_DISCRETION" value="1" /></td>
                                    <td>Task Discretion</td>
                                 </tr>
                                 <tr>
                                    <td><input type="checkbox" id ="skill_11" name ="COMPUTING" value="1" /></td>
                                    <td>Computing</td>
                                 </tr>
                                 <tr>
                                    <td><input type="checkbox" id ="skill_12" name ="MANAGERIAL_SKILLS" value="1" /></td>
                                    <td>Manegerial Skill</td>
                                 </tr>
                                 <tr>
                                    <td><input type="checkbox" id ="skill_13" name ="PROBLEM_SOLVING" value="1" /></td>
                                    <td>Problem Solving</td>
                                 </tr>
                                 <tr>
                                    <td><input type="checkbox" id ="skill_14" name ="PRESENTATIONS" value="1" /></td>
                                    <td>Presentation</td>
                                 </tr>
                                 <tr>
                                    <td><input type="checkbox" id ="skill_15" name ="PERSUADING" value="1" /></td>
                                    <td>Persuading</td>
                                 </tr>
                                 <tr>
                                    <td><input type="checkbox" id ="skill_16" name ="PLANNING" value="1" /></td>
                                    <td>Planning</td>
                                 </tr>
                                 <tr>
                                    <td><input type="checkbox" id ="skill_17" name ="GREEN_SKILLS" value="1" /></td>
                                    <td>Green Skills</td>
                                 </tr>
                                 <tr>
                                    <td><input type="checkbox" id ="skill_18" name ="RESOURCE_SAVING" value="1" /></td>
                                    <td>Resource Saving</td>
                                 </tr>
                                 <tr>
                                    <td><input type="checkbox" id ="skill_19" name ="POLLUTION_SAVING" value="1" /></td>
                                    <td>Pollution Saving</td>
                                 </tr>


                            </tbody>




                        </table>
                        <button  class="btn  btn-info" name="Submit"  name="btn_submit" id="btn_submit">Submit </button>


                        </form>

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