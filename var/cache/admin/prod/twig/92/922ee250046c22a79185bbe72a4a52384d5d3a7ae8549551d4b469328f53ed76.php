<?php

/* SuluAdminBundle:Admin:index.html.dist.twig */
class __TwigTemplate_299bca5c63319f519280971272f7113514e4f8e234a53776686f5cdfaf2c92ad extends Twig_Template
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
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width\">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    </head>
    <body>
        <div class=\"spinner initial-loader\">
            <div class=\"double-bounce1 bouncer\"></div>
            <div class=\"double-bounce2 bouncer\"></div>
        </div>
        <div id=\"main\" data-aura-component=\"app@suluadmin\" data-aura-user=\"";
        // line 24
        echo twig_escape_filter($this->env, json_encode(($context["user"] ?? null)), "html", null, true);
        echo "\">
            ";
        // line 25
        $this->displayBlock('main', $context, $blocks);
        // line 55
        echo "        </div>

        <script type=\"text/javascript\">
            ";
        // line 59
        echo "            var SULU = {
                debug: false,
                user: ";
        // line 61
        echo json_encode(($context["user"] ?? null));
        echo ",
                sections: ";
        // line 62
        echo json_encode(($context["config"] ?? null));
        echo ",
                locales: ";
        // line 63
        echo json_encode(($context["locales"] ?? null));
        echo ",
                translatedLocales: ";
        // line 64
        echo json_encode(($context["translated_locales"] ?? null));
        echo ",
                translations: ";
        // line 65
        echo json_encode(($context["translations"] ?? null));
        echo ",
                fallbackLocale: '";
        // line 66
        echo ($context["fallback_locale"] ?? null);
        echo "'
            };
            ";
        // line 69
        echo "
            // CKEditor needs base path to load some other files
            var CKEDITOR_BASEPATH = '/bundles/suluadmin/js/vendor/husky/vendor/ckeditor/';
        </script>

        ";
        // line 74
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "    </body>
</html>
";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "        <link rel=\"stylesheet\" href=\"/bundles/suluadmin/dist/app.min.1527178066363.css\">
        ";
    }

    // line 25
    public function block_main($context, array $blocks = array())
    {
        // line 26
        echo "            <div class=\"navigation-container\">
                <div class=\"sulu-navigation-labels\"></div>
                <div data-aura-component=\"navigation@husky\" data-aura-url=\"/admin/navigation\" data-aura-collapse=\"true\"
                     data-aura-user-name=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fullName", array()), "html", null, true);
        echo "\"
                     data-aura-system-name=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                     data-aura-system-version=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["suluVersion"] ?? null), "html", null, true);
        echo "\"
                     data-aura-user-locales='";
        // line 32
        echo twig_escape_filter($this->env, json_encode(twig_get_array_keys_filter(($context["translated_locales"] ?? null))), "html", null, true);
        echo "'
                     data-aura-user-locale=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "locale", array()), "html", null, true);
        echo "\"
                     data-aura-logout-route=\"";
        // line 34
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
    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        // line 75
        echo "        <script data-main=\"/bundles/suluadmin/dist/app.min.1527178066363\" src=\"/bundles/suluadmin/js/vendor/husky/husky.min.js?v=1527178066363\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "SuluAdminBundle:Admin:index.html.dist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 75,  171 => 74,  146 => 34,  142 => 33,  138 => 32,  134 => 31,  130 => 30,  126 => 29,  121 => 26,  118 => 25,  113 => 16,  110 => 15,  104 => 77,  102 => 74,  95 => 69,  90 => 66,  86 => 65,  82 => 64,  78 => 63,  74 => 62,  70 => 61,  66 => 59,  61 => 55,  59 => 25,  55 => 24,  47 => 18,  45 => 15,  36 => 9,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluAdminBundle:Admin:index.html.dist.twig", "C:\\Users\\Lorenz\\Desktop\\MASSIVEART\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\AdminBundle/Resources/views/Admin/index.html.dist.twig");
    }
}
