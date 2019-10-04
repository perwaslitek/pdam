<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('dashboard'); ?>"><strong> PORTAL PERWASLITEK </strong></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
                        <?php echo  $this->session->userdata['full_name']; ?>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url('login/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                         <li>
                             <a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-home fa-fw"></i> Halaman Utama</a>
                    
                         </li>
                        <li>
                            <a href="#"><i class="fa fa-folder fa-fw"></i> Data Karyawan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> 
                                    <a href="<?php echo base_url('karyawan'); ?>"><i class="fa fa-users fa-fw"></i> Karyawan</a>
                                </li>
                              
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-folder fa-fw"></i> Data SPAM<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> 
                                    <a href="<?php echo base_url('sumber'); ?>"><i class="fa fa-users fa-fw"></i> Sumber</a>
                                </li>
                                <li> 
                                    <a href="<?php echo base_url('pengolahan'); ?>"><i class="fa fa-users fa-fw"></i> Pengolahan</a>
                                </li>
                                <li> 
                                    <a href="<?php echo base_url('reservoir'); ?>"><i class="fa fa-users fa-fw"></i> Reservoir</a>
                                </li>
                                <li>
                                    
                            </ul>
                        </li>

                        <li>
                            <a href="<?php echo base_url('login/logout') ?>"><i class="fa fa-power-off fa-fw"></i> Logout</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
</nav>