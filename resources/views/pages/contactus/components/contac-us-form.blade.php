
<div class="col-md-8 text-left">

    <h2 class="block-title"><span>Contact Form</span></h2>

    <!-- Contact form -->
    <form name="contact-form" method="post" action="#" class="contact-form" id="contact-form">

        <div class="outer required">
            <div class="form-group af-inner">
                <label class="sr-only" for="name">Name</label>
                <input
                    type="text" name="name" id="name" placeholder="Name" value="" size="30"
                    data-toggle="tooltip" title="Name is required"
                    class="form-control placeholder"/>
            </div>
        </div>

        <div class="outer required">
            <div class="form-group af-inner">
                <label class="sr-only" for="email">Email</label>
                <input
                    type="text" name="email" id="email" placeholder="Email" value="" size="30"
                    data-toggle="tooltip" title="Email is required"
                    class="form-control placeholder"/>
            </div>
        </div>

        <div class="outer required">
            <div class="form-group af-inner">
                <label class="sr-only" for="subject">Subject</label>
                <input
                    type="text" name="subject" id="subject" placeholder="Subject" value="" size="30"
                    data-toggle="tooltip" title="Subject is required"
                    class="form-control placeholder"/>
            </div>
        </div>

        <div class="form-group af-inner">
            <label class="sr-only" for="input-message">Message</label>
            <textarea
                name="message" id="input-message" placeholder="Message" rows="4" cols="50"
                data-toggle="tooltip" title="Message is required"
                class="form-control placeholder"></textarea>
        </div>

        <div class="outer required">
            <div class="form-group af-inner">
                <input type="submit" name="submit" class="form-button form-button-submit btn btn-theme btn-theme-dark" id="submit_btn" value="Send message" />
            </div>
        </div>

    </form>
    <!-- /Contact form -->

</div>
