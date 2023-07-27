<!DOCTYPE html>
<html>
    @include('layouts.auth_includes.links')
    <body>
        @include('component.loader')

		@include('component.header')
        @include('component.settings')

		@include('component.sidebar')
       
        <div class="mobile-menu-overlay"></div>
        <div class="main-container">
            <div class="pd-ltr-20 xs-pd-20-10">
                <div class="min-height-200px">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="title">
                                    <h4>Form Wizards</h4>
                                </div>
                                <nav aria-label="breadcrumb" role="navigation">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Form Wizards
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-md-6 col-sm-12 text-right">
                                <div class="dropdown">
                                    <a
                                        class="btn btn-primary dropdown-toggle"
                                        href="#"
                                        role="button"
                                        data-toggle="dropdown"
                                        >
                                    January 2018
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Export List</a>
                                        <a class="dropdown-item" href="#">Policies</a>
                                        <a class="dropdown-item" href="#">View Assets</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pd-20 card-box mb-30">
                        <div class="clearfix">
                            <h4 class="text-blue h4">Step wizard</h4>
                            <p class="mb-30">jQuery Step wizard</p>
                        </div>
                        <div class="wizard-content">
                            <form class="tab-wizard wizard-circle wizard">
                                <h5>Personal Info</h5>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name :</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name :</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email Address :</label>
                                                <input type="email" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone Number :</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Select City :</label>
                                                <select class="custom-select form-control">
                                                    <option value="">Select City</option>
                                                    <option value="Amsterdam">India</option>
                                                    <option value="Berlin">UK</option>
                                                    <option value="Frankfurt">US</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of Birth :</label>
                                                <input
                                                    type="text"
                                                    class="form-control date-picker"
                                                    placeholder="Select Date"
                                                    />
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Step 2 -->
                                <h5>Job Status</h5>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Job Title :</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company Name :</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Job Description :</label>
                                                <textarea class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Step 3 -->
                                <h5>Interview</h5>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Interview For :</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label>Interview Type :</label>
                                                <select class="form-control">
                                                    <option>Normal</option>
                                                    <option>Difficult</option>
                                                    <option>Hard</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Interview Date :</label>
                                                <input
                                                    type="text"
                                                    class="form-control date-picker"
                                                    placeholder="Select Date"
                                                    />
                                            </div>
                                            <div class="form-group">
                                                <label>Interview Time :</label>
                                                <input
                                                    class="form-control time-picker"
                                                    placeholder="Select time"
                                                    type="text"
                                                    />
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Step 4 -->
                                <h5>Remark</h5>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Behaviour :</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label>Confidance</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label>Result</label>
                                                <select class="form-control">
                                                    <option>Select Result</option>
                                                    <option>Selected</option>
                                                    <option>Rejected</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Comments</label>
                                                <textarea class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </form>
                        </div>
                    </div>
                    <div class="pd-20 card-box mb-30">
                        <div class="clearfix">
                            <h4 class="text-blue h4">Step wizard vertical</h4>
                            <p class="mb-30">jQuery Step wizard</p>
                        </div>
                        <div class="wizard-content">
                            <form class="tab-wizard wizard-circle wizard vertical">
                                <h5>Personal Info</h5>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name :</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name :</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email Address :</label>
                                                <input type="email" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone Number :</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Select City :</label>
                                                <select class="custom-select form-control">
                                                    <option value="">Select City</option>
                                                    <option value="Amsterdam">India</option>
                                                    <option value="Berlin">UK</option>
                                                    <option value="Frankfurt">US</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of Birth :</label>
                                                <input
                                                    type="text"
                                                    class="form-control date-picker"
                                                    placeholder="Select Date"
                                                    />
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Step 2 -->
                                <h5>Job Status</h5>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Job Title :</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company Name :</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Job Description :</label>
                                                <textarea class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Step 3 -->
                                <h5>Interview</h5>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Interview For :</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label>Interview Type :</label>
                                                <select class="form-control">
                                                    <option>Normal</option>
                                                    <option>Difficult</option>
                                                    <option>Hard</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Interview Date :</label>
                                                <input
                                                    type="text"
                                                    class="form-control date-picker"
                                                    placeholder="Select Date"
                                                    />
                                            </div>
                                            <div class="form-group">
                                                <label>Interview Time :</label>
                                                <input
                                                    class="form-control time-picker"
                                                    placeholder="Select time"
                                                    type="text"
                                                    />
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Step 4 -->
                                <h5>Remark</h5>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Behaviour :</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label>Confidance</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label>Result</label>
                                                <select class="form-control">
                                                    <option>Select Result</option>
                                                    <option>Selected</option>
                                                    <option>Rejected</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Comments</label>
                                                <textarea class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </form>
                        </div>
                    </div>
                    <!-- success Popup html Start -->
                    <div
                        class="modal fade"
                        id="success-modal"
                        tabindex="-1"
                        role="dialog"
                        aria-labelledby="exampleModalCenterTitle"
                        aria-hidden="true"
                        >
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body text-center font-18">
                                    <h3 class="mb-20">Form Submitted!</h3>
                                    <div class="mb-30 text-center">
                                        <img src="vendors/images/success.png" />
                                    </div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button
                                        type="button"
                                        class="btn btn-primary"
                                        data-dismiss="modal"
                                        >
                                    Done
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- success Popup html End -->
                </div>
                @include('layouts.dash_includes.footer')
            </div>
        </div>
        <!-- welcome modal start -->
        <div class="welcome-modal">
            <button class="welcome-modal-close">
            <i class="bi bi-x-lg"></i>
            </button>
            <iframe
                class="w-100 border-0"
                src="https://embed.lottiefiles.com/animation/31548"
                ></iframe>
            <div class="text-center">
                <h3 class="h5 weight-500 text-center mb-2">
                    Open source
                    <span role="img" aria-label="gratitude">❤️</span>
                </h3>
                <div class="pb-2">
                    <a
                        class="github-button"
                        href="https://github.com/dropways/deskapp"
                        data-color-scheme="no-preference: dark; light: light; dark: light;"
                        data-icon="octicon-star"
                        data-size="large"
                        data-show-count="true"
                        aria-label="Star dropways/deskapp dashboard on GitHub"
                        >Star</a
                        >
                    <a
                        class="github-button"
                        href="https://github.com/dropways/deskapp/fork"
                        data-color-scheme="no-preference: dark; light: light; dark: light;"
                        data-icon="octicon-repo-forked"
                        data-size="large"
                        data-show-count="true"
                        aria-label="Fork dropways/deskapp dashboard on GitHub"
                        >Fork</a
                        >
                </div>
            </div>
            <div class="text-center mb-1">
                <div>
                    <a
                        href="https://github.com/dropways/deskapp"
                        target="_blank"
                        class="btn btn-light btn-block btn-sm"
                        >
                    <span class="text-danger weight-600">STAR US</span>
                    <span class="weight-600">ON GITHUB</span>
                    <i class="fa fa-github"></i>
                    </a>
                </div>
                <script
                    async
                    defer="defer"
                    src="https://buttons.github.io/buttons.js"
                    ></script>
            </div>
            <a
                href="https://github.com/dropways/deskapp"
                target="_blank"
                class="btn btn-success btn-sm mb-0 mb-md-3 w-100"
                >
            DOWNLOAD
            <i class="fa fa-download"></i>
            </a>
            <p class="font-14 text-center mb-1 d-none d-md-block">
                Available in the following technologies:
            </p>
            <div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
                <i class="fa fa-html5"></i>
            </div>
        </div>
        <button class="welcome-modal-btn">
        <i class="fa fa-download"></i> Download
        </button>
        <!-- welcome modal end -->
        <!-- js -->
        @include('layouts.auth_includes.scripts')
        <!-- End Google Tag Manager (noscript) -->
    </body>
</html>