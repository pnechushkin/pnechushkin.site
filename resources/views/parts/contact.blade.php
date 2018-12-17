<section id="contact" class="home-section nopadd-bot color-dark bg-gray text-center">

    <div class="container marginbot-50">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">

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
                <form method="post" role="form" class="contactForm">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя * "
                               data-rule="minlen:4" data-msg="Минимум 4 символа"/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Ваш Email *"
                               data-rule="email" data-msg="Укажите корректный Email"/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Тема сообщения *"
                               data-rule="minlen:4" data-msg="Укажите тему Ващего письма не менее 4 символов"/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                                  data-msg="Напишите Ваше сообщение" placeholder="Текст сообщения *"></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="{{config('app.GoogleRecaptchaKey','')}}"></div>
                        <div class="validation"></div>
                    </div>
                    <div id="sendmessage"></div>
                    <div id="errormessage"></div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-skin btn-lg btn-block contact-btn">Send Message</button>
                    </div>
                </form>

            </div>
        </div>


    </div>
</section>
