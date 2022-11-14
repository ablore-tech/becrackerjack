<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"
        integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
        integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <link href="{{ asset('css/college-index.css')}}" rel="stylesheet" type="text/css" />


</head>


<body style="background-image:url(images/college/images/main\ bg.png); background-repeat: no-repeat;background-size:70%;">






    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid ">
            <img src="images/college/images/bcj-logo.png" class="img-fluid" style="max-width:150px; margin-left: 2rem;" alt="">
            <button type="button" class="btn bs-lg-none navbar-btn">Start Learning</button>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse px-5" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('school.view')}}">School</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('college.view')}}">College</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('language.view')}}">Language</a>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn bs-sm-none navbar-btn">Start Learning</button>
        </div>
    </nav>









    <img src="images/school/images/lp1_banner.jpg" class="img-fluid w-100" alt="">

    <div class="d-block py-5 gradient_shade">
        <div class="container-fluid my-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="blue-heading heading-in-mob">Some Amazing</p>
                    <p class="pink-heading heading-in-mob">Key Features</p>
                </div>
            </div>
        </div>

        <div class="container px-5 ">
            <div class="row">
                <div class="col-md-4 mb-5 d-flex justify-content-center">
                    <div class="col-md-12 col-8  text-center p-5 key-features-spacing grey-border hover-shadow">
                        <img src="images/school/images/icon 1.png" class="img-fluid mb-3" style="width:70px ;" alt="">
                        <p>One to one learning</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center mb-5 ">
                    <div class="col-md-12 col-8 text-center key-features-spacing p-5 grey-border hover-shadow">
                        <img src="images/school/images/icon 2.png" class="img-fluid mb-3" style="width:70px ;" alt="">
                        <p>Live and interactive mentored sessions
                        </p>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center mb-5 ">
                    <div class="col-md-12 col-8 text-center key-features-spacing p-5 grey-border hover-shadow">
                        <img src="images/school/images/icon 3.png" class="img-fluid mb-3" style="width:70px ;" alt="">
                        <p>Personal attention and flexible scheduling
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid workflow">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mt-3">
                    <p class="blue-heading heading-in-mob">Our Course</p>
                    <p class="pink-heading heading-in-mob">Workflow</p>
                </div>
            </div>

            <div class="accordion">
                <section class="accordion-content active">
                    <div class="head">
                        <p>Experienced Faculty</p>
                    </div>
                    <img src="images/school/images/slide_b1.jpg" class="" alt="Image">
                </section>

                <section class="accordion-content">
                    <div class="head">
                        <p>Free Trial Sessions</p>
                    </div>
                    <img src="images/school/images/slide_b2.jpg" class="" alt="Image">
                </section>

                <section class="accordion-content">
                    <div class="head">
                        <p>Flexible & Customised</p>
                    </div>
                    <img src="images/school/images/slide_b3.jpg" class="" alt="Image">
                </section>

                <section class="accordion-content">
                    <div class="head">
                        <p>Central Access</p>
                    </div>
                    <img src="images/school/images/slide_b4.jpg" class="" alt="Image">
                </section>


            </div>

        </div>

    </div>







    <div class="container-fluid my-5 pt-5 pb-3 mob-display-none">
        <div class="row pb-3">
            <div class="col-sm-12 text-center">
                <p class="blue-heading heading-in-mob"> Tutors According To </p>
                <p class="pink-heading heading-in-mob">Your Needs</p>
            </div>
        </div>

        <div class="row ">
            <div class="col-sm-12">
                <ul class="nav nav-pills justify-content-center">
                    <li class="nav-item"><a href="#subjects" data-bs-toggle="tab" class="active nav-link ">
                            <div class="button-style grey-border">Subjects</div>
                        </a></li>
                    <li class="nav-item"> <a href="#classes" class="nav-link " data-bs-toggle="tab">
                            <div class="button-style grey-border">Classes</div>
                        </a></li>
                </ul>
            </div>
        </div>

    </div>

    <div class="tab-content mob-display-none">
        <div class="tab-pane" id="classes">
            <div class="container text-center mb-5">
                <div class="row">
                    <div class="col-sm-4 col-6 hover-bgcolor-slide mb-4">
                        <button type="button" class="blockbox btn border-0 d-block"
                            data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <div class="col-sm-12 p-5 ">
                                <img src="images/college/images/kid 1.png" class="img-fluid mb-3" style="width: 70px;" alt="">
                                <p style="font-weight:500;">Nursery</p>
                            </div>
                        </button>
                    </div>

                    <div class="col-sm-4 col-6 hover-bgcolor-slide mb-4">
                        <button type="button" class="blockbox btn border-0 d-block"
                            data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <div class="col-sm-12 p-5 ">
                                <img src="images/college/images/kid 2.png" class="img-fluid mb-3" style="width: 70px;" alt="">
                                <p style="font-weight:500;">1<sup>st</sup> to 3<sup>rd</sup></p>
                            </div>
                        </button>
                    </div>

                    <div class="col-sm-4 col-6 hover-bgcolor-slide mb-4">
                        <button type="button" class="blockbox btn border-0 d-block"
                            data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <div class="col-sm-12 p-5 ">
                                <img src="images/college/images/kid 3.png" class="img-fluid mb-3" style="width: 70px;" alt="">
                                <p style="font-weight:500;">4<sup>th</sup> to 5<sup> th</sup></p>
                            </div>
                        </button>
                    </div>

                    <div class="col-sm-4 col-6 hover-bgcolor-slide mb-4">
                        <button type="button" class="blockbox btn border-0 d-block"
                            data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <div class="col-sm-12 p-5 ">
                                <img src="images/college/images/kid 4.png" class="img-fluid mb-3" style="width: 70px;" alt="">
                                <p style="font-weight:500">6<sup>th</sup> to 8<sup>th</sup></p>
                            </div>
                        </button>
                    </div>
                    
                    <div class="col-sm-4 col-6 hover-bgcolor-slide mb-4">
                        <button type="button" class="blockbox btn border-0 d-block"
                            data-bs-toggle="modal" data-bs-target="#exampleModal2">

                            <div class="col-sm-12 p-5 ">

                                <img src="images/college/images/kid 5.png" class="img-fluid mb-3" style="width: 70px;" alt="">
                                <p style="font-weight:500">9<sup>th</sup> to 10<sup>th</sup></p>
                            </div>
                        </button>
                    </div>
                    
                    <div class="col-sm-4 col-6 hover-bgcolor-slide mb-4">
                        <button type="button" class="blockbox btn border-0 d-block"
                            data-bs-toggle="modal" data-bs-target="#exampleModal2">

                            <div class="col-sm-12 p-5 ">

                                <img src="images/college/images/kid 6.png" class="img-fluid mb-3" style="width: 70px;" alt="">
                                <p style="font-weight:500">11<sup>th</sup> to 12<sup>th</sup></p>
                            </div>
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <div class="tab-pane active" id="subjects">
            <div class="container text-center mb-5">
                <div class="row">
                    @foreach($subjects as $subject)
                        
                        <div class="col-sm-4 col-6 hover-bgcolor-slide mb-4">
                            <button type="button" class="blockbox btn border-0 d-block" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" data-subject-id="{{ $subject->id}}">
                                <div class="col-sm-12 p-5 ">
                                    <img src="{{ asset('/storage'.$subject->image) }}" class="img-fluid mb-3" style="width: 70px;" alt="">
                                    <p style="font-weight:500;">{{ $subject->name}}</p>
                                </div>
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>




    <div class="container-fluid  py-5 pc-display-none">
        <div class="row pb-5">
            <div class="col-sm-12 text-center">
                <p class="blue-heading heading-in-mob"> Tutors According To</p>
                <p class="pink-heading heading-in-mob">Your Needs</p>
            </div>
        </div>

        <div class="row ">
            <div class="col-sm-12">
                <ul class="nav nav-pills justify-content-center">
                    <li class="nav-item"><a href="#subjectsmob" data-bs-toggle="tab" class="active nav-link ">
                            <div class="button-style  py-2 my-3 grey-border"
                                style="padding-left:45px; padding-right:45px;">Subjects</div>
                        </a></li>
                    <li class="nav-item"> <a href="#classesmob" class="nav-link " data-bs-toggle="tab">
                            <div class="button-style offset-sm-1 mb-3 my-3 px-5 py-2 grey-border">Classes</div>
                        </a></li>
                </ul>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-3">
                <p class="blue-heading heading-in-mob">Latest <span class="pink-heading heading-in-mob"> Teachers</span>
                </p>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row carousel" data-flickity='{"wrapAround" : true,"autoplay" : true,"pageDots":false}'>

            @foreach($batches as $batch) 
                <div class="col-xl-4 col-md-6 col-sm-12 col-12 mb-5 carousel-cell">
                    <div class="teacher-card filter DPS class-1 CBSE subject-1">
                        <div class="teacher-card_background_img">
                            <span class="selected-card">Selected</span>
                        </div>
                        <div class="teacher-card_profile_img ">
                        </div>

                        <div class="container-fluid">
                            <div class="user_details">
                                <h3>{{ $batch->user->name ? $batch->user->name : 'Teacher'}}</h3>
                                <p>{{ $batch->subject->name}}</p>
                            </div>

                            <div class="container-fluid">
                                <div class="boardbar">
                                    <div class="row">
                                        <div class="col-sm-6 d-inline-block">
                                            <p class="mb-0">Classes</p>
                                            <p class="mb-0 p-light"> {{ $batch->schoolClass->name}} </p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="mb-0">Board</p>
                                            <p class="mb-0 p-light"> {{ $batch->board->name}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $a = $batch->days;
                            @endphp
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-6 px-">
                                        <p class="bg-blue text-light rounded"> Sessions / week
                                            <br>
                                            {{ count(json_decode($a))}}
                                        </p>
                                    </div>
                                    <div class="col-sm-6 px-">
                                        <p class="bg-blue text-light rounded"> Duration /
                                            session <br>
                                            3 Hrs </p>
                                    </div>
                                </div>
                            </div>




                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-6 px-">
                                        <p class="bg-blue text-light rounded"> Teaching
                                            Exp.<br>
                                            3 Years </p>
                                    </div>
                                    <div class="col-sm-6 px-">
                                        <p class="bg-blue text-light rounded"> Starting from
                                            <br>
                                            {{ $batch->price}}
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-6 px-">
                                        <a class="rounded btn border-0 text-light" href="tel:8929142392">
                                            <i class="fa-solid fa-phone"></i> Call now
                                        </a>
                                    </div>
                                    <div class="col-sm-6 px-">
                                        <a href="" class="rounded text-light">
                                            Request Free Trial 3 Hrs
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>


                </div>
            @endforeach

        </div>
    </div>






    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content"
                style="background:#FFF url('https://ablore.xyz/bcj-files/images/popup%20bg.jpg') no-repeat center / cover;">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="container">
                                                <div class="main">
                                                    <p
                                                        style="font-size:18px; font-weight:500; color: rgb(169, 169, 169);">
                                                        Select
                                                        Board</p>
                                                    <select name="board_id" id="board_id">
                                                        @foreach($boards as $board)    
                                                            <option value="{{ $board->id}}">{{ $board->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="container">
                                                <div class="main">
                                                    <p
                                                        style="font-size:18px; font-weight:500; color: rgb(169, 169, 169);">
                                                        Select
                                                        Class</p>
                                                    <select name="school_class_id" id="school_class_id">
                                                        @foreach($schoolClasses as $schoolClass)
                                                            <option value="{{ $schoolClass->id}}">{{ $schoolClass->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <p style="padding-left:1rem !important;"> <button type="button"
                                                        class="btn text-right w-100 mt-5 text-light" id="subject-data"
                                                        style="background-color:#2e3863; width: 290px !important;">Proceed
                                                        &#8594
                                                    </button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="images/college/images/study kid.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 1-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content"
                style="background: #FFF url('https://ablore.xyz/bcj-files/images/popup%20bg.jpg') no-repeat center / cover;">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="container">
                                                <div class="main">
                                                <form method="POST" action="{{ route('leads.store') }}">
                                                        @csrf
                                                        <input type="hidden" name="subjectId" id="subjectId" value="" />
                                                        <input type="hidden" name="boardId" id="boardId" value="" />
                                                        <input type="hidden" name="schoolClassId" id="schoolClassId" value="" />
                                                        <input type="hidden" name="vertical_id" id="vertical_id" value="{{ $vertical->id}}" />
                                                        <div class="mb-3">
                                                            <label for="name" class="form-label">Student's
                                                                Name</label>
                                                            <input type="text" class="form-control"
                                                                id="name" name="name" required aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="email" class="form-label">Email
                                                                Address</label>
                                                            <input type="email" class="form-control"
                                                                id="email" name="email" required aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="number" class="form-label">Phone
                                                                Number</label>
                                                            <input type="text" class="form-control"
                                                                id="number" name="number" required aria-describedby="emailHelp">
                                                        </div>

                                                        <div class="mb-3 form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="parent" name="parent" value="parent">
                                                            <label class="form-check-label" for="parent">I am a
                                                                parent</label>
                                                        </div>
                                                        <p>
                                                            <button type="submit"
                                                                class="btn text-right w-100 mt-5 text-light"
                                                                style="background-color:#2e3863; width: 290px !important;">Proceed
                                                                &#8594
                                                            </button>
                                                        </p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="images/college/images/study kid.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content" style="background: #FFF url('https://ablore.xyz/bcj-files/images/popup%20bg.jpg') no-repeat center / cover;">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="container">
                                                <div class="main">
                                                    <p
                                                        style="font-size:18px; font-weight:500; color: rgb(169, 169, 169);">
                                                        Select
                                                        Board</p>
                                                    <select name="board-id" id="board-id">
                                                        @foreach($boards as $board)
                                                            <option value="{{ $board->id}}"> {{ $board->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="container">
                                                <div class="main">
                                                    <p
                                                        style="font-size:18px; font-weight:500; color: rgb(169, 169, 169);">
                                                        Select
                                                        Subject</p>
                                                    <select name="subject-id" id="subject-id">
                                                        @foreach($subjects as $subject)
                                                            <option value="{{ $subject->id}}">{{ $subject->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <p style="padding-left:1rem !important;"> <button type="button"
                                                        class="btn text-right w-100 mt-5 text-light" id="class-data"
                                                        style="background-color:#2e3863; width: 290px !important;">Proceed
                                                        &#8594
                                                    </button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="images/college/images/study kid.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="before-footer"></div>
    <div class="container-fluid footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/college/images/bcj-logo.png" class="img-fluid" style="width:150px ;" alt="">
                    <p style="margin-top: 2rem;">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="footer-heading">Important Links</p>
                    <p>Become A Teacher</p>
                    <p>Contact Us</p>
                    <p>About Us</p>
                </div>
                <div class="col-md-4">
                    <p class="footer-heading">Get In Touch</p>
                    <p>M 12 Ground Floor Old DLF colony,
                        Sector 14, gurgaon Haryana (122001)

                        +91 89291 42392

                        info@becrackerjack.com</p>
                </div>
            </div>
        </div>
    </div>

    <script>


        $('#subject-data').on('click', function(e) {
            let board_id = $("#board_id").val();
            let school_class_id = $("#school_class_id").val();
            $('#boardId').val(board_id);
            $('#schoolClassId').val(school_class_id);
            $('#exampleModal1').modal('show')
        });

        $('#class-data').on('click', function(e) {
            let board_id = $("#board-id").val();
            let subject_id = $("#subject-id").val();
            $('#boardId').val(board_id);
            $('#subjectId').val(subject_id);
            $('exampleModal2').modal('hide');
            $('#exampleModal1').modal('show')
        });
    </script>

    <script>
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    </script>
    <script>
        const panels = document.querySelectorAll(".panel");

        panels.forEach((panel) => {
            panel.addEventListener("click", () => {
                removeActiveClasses();
                panel.classList.add("active");
            });
        });

        const removeActiveClasses = () => {
            panels.forEach((panel) => {
                panel.classList.remove("active");
            });
        };
    </script>





    <script>
        function create_custom_dropdowns() {
            $('select').each(function (i, select) {
                if (!$(this).next().hasClass('dropdown-select')) {
                    $(this).after('<div class="dropdown-select wide ' + ($(this).attr('class') || '') +
                        '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>'
                    );
                    var dropdown = $(this).next();
                    var options = $(select).find('option');
                    var selected = $(this).find('option:selected');
                    dropdown.find('.current').html(selected.data('display-text') || selected.text());
                    options.each(function (j, o) {
                        var display = $(o).data('display-text') || '';
                        dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ?
                            'selected' : '') + '" data-value="' + $(o).val() +
                            '" data-display-text="' + display + '">' + $(o).text() + '</li>');
                    });
                }
            });

            $('.dropdown-select ul').before(
                '<div class="dd-search"><input id="txtSearchValue" autocomplete="off" onkeyup="filter()" class="dd-searchbox" type="text"></div>'
            );
        }

        // Event listeners

        // Open/close
        $(document).on('click', '.dropdown-select', function (event) {
            if ($(event.target).hasClass('dd-searchbox')) {
                return;
            }
            $('.dropdown-select').not($(this)).removeClass('open');
            $(this).toggleClass('open');
            if ($(this).hasClass('open')) {
                $(this).find('.option').attr('tabindex', 0);
                $(this).find('.selected').focus();
            } else {
                $(this).find('.option').removeAttr('tabindex');
                $(this).focus();
            }
        });

        // Close when clicking outside
        $(document).on('click', function (event) {
            if ($(event.target).closest('.dropdown-select').length === 0) {
                $('.dropdown-select').removeClass('open');
                $('.dropdown-select .option').removeAttr('tabindex');
            }
            event.stopPropagation();
        });

        function filter() {
            var valThis = $('#txtSearchValue').val();
            $('.dropdown-select ul > li').each(function () {
                var text = $(this).text();
                (text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show() : $(this).hide();
            });
        };
        // Search

        // Option click
        $(document).on('click', '.dropdown-select .option', function (event) {
            $(this).closest('.list').find('.selected').removeClass('selected');
            $(this).addClass('selected');
            var text = $(this).data('display-text') || $(this).text();
            $(this).closest('.dropdown-select').find('.current').text(text);
            $(this).closest('.dropdown-select').prev('select').val($(this).data('value')).trigger('change');
        });

        // Keyboard events
        $(document).on('keydown', '.dropdown-select', function (event) {
            var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find(
                '.list .option.selected')[0]);
            // Space or Enter
            //if (event.keyCode == 32 || event.keyCode == 13) {
            if (event.keyCode == 13) {
                if ($(this).hasClass('open')) {
                    focused_option.trigger('click');
                } else {
                    $(this).trigger('click');
                }
                return false;
                // Down
            } else if (event.keyCode == 40) {
                if (!$(this).hasClass('open')) {
                    $(this).trigger('click');
                } else {
                    focused_option.next().focus();
                }
                return false;
                // Up
            } else if (event.keyCode == 38) {
                if (!$(this).hasClass('open')) {
                    $(this).trigger('click');
                } else {
                    var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find(
                        '.list .option.selected')[0]);
                    focused_option.prev().focus();
                }
                return false;
                // Esc
            } else if (event.keyCode == 27) {
                if ($(this).hasClass('open')) {
                    $(this).trigger('click');
                }
                return false;
            }
        });

        $(document).ready(function () {
            create_custom_dropdowns();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        (function ($) {

            var SliceSlider = {

                /**
                    * Settings Object
                    */
                settings: {
                    delta: 0,
                    currentSlideIndex: 0,
                    scrollThreshold: 40,
                    slides: $('.slide'),
                    numSlides: $('.slide').length,
                    navPrev: $('.js-prev'),
                    navNext: $('.js-next'),
                },

                /**
                    * Init
                    */
                init: function () {
                    s = this.settings;
                    this.bindEvents();
                },

                /**
                    * Bind our click, scroll, key events
                    */
                bindEvents: function () {

                    // Scrollwheel & trackpad
                    s.slides.on({
                        'DOMMouseScroll mousewheel': SliceSlider.handleScroll
                    });
                    // On click prev
                    s.navPrev.on({
                        'click': SliceSlider.prevSlide
                    });
                    // On click next
                    s.navNext.on({
                        'click': SliceSlider.nextSlide
                    });
                    // On Arrow keys
                    $(document).keyup(function (e) {
                        // Left or back arrows
                        if ((e.which === 37) || (e.which === 38)) {
                            SliceSlider.prevSlide();
                        }
                        // Down or right
                        if ((e.which === 39) || (e.which === 40)) {
                            SliceSlider.nextSlide();
                        }
                    });
                },

                /** 
                    * Interept scroll direction
                    */
                handleScroll: function (e) {

                    // Scrolling up
                    if (e.originalEvent.detail < 0 || e.originalEvent.wheelDelta > 0) {

                        s.delta--;

                        if (Math.abs(s.delta) >= s.scrollThreshold) {
                            SliceSlider.prevSlide();
                        }
                    }

                    // Scrolling Down
                    else {

                        s.delta++;

                        if (s.delta >= s.scrollThreshold) {
                            SliceSlider.nextSlide();
                        }
                    }

                    // Prevent page from scrolling
                    return false;
                },

                /**
                    * Show Slide
                    */
                showSlide: function () {
                    // reset
                    s.delta = 0;
                    // Bail if we're already sliding
                    if ($('body').hasClass('is-sliding')) {
                        return;
                    }
                    // Loop through our slides
                    s.slides.each(function (i, slide) {

                        // Toggle the is-active class to show slide
                        $(slide).toggleClass('is-active', (i === s.currentSlideIndex));
                        $(slide).toggleClass('is-prev', (i === s.currentSlideIndex - 1));
                        $(slide).toggleClass('is-next', (i === s.currentSlideIndex + 1));

                        // Add and remove is-sliding class
                        $('body').addClass('is-sliding');

                        setTimeout(function () {
                            $('body').removeClass('is-sliding');
                        }, 1000);
                    });
                },

                /**
                    * Previous Slide
                    */
                prevSlide: function () {

                    // If on first slide, loop to last
                    if (s.currentSlideIndex <= 0) {
                        s.currentSlideIndex = s.numSlides;
                    }
                    s.currentSlideIndex--;

                    SliceSlider.showSlide();
                },

                /**
                    * Next Slide
                    */
                nextSlide: function () {

                    s.currentSlideIndex++;

                    // If on last slide, loop to first
                    if (s.currentSlideIndex >= s.numSlides) {
                        s.currentSlideIndex = 0;
                    }

                    SliceSlider.showSlide();
                },
            };
            SliceSlider.init();
        })(jQuery);

        $(function () {
            $('.accordion .accordion-content').hover(function () {
                $('.accordion .accordion-content.active').removeClass('active');
                $(this).addClass('active');
            }, 300);
        });
    </script>


</body>

</html>