    <head>
    <title>Survey Result</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/hr_register_section/hr_register1.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/jquery-ui.min.css" type="text/css" />

        <style>
            .hide_bar{
                display:none;
            }

            .show_bar{
                display:inline;
            }

        </style>

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
                    <h2 style="color:#3f3f3f;font-size: 40px;font-family: lato;font-weight: bold;margin:20px;"><b>Survey Result Ranking</b></h2>
                    <center>

                        <script src="<?php echo base_url().'public/js/survey_validation.js'; ?>" type="text/javascript"> </script>


                        <table class="table table-bordered" style="width:80%">
                            <thead>
                                <tr id="table_head">
                                    <th style="width:35%;" > Basic Skills</th>
                                    <th style="width:50%;" > Percentage</th>
                                    <th style="width:15%;" > Summary</th>
                                </tr>

                            </thead>

                            <tbody>
                            <?php
                                function get_color( $the_num){
                                    switch($the_num){
                                        case 1: return "progress-bar-success"; break;
                                        case 2: return "progress-bar-info"; break;
                                        case 3: return "progress-bar-warning"; break;
                                        case 4: return "progress-bar-danger"; break;
                                    }
                                }
                            ?>

                            <?php
                                $color_count = 1;

                                foreach( $results as $Item):

                                    @$skill_name = $Item->SKIILL_NAME;
                                    @$total_data= $Item->TOTAL_DATA;

                                    @$skill_percentage = $Item->SKILL_RATING;

                                    @$percent = ($skill_percentage / $total_data) * 100;

                                    @$percent = number_format((float)$percent, 2, '.', '');

                                    @$summary = $skill_percentage . "/" . $total_data;

                               ?>
                                  <tr id="" >
                                    <td><?php echo $skill_name; ?></td>
                                    <td style="padding:0px; margin:0px;">
                                        <div class="progress" >
                                            <div id="progress_bar"class="progress-bar <?php echo get_color($color_count); ?>" role="progressbar" aria-valuenow="2"
                                                aria-valuemin="0" aria-valuemax="3" style="width:<?php echo $percent. '%';?>">
                                                <span id="progress_percent" class=""><?php echo $percent. '%';?></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td style="color:grey"><?php echo  $summary;?> </td>

                                </tr>



                            <?php $color_count += 1; endforeach;?>



                            </tbody>

                        </table>
                        <div style="clear:both"> </div>

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