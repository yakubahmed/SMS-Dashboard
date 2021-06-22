<?php include('../path.php'); ?>
<?php $title = "Fee type"; include_once(ROOT_PATH. '/includes/header.php'); ?>
      <!-- .app-header -->
        <?php include_once(ROOT_PATH. '/includes/nav.php'); ?>
      <!-- .app-aside -->
        <?php include_once(ROOT_PATH. '/includes/sidebar.php');?>
      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
         
            
              <!-- .page-section -->
              <div class="page-section">
                <div class="row">
                   
                    <div class="col-md-12">

                    <div class="card">
                        <div class="card-header bg-info text-light">Fee payments</div>
                        <div class="card-body">
                          <div class="card bg-light">
                            <div class="card-body">
                              <div class="row">
                                <div class="form-group col-md-4">
                                  <label for="">Fee type</label>
                                  <select name="" id="" class="form-control">
                                    <option value="">Admission fees</option>
                                    <option value="">Exam fees</option>
                                  </select>
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="">Class</label>
                                  <select name="" id="" class="form-control">
                                    <option value="">Grade 1</option>
                                    <option value="">Grade 2</option>
                                  </select>
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="">Section</label>
                                  <select name="" id="" class="form-control">
                                    <option value="">Grade 1-A</option>
                                    <option value="">Grade 1-B</option>
                                  </select>
                                </div>
                              </div>

                              
                            </div>
                          </div>
                      
                          <table id="example1" class="table table-bordered table-striped ">
                              <thead>
                                  
                              <tr>
                                  <th>#</th>
                                  <th>Student name</th>
                                  <th>Due date</th>
                                  <th>Amount</th>
                                  <th>Fee type</th>
                                  <th>Balance</th>
                                  <th>Actions</th>
                              </tr>
                              </thead>
                              <tbody id=''>
                                  <tr>
                                    <td>1</td>
                                    <td>Omar Mohamed Abukar</td>
                                    <td>2 may 2020 </td>
                                    <td>20.00$</td>
                                    <td>Exam fee</td>
                                    <td>0.00$</td>
                                    <td>
                                      <div class='btn-group btn-group-sm' role='group' aria-label='Basic example'>
                                        <button type='button' class='btn btn-info' data-toggle='modal' data-target='#VeiwOrder'  data-toggle='tooltip' data-placement='top' title='View payment detail' id='btnviewOrder' data-id='$id'><i class='fa fa-list'></i></button>
                                        <button type='button' class='btn btn-secondary' id='deleteOrder' data-id='$id'  data-toggle='tooltip' data-placement='top' title='edit'> <i class='fa fa-edit'></i> </button>
                                        <button type='button' class='btn btn-danger' id='deleteOrder' data-id='$id'  data-toggle='tooltip' data-placement='top' title='Delete'> <i class='fa fa-trash'></i> </button>
                                      </div>
                                    </td>
                                  </tr>
                                  
                              </tbody>
                
                          </table>
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
    $(document).ready(()=>{
        $(document).on('click','#search-attendance', ()=>{
            $('#attendance-information').css('display','block')
        })
    });
</script>