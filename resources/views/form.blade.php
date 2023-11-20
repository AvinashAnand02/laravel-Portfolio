<section class="contact" id="contact" style="padding: 20px; text-align: center;">
    <h2 class="heading" style="color: #333;">
        <i class="fas fa-headset"></i> Get in <span style="color: #0073e6;">Touch</span>
    </h2>
    @if($errors->any())
    @foreach($errors->all() as $err)
    <li>{{$err}}</li>
    @endforeach
    @endif
    <div class="container" style="display: flex; justify-content: center; align-items: center;">
        <div class="content">
            <div class="image-box">
                <img draggable="false" src="./assests/images/contact1.png" alt="" style="max-width: 100%; height: auto;">
            </div>
            <form method="post" action="{{ route('process.form') }}" id="contact-form" style="margin-top: 20px;">
                @csrf
                <div class="form-group">
                    <div class="field">
                        <input type="text" name="name" placeholder="Name" style="width: 100%; padding: 10px;">
                        <i class='fas fa-user'></i>
                    </div>
                    <br><br>
                    <div class="field">
                        <input type="email" name="email" placeholder="Email" required style="width: 100%; padding: 10px;">
                        <i class='fas fa-envelope'></i>
                    </div>
                    <br><br>
                    <div class="field">
                        <input type="text" name="phone" placeholder="Phone" style="width: 100%; padding: 10px;">
                        <i class='fas fa-phone-alt'></i>
                    </div>
                    <br><br>
                    <div class="message">
                        <textarea placeholder="Message" name="message" required style="width: 100%; padding: 10px;"></textarea>
                        <i class="fas fa-comment-dots"></i>
                    </div>
                    <br><br>
                </div>
                <div class="button-area" style="text-align: center; margin-top: 20px;">
                    <button type="submit" style="background-color: #0073e6; color: #fff; padding: 10px 20px; border: none; cursor: pointer;">
                        Submit <i class="fa fa-paper-plane"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>