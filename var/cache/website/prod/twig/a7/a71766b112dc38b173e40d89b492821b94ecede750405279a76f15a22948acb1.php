<?php

/* templates/evaluation.html.twig */
class __TwigTemplate_1c7a97498d1368d1979cc6d327705f6bd0293a47cfa38fea27753cca3673a7b7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "templates/evaluation.html.twig", 1);
        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'style' => array($this, 'block_style'),
            'scripts' => array($this, 'block_scripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("SuluWebsiteBundle:Extension:seo.html.twig", "templates/evaluation.html.twig", 4)->display(array_merge($context, array("seo" => ((twig_get_attribute($this->env, $this->source,         // line 5
($context["extension"] ?? null), "seo", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["extension"] ?? null), "seo", array()), array())) : (array())), "content" => ((        // line 6
(isset($context["content"]) || array_key_exists("content", $context))) ? (_twig_default_filter(($context["content"] ?? null), array())) : (array())), "urls" => ((        // line 7
(isset($context["urls"]) || array_key_exists("urls", $context))) ? (_twig_default_filter(($context["urls"] ?? null), array())) : (array())), "shadowBaseLocale" => ((        // line 8
(isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context))) ? (_twig_default_filter(($context["shadowBaseLocale"] ?? null))) : ("")), "defaultLocale" => ((twig_get_attribute($this->env, $this->source,         // line 9
($context["request"] ?? null), "defaultLocale", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "defaultLocale", array()), "de")) : ("de")))));
    }

    // line 12
    public function block_style($context, array $blocks = array())
    {
        // line 13
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/app/css/MonthPicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 15
    public function block_scripts($context, array $blocks = array())
    {
        // line 16
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/app/js/getraenkeverwaltung.js"), "html", null, true);
        echo "\"></script>

";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "    <div class=\"box evaluation\">
        <input id=\"monthpicker\" type=\"text\" class=\"month-year-input\" readonly>
        <div class=\"products\">
            ";
        // line 25
        echo "            <div class=\"product\">
                <h2>Test1</h2>
                <div class=\"product-info-box\">5</div>
                <div class=\"product-info-box price\">12.20</div>
                <div class=\"bottom-border\"></div>
            </div>
            <div class=\"product\">
                <h2>Test2</h2>
                <div class=\"product-info-box\">2</div>
                <div class=\"product-info-box price\">8</div>
                <div class=\"bottom-border\"></div>
            </div>
        </div>
        <div class=\"book-info\">
            <div class=\"total-price-box evaluation-price\">€ 0,00</div>
        </div>
    </div>
    <script type=\"text/javascript\">
        \$(function() {
            \$('#monthpicker').MonthPicker({
                Button: false,
                MaxMonth: 0,
                MonthFormat: 'mm/y',
                SelectedMonth: new Date(),
                OnAfterChooseMonth: function() {
                    alert(\$(this).val());
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "templates/evaluation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  72 => 21,  69 => 20,  61 => 16,  58 => 15,  51 => 13,  48 => 12,  44 => 9,  43 => 8,  42 => 7,  41 => 6,  40 => 5,  38 => 4,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "templates/evaluation.html.twig", "C:\\Users\\Lorenz\\Desktop\\Node\\ma-getraenkeverwaltung\\app\\Resources\\views\\templates\\evaluation.html.twig");
    }
}
