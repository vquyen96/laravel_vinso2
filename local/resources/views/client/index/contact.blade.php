@extends('client.master')
@section('title', 'Vinso')
@section('fb_title', 'Vinso')
@section('fb_des', 'Vinso')
@section('fb_img', asset('local/resources/assets/images/PostLink.png'))

@section('main')
    <link rel="stylesheet" href="css/about.css">
    <div id="main">
        <div class="bannerHeader" style="background: url('images/BackGround.png') no-repeat center /cover">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bannerHeaderMain">
                            <div class="bannerHeaderMainLogo">
                                <a href="">
                                    <img src="images/Logo.png" alt="">
                                </a>
                            </div>
                            <div class="bannerHeaderMainTitle">
                                <h1>
                                    About Vinso
                                </h1>
                            </div>
                            <div class="bannerHeaderMainBreadcrumb">
                                <div class="breadcrumbItem">
                                    <a href="">Home</a>
                                </div>
                                <div class="breadcrumbItem">
                                    <a href="">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="welcome">
                            <div class="welcomeItem">
                                <div class="welcomeItemBigTitle txt40_20">
                                    contact
                                </div>
                                <div class="welcomeItemLine d-flex">
                                    <div class="welcomeItemLineLeft d-flex align-items-center">
                                        <img src="images/map_icon.png">
                                    </div>
                                    <div class="welcomeItemLineRight">
                                        <div class="welcomeItemLineRightTitle">
                                            Postal Address:
                                        </div>
                                        <div class="welcomeItemLineRightContent">
                                            No. 1 Le Thanh Tong, May To Ward, Ngo Quyen Dist. Hai Phong
                                        </div>
                                    </div>
                                </div>
                                <div class="welcomeItemLine d-flex">
                                    <div class="flex-fill d-flex">
                                        <div class="welcomeItemLineLeft d-flex align-items-center">
                                            <img src="images/phone_icon.png">
                                        </div>
                                        <div class="welcomeItemLineRight">
                                            <div class="welcomeItemLineRightTitle">
                                                Phone:
                                            </div>
                                            <div class="welcomeItemLineRightContent">
                                                ( 84 ) 326 483 884
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-fill d-flex">
                                        <div class="welcomeItemLineLeft d-flex align-items-center">
                                            <img src="images/skype_icon.png">
                                        </div>
                                        <div class="welcomeItemLineRight">
                                            <div class="welcomeItemLineRightTitle">
                                                Skype:
                                            </div>
                                            <div class="welcomeItemLineRightContent">
                                               Tran Anh Design
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="welcomeItemLine d-flex">
                                    <div class="flex-fill d-flex">
                                        <div class="welcomeItemLineLeft d-flex align-items-center">
                                            <img src="images/mail_icon.png">
                                        </div>
                                        <div class="welcomeItemLineRight">
                                            <div class="welcomeItemLineRightTitle">
                                                Email:
                                            </div>
                                            <div class="welcomeItemLineRightContent">
                                                karin.design.dev@gmail.com
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-fill d-flex">
                                        <div class="welcomeItemLineLeft d-flex align-items-center">
                                            <img src="images/web_icon.png">
                                        </div>
                                        <div class="welcomeItemLineRight">
                                            <div class="welcomeItemLineRightTitle">
                                                Web:
                                            </div>
                                            <div class="welcomeItemLineRightContent">
                                               vinso.vn
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="welcomeItem " >
                                <div id="map-canvas" class="et-map" style="height: 385px;">
                                </div>
                            </div>
                        </div>
                       <!--  <div class="welcome">
                            <div class="welcomeItem" style="background: url('images/Layer 4.png') no-repeat center /cover"></div>
                            <div class="welcomeItem">
                                <div class="welcomeNav">
                                    <div class="welcomeItemNav">
                                        skill
                                    </div>
                                    <div class="welcomeItemNav">
                                        training
                                    </div>
                                </div>
                                <div class="welcomeNavContent">
                                    <div class="welcomeItemNavContent">
                                        <div class="welcomeItemTitle">
                                            Professional Certificate Courses (Online)
                                        </div>
                                        <ul>
                                            <li>Online certificates can be obtained in a range of specialized areas.</li>
                                            <li>Online diplomas are awarded for one to two years of study with LMS.</li>
                                            <li>Online associate degrees usually take approximately two years then.</li>
                                            <li>Online certificates can be obtained in a range of specialized areas.</li>
                                            <li>Online diplomas are awarded for one to two years of study with LMS.</li>
                                        </ul>
                                    </div>
                                    <div class="welcomeItemNavContent">
                                        <div class="welcomeItemTitle">
                                            Professional Certificate Courses (Online)
                                        </div>
                                        <ul>
                                            <li>Online certificates can be obtained in a range of specialized areas.</li>
                                            <li>Online diplomas are awarded for one to two years of study with LMS.</li>
                                            <li>Online associate degrees usually take approximately two years then.</li>
                                            <li>Online certificates can be obtained in a range of specialized areas.</li>
                                            <li>Online diplomas are awarded for one to two years of study with LMS.</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div> -->
                        <div class="borDer">
                            <div class="borderLeft"></div>
                            <div class="borderRight"></div>
                        </div>
                        <div class="certification">
                            <div class="certificationTitle txt40_20">
                                Certifications
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-12">
                                    <div class="certificationItem">
                                        <div class="certificationItemImg" style="background: url('images/Group 1.png') no-repeat center /cover;"></div>
                                        <div class="certificationItemContent">
                                            Google Certified
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="certificationItem">
                                        <div class="certificationItemImg" style="background: url('images/Group 1.png') no-repeat center /cover;"></div>
                                        <div class="certificationItemContent">
                                            Google Certified
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="certificationItem">
                                        <div class="certificationItemImg" style="background: url('images/Group 1.png') no-repeat center /cover;"></div>
                                        <div class="certificationItemContent">
                                            Google Certified
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
@section('script')
    <script type="text/javascript" src="js/main.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyABqK-5ngi3F1hrEsk7-mCcBPsjHM5_Gj0"></script>
    <script src="js/jquery.googlemap.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var map = [{{ $web_info->mapx }} ,{{ $web_info->mapy }}];
            $("#map-canvas").googleMap({
                zoom:14, // Initial zoom level (optional)
                coords: map, // Map center (optional)
                type: "ROADMAP", // Map type (optional)
                address: "Vinso", // Postale Address
                infoWindow: {
                    content: '<p style="text-align:center;"><strong>Vinso</strong><br> Paris, France</p>'
                }
            });
            // Marker 2
            $("#map-canvas").addMarker({
                coords: map
            });
        });
    </script>
@stop
