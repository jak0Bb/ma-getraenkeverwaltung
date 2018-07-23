<?php

/* SuluAdminBundle:Admin:index.html.twig */
class __TwigTemplate_7ed1bf6685d8c1cdd77f4510628292265a5724d66cbacc0ced15abd1b8b809f6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluAdminBundle:Admin:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluAdminBundle:Admin:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width\">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    </head>
    <body>
        <div class=\"spinner initial-loader\">
            <div class=\"double-bounce1 bouncer\"></div>
            <div class=\"double-bounce2 bouncer\"></div>
        </div>
        <div id=\"main\" data-aura-component=\"app@suluadmin\" data-aura-user=\"";
        // line 27
        echo twig_escape_filter($this->env, json_encode((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 27, $this->source); })())), "html", null, true);
        echo "\">
            ";
        // line 28
        $this->displayBlock('main', $context, $blocks);
        // line 58
        echo "        </div>

        <script type=\"text/javascript\">
            ";
        // line 62
        echo "            var SULU = {
                debug: true,
                user: ";
        // line 64
        echo json_encode((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 64, $this->source); })()));
        echo ",
                sections: ";
        // line 65
        echo json_encode((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 65, $this->source); })()));
        echo ",
                locales: ";
        // line 66
        echo json_encode((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new Twig_Error_Runtime('Variable "locales" does not exist.', 66, $this->source); })()));
        echo ",
                translatedLocales: ";
        // line 67
        echo json_encode((isset($context["translated_locales"]) || array_key_exists("translated_locales", $context) ? $context["translated_locales"] : (function () { throw new Twig_Error_Runtime('Variable "translated_locales" does not exist.', 67, $this->source); })()));
        echo ",
                translations: ";
        // line 68
        echo json_encode((isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new Twig_Error_Runtime('Variable "translations" does not exist.', 68, $this->source); })()));
        echo ",
                fallbackLocale: '";
        // line 69
        echo (isset($context["fallback_locale"]) || array_key_exists("fallback_locale", $context) ? $context["fallback_locale"] : (function () { throw new Twig_Error_Runtime('Variable "fallback_locale" does not exist.', 69, $this->source); })());
        echo "'
            };
            ";
        // line 72
        echo "
            // CKEditor needs base path to load some other files
            var CKEDITOR_BASEPATH = '/bundles/suluadmin/js/vendor/husky/vendor/ckeditor/';
        </script>

        ";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "        <!-- build:css app.min.css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/suluadmin/js/vendor/husky/husky.min.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/suluadmin/css/main.css\"/>
        <!-- endbuild -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 29
        echo "            <div class=\"navigation-container\">
                <div class=\"sulu-navigation-labels\"></div>
                <div data-aura-component=\"navigation@husky\" data-aura-url=\"/admin/navigation\" data-aura-collapse=\"true\"
                     data-aura-user-name=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 32, $this->source); })()), "fullName", array()), "html", null, true);
        echo "\"
                     data-aura-system-name=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\"
                     data-aura-system-version=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["suluVersion"]) || array_key_exists("suluVersion", $context) ? $context["suluVersion"] : (function () { throw new Twig_Error_Runtime('Variable "suluVersion" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\"
                     data-aura-user-locales='";
        // line 35
        echo twig_escape_filter($this->env, json_encode(twig_get_array_keys_filter((isset($context["translated_locales"]) || array_key_exists("translated_locales", $context) ? $context["translated_locales"] : (function () { throw new Twig_Error_Runtime('Variable "translated_locales" does not exist.', 35, $this->source); })()))), "html", null, true);
        echo "'
                     data-aura-user-locale=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 36, $this->source); })()), "locale", array()), "html", null, true);
        echo "\"
                     data-aura-logout-route=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\"
                     data-aura-resize-width=\"1470\"
                     class=\"navigation-column\">
                </div>
            </div>
            <div class=\"content-container\">
                <div id=\"labels-container\" data-aura-component=\"labels@suluadmin\"></div>
                <div class=\"content-column fixed\">
                    <div class=\"wrapper\">
                        <div class=\"page\">
                            <main class=\"grid\" id=\"content\"></main>
                        </div>
                    </div>
                </div>

                <div class=\"sidebar-column max\">
                    <aside id=\"sidebar\" data-aura-component=\"sidebar@suluadmin\"></aside>
                </div>
            </div>
            <div id=\"overlayContainer\" data-aura-component=\"overlay@suluadmin\"></div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "        <!-- build:js app.min.js -->
        <script data-main=\"/bundles/suluadmin/js/main\" src=\"/bundles/suluadmin/js/vendor/husky/husky.js\"></script>
        <!-- endbuild -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SuluAdminBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 78,  210 => 77,  179 => 37,  175 => 36,  171 => 35,  167 => 34,  163 => 33,  159 => 32,  154 => 29,  145 => 28,  131 => 16,  122 => 15,  110 => 82,  108 => 77,  101 => 72,  96 => 69,  92 => 68,  88 => 67,  84 => 66,  80 => 65,  76 => 64,  72 => 62,  67 => 58,  65 => 28,  61 => 27,  53 => 21,  51 => 15,  42 => 9,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>{{ name }}</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width\">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        {% block stylesheets %}
        <!-- build:css app.min.css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/suluadmin/js/vendor/husky/husky.min.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/suluadmin/css/main.css\"/>
        <!-- endbuild -->
        {% endblock stylesheets %}
    </head>
    <body>
        <div class=\"spinner initial-loader\">
            <div class=\"double-bounce1 bouncer\"></div>
            <div class=\"double-bounce2 bouncer\"></div>
        </div>
        <div id=\"main\" data-aura-component=\"app@suluadmin\" data-aura-user=\"{{ user| json_encode }}\">
            {% block main %}
            <div class=\"navigation-container\">
                <div class=\"sulu-navigation-labels\"></div>
                <div data-aura-component=\"navigation@husky\" data-aura-url=\"/admin/navigation\" data-aura-collapse=\"true\"
                     data-aura-user-name=\"{{ user.fullName }}\"
                     data-aura-system-name=\"{{ name }}\"
                     data-aura-system-version=\"{{ suluVersion }}\"
                     data-aura-user-locales='{{ translated_locales|keys|json_encode }}'
                     data-aura-user-locale=\"{{ user.locale }}\"
                     data-aura-logout-route=\"{{ path('logout') }}\"
                     data-aura-resize-width=\"1470\"
                     class=\"navigation-column\">
                </div>
            </div>
            <div class=\"content-container\">
                <div id=\"labels-container\" data-aura-component=\"labels@suluadmin\"></div>
                <div class=\"content-column fixed\">
                    <div class=\"wrapper\">
                        <div class=\"page\">
                            <main class=\"grid\" id=\"content\"></main>
                        </div>
                    </div>
                </div>

                <div class=\"sidebar-column max\">
                    <aside id=\"sidebar\" data-aura-component=\"sidebar@suluadmin\"></aside>
                </div>
            </div>
            <div id=\"overlayContainer\" data-aura-component=\"overlay@suluadmin\"></div>
            {% endblock main %}
        </div>

        <script type=\"text/javascript\">
            {% autoescape false %}
            var SULU = {
                debug: true,
                user: {{ user|json_encode }},
                sections: {{ config|json_encode }},
                locales: {{ locales|json_encode }},
                translatedLocales: {{ translated_locales|json_encode }},
                translations: {{ translations|json_encode }},
                fallbackLocale: '{{ fallback_locale }}'
            };
            {% endautoescape %}

            // CKEditor needs base path to load some other files
            var CKEDITOR_BASEPATH = '/bundles/suluadmin/js/vendor/husky/vendor/ckeditor/';
        </script>

        {% block javascripts %}
        <!-- build:js app.min.js -->
        <script data-main=\"/bundles/suluadmin/js/main\" src=\"/bundles/suluadmin/js/vendor/husky/husky.js\"></script>
        <!-- endbuild -->
        {% endblock javascripts %}
    </body>
</html>
", "SuluAdminBundle:Admin:index.html.twig", "C:\\Users\\imsyn\\Desktop\\MASSIVEART\\sulu2\\sulu-minimal\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\AdminBundle/Resources/views/Admin/index.html.twig");
    }
}
