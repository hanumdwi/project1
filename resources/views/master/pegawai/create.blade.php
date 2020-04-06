@extends('layout/main')

@section('container')
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" action="pegawaiinsertdata" method="post">
                            @csrf
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Input Data Pegawai</strong></h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                        <div class="form-group">
                                                <label class="col-md-3 control-label">First Name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="firstname" name="firstname" />
                                                    </div>                                            
                                                    <span class="help-block">This is sample of text field</span>
                                                </div>
                                            </div>

                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Last Name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="lastname" name="lastname" />
                                                    </div>                                            
                                                    <!-- <span class="help-block">This is sample of text field</span> -->
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Username</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="username" name="username" />
                                                    </div>                                            
                                                    <!-- <span class="help-block">This is sample of text field</span> -->
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Phone</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="phone" name="phone" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Email</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="email" class="form-control" id="email" name="email" />
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-6">
                                            
                                        <div class="form-group">
                                                <label class="col-md-3 control-label">Password</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="password" class="form-control" name="password" id="password" />
                                                    </div>         
                                                </div>
                                            </div>

                                        <div class="form-group">
                                                <label class="col-md-3 control-label">Confirm Password</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="password" class="form-control" name="password" id="copass" onkeyup="cekPass()" />
                                                        <p id="error" style="color:red"></p>
                                                    </div>         
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Job Status</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="jobstatus" id="jobstatus" />
                                                    </div> 
                                                </div>
                                            </div>

                                </div>
                                <div class="panel-footer">
                                                                   
                                    <button class="btn btn-primary pull-right">Submit</button>
                                </div>
                                <!-- <div class="panel-footer">
                                <button type="button" class="btn btn-info active">Submit</button>                   
                                </div>
                            </div> -->
                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER --> 

                <script>
                function cekPass()
                {
                var pass = document.getElementById('password').value;
                var copass = document.getElementById('copass').value;
                var text = document.getElementById('error');
                if(pass != copass)
                {
                text.style.color = 'red';
                text.innerHTML='Password tidak cocok';
                }
                else
                {
                text.style.color = 'green';
                text.innerHTML='Password Cocok';
                }

                }
                </script>

                @endsection