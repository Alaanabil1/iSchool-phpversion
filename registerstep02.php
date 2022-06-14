<?php include('header.php');?>
<?php include('nav.php');?>

    <div class="coontent-container" id="coontent-container_id" >

        <div class="step02">
        <a class="back" href="/registerstep01.php" style="margin-left: 60px;"><i class="fa-solid fa-arrow-left"></i></a>
            <div class="row headding" style="margin-bottom: 30px;">
                <h1>Select You Schedule</h1>
            </div>

            <div class="row body">
                <div class="col form">
                    <h4 style="color: #2c2c2c;">Select Schedule</h4>
                    <hr>

                    <div class="row">
                        <div class="row scheduletablehead ">
                            <span class="col-3">Starting date</span>
                            <span class="col-2">Day</span>
                            <span class="col-2">Time</span>
                            <span class="col-2">Language</span>
                        </div>
                        <div class="row scheduletableitem">
                            <span class="col-auto" hidden>52</span>
                            <span class="col-3">22/07/2022</span>
                            <span class="col-2">Friday</span>
                            <span class="col-2">4:30 PM</span>
                            <span class="col-2">lan</span>
                            <span class="col-2"><label class="radio" id="b-button">
                             <input id="b-button" name="im-buttons" type="radio" /><span></span>
                             </label></span>
                        </div>
                        <div class="row scheduletableitem ">
                            <span class="col-auto" hidden>52</span>
                            <span class="col-3">22/07/2022</span>
                            <span class="col-2">Wednesday</span>
                            <span class="col-2">10:30 PM</span>
                            <span class="col-2">lan</span>
                            <span class="col-2"><label class="radio" id="b-button">
                             <input id="b-button" name="im-buttons" type="radio" /><span></span>
                             </label></span>
                        </div>
                        <div class="row scheduletableitem ">
                            <span class="col-auto" hidden>52</span>
                            <span class="col-3">22/07/2022</span>
                            <span class="col-2">Sunday</span>
                            <span class="col-2">4:30 PM</span>
                            <span class="col-2">lan</span>
                            <span class="col-2"><label class="radio" id="b-button">
                             <input id="b-button" name="im-buttons" type="radio" /><span></span>
                             </label></span>
                        </div>
                        <div class="row scheduletableitem ">
                            <span class="col-auto" hidden>52</span>
                            <span class="col-3">22/07/2022</span>
                            <span class="col-2">Tuesday</span>
                            <span class="col-2">4:30 PM</span>
                            <span class="col-2">lan</span>
                            <span class="col-2"><label class="radio" id="b-button">
                             <input id="b-button" name="im-buttons" type="radio" /><span></span>
                             </label></span>
                        </div>
                        <div class="row scheduletableitem ">
                            <span class="col-auto" hidden>52</span>
                            <span class="col-3">22/07/2022</span>
                            <span class="col-2">Friday</span>
                            <span class="col-2">4:30 PM</span>
                            <span class="col-2">lan</span>
                            <span class="col-2">  <label class="radio" id="b-button">
                             <input id="b-button" name="im-buttons" type="radio"/><span></span>
                             </label></span>
                        </div>
                        <div class="form-check" style="margin-top: 20px;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault" id="flexCheckDefault_label">
                                I have a Laptop / PC at home
                            </label>
                        </div>

                    </div>




                <a class="btn btn-primary signup" href="registerstep03.php" role="button">Confirm Schedule</a>
                </div>
                <div class="col picture">
                    <div class="title-right">
                        <b> Tech leaders</b>
                        <br>started from here.
                    </div>
                    <img src="../img/hero 1.png" alt="">
                </div>
            </div>
        </div>
       
<?php include('footer.php');?>