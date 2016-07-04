<?php

/* base.twig */
class __TwigTemplate_5c3b02033f0910c8839d5ff70aaec4d3ecbe1b4c2918c49c1549c2d1c42b09ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <title>Resto - HTML5/CSS3 Restaurant Home Page Website Template</title>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"pixelhint.com\">
    <meta name=\"description\" content=\"Resto HTML5/CSS3 Restaurant Home Page website Template\"/>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo " /css/reset.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo " /css/main.css\">

    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo " /js/jquery.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo " /js/carouFredSel.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo " /js/easing.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo " /js/main.js\"></script>
</head>

<body>


    <!--  start header  -->
    <header>
        <div class=\"wrapper\">
            <div class=\"logo\">
                <a href=\"\"><img src=\"img/logo.png\" alt=\"Resto\" title=\"\"/></a>
            </div>

            <nav>
                <ul>
                  <li><a href=\"\" class=\"active\">Home</a></li>
                    <li><a href=\"about\">about</a></li>
                    <li><a href=\"\">Menu</a></li>
                    <li><a href=\"\">Reservations</a></li>
                    <li><a href=\"\">News</a></li>
                    <li><a href=\"\">Reviews</a></li>
                </ul>
            </nav>
        </div>
    </header><!--  end header  -->

";
        // line 41
        $this->displayBlock('main', $context, $blocks);
        // line 42
        echo " <!--  start footer  -->
    <footer>
        <div class=\"wrapper\">
            <!-- adresse1  -->
            <section class=\"adress\">
                <p>New York Restaurant</p> 
                <p class=\"location\">3926 Anmoore Road<br/>
                New York, NY 10014</p>
                <p class=\"phone\">718-749-1714</p>
            </section>

            <!--  adress2  -->
            <section class=\"adress\">
                <p>France Restaurant</p>
                <p class=\"location\">68, rue  de la Couronne<br/>
                75002 PARIS </p>
                <p class=\"phone\">02.94.23.69.56</p>
            </section>

            <!--  footer navigation  -->
            <section class=\"footer_nav\">
                <nav>
                    <ul>
                        <li><a href=\"\">Blog</a></li>
                        <li><a href=\"\">Careers</a></li>
                        <li><a href=\"\">Privacy Policy</a></li>
                        <li><a href=\"\">Contact</a></li>
                    </ul>
                </nav>
            </section>

            <!--  footer copyrights  -->
            <section class=\"copyrights\">
                <img src=\"img/footer_logo.png\" class=\"footer_logo\" alt=\"\" title=\"\">
                <p>© All Rights Reserved 2014.</p>
                <p>Find  More at <a href=\"http://pixelhint.com\" target=\"_blank\">Pixelhint.com</a></p>   
            </section>
        </div>
    </footer><!--  end footer  -->


</body>
</html>
        
";
    }

    // line 41
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 41,  82 => 42,  80 => 41,  51 => 15,  47 => 14,  43 => 13,  39 => 12,  34 => 10,  30 => 9,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <title>Resto - HTML5/CSS3 Restaurant Home Page Website Template</title>*/
/*     <meta charset="utf-8">*/
/*     <meta name="author" content="pixelhint.com">*/
/*     <meta name="description" content="Resto HTML5/CSS3 Restaurant Home Page website Template"/>*/
/* */
/*     <link rel="stylesheet" type="text/css" href="{{ base_url() }} /css/reset.css">*/
/*     <link rel="stylesheet" type="text/css" href="{{ base_url() }} /css/main.css">*/
/* */
/*     <script type="text/javascript" src="{{ base_url() }} /js/jquery.js"></script>*/
/*     <script type="text/javascript" src="{{ base_url() }} /js/carouFredSel.js"></script>*/
/*     <script type="text/javascript" src="{{ base_url() }} /js/easing.js"></script>*/
/*     <script type="text/javascript" src="{{ base_url() }} /js/main.js"></script>*/
/* </head>*/
/* */
/* <body>*/
/* */
/* */
/*     <!--  start header  -->*/
/*     <header>*/
/*         <div class="wrapper">*/
/*             <div class="logo">*/
/*                 <a href=""><img src="img/logo.png" alt="Resto" title=""/></a>*/
/*             </div>*/
/* */
/*             <nav>*/
/*                 <ul>*/
/*                   <li><a href="" class="active">Home</a></li>*/
/*                     <li><a href="about">about</a></li>*/
/*                     <li><a href="">Menu</a></li>*/
/*                     <li><a href="">Reservations</a></li>*/
/*                     <li><a href="">News</a></li>*/
/*                     <li><a href="">Reviews</a></li>*/
/*                 </ul>*/
/*             </nav>*/
/*         </div>*/
/*     </header><!--  end header  -->*/
/* */
/* {% block main %}{% endblock %}*/
/*  <!--  start footer  -->*/
/*     <footer>*/
/*         <div class="wrapper">*/
/*             <!-- adresse1  -->*/
/*             <section class="adress">*/
/*                 <p>New York Restaurant</p> */
/*                 <p class="location">3926 Anmoore Road<br/>*/
/*                 New York, NY 10014</p>*/
/*                 <p class="phone">718-749-1714</p>*/
/*             </section>*/
/* */
/*             <!--  adress2  -->*/
/*             <section class="adress">*/
/*                 <p>France Restaurant</p>*/
/*                 <p class="location">68, rue  de la Couronne<br/>*/
/*                 75002 PARIS </p>*/
/*                 <p class="phone">02.94.23.69.56</p>*/
/*             </section>*/
/* */
/*             <!--  footer navigation  -->*/
/*             <section class="footer_nav">*/
/*                 <nav>*/
/*                     <ul>*/
/*                         <li><a href="">Blog</a></li>*/
/*                         <li><a href="">Careers</a></li>*/
/*                         <li><a href="">Privacy Policy</a></li>*/
/*                         <li><a href="">Contact</a></li>*/
/*                     </ul>*/
/*                 </nav>*/
/*             </section>*/
/* */
/*             <!--  footer copyrights  -->*/
/*             <section class="copyrights">*/
/*                 <img src="img/footer_logo.png" class="footer_logo" alt="" title="">*/
/*                 <p>© All Rights Reserved 2014.</p>*/
/*                 <p>Find  More at <a href="http://pixelhint.com" target="_blank">Pixelhint.com</a></p>   */
/*             </section>*/
/*         </div>*/
/*     </footer><!--  end footer  -->*/
/* */
/* */
/* </body>*/
/* </html>*/
/*         */
/* */
