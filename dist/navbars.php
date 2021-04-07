        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark justify-content-between">
            <div>
                <a href="#" class="navbar-left navbar-brand" id="index"><img src="pics/msg.png">MSG Assets</a>
                <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i>
                </button>
            </div>
                
            <form class="form-inline" method="POST" id="searchForm" action="searchAssetsDiv.php">
            <div class="input-group">
              <input class="form-control" required="true" type="text" id="searchText" placeholder="Serial,Location,Code,Company,Emp Name" aria-describedby="basic-addon2" style="width: 520px;" >
                <div class="input-group-append">
                <button class="btn btn-primary" name="searchBTN" id="searchBTN" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </div>

              <!-- <button class="btn btn-primary my-2 my-sm-0" name="searchBTN" id="searchBTN" type="submit">Search</button> -->
            </form>

            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <!-- <?php echo $_SESSION["name"]; ?> -->
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="../includes/php/logoutAction.php">Logout</a>
                    </div>
                </li>
            </ul>

        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                          <?php if ($permission == 'admin') {
                                                        # code...
                                                     ?>
                            <a class="nav-link" href="#" id="Guides">
                            <div class="sb-nav-link-icon"></div>
                                <i class="fas fa-table" style=""></i> <span style="margin-left: 3%;"> Guidlines</span>
                            </a> 
                          
                            <a class="nav-link" href="#" id="controlPanel">
                            <div class="sb-nav-link-icon"></div>
                                <i class="fa fa-users" style=""></i> <span style="margin-left: 3%;"> Control Panel</span>
                            </a>
                            
                            <a class="nav-link" href="#" id="addAsset">
                            <div class="sb-nav-link-icon"></div>
                                <i class="fa fa-plus" style=""></i> <span style="margin-left: 3%;"> Add New Asset</span>
                            </a>                            
                            
                            <a class="nav-link" href="#" id="addBranch">
                            <div class="sb-nav-link-icon"></div>
                                <i class="fa fa-plus" style=""></i> <span style="margin-left: 3%;"> Add New Branch</span>
                            </a>
                            

                            <a class="nav-link" href="#" id="addDevice">
                            <div class="sb-nav-link-icon"></div>
                                <i class="fa fa-laptop"></i> 
                                <span style="margin-left: 3%;">Device Types</span>
                            </a>
                            <?php } ?>
                            <a class="nav-link" href="#" id="showAssets">
                            <div class="sb-nav-link-icon"></div>
                                <i class="fas fa-chart-area"></i> 
                                <span style="margin-left: 3%;">Assets Statistics</span>
                            </a>

                            <a class="nav-link" href="#" id="showAssetsCharts">
                            <div class="sb-nav-link-icon"></div>
                                <i class="fas fa-chart-bar mr-1"></i> 
                                <span style="margin-left: 3%;">Chart Statistics</span>
                            </a>


                            <div class="sb-sidenav-menu-heading">Companies</div>
                            <a class="nav-link" href="#" id="AllAssets">
                                <div class="sb-nav-link-icon"><i class="fa fa-laptop"></i></div>
                                ALL GROUP ASSETS
                            </a>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#firstList" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                                GINNING
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="firstList" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">

                            <a class="nav-link" href="#" id="GinningAll"><i class="fa fa-building"></i><span style="margin-left: 3%;">ALL ASSETS</span></a>

                            <a class="nav-link" href="#" id="Ginning_KHARTOUM"><i class="fa fa-building"></i><span style="margin-left: 3%;">KHARTOUM</span></a>

                            <a class="nav-link" href="#" id="Ginning_ALSMEAH"><i class="fa fa-building"></i><span style="margin-left: 3%;">ALSMEAH</span></a>

                            <a class="nav-link" id="Ginning_ALGADAREF" href="#"><i class="fa fa-building"></i><span style="margin-left: 3%;">ALGADAREF</span></a>

                            <a class="nav-link" href="#" id="Ginning_MADANI"><i class="fa fa-building"></i><span style="margin-left: 3%;">MADANI</span></a>
                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#secondList" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                                DELTA
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="secondList" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">

                            <a class="nav-link" href="#" id="DELTAAll"><i class="fa fa-building"></i><span style="margin-left: 3%;">ALL ASSETS</span></a>

                            <a class="nav-link" href="#" id="DELTA_Pack"><i class="fa fa-building"></i><span style="margin-left: 3%;">DELTA PACK</span></a>

                            <a class="nav-link" href="#" id="TNT_FACTORY"><i class="fa fa-building"></i><span style="margin-left: 3%;">TNT FACTORY</span></a>

                                    <!-- <a class="nav-link" href="assets.php?tn=ginning_assets">GHADAREF</a> -->
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#thirdList" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                            COMMODORE
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="thirdList" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="#" id="COMMODOREAll"><i class="fa fa-building" style=""></i><span style="margin-left: 3%;">ALL ASSETS</span></a>  

                        <a class="nav-link" href="#" id="COMMODORE_KRT"><i class="fa fa-building" style=""></i><span style="margin-left: 3%;">KHARTOUM</span></a>                            

                        <a class="nav-link" href="#" id="COMMODORE_PORTSUDAN"><i class="fa fa-building" style=""></i><span style="margin-left: 3%;">PORTSUDAN</span></a> 

                        <a class="nav-link" href="#" id="COMMODORE_ALGADAREF"><i class="fa fa-building" style=""></i><span style="margin-left: 3%;">ALGADAREF</span></a>


                                <!-- <a class="nav-link" href="assets.php?tn=ginning_assets">GHADAREF</a> -->
                            </nav>
                       </div>

                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#fifthList" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                            MASOT
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>

                       <div class="collapse" id="fifthList" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="#" id="MASOTAll"><i class="fa fa-building"></i><span style="margin-left: 3%;">ALL ASSETS</span></a>
                            <a class="nav-link" href="#" id="MASOT_KRT"><i class="fa fa-building"></i><span style="margin-left: 3%;">KHARTOUM</span></a>

                            <a class="nav-link" href="#" id="MASOT_PortSudan"><i class="fa fa-building"></i><span style="margin-left: 3%;">PORTSUDAN</span></a> 

                            <a class="nav-link" href="#" id="MASOT_Algadaref"><i class="fa fa-building" ></i><span style="margin-left: 3%;">ALGADAREF</span></a>
                        </nav>
                       </div>


                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#fourthList" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                            APCO
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>

                        <div class="collapse" id="fourthList" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">

                            <a class="nav-link" href="#" id="APCOAll"><i class="fa fa-building" style=""></i><span style="margin-left: 3%;">ALL ASSETS</span></a>
                            <a class="nav-link" href="#" id="APCO_KRT"><i class="fa fa-building" style=""></i><span style="margin-left: 3%;">APCO - KRT</span></a>                        

                            <a class="nav-link" href="#" id="APCO_SAMSAM"><i class="fa fa-building" style=""></i><span style="margin-left: 3%;">SAMSAM</span></a>
                            
                            <a class="nav-link" href="#" id="APCO_MADANI"><i class="fa fa-building" style=""></i><span style="margin-left: 3%;">MADANI</span></a>

                            <a class="nav-link" href="#" id="APCO_GDRF"><i class="fa fa-building" style=""></i><span style="margin-left: 3%;">ALGADAREF</span></a>

                            <a class="nav-link" href="#" id="APCO_KSLA"><i class="fa fa-building" style=""></i><span style="margin-left: 3%;">KASSLA</span></a>

                            <a class="nav-link" href="#" id="APCO_HALFA"><i class="fa fa-building" style=""></i><span style="margin-left: 3%;">NEW HALFA</span></a>

                            <a class="nav-link" href="#" id="APCO_SENNAR"><i class="fa fa-building" style=""></i><span style="margin-left: 3%;">SENNAR</span></a>

                            <a class="nav-link" href="#" id="APCO_DONGLA"><i class="fa fa-building" style=""></i><span style="margin-left: 3%;">DONGLA</span></a>

                            <a class="nav-link" href="#" id="APCO_KORDFAN"><i class="fa fa-building" style=""></i><span style="margin-left: 3%;">KORDFAN</span></a>

                            <a class="nav-link" href="#" id="APCO_ALGBLAIN"><i class="fa fa-building" style=""></i><span style="margin-left: 3%;">WHITE NILE</span></a>

                            <a class="nav-link" href="#" id="APCO_ALRAHAD"><i class="fa fa-building" style=""></i><span style="margin-left: 3%;">ALRAHAD</span></a>

                            <a class="nav-link" href="#" id="APCO_DAMAZIN"><i class="fa fa-building" style=""></i><span style="margin-left: 3%;">Damazeen </span></a>

                            <a class="nav-link" href="#" id="APCO_AGEDAY"><i class="fa fa-building" style=""></i><span style="margin-left: 3%;">AGEDAY</span></a>

                        </nav>
                       </div>


                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sixthList" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                            HOLDING
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                        <div class="collapse" id="sixthList" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#" id="HOLDINGAll"><i class="fa fa-building" style=""></i><span style="margin-left: 3%;">ALL ASSETS</span></a>

                                <a class="nav-link" href="#" id="HOLDING_ALBARLAMAN"><i class="fa fa-building" style=""></i><span style="margin-left: 3%;">ALBARLAMAN</span></a>

                                <a class="nav-link" href="#" id="HOLDING_MASOT"><i class="fa fa-building"></i><span style="margin-left: 3%;">MASOT-KRT</span></a>

                                <a class="nav-link" href="#" id="HOLDING"><i class="fa fa-building"></i><span style="margin-left: 3%;">HOLDING</span></a>                        
                            </nav>

                       </div>
                       </div>


                        <a class="nav-link collapsed" href="#" id="PLASTIC_PortSudan">
                            <div class="fa fa-building"></div> 
                             <span style="margin-left: 3%;">PLASTIC</span>
                        </a> 


                        <a class="nav-link collapsed" href="#" id="MEDICAL_WAREHOUSE">
                            <div class="fa fa-building"></div> 
                             <span style="margin-left: 3%;">MEDICAL</span>
                        </a> 


                        <a class="nav-link collapsed" href="#" id="ARECO">
                            <div class="fa fa-building"></div> 
                             <span style="margin-left: 3%;">ARECO</span>
                        </a>                        

                        <a class="nav-link collapsed" href="#" id="KASINGGER">
                            <div class="fa fa-building"></div> 
                             <span style="margin-left: 3%;">KASINGGER</span>
                        </a>

                    </div>
                </nav>
            </div>

