<?php

/* master.html.twig */
class __TwigTemplate_4825e852a286377a54a88561eb6c35da4fadb4440cad0634537a2d3ac1d6e20e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'style' => array($this, 'block_style'),
            'scripts' => array($this, 'block_scripts'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'aside' => array($this, 'block_aside'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        if (((isset($context["extension"]) || array_key_exists("extension", $context)) && (isset($context["content"]) || array_key_exists("content", $context)))) {
            // line 5
            $this->loadTemplate("SuluWebsiteBundle:Extension:seo.html.twig", "master.html.twig", 5)->display(array_merge($context, array("seo" => twig_get_attribute($this->env, $this->source,             // line 7
($context["extension"] ?? null), "seo", array()), "content" =>             // line 8
($context["content"] ?? null), "urls" =>             // line 9
($context["urls"] ?? null), "shadowBaseLocale" =>             // line 10
($context["shadowBaseLocale"] ?? null), "defaultLocale" => twig_get_attribute($this->env, $this->source,             // line 11
($context["request"] ?? null), "defaultLocale", array()))));
            // line 14
            echo "        ";
        }
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('meta', $context, $blocks);
        // line 19
        echo "
        <title>Getränkeverwaltung</title>

        ";
        // line 22
        $this->displayBlock('style', $context, $blocks);
        // line 23
        echo "
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href=\"https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i\" rel=\"stylesheet\">

        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/app/css/jquery-ui.css"), "html", null, true);
        echo "\">

        ";
        // line 33
        $this->displayBlock('scripts', $context, $blocks);
        // line 34
        echo "
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/app/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/app/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/app/js/MonthPicker.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <header>
            ";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        // line 67
        echo "        </header>

        <section id=\"content\" vocab=\"http://schema.org/\" typeof=\"Content\">
            <h1>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "title", array()), "html", null, true);
        echo " </h1>
            ";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        // line 72
        echo "        </section>

        <aside>
            ";
        // line 75
        $this->displayBlock('aside', $context, $blocks);
        // line 76
        echo "        </aside>

        <footer>
            ";
        // line 79
        $this->displayBlock('footer', $context, $blocks);
        // line 82
        echo "        </footer>

        ";
        // line 84
        $this->displayBlock('javascripts', $context, $blocks);
        // line 85
        echo "    </body>
</html>
";
    }

    // line 16
    public function block_meta($context, array $blocks = array())
    {
        // line 17
        echo "
        ";
    }

    // line 22
    public function block_style($context, array $blocks = array())
    {
    }

    // line 33
    public function block_scripts($context, array $blocks = array())
    {
    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        // line 43
        echo "                ";
        // line 44
        echo "                <nav class=\"navbar navbar-expand-lg navbar-dark navbar-custom fixed-top\">
                    <div class=\"container\">
                        <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/app/img/logo.png"), "html", null, true);
        echo "\"></a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                            <ul class=\"navbar-nav ml-auto\">
                                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('sulu_navigation_root_tree')->getCallable(), array("main")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 53
            echo "                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath(twig_get_attribute($this->env, $this->source, $context["item"], "url", array())), "html", null, true);
            echo "\"
                                           title=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "</a>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("esi", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("SuluCommunityBundle:Login:embed", array("_portal" => ((twig_get_attribute($this->env, $this->source,         // line 59
($context["request"] ?? null), "portalKey", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "portalKey", array()), "default_portal_key")) : ("default_portal_key")), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 60
($context["app"] ?? null), "request", array()), "locale", array()))));
        // line 61
        echo "
                            </ul>
                        </div>
                    </div>
                </nav>
            ";
    }

    // line 71
    public function block_content($context, array $blocks = array())
    {
    }

    // line 75
    public function block_aside($context, array $blocks = array())
    {
    }

    // line 79
    public function block_footer($context, array $blocks = array())
    {
        // line 80
        echo "                <p>Copyright ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " SULU</p>
            ";
    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 84,  226 => 80,  223 => 79,  218 => 75,  213 => 71,  204 => 61,  202 => 60,  201 => 59,  199 => 58,  188 => 55,  184 => 54,  181 => 53,  177 => 52,  168 => 46,  164 => 44,  162 => 43,  159 => 42,  154 => 33,  149 => 22,  144 => 17,  141 => 16,  135 => 85,  133 => 84,  129 => 82,  127 => 79,  122 => 76,  120 => 75,  115 => 72,  113 => 71,  109 => 70,  104 => 67,  102 => 42,  95 => 38,  90 => 36,  86 => 35,  83 => 34,  81 => 33,  76 => 31,  71 => 29,  63 => 24,  60 => 23,  58 => 22,  53 => 19,  51 => 16,  48 => 15,  45 => 14,  43 => 11,  42 => 10,  41 => 9,  40 => 8,  39 => 7,  38 => 5,  36 => 4,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "master.html.twig", "C:\\Users\\Lorenz\\Desktop\\Node\\ma-getraenkeverwaltung\\app\\Resources\\views\\master.html.twig");
    }
}
