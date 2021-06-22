<?php include('../path.php'); ?>
<?php $title = "Finance"; include_once(ROOT_PATH . '../includes/header.php'); ?>
      <!-- .app-header -->
        <?php include_once(ROOT_PATH . '../includes/nav.php'); ?>
      <!-- .app-aside -->
        <?php include_once(ROOT_PATH . '../includes/sidebar.php');?>
      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
                <div class="row">
                    <div class="col-md-12">
                      <?php include_once(ROOT_PATH . '/student/add.php'); ?>
                    </div>
                    <div class="col-md-12">
                        <div class="card bg-light ">
                            <div class="card-header bg-info text-light">
                                Collect Fee
                            </div>
                            <div class="card-body">
                              <div class="row">
                                <div class="form-group col-md-4">
                                  <Label>Class</Label>
                                  <select name="" id="" class="form-control">
                                    <option value="">Form4</option>
                                    <option value="">Grade 1</option>
                                  </select>
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="">Section</label>
                                  <select name="" id="" class="form-control">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                  </select>
                                </div>

                                <div class="form-group col-md-4">
                                  <label for="">Search by keyword</label>
                                  <input type="text" name="" id="" class="form-control" placeholder='Search by student name, admision number'>
                                </div>

                                <div class="form-group col-md-12">
                                  <button class="btn btn-info float-right"> <i class='fa fa-search'></i> Search</button>
                                </div>
                                <div class='col-md-12'>
                                  <div class="card bg-light">
                                  
                                      
                                    <div class="table-responsive "id='attendance-information' style=''>
                                          <table class="table table-bordered table-striped table-sm">
                                              <thead>
                                                  <tr>
                                                    <th>#</th>
                                                    <th>Admission number</th>
                                                    <th>Student name</th>
                                                    <th>Class</th>
                                                    <th>Shif</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                  </tr>
                                              </thead>
                                              <tbody>

                                                  <tr>
                                                    <td>1</td>
                                                    <td>10001</td>
                                                    <td>Yakub Ahmed</td>
                                                    <td>FORM4-A Apr 2020 - Apr 2021</td>
                                                    <td>Morning</td>
                                                    <td>Active</td>
                                                    <td>
                                                      <button class="btn btn-xs btn-primary"> <i class='fa fa-dollar-sign'></i> Collect fees </button>
                                                    </td>
                                                  </tr>
                                              </tbody>
                                          </table>

                                        
                                      </div>
                                   
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>

                  

                </div>
              </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
          </div><!-- /.page -->
        </div><!-- .app-footer -->
        <footer class="app-footer">
          <?php include('../includes/footer.php'); ?>
        </footer><!-- /.app-footer -->
        <!-- /.wrapper -->
      </main><!-- /.app-main -->
    </div><!-- /.app -->

<?php include('../includes/footer-js.php'); ?>

<script>

    $(document).ready(function(){
      $(document).on('click', '#btnAddNewStud', function(){
        $('#studentRegForm').css('display','block')
      });
    });

</script>