<?php

/* SuluAdminBundle:Security:login.html.dist.twig */
class __TwigTemplate_662c7df23709752df5717b3aa811e37f5e8c04ecc44eaad21abc8edcbf2ff249 extends Twig_Template
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
<!--[if gt IE 8]><!-->
<html class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>";
        // line 10
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width\">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "</head>
<body>
    <div id=\"main\" class=\"login\">
        ";
        // line 24
        $this->displayBlock('main', $context, $blocks);
        // line 39
        echo "    </div>
    <script type=\"text/javascript\">
        ";
        // line 42
        echo "        var SULU = {
            debug: false,
            locales: ";
        // line 44
        echo json_encode(($context["locales"] ?? null));
        echo ",
            translatedLocales: ";
        // line 45
        echo json_encode(($context["translated_locales"] ?? null));
        echo ",
            translations: ";
        // line 46
        echo json_encode(($context["translations"] ?? null));
        echo ",
            fallbackLocale: '";
        // line 47
        echo ($context["fallback_locale"] ?? null);
        echo "'
        };
        ";
        // line 50
        echo "    </script>

    ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "</body>
</html>
";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "    <link rel=\"stylesheet\" href=\"/bundles/suluadmin/dist/login.min.1527178066363.css\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/suluadmin/css/main.css\"/>
    ";
    }

    // line 24
    public function block_main($context, array $blocks = array())
    {
        // line 25
        echo "        <div data-aura-component=\"login@suluadmin\"
             data-aura-login-check=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sulu_admin.login_check");
        echo "\"
             data-aura-reset-mail-url=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sulu_security.reset_password.email");
        echo "\"
             data-aura-resend-url=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sulu_security.reset_password.email.resend");
        echo "\"
             data-aura-login-url=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sulu_admin.login");
        echo "\"
             data-aura-csrf-token=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
             ";
        // line 31
        if ((isset($context["token"]) || array_key_exists("token", $context))) {
            // line 32
            echo "                data-aura-reset-token=\"";
            echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
            echo "\"
                data-aura-reset-mode=\"true\"
             ";
        }
        // line 35
        echo "             data-aura-reset-url=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sulu_security.reset_password.reset");
        echo "\"></div>

        <div id=\"labels-container\" class='login-label-container' data-aura-component=\"labels@suluadmin\"></div>
        ";
    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        // line 53
        echo "    <script data-main=\"/bundles/suluadmin/dist/login.min.1527178066363\" src=\"/bundles/suluadmin/js/vendor/husky/husky.min.js?v=1527178066363\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "SuluAdminBundle:Security:login.html.dist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 53,  146 => 52,  137 => 35,  130 => 32,  128 => 31,  124 => 30,  120 => 29,  116 => 28,  112 => 27,  108 => 26,  105 => 25,  102 => 24,  95 => 17,  92 => 16,  86 => 55,  84 => 52,  80 => 50,  75 => 47,  71 => 46,  67 => 45,  63 => 44,  59 => 42,  55 => 39,  53 => 24,  48 => 21,  46 => 16,  37 => 10,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluAdminBundle:Security:login.html.dist.twig", "C:\\Users\\Lorenz\\Desktop\\MASSIVEART\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\AdminBundle/Resources/views/Security/login.html.dist.twig");
    }
}
