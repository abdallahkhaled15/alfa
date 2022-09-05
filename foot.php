<?php
$footstyle = '
<style>

.generic-anchor {
    color: white;
}

.flex-rw {
    display: flex;
    flex-flow: row wrap;
}

footer {
    background: #060F2F;
    width: 100%;
    font: 11px "Open Sans", sans-serif;
    flex-flow: column nowrap;
}


.footer-list-left>li {
    text-align: start;
    padding-bottom: 10px;
}

.footer-list-header {
    padding: 10px 0 5px 0;
    color: white;
    font: 2.3vw "Oswald", sans-serif
}

.footer-list-anchor {
    font: 1.3em "Open Sans", sans-serif;
    color: white;

}
.footer-social-section {
    width: 100%;
    align-items: center;
    justify-content: space-around;
    position: relative;
    margin-top: 5px;
}

.footer-social-section::after {
    content: "";
    position: absolute;
    z-index: 1;
    top: 50%;
    left: 10px;
    border-top: 10px solid;
    width: calc(100% - 20px);
}

.footer-social-overlap {
    position: relative;
    z-index: 2;
    background: #060F2F;
    padding: 0 20px;
    margin-bottom: 10px;

}

.footer-social-connect {
    display: flex;
    align-items: center;
    font: 3.5em "Oswald", sans-serif;
    color: black;
}

.footer-social-small {
    font-size: 0.6em;
    padding: 0px 20px
}

.footer-social-overlap>a {
    font-size: 3em;
}

.footer-social-overlap>a:not(:first-child) {
    margin-left: 0.38em;
}

.footer-bottom-section {
    width: 100%;
    padding: 10px;
    border-top: 1px solid;
    margin-top: 10px;
}

.footer-bottom-section>div:first-child {
    margin-right: auto;
}

.footer-bottom-wrapper {
    font-size: 1.5em;
    color: white;
}



@media only screen and (max-width: 768px) {
    .footer-list-header {
        font-size: 2em;
    }

    .footer-list-anchor {
        font-size: 1.1em;
        color: white;

    }

    .footer-social-connect {
        font-size: 2.5em;
    }

    .footer-social-overlap>a {
        font-size: 2.24em;
    }

    .footer-bottom-wrapper {
        font-size: 1.3em;
    }
}

@media only screen and (max-width: 568px) {

    .footer-list-top {
        width: 100%;
    }

    .footer-list-header {
        font-size: 3em;
    }

    .footer-list-anchor {
        font-size: 1.5em;
    }

    .footer-social-section {
        justify-content: center;
    }

    .footer-social-section::after {
        top: 25%;
    }

    .footer-social-connect {
        margin-bottom: 10px;
        padding: 0 10px;
    }

    .footer-social-overlap {
        display: flex;
        justify-content: center;
    }

    .footer-social-icons-wrapper {
        width: 100%;
        padding: 0
    }

    .footer-social-overlap>a:not(:first-child) {
        margin-left: 20px;
    }

    .footer-bottom-section {
        padding: 0 5px 10px 5px
    }

    .footer-bottom-wrapper {
        text-align: center;
        width: 100%;
        margin-top: 10px
    }
}

@media only screen and (max-width: 480px) {
    .footer-social-overlap>a {
        margin: auto
    }

    .footer-social-overlap>a:not(:first-child) {
        margin-left: 0;
    }

    .footer-bottom-rights {
        display: block;
    }
}

@media only screen and (max-width: 320px) {
    .footer-list-header {
        font-size: 2.2em
    }

    .footer-list-anchor {
        font-size: 1.2em
    }

    .footer-social-connect {
        font-size: 2.4em
    }

    .footer-social-overlap>a {
        font-size: 2.24em
    }

    .footer-bottom-wrapper {
        font-size: 1.3em
    }
}
  

</style>';
$foot = ' <footer class="flex-rw">
<img src="uploads/logo.jpg" alt="the logo of the website" style="height: 20vh; margin-left:10px;">
<h2 style="color: white; ">𝓪𝓵𝓯𝓪 </br>𝓰𝓻𝓸𝓾𝓹</h2>
<ul class="footer-list-left" >

        <h6 class="footer-list-header">Quick Links</h6>
    <a  >
            <p class="h6" ><a href="index.php"style="color: white;">Home </a>
            <br><a href="brands.php"style="color: white;">Brands </a>
            <br><a style="color: white;">the phone number:</a>  
            <br><a style="color: white;">010991974</a></p></a>


</ul>
<ul class="footer-list-left">

        <h6 class="footer-list-header">Working Days</h6>

<a class="generic-anchor footer-list-anchor">
            <p>Every Day From: <br> 9:00am To 11:00pm  <br>Except friday and sursday <br> From: 9:00am To 11:00pm</p>
        </a>
</ul>
<ul>
<h6 class="footer-list-header">Contact Us</h6>

<span class="footer-social-overlap footer-social-icons-wrapper">
<a href="https://www.facebook.com/AlfagroupE4/?ref=page_internal" class="generic-anchor" target="_blank" title="Facebook"
     itemprop="significantLink"><i class="fab fa-facebook"></i></a>
  <a href="http://instagram.com/paviliongiftcompany" class="generic-anchor" target="_blank"
     title="Instagram" itemprop="significantLink"><i class="fab fa-instagram"></i></a>
 
</span>
<h6 style="color: white;">contact: @AlfagroupE4</h6>
</ul>
</section>
</footer>';
?>