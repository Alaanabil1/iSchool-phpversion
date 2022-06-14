
    <?php include('header.php');?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <div class="close"><i class="fa-solid fa-xmark" hidden></i></div>
    <div id="myModal_1" class="modal_loading">

        <!-- Modal content -->
        <div class="modal_loading-content">
            <div id="loading_location"></div>

        </div>

    </div>


   
    <?php include('nav.php');?>
    <div class="content" data-page="free">

    <div class="coontent-container " id="coontent-container_id">


        <div class="step01">
            <div class="row headding">
                <h1>Book a Free Session</h1>

            </div>
            <div class="row body" style="padding-top: 70px;">
                <div class="col form">
                    <h4 style="color: #2c2c2c;">Basic Information</h4>
                    <hr>

                    <div class="row twosides">
                        <div class="col mb-3">
                            <label for="firstnameInput">Full Student Name</label>
                            <input type=" text" class="form-control" id="firstnameInput" placeholder="First name">
                            <span class="error_form" style="color: rgb(184, 0, 0);" id="firstnameInput_error"></span>
                        </div>

                        <div class=" col ">
                            <label for="monthDate">Student Birth Date</label>
                            <div class="datepicker-container">

                                <div class="form-floating mb-3 date days">
                                    <input type=" text" class="form-control" id="dayDate" placeholder="Day">
                                    <label for="dayDate">Day</label>
                                    <ul class="days-slider shadow">
                                        <li>01</li>
                                        <li>02</li>
                                        <li>03</li>
                                        <li>04</li>
                                        <li>05</li>
                                        <li>06</li>
                                        <li>07</li>
                                        <li>08</li>
                                        <li>09</li>
                                        <li>10</li>
                                        <li>11</li>
                                        <li>12</li>
                                        <li>13</li>
                                        <li>14</li>
                                        <li>15</li>
                                        <li>16</li>
                                        <li>17</li>
                                        <li>18</li>
                                        <li>19</li>
                                        <li>20</li>
                                        <li>21</li>
                                        <li>22</li>
                                        <li>23</li>
                                        <li>24</li>
                                        <li>25</li>
                                        <li>26</li>
                                        <li>27</li>
                                        <li>28</li>
                                        <li>29</li>
                                        <li>30</li>
                                        <li>31</li>

                                    </ul>
                                </div>
                                <div class="form-floating mb-3 date months">
                                    <input type="date" id="birthdate" hidden>
                                    <input type=" text" class="form-control" id="monthDate" placeholder="Month">
                                    <label for="monthDate">Month</label>
                                    <ul class="days-slider shadow">
                                        <li>01</li>
                                        <li>02</li>
                                        <li>03</li>
                                        <li>04</li>
                                        <li>05</li>
                                        <li>06</li>
                                        <li>07</li>
                                        <li>08</li>
                                        <li>09</li>
                                        <li>10</li>
                                        <li>11</li>
                                        <li>12</li>

                                    </ul>
                                </div>
                                <div class="form-floating mb-3 date years">
                                    <input type=" text" class="form-control" id="yearDate" placeholder="Year">
                                    <label for="yearDate">Year</label>
                                    <ul class="days-slider shadow">
                                    </ul>
                                </div>
                                <span class="error_form" style="color: rgb(184, 0, 0);" id="birthdate_error"></span>

                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="mb-3" style="width: 100%;">
                            <label for="firstnameInput">Phone Number</label>
                            <input style="height: 60px; width: 100%;" type="tel" class="form-control"
                                id="phonenumInput">
                            <span class="error_form" style="color: rgb(184, 0, 0);" id="phonenumInput_error"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3">
                            <label for="emailInput">Email Address</label>
                            <input type="email" class="form-control" id="emailInput" placeholder="Email Address">
                            <span class="error_form" style="color: rgb(184, 0, 0);" id="emailInput_error"></span>
                        </div>
                    </div>


                    <a class="btn btn-primary signup" href="freestep02.php" role="button">Next</a>

                </div>
                <div class="col picture">
                    <div class="title-right">
                        Creating the next
                        <br><b>tech leaders.</b>
                    </div>
                    <img src="img/OBJECTS.svg" alt="">
                </div>
            </div>
        </div>
       
        </div>
        <?php include('footer.php');?>
