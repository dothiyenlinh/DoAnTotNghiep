<!DOCTYPE html>

<head>
    <title>DashBoard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/bootstrap.min.css') }}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{ asset('public/backend/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('public/backend/css/style-responsive.css') }}" rel="stylesheet" />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/font.css') }}" type="text/css" />
    <link href="{{ asset('public/backend/css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/backend/css/morris.css') }}" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/monthly.css') }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="public/backend/js/jquery2.0.3.min.js"></script>


</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="dashboard" class="logo">
                    Admin ToCoToCo
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->

            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="public/backend/images/1.png">
                            <span class="username">
                                <?php
                                $name = Session::get('admin_name');
                                if ($name) {
                                    echo $name;
                                }
                                ?>
                            </span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="{{URL::to('/logout')}}"><i class="fa fa-key"></i> ????ng xu???t</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->

                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active" href="dashboard">
                                <i class="fa fa-dashboard"></i>
                                <span>T???ng quan</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Danh m???c s???n ph???m</span>
                            </a>
                            <ul class="sub">
                                <li><a href="add-category-product">Th??m danh m???c s???n ph???m</a></li>
                                <li><a href="all-category-product">Li???t k?? danh m???c s???n ph???m</a></li>

                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-bell"></i>
                                <span>S???n ph???m</span>
                            </a>
                            <ul class="sub">
                                <li><a href="add-product">Th??m s???n ph???m</a></li>
                                <li><a href="all-product">Li???t k?? s???n ph???m</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-rocket"></i>
                                <span>M?? gi???m gi??</span>
                            </a>
                            <ul class="sub">
                                <li><a href="insert-coupon">Th??m m?? gi???m gi??</a></li>
                                <li><a href="list-coupon">Li???t k?? m?? gi???m gi??</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-taxi"></i>
                                <span>V???n chuy???n</span>
                            </a>
                            <ul class="sub">
                                <li><a href="delivery">Qu???n l?? v???n chuy???n</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-bus"></i>
                                <span>????n H??ng</span>
                            </a>
                            <ul class="sub">
                                <li><a href="manage-order">Li???t k?? ????n h??ng</a></li>

                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-heart"></i>
                                <span>Kh??ch h??ng</span>
                            </a>
                            <ul class="sub">
                                <li><a href="all-customer">Danh s??ch kh??ch h??ng</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-bookmark"></i>
                                <span>Slider</span>
                            </a>
                            <ul class="sub">
                                <li><a href="add-slider">Th??m Slider</a></li>
                                <li><a href="manage-slider">Danh s??ch Slider</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <section id="main-content">
            <section class="wrapper">
                @yield('admin_content')
            </section>
        </section>
    </section>
    <script src="public/backend/js/bootstrap.js"></script>
    <script src="public/backend/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="public/backend/js/scripts.js"></script>
    <script src="public/backend/js/jquery.slimscroll.js"></script>
    <script src="public/backend/js/jquery.nicescroll.js"></script>
    <script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.2-dev/js/formValidation.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

    
    <script>
        $.validate({});
    </script>
    <script>
        CKEDITOR.replace('ckeditor1');
        CKEDITOR.replace('editor1');
        CKEDITOR.replace('ckeditor');
        CKEDITOR.replace('editor');
    </script>
    <script src="public/backend/js/jquery.scrollTo.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            fetch_delivery();

            function fetch_delivery() {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{url('/select-feeship')}}',
                    method: 'POST',
                    data: {
                        _token: _token
                    },
                    success: function(data) {
                        $('#load_delivery').html(data);
                    }
                });
            }
            $(document).on('blur', '.fee_feeship_edit', function() {

                var feeship_id = $(this).data('feeship_id');
                var fee_value = $(this).text();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{url('/update-delivery ')}}',
                    method: 'POST',
                    data: {
                        feeship_id: feeship_id,
                        fee_value: fee_value,
                        _token: _token
                    },
                    success: function(data) {
                        fetch_delivery();
                    }
                });

            });
            $('.add_delivery').click(function() {

                var city = $('.city').val();
                var province = $('.province').val();
                var wards = $('.wards').val();
                var fee_ship = $('.fee_ship').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{url('/insert-delivery')}}',
                    method: 'POST',
                    data: {
                        city: city,
                        province: province,
                        _token: _token,
                        wards: wards,
                        fee_ship: fee_ship
                    },
                    success: function(data) {
                        fetch_delivery();
                    }
                });


            });
            $('.choose').on('change', function() {
                var action = $(this).attr('id');
                var ma_id = $(this).val();
                var _token = $('input[name="_token"]').val();
                var result = '';
                if (action == 'city') {
                    result = 'province';
                } else {
                    result = 'wards';
                }
                $.ajax({
                    url: '{{url('/select-delivery')}}',
                    method: 'POST',
                    data: {
                        action: action,
                        ma_id: ma_id,
                        _token: _token
                    },
                    success: function(data) {
                        $('#' + result).html(data);
                    }
                });
            });
        })
    </script>

    <script type="text/javascript">
        $(function() {
            $("#datepicker").datepicker({
                prevText: "Th??ng tr?????c",
                nextText: "Th??ng sau",
                dateFormat: "yy-mm-dd",
                dayNamesMin: ["Th??? 2", "Th??? 3", "Th??? 4", "Th??? 5", "Th??? 6", "Th??? 7", "Ch??? nh???t"],
                duration: "slow"
            });

            $("#datepicker2").datepicker({
                prevText: "Th??ng tr?????c",
                nextText: "Th??ng sau",
                dateFormat: "yy-mm-dd",
                dayNamesMin: ["Th??? 2", "Th??? 3", "Th??? 4", "Th??? 5", "Th??? 6", "Th??? 7", "Ch??? nh???t"],
                duration: "slow"
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            chart60daysorder();
            var chart = new Morris.Area({
                element: 'myfirstchart',
                data: [
                    { year: '2008', value: 20 },
                    { year: '2009', value: 10 },
                    { year: '2010', value: 5 },
                    { year: '2011', value: 5 },
                    { year: '2012', value: 20 }
                ],
                lineColors: ['#819C79', '#fc8710', '#FF6541', '#A4ADD3', '#766B56'],
                parseTime: false,
                hideHover: 'auto',
                pointFillColors: ['#ffffff'],
                pointStrokeColors: ['black'],
                fillOpacity: 0.3,
                xkey: 'period',
                ykeys: ['order', 'sales', 'profit', 'quantity'],
                labels: ['????n h??ng', 'doanh s???', 'l???i nhu???n', 's??? l?????ng']
            });

            function chart60daysorder(){
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{url('/days-order')}}",
                    method:"POST",
                    dataType:"JSON",
                    data:{_token:_token},

                    success:function(data)
                        {
                            chart.setData(data);
                        }
                });
            }

            $('.dashboard-filter').change(function() {
                var dashboard_value = $(this).val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{url('/dashboard-filter')}}",
                    method: "POST",
                    dataType: "JSON",
                    data: {
                        dashboard_value: dashboard_value,
                        _token: _token
                    },

                    success: function(data) {
                        chart.setData(data);
                    }
                });

            });

            $('#btn-dashboard-filter').click(function() {

                var _token = $('input[name="_token"]').val();

                var from_date = $('#datepicker').val();
                var to_date = $('#datepicker2').val();

                $.ajax({
                    url: "{{url('/filter-by-date')}}",
                    method: "POST",
                    dataType: "JSON",
                    data: {
                        from_date: from_date,
                        to_date: to_date,
                        _token: _token
                    },

                    success: function(data) {
                        chart.setData(data);
                    }
                });
            });
        });
    </script>



</body>

</html>
