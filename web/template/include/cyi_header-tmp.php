<div data-active-color="white" data-background-color="black" data-image="<?= $domain;?>assets/img/caulogo.png" class="app-sidebar">
        <div class="sidebar-header">
            <div class="logo clearfix">
                <a href="index-2.html" class="logo-text float-left">
                <div class="logo-img"><img src="<?= $domain;?>assets/img/caulogo.png" alt="CAU Chocolate"/></div>
                <span class="text align-middle">CAU</span>
                </a>
                <a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block">
                <i data-toggle="expanded" class="ft-disc toggle-icon"></i>
                </a>
                <a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none">
                <i class="ft-circle"></i>
                </a>
            </div>
        </div>
        <?php include("template/include/cyi_navbar-tmp.php");?>
</div>
<?php include("template/include/cyi_navtop-tmp.php");?>