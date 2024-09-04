<? include $_SERVER['DOCUMENT_ROOT'] . "/igaming/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT'] . "/igaming/inc/header.php"; ?>

    <div class="cursor"></div>

    <div class="wrap">
        <section class="section contact__sec">
            <article class="cont cont1">
                <div class="inner">
                    <div class="inner">
                        <div class="textBox__">
                            <span class="Mtext topText trsText_">Let's make awesome things together.</span>
                        </div>
                    </div>
                </div>
            </article>

            <article class="cont cont2">
                <div class="inner">
                    <div class="contents">
                        <div class="information__box__wr">
                            <div class="title__wr">
                                <p class="contact__text">Get in touch by filling out the form, or click on the following address to copy it:</p>
                                <span class="in__title">hello@igaming.studio</span>
                            </div>
                            
                            <div class="contact__form__wr">
                                <form action="?" method="post" name="contactFrm" id="contactfrm__" class="contact__frm" onsubmit="return submitbtn();">
                                    <div class="row">
                                        <input type="text" name="contactName" id="contactName__" class="contact__Name frm__item" placeholder="Full Name*">
                                    </div>

                                    <div class="row">
                                        <input type="text" name="contactEmail" id="contactEmail__" class="contact__Email frm__item" placeholder="E-mail Address*">
                                    </div>

                                    <div class="row">
                                        <select name="contactSelect" id="contactSelect__" class="contact__Select frm__item">
                                            <option value="" disabled selected>Subject ↓</option>
                                            <option value="">Affiliate Design and Front-end Dev</option>
                                            <option value="">Casino and Sportsbook Design</option>
                                            <option value="">Supplier Design and Dev</option>
                                            <option value="">Press Inquiry</option>
                                            <option value="">Other</option>
                                        </select>
                                    </div>

                                    <div class="row">
                                        <textarea name="contactTextarea" id="contactTextarea__" class="contact__Textarea frm__item" placeholder="Project Details*"></textarea>
                                        <p class="contact__info__txt">By sending a message you agree to our Privacy Policy.</p>
                                    </div>

                                    <div class="frm__btn__wr">
                                        <button type="submit" class="submit__btn">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </div>

    <? include $_SERVER['DOCUMENT_ROOT'] . "/igaming/inc/footer.php"; ?>
</body>
<script>
    function submitbtn() {
        const f = document.querySelector("contactfrm__");

        if($("#contactName__").val() == ""){
            alert("이름을 입력해주세요.");
            $("#contactName__").focus();
            return false;
        }

        if($("#contactEmail__").val() == ""){
            alert("이메일를 입력해주세요.");
            $("#contactEmail__").focus();
            return false;
        }

        if($("#contactSelect__").val() == null || $("contactSelect__").val() == "") {
            alert("상담 종류를 입력해주세요.");
            $("#contactSelect__").focus();
            return false;
        }

        if($("#contactTextarea__").val() == ""){
            alert("상담 내용을 입력해주세요.");
            $("#contactTextarea__").focus();
            return false;
        }

        f.action = "";
        f.submit();
    }
</script>
</html>