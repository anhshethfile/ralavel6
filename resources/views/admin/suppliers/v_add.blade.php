@extends('layouts.admin')

@section('content')
        <div class="right_col" role="main">
          <div class="">
            <div class="x_panel">
              <div class="x_title">
                <h2>+Add Supplier</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="row">
                     <div class="col-sm-12">
                       <div class="row">
                         <div class="col-sm-6">
                             <div class="input-group">
                              <span class="input-group-btn">
                                <button type="button" class="btn btn-default" name="fist_name">First Name</button>
                              </span>
                              <input type="text" class="form-control">
                            </div>
                         </div>
                          <div class="col-sm-6">
                             <div class="input-group">
                              <span class="input-group-btn">
                                <button type="button" class="btn btn-default" name="last_name" >Last Name</button>
                              </span>
                              <input type="text" class="form-control">
                            </div>
                         </div>
                       </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                             <div class="col-sm-6">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" name="gender">Gender</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                              <div class="col-sm-6">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" name="supplier_type">Supplier Type</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                             <div class="col-sm-6">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" name="address">Address</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                              <div class="col-sm-6">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" name="contact_number">Contact Number</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                             
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                             <div class="col-sm-6">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" name="remark">Remark</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                            <div class="col-sm-6">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" name="email">E-mail</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                           </div>
                          </div>
                        <div class="col-sm-12 ">       
                          <button onclick="window.location.href = '<?php echo site_url(); ?>supplier';" type="button" class="btn btn-warning">Cancel</button>
                          <button type="button" class="btn btn-success">Save</button>
                        </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection