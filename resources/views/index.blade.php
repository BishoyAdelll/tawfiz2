<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Satisfaction Survey form Wizard by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>أداة تقييم القدرات المؤسسية والفنية لمراكز الإغاثة </title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
          href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
          href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Readex+Pro:300,400,500,600,700&amp;display=swap"
          rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
    @livewireStyles
</head>

<body class="style_2">

<div id="preloader">
    <div data-loader="circle-side"></div>
</div><!-- /Preload -->

<div id="loader_form">
    <div data-loader="circle-side-2"></div>
</div><!-- /loader_form -->

<livewire:question/>
<!-- /container_centering -->
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                نوفمبر 2023
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container-fluid -->
</footer>
<!-- /footer -->
<!-- /wrapper_centering -->

<!-- Modal terms -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei
                    ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne
                    quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam
                    dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt
                    sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum
                    accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum
                    sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam
                    dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt
                    sensibus.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_1" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- COMMON SCRIPTS -->
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/common_scripts.min.js"></script>
<script src="js/functions.js"></script>

<!-- Wizard script -->
<script src="js/survey_func.js"></script>
<script>
    $('.forward').click(function(){
        let current =$(".wizard-step.current")
        current.next().addClass("current")
        current.next().show()
        current.removeClass("current")
        current.hide()
    })
</script>
@livewireScripts
</body>

</html>
