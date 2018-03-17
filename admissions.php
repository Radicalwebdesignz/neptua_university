<?php $currentPage = 'admissions'; ?>
<?php require_once ("header.php"); ?>

   <!-- Home Banner -->
    <section id="admissions-banner" class="global">
        <div class="banner-position">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-white">
                        <h1>Admissions</h1>
                        <h6>The Future Belongs To Those Who See Possibilities Today</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Admissions Details Section -->
    <section id="admission-details">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-md-12 text-center">
                    <p><i class="far default-color fa-thumbs-up fa-3x"></i></p>
                    <h2>1. Eligibility</h2>
                    <p>We offer a wide range of high quality of teaching and extra-curricular activities.</p><hr id="page-banner-hr">
                    <p>We have a commitment to ensure that our pupils receive the best pastoral care and support so that they feel happy and safe here and are therefore able to thrive and achieve academically. Our Student Services team are all trained to work with young people and as part of the team we have other students support the application process.</p>
                    <a href="admissions.php#application" class="btn btn-info default-bg-color admission-btn"><i class="fas fa-caret-down text-white"></i>&nbsp;&nbsp;Application</a>
                </div>
            </div>
            <div class="row py-5" id="application">
                <div class="col-md-12 text-center">
                    <p><i class="far default-color fa-thumbs-up fa-3x"></i></p>
                    <h2>2. Application</h2>
                    <p>We offer a wide range of high quality of teaching and extra-curricular activities.</p><hr id="page-banner-hr">
                    <p>We have a commitment to ensure that our pupils receive the best pastoral care and support so that they feel happy and safe here and are therefore able to thrive and achieve academically. Our Student Services team are all trained to work with young people and as part of the team we have other students support the application process.</p>
                    <a href="admissions.php#review" class="btn btn-info default-bg-color admission-btn"><i class="fas fa-caret-down text-white"></i>&nbsp;&nbsp;Review Process</a>
                </div>
            </div>
            <div class="row py-5" id="review">
                <div class="col-md-12 text-center">
                    <p><i class="far default-color fa-thumbs-up fa-3x"></i></p>
                    <h2>3. Review Process</h2>
                    <p>We offer a wide range of high quality of teaching and extra-curricular activities.</p><hr id="page-banner-hr">
                    <p>We have a commitment to ensure that our pupils receive the best pastoral care and support so that they feel happy and safe here and are therefore able to thrive and achieve academically. Our Student Services team are all trained to work with young people and as part of the team we have other students support the application process.</p>
                    <a href="admissions.php#success" class="btn btn-info default-bg-color admission-btn"><i class="fas fa-caret-down text-white"></i>&nbsp;&nbsp;Success</a>
                </div>
            </div>
            <div class="row py-5" id="success">
                <div class="col-md-12 text-center">
                    <p><i class="far default-color fa-thumbs-up fa-3x"></i></p>
                    <h2>4. Success</h2>
                    <p>We offer a wide range of high quality of teaching and extra-curricular activities.</p><hr id="page-banner-hr">
                    <p>We have a commitment to ensure that our pupils receive the best pastoral care and support so that they feel happy and safe here and are therefore able to thrive and achieve academically. Our Student Services team are all trained to work with young people and as part of the team we have other students support the application process.</p>
                    <a href="admissions.php#application-section" class="btn btn-info default-bg-color admission-btn"><i class="fas fa-caret-down text-white"></i>&nbsp;&nbsp;Apply Below</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Form Section -->

    <section id="application-section">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-white">Join <span class="default-color">Over 500,000 Students</span> Enjoying Avada Education Now</h2>
                    <p class="text-white">Become Part of Avada University to Further Your Career.</p>
                </div>
                <div class="col-md-12">
                    <div id="form-messages1" class="text-center"></div>
                    <form id="ajax-contact1" method="post" action="admission_mailer.php" class="row pt-4">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" id="name1" placeholder="Name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" id="email1" placeholder="Email" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="subject" id="subject1" placeholder="Subject" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <select class="form-control" name="course" id="course1" required>
                                <option value="">Choose Your Course</option>
                                <option value="Physics">Physics</option>
                                <option value="Biology">Biology</option>
                                <option value="Sports">Sports</option>
                                <option value="Music">Music</option>
                                <option value="Economics">Economics</option>
                                <option value="Graphics Design">Graphics Design</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="message" placeholder="Message" id="message1" rows="4" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit" name="submit" value="Submit" class="form-control btn btn-info default-bg-color">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Student Feedback Section -->
    <section id="student-feedback" class="bg-light">
        <div class="container pb-5">
            <h2 class="text-center pt-5">STUDENT FEEDBACK</h2><hr id="page-banner-hr">
            <div class="row">
                <div class="col-md-6 pt-4">
                    <div class="card text-center text-muted pt-4">
                        <img src="assets/img/testimonial1.jpg" class="m-auto img img-fluid rounded-circle w-25">
                        <div class="card-body">
                            <div class="card-text">
                                <p><i>“There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour”</i></p>
                            </div>
                            <div class="card-title">
                                <p><span class="default-color">LEE MILLER</span>, Biology Student</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pt-4">
                    <div class="card text-center text-muted pt-4">
                        <img src="assets/img/testimonial2.jpg" class="m-auto img img-fluid rounded-circle w-25">
                        <div class="card-body">
                            <div class="card-text">
                                <p><i>“There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour”</i></p>
                            </div>
                            <div class="card-title">
                                <p><span class="default-color">LEE MILLER</span>, Physics Student</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pt-4">
                    <div class="card text-center text-muted pt-4">
                        <img src="assets/img/testimonial3.jpg" class="m-auto img img-fluid rounded-circle w-25">
                        <div class="card-body">
                            <div class="card-text">
                                <p><i>“There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour”</i></p>
                            </div>
                            <div class="card-title">
                                <p><span class="default-color">EMERY BURNS</span>, Design Student</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pt-4">
                    <div class="card text-center text-muted pt-4">
                        <img src="assets/img/testimonial4.jpg" class="m-auto img img-fluid rounded-circle w-25">
                        <div class="card-body">
                            <div class="card-text">
                                <p><i>“There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour”</i></p>
                            </div>
                            <div class="card-title">
                                <p><span class="default-color">EMERY BURNS</span>, Science Student</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Slider Section -->
    <section id="facility_slider">
        <div class="container-fluid">
            <div class="row facilities_slider">
                <div class="text-center">
                    <img src="assets/img/slider1.jpg" class="img img-fluid">
                </div>
                <div class="text-center">
                    <img src="assets/img/slider2.jpg" class="img img-fluid">
                </div>
                <div class="text-center">
                    <img src="assets/img/slider3.jpg" class="img img-fluid">
                </div>
                <div class="text-center">
                    <img src="assets/img/slider4.jpg" class="img img-fluid">
                </div>
                <div class="text-center">
                    <img src="assets/img/slider5.jpg" class="img img-fluid">
                </div>
            </div>
        </div>
    </section>

        
<?php require_once("footer.php");?>   
        
        