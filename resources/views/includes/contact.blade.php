                <!-- Contact Section -->
                <article class="hs-content contact-section" id="section6">
                    <span class="sec-icon fa fa-phone-square"></span>
                    <div class="hs-inner">
                        <span class="before-title">.06</span>
                        <h2>CONTACT</h2>
                        <div class="contact_info">
                            <h3>Get in touch</h3>
                            <hr>
                            <h5>I am waiting to assist you</h5>
                            <h6>Simply use the form below to get in touch</h6>

                            <hr>
                        </div>
                        <!-- Contact Form -->
                        <!-- <form action="{{route('sendmail')}}" method="post"> -->
                        <form action="{{route('recaptcha')}}" id="form" method="post">
                        <fieldset id="contact_form">
                            <div id="result"></div>
                            <input type="text" name="title" id="name" placeholder="NAME" />
                            <input type="email" name="email" id="email" placeholder="EMAIL" />
                            <textarea name="message" id="message" placeholder="MESSAGE"></textarea>
                            {{csrf_field()}}
                            <div class="g-recaptcha" data-sitekey="6LcmehUUAAAAAD7PGAFWiJ9YXPAFj0VurO2m_SRW"></div>

                            <button type="submit" class="submit_btn" id="submit_btn">SEND MESSAGE</button>
                        </fieldset>
                    </form>
                        <!-- End Contact Form -->
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2950.8571333894947!2d-83.0554584849382!3d42.30291377919072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883b2d09bd1d029b%3A0x570908c8f8db9f59!2sCampbell+Ave%2C+Windsor%2C+ON!5e0!3m2!1sen!2sca!4v1486673272448" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>
                </article>
                <!-- End Contact Section -->
