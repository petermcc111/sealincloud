<? //include(dirname(__FILE__).'/../languages/langalt.php');   ?>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="#page-top">
                <img src="assets/haibao.webp" style="width:2rem;height:2rem" />
                <img class="logo" src="assets/logow.png" alt="Sealincloud" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="registration/"><? echo(_('case_registration')); ?></a></li>
                    <!--<li class="nav-item"><a class="nav-link" href="registration/">Case Registration</a></li>-->
                    <li class="nav-item"><a class="nav-link" href="guidance/">Feasible Guidance</a></li>
                    <li class="nav-item"><a class="nav-link" href="assistant/">Solution Assistant</a></li>
                    <li class="nav-item"><a class="nav-link" href="guidance.html">Story Delivery</a></li>
                    <li class="nav-item">
                        <span class="nav-link internal">
                           <a href="?lang=en_US">ENG</a>
                            <a href="?lang=zh_CN">简中</a>
                            <a href="?lang=zh_HK">繁中</a>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>