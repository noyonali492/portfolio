

<section class="section" id="resume">
    <div class="container">
        <h2 class="mb-5"><span class="text-danger">My</span> Resume</h2>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                   <div class="card-header">
                        <div class="mt-2">
                            <h4>Expertise</h4>
                            <span class="line"></span>  
                        </div>
                    </div>
                    @foreach ($resume_expertise as $resume_expertis)
                        
                   
                    <div class="card-body">
                        <h6 class="title text-danger">{{$resume_expertis->skill_year}}</h6>
                        <P>{{$resume_expertis->designation}}</P>
                        <P class="subtitle">{{$resume_expertis->discription}}</P>
                        <hr>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                   <div class="card-header">
                        <div class="mt-2">
                            <h4>Education</h4>
                            <span class="line"></span>  
                        </div>
                    </div>


                    @foreach ($educationlists as $educationlist)
                    <div class="card-body">
                        <h6 class="title text-danger">{{$educationlist->skill_year}}</h6>
                        <P>{{$educationlist->discription}}</P>
                        <P class="subtitle">{{$educationlist->designation}}</P>
                        <hr>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                   <div class="card-header">
                        <div class="pull-left">
                            <h4 class="mt-2">Skills</h4>
                            <span class="line"></span>  
                        </div>
                    </div>
                    <div class="card-body pb-2">
                       <h6>hTL5 &amp; CSS3</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 97%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>JavaScript</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>PHP</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>SQL</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>Laborum</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>Tempora</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                   <div class="card-header">
                        <div class="pull-left">
                            <h4 class="mt-2">Languages</h4>
                            <span class="line"></span>  
                        </div>
                    </div>
                    <div class="card-body pb-2">
                       <h6>English</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>French</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>Spanish</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>