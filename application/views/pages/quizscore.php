<!-- ============================================================== -->
  <div class="container-fluid">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="row page-titles">
          <div class="col-md-12 ">
              <h3 class="text-themecolor" style="text-align:center"></h3>
          </div>


      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Start Page Content -->
      <!-- ============================================================== -->
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-body">
                    <div class="alert alert-info" >



                                        <h3 class="text-info" style="text-align:center">Quiz</h3>
                                        <div style="text-align:right;  font-weight: bold; ">
                                        <label > Time Left: &nbsp;<i class="mdi mdi-clock"></i>&nbsp;</label><label id="minutes">20</label>:<label id="seconds">00 </label>&emsp;
                                        </div>

                                          <?php
                                          $attributes = array('id' => 'myform' ,'method'=>'post','name'=>'myform');
                                           echo form_open('pages/quizscore', $attributes) ?>
                                            <?php
                                              $qnn="";
                                              $i=1;
                                              foreach ($quiz as $quizs) {
                                                echo '
                                                <p><span>Q '.$i++.'</span> ';
                                                echo $quizs['quiz_q'];
                                                $qnn=$quizs['quiz_no'];
                                                echo '
                                                <div class="demo-radio-button">
                                                  <input type="radio"   name="ans'.$i.'" value="'.$quizs['quiz_op1'].'" id="radio_'.$i."1".'" class="radio-col-blue">
                                                  <label for="radio_'.$i."1".'" ><span>A</span> '.$quizs['quiz_op1'].'</label>
                                                  <input type="radio"   name="ans'.$i.'" value="'.$quizs['quiz_op2'].'" id="radio_'.$i."2".'" class="radio-col-blue">
                                                  <label for="radio_'.$i."2".'" ><span>B</span> '.$quizs['quiz_op2'].'</label>
                                                  <input type="radio"   name="ans'.$i.'" value="'.$quizs['quiz_op3'].'" id="radio_'.$i."3".'" class="radio-col-blue">
                                                  <label for="radio_'.$i."3".'" ><span>C</span> '.$quizs['quiz_op3'].'</label>
                                                  <input type="radio"   name="ans'.$i.'" value="'.$quizs['quiz_op4'].'" id="radio_'.$i."4".'" class="radio-col-blue">
                                                  <label for="radio_'.$i."4".'" ><span>D</span> '.$quizs['quiz_op4'].'</label>
                                                  <input type="hidden" name="cans'.$i.'" value="'.$quizs['quiz_ans'].'">

                                                </div>
                                                <hr>';
                                              }
                                             ?>
                                            <div style="text-align:center">
                                              <input type="hidden" name="quizno" value="<?=$qnn?>">
                                                <button type="submit"  class="btn btn-success" >Submit</button>
                                            </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
      
