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


                                          <?php
                                          $attributes = array('id' => 'myform' ,'method'=>'post','name'=>'myform');
                                           echo form_open('pages/quizscore', $attributes) ?>
                                            <?php

                                              $i=1;
                                              for($i=1; $i<=20 ; $i++) {
                                                echo '<p><span>Q '.$i.'</span> ';
                                                $id="quiz_id".$i;
                                                $quiz=$this->Post_model->get_quiz_by_id($this->input->post($id));
                                                $quiz_ans="ans".$i;
                                                echo $quiz['quiz_q'];
                                                $ans=$this->input->post($quiz_ans);
                                                if($ans==""){
                                                  echo '<br><br><button type="button" class="btn btn-danger btn-sm btn-circle"> <i class="fa fa-times"></i> </button>&emsp;N/A';
                                                }
                                                else if($ans!=$quiz['quiz_ans']){
                                                  echo '<br><br><button type="button" class="btn btn-danger btn-sm btn-circle"> <i class="fa fa-times"></i> </button>&emsp;Answer: '.$ans;
                                                }
                                                else {
                                                  echo '<br><br><button type="button" class="btn btn-success  btn-sm btn-circle"> <i class="fa fa-check"></i> </button>&emsp;Answer: '.$ans;
                                                }
                                            
                                                echo "<br><br><hr>";
                                              }
                                             ?>
                                            <div style="text-align:center">
                                                <button type="submit"  class="btn btn-success" >Submit</button>
                                            </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
