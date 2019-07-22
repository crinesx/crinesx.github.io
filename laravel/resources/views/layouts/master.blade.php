<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog Project</title>

        <!-- Styles -->
        <link href="{{asset('/css/app.css')}}" rel="stylesheet">
        <link href="{{asset('/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('/css/media.css')}}" rel="stylesheet">
        <link href="{{asset('/css/animation.css')}}" rel="stylesheet">
        <link href="{{asset('/font/fontawesome/css/all.cs')}}" rel="stylesheet">
        <link href="{{asset('/css/animate.css')}}" rel="stylesheet">
    </head>
    @include('layouts.nav')
    <body class="celu">
    <div class="offc">
        @yield('contentex')
    </div>

        <div class="column textsize desk">

            <section >
                <div class="grid-y medium-grid-frame">
                    @yield('content1')
                </div>
            </section>



            <section id="experience" data-magellan-target="experience" >
                <div class="grid-y medium-grid-frame seccionpad">
                    @yield('content2')
                </div>
            </section>



            <section  id="skill" data-magellan-target="skill">
                <div class="grid-y medium-grid-frame seccionpad">
                    @yield('content3')
                </div>
            </section>



            <section id="contact" data-magellan-target="contact">
                <div class="grid-y medium-grid-frame seccionpad">
                    @yield('content4')
                </div>
            </section>


        </div>
    <a class="fix" data-toggle="cont"><i class="fas fa-plus-circle fa-3x"></i></a>
                <div class="dropdown-pane" data-position="top" data-alignment="right" id="cont" data-dropdown>
                    <div class="title-bar-title">Contact</div>
                    <table class=" hover">
                        <tbody>
                        <tr>
                            <td><i class="fas fa-user-tie fa-1x fa-pull-left"></i>Mauricio Arturo Rodríguez Rosas</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-mobile-alt"></i>(+52)22-21-15-91-76</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-at"></i>mauricio.a_rosas@hotmail.com </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

        </body>
        <!-- Scripts -->
        <script src="{{asset('/js/app.js')}}"></script>
    <script src="{{asset('/font/fontawesome/js/all.js')}}"></script>
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.js"></script>
       -->     <script>
                $(document).foundation();
            </script>
</html>

