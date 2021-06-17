<?php include "../assets/design/design.php";?>
<?php include "../assets/design/loader-login.php";?>
<!-- CSS Login -->
<style>
    .sign-in h4 {
        opacity: 1;
        color: #212121;
        margin:28px 0px;
        padding:0px;
        box-shadow:none;
        text-align:center;
        font-size: 1rem;
        font-weight: 500;
        line-height: 1.5rem;
    }
    .sign-in {
        /* ini adalah css center tengah, pengaturan atas atau bawah bisa di rubah di top dan bottom*/
        margin: 0;
        position: absolute;
        top: 47%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        padding: 0px 15px;
    }
    .border-box {
        border: 1px solid rgba(101,109,119,.16);
        padding:30px 25px;
        width:330px;
        background:#fff;
        border-radius: .3rem;
    }
    .modal-footer {
        margin:50px -25px -30px -25px;
    }
    .form-row {
        margin:20px auto;
        height:auto;
    }
    .form-row:last-child {
        margin:0px auto;
    }
    .form-control {
        font-size: 0.8rem;
    }
    .form-control:focus {
        border: 1px solid #005fbf;
        box-shadow: 0 0 4px 1px rgba(0,95,191,.3);
        background-color: rgb(232, 240, 254) !important;
    }
    .label_top {
        display:block;
        text-shadow:none;
        font-size: .84rem;
        font-weight: 500;
        margin-bottom: .5rem;
    }
    .form-control.password {
        width:100%;
        display:inline-block;	
    }
    #pass_button {
        position:absolute;
        right:55px;
        padding-top:38px;
        cursor:pointer;
        color:#ced4da;
        font-size:13px;
    }

    /* Validasi */
    .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus,
    .was-validated .form-control:valid:focus, .form-control.is-valid:focus,
    {
        box-shadow:none;
    }
    .was-validated .form-control.password:invalid, .form-control.password.is-invalid,
    .was-validated .form-control.password:valid, .form-control.password.is-valid
    {
        background-image:none;
    }
    .invalid-feedback,
    .notifikasi,
    .recover_password
    {
        position:absolute;
        right:0px;
        margin:0px 15px;
        width:330px;
        padding:5px 10px;
        border-radius:5px;
        text-transform:uppercase;
        font-size:10px;
        font-weight:500;
        letter-spacing:0.3px;
    }
    .invalid-feedback i,
    .notifikasi i,
    .recover_password i
    {
        float:left;
        margin-top:3px;
        margin-right:5px;
        font-weight:bold;
    }
    .invalid-feedback.username {
        top:-13%;
    }
    .invalid-feedback.password {
        top:-7%;
    }
    .notifikasi,
    .recover_password
    {        
        margin:0px;
        top:20px;
        right:20px;
    }
    .notifikasi {
        width:200px;     
    }
    .recover_password {
        width:177px;      
    }
    .was-validated .form-control:invalid, .form-control.is-invalid,
    .was-validated .form-control:valid, .form-control.is-valid
    {
        margin:0px;
        padding-right:0px;
    }
    .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus,
    .was-validated .form-control:valid:focus, .form-control.is-valid:focus
    {        
        border: 1px solid #005fbf;
        box-shadow: 0 0 4px 1px rgba(0,95,191,.3);
        background-color: rgb(232, 240, 254) !important;
    }
    body {
        background:url(../assets/images/konten/<?php echo $bg_img_login['bg_img_login'];?>) <?php echo $bg_color_login['bg_color_login'];?>;
        background-repeat:no-repeat;
    }
    .logo {
        width:<?php echo $ukuran_logo_login['ukuran_logo_login'];?>px;
        height:auto;
        display:block;
        margin:0px auto;
    }
    .btn-login {
        font-weight:500;
        font-size: 0.76rem;
        background:<?php echo $bg_btn_login['bg_btn_login'];?>;
        border:1px solid <?php echo $bg_btn_login['bg_btn_login'];?>;
        color:<?php echo $color_btn_login['color_btn_login'];?>!important;
    }
    .btn-login:hover {
        background:<?php echo $bg_btn_login_hover['bg_btn_login_hover'];?>;
        border:1px solid <?php echo $bg_btn_login_hover['bg_btn_login_hover'];?>;
    }
    .copyright {	
        margin: 0;
        position: absolute;
        bottom: 5px;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        padding: 0px 15px;
        font-size:11px;
        font-weight:normal;
        text-transform:uppercase;
        font-weight:500;
        color:<?php echo $color_footer['color_footer'];?>;
    }
    @media (max-width: 1024px) {
        .border-box {
            width:100%;
        }
        body {
            background:<?php echo $bg_color_login['bg_color_login'];?>;
            background-repeat:no-repeat;
        }
        .invalid-feedback {
            width:285px;
            border-radius:0px;
        }
        .invalid-feedback.username {
            top:-12%;
        }
        .invalid-feedback.password {
            top:-7.5%;
        }
        .notifikasi,
        .recover_password
        {        
            top:0px;
            left:0px;
            width:100%;
            border-radius:0px;
            text-align:center;
        }
        .notifikasi i,
        .recover_password i
        {    
            float:none;
            display:inline-block;
        }
    }
</style>

<!-- Profing -->	
<script>
    $(document).ready( function() {
        $("input[type='text'], textarea").attr('spellcheck',false);
    });
</script>

<!-- Bootsrap Validation -->
<script src="../assets/js/validate.js"></script>

<!-- Validation -->	
<script>
    (function () {
    'use strict'
    var forms = document.querySelectorAll('.form_validation')

    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
        })
    })()																
</script>

<!-- Notifikasi -->
<script>
    function myFunction() {
    document.getElementById("recover_password").innerHTML = "<div class='recover_password'><i class='pe-7s-bell'></i> Silahkan Hubungi Admin!</div>";
    window.setTimeout(function() {
        $("#recover_password").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
        });
    }, 3000);
}
</script>
<script>
    window.setTimeout(function() {
        $(".notifikasi").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
        });
    }, 3000);
</script>
<script>
    window.setTimeout(function() {
        $(".notifikasi_sukses").fadeTo(6000, 0).slideUp(6000, function(){
        $(this).remove(); 
        });
    }, 6000);
</script>