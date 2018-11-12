<section id="contact" class="home-section nopadd-bot color-dark bg-gray text-center">

    <div class="container marginbot-50">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="input-group date" data-provide="datepicker">
                    <input type="text" class="form-control">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
                <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                    <div class="section-heading text-center">
                        <h2 class="h-bold">Contact us</h2>
                        <div class="divider-header"></div>
                        <p>Lorem ipsum dolor sit amet, agam perfecto sensibus usu at duo ut iriure.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container">

        <div class="row marginbot-80">
            <div class="col-md-8 col-md-offset-2">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                               data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                               data-rule="email" data-msg="Please enter a valid email"/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                               data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                                  data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-skin btn-lg btn-block">Send Message</button>
                    </div>
                </form>

            </div>
        </div>


    </div>
</section>
