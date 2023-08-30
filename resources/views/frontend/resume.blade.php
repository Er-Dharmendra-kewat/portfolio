@extends('layouts.main')
@section('main-container')
    <main id="main">


        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Resume</h2>
                    <p>
                        A self-taught creative tech enthusiast. Trying to learn everything I can about the
                        field. I love to create, push the boundaries and try new things. Some of my favorite
                        hobbies are coding, music, cooking, sleeping, bug hunting, researching, and
                        meme.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Sumary</h3>
                        <div class="resume-item pb-0">
                            <h4>Dharmendra Kewat </h4>
                            <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and
                                    developing user-centered digital/print marketing material from initial concept to final,
                                    polished deliverable.</em></p>
                            <ul>
                                <li>Portland par 127,Orlando, FL</li>
                                <li>(123) 456-7891</li>
                                <li>alice.barkley@example.com</li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Diploma in computer engineering </h4>
                            <h5>2015 - 2016</h5>
                            <p><em>Rupandehi Lilaram Neupane Secondary School</em></p>
                            <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero
                                voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
                        </div>
                        <div class="resume-item">
                            <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
                            <h5>2010 - 2014</h5>
                            <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                            <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel
                                ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur
                                neque etlon sader mart dila</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Professional Skills</h3>
                        <div class="resume-item">
                            <h4>Php Developer</h4>
                            <h5>2019 - Present</h5>
                            <p><em>Experion, New York, NY </em></p>
                            <ul>
                                <li>Lead in the design, development, and implementation of the graphic, layout, and
                                    production communication materials</li>
                                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of
                                    the project. </li>
                                <li>Supervise the assessment of all graphic materials in order to ensure quality and
                                    accuracy of the design</li>
                                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000
                                </li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Laravel Developer</h4>
                            <h5>2017 - 2018</h5>
                            <p><em>Stepping Stone Advertising, New York, NY</em></p>
                            <ul>
                                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and
                                    advertisements).</li>
                                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                                <li>Created 4+ design presentations and proposals a month for clients and account managers
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
<a class="btn btn-primary" href="{{route('download')}}">Download CV</a>
            </div>
        </section><!-- End Resume Section -->


    </main>
@endsection
