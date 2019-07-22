
<!--seccion de off-canvas_________________-->
<div class="off-canvas position-right offc" style="background-color: #0a0a0a" id="offCanvas" data-off-canvas>
    <!-- Your menu or Off-canvas content goes here -->

    <ul class="menu vertical" data-magellan>
        <li class="centrar"><a class="texto" href="/about"><i class="fas fa-user-tie"></i><br>about</a></li>
        <li class="centrar"><a class="texto" href="/experience"><i class="far fa-folder-open"></i><br>experience</a></li>
        <li class="centrar"><a class="texto" href="/skill"><i class="fas fa-cogs"></i><br>skill</a></li>
        <li class="centrar"><a class="texto" href="/contact"><i class="fas fa-map-marker-alt"></i><br>contact</a></li>
    </ul>

</div>



<!--seccion de menu movil_______________________________________-->

            <div class="top-bar navmov " data-sticky-on="small" data-sticky data-margin-top="0">

                <div class="top-bar-right">
                    <div class="title-bar-title"><i class="fab fa-gitlab"></i>@yield('title')</div>
                    <button class="menu-icon float-right" type="button" data-toggle="offCanvas" ></button>

                </div>

            </div>



<!--seccion top-bar _________________________________-->
            <div class="top-bar desk docs-sticky-top-bar"  data-sticky data-margin-top="0">
                <div class="top-bar-left">
                    <ul class="vertical horizontal-medium menu">
                        <li class="menu-text"><i class="fab fa-gitlab"></i></li>
                    </ul>
                </div>
                <div class="top-bar-right">
                    <ul class="medium-horizontal menu"  data-dropdown-menu>
                        <li><a class="texto" href="/#about">about</a></li>
                        <li><a class="texto" href="/#experience">experience</a></li>
                        <li><a class="texto" href="/#skill">skill</a></li>
                        <li><a class="texto" href="/#contact">contact</a></li>
                    </ul>
                </div>
            </div>