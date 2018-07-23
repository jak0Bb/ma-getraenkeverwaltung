<?php

/* SuluWebsiteBundle:Profiler:layout.html.twig */
class __TwigTemplate_ab46a14f7a7ea4270fc92c3ecf406dd4be1ef92f554818a2e47630a7d0d8a123 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "SuluWebsiteBundle:Profiler:layout.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluWebsiteBundle:Profiler:layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluWebsiteBundle:Profiler:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 19
        echo "    ";
        $context["self"] = $this;
        // line 20
        echo "    ";
        ob_start();
        // line 21
        echo "        ";
        echo $context["self"]->macro_logo();
        echo "
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "
    ";
        // line 24
        ob_start();
        // line 25
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Portal</b>
            <span>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->source); })()), "data", array(0 => "portal"), "method"), "name", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Webspace</b>
            <span>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 31, $this->source); })()), "data", array(0 => "webspace"), "method"), "name", array()), "html", null, true);
        echo "</span>
        </div>
        ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 33, $this->source); })()), "data", array(0 => "structure"), "method")) {
            // line 34
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Structure</b>
            <span>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 36, $this->source); })()), "data", array(0 => "structure"), "method"), "template", array()), "html", null, true);
            echo "</span>
        </div>
        ";
        }
        // line 39
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Localization</b>
            <span>
                ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 42, $this->source); })()), "data", array(0 => "localization"), "method"), "html", null, true);
        echo "
                ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 43, $this->source); })()), "data", array(0 => "structure"), "method")) {
            // line 44
            echo "                (";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 44, $this->source); })()), "data", array(0 => "structure"), "method"), "shadowOn", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 44, $this->source); })()), "data", array(0 => "structure"), "method"), "shadowBaseLanguage", array())) : ("no shadow")), "html", null, true);
            echo ")
                ";
        }
        // line 46
        echo "            </span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 49
        echo "    ";
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "SuluWebsiteBundle:Profiler:layout.html.twig", 49)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 49, $this->source); })()))));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 53
        $context["self"] = $this;
        // line 54
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 55
        echo $context["self"]->macro_logo();
        echo "</span>
    <strong>Sulu</strong>
</span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_panel($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 61
        echo "    ";
        $context["self"] = $this;
        // line 62
        echo "    <h2>Webspace</h2>
    <table>
        <tbody>
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 65, $this->source); })()), "data", array(0 => "webspace"), "method"));
        foreach ($context['_seq'] as $context["field"] => $context["value"]) {
            // line 66
            echo "            <tr>
                <th>";
            // line 67
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "</th>
                <td>
                ";
            // line 69
            if (twig_test_iterable($context["value"])) {
                // line 70
                echo "                    ";
                echo twig_escape_filter($this->env, json_encode($context["value"]), "html", null, true);
                echo "
                ";
            } else {
                // line 72
                echo "                    ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
                ";
            }
            // line 74
            echo "                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </tbody>
    </table>
    <h2>Portal</h2>
    <table>
        <tbody>
            ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 82, $this->source); })()), "data", array(0 => "portal"), "method"));
        foreach ($context['_seq'] as $context["field"] => $context["value"]) {
            // line 83
            echo "            <tr>
                <th>";
            // line 84
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "</th>
                <td>
                ";
            // line 86
            if (twig_test_iterable($context["value"])) {
                // line 87
                echo "                    ";
                echo twig_escape_filter($this->env, json_encode($context["value"]), "html", null, true);
                echo "
                ";
            } else {
                // line 89
                echo "                    ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
                ";
            }
            // line 91
            echo "                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        </tbody>
    </table>
    <h2>Structure</h2>
    ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 97, $this->source); })()), "data", array(0 => "structure"), "method")) {
            // line 98
            echo "    <table>
        <tbody>
            ";
            // line 100
            echo $context["self"]->macro_table_row("id", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 100, $this->source); })()), "data", array(0 => "structure"), "method"), "id", array()));
            echo "
            ";
            // line 101
            echo $context["self"]->macro_table_row("path", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 101, $this->source); })()), "data", array(0 => "structure"), "method"), "path", array()));
            echo "
            ";
            // line 102
            echo $context["self"]->macro_table_row("nodeType", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 102, $this->source); })()), "data", array(0 => "structure"), "method"), "nodeType", array()));
            echo "
            ";
            // line 103
            echo $context["self"]->macro_table_row("internal", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 103, $this->source); })()), "data", array(0 => "structure"), "method"), "internal", array())) ? ("yes") : ("no")));
            echo "
            ";
            // line 104
            echo $context["self"]->macro_table_row("nodeState", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 104, $this->source); })()), "data", array(0 => "structure"), "method"), "nodeState", array()));
            echo "
            ";
            // line 105
            echo $context["self"]->macro_table_row("published", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 105, $this->source); })()), "data", array(0 => "structure"), "method"), "published", array()), "format", array(0 => "Y-m-d H:i:s"), "method"));
            echo "
            ";
            // line 106
            echo $context["self"]->macro_table_row("nodeState", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 106, $this->source); })()), "data", array(0 => "structure"), "method"), "nodeState", array()));
            echo "
            ";
            // line 107
            echo $context["self"]->macro_table_row("navContexts", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 107, $this->source); })()), "data", array(0 => "structure"), "method"), "navContexts", array()));
            echo "
            ";
            // line 108
            echo $context["self"]->macro_table_row("enabledShadowLanguages", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 108, $this->source); })()), "data", array(0 => "structure"), "method"), "enabledShadowLanguages", array()));
            echo "
            ";
            // line 109
            echo $context["self"]->macro_table_row("concreteLanguages", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 109, $this->source); })()), "data", array(0 => "structure"), "method"), "concreteLanguages", array()));
            echo "
            ";
            // line 110
            echo $context["self"]->macro_table_row("shadowOn", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 110, $this->source); })()), "data", array(0 => "structure"), "method"), "shadowOn", array())) ? ("yes") : ("no")));
            echo "
            ";
            // line 111
            echo $context["self"]->macro_table_row("shadowBaseLanguage", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 111, $this->source); })()), "data", array(0 => "structure"), "method"), "shadowBaseLanguage", array()));
            echo "
            ";
            // line 112
            echo $context["self"]->macro_table_row("template", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 112, $this->source); })()), "data", array(0 => "structure"), "method"), "template", array()));
            echo "
            ";
            // line 113
            echo $context["self"]->macro_table_row("has children", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 113, $this->source); })()), "data", array(0 => "structure"), "method"), "hasSub", array())) ? ("yes") : ("no")));
            echo "
            ";
            // line 114
            echo $context["self"]->macro_table_row("creator", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 114, $this->source); })()), "data", array(0 => "structure"), "method"), "creator", array()));
            echo "
            ";
            // line 115
            echo $context["self"]->macro_table_row("changer", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 115, $this->source); })()), "data", array(0 => "structure"), "method"), "changer", array()));
            echo "
            ";
            // line 116
            echo $context["self"]->macro_table_row("created", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 116, $this->source); })()), "data", array(0 => "structure"), "method"), "created", array()), "format", array(0 => "Y-m-d H:i:s"), "method"));
            echo "
            ";
            // line 117
            echo $context["self"]->macro_table_row("changed", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 117, $this->source); })()), "data", array(0 => "structure"), "method"), "changed", array()), "format", array(0 => "Y-m-d H:i:s"), "method"));
            echo "
        </tbody>
    </table>
    ";
        } else {
            // line 121
            echo "        No structure was found.
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function macro_logo(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "logo"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "logo"));

            // line 4
            echo "    <?xml version=\"1.0\" encoding=\"UTF-8\"?>
    <svg width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
        <title>Artboard</title>
        <desc>Created with Sketch.</desc>
        <defs></defs>
        <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
            <g id=\"Artboard\" fill=\"#FFFFFF\">
                <path d=\"M23.8841274,12.750735 C24.1025274,12.394735 24.0041274,11.902735 23.6665274,11.657135 L17.9913274,7.53393504 C17.6537274,7.28833504 17.3417274,6.74753504 17.2977274,6.33233504 L16.9009274,2.55153504 C16.8577274,2.13633504 16.4977274,1.90513504 16.1017274,2.03713504 L0.51612745,7.24913504 C0.12012745,7.38193504 -0.0942725502,7.81313504 0.0401274498,8.20913504 L2.99132745,16.899535 C3.12572745,17.294735 3.56972745,17.690735 3.97772745,17.778735 L18.0929274,20.830735 C18.5009274,20.918735 19.0137274,20.699535 19.2313274,20.343535 L23.8841274,12.750735 L23.8841274,12.750735 Z M11.0425274,8.89153504 C10.7961274,9.22913504 10.2609274,9.43153504 9.85292745,9.34193504 L3.22572745,7.88433504 C2.81772745,7.79473504 2.80812745,7.61313504 3.20412745,7.48033504 L14.2153274,3.79793504 C14.6113274,3.66513504 14.7337274,3.83313504 14.4881274,4.17073504 L11.0425274,8.89153504 L11.0425274,8.89153504 Z M15.5241274,4.56913504 C15.7705274,4.23153504 16.0073274,4.29553504 16.0513274,4.71073504 L17.4057274,17.626735 C17.4489274,18.041935 17.2841274,18.105135 17.0393274,17.766735 L11.9305274,10.717935 C11.6857274,10.379535 11.6865274,9.82753504 11.9329274,9.48993504 L15.5241274,4.56913504 L15.5241274,4.56913504 Z M1.53372745,9.27393504 C1.39932745,8.87873504 1.62332745,8.62833504 2.03132745,8.71793504 L9.76652745,10.419535 C10.1745274,10.509135 10.7089274,10.859535 10.9537274,11.197135 L16.5249274,18.882735 C16.7697274,19.221135 16.6369274,19.425135 16.2281274,19.336335 L4.79692745,16.860335 C4.38892745,16.771535 3.94492745,16.376335 3.81052745,15.980335 L1.53372745,9.27393504 L1.53372745,9.27393504 Z M17.6065274,9.27713504 C17.5633274,8.86193504 17.8041274,8.72273504 18.1417274,8.96833504 L22.2353274,11.942735 C22.5729274,12.188335 22.6713274,12.680335 22.4529274,13.036335 L19.0481274,18.601135 C18.8305274,18.957135 18.6161274,18.909135 18.5729274,18.493935 L17.6065274,9.27713504 L17.6065274,9.27713504 Z\" id=\"Shape\"></path>
            </g>
        </g>
    </svg>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 125
    public function macro_table_row($__field__ = null, $__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "table_row"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "table_row"));

            // line 126
            echo "    <tr>
        <th>";
            // line 127
            echo twig_escape_filter($this->env, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 127, $this->source); })()), "html", null, true);
            echo "</th>
        <td>
        ";
            // line 129
            if (twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 129, $this->source); })()))) {
                // line 130
                echo "            ";
                echo twig_escape_filter($this->env, json_encode((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 130, $this->source); })())), "html", null, true);
                echo "
        ";
            } else {
                // line 132
                echo "            ";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 132, $this->source); })()), "html", null, true);
                echo "
        ";
            }
            // line 134
            echo "    </tr>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SuluWebsiteBundle:Profiler:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 134,  430 => 132,  424 => 130,  422 => 129,  417 => 127,  414 => 126,  395 => 125,  368 => 4,  351 => 3,  339 => 121,  332 => 117,  328 => 116,  324 => 115,  320 => 114,  316 => 113,  312 => 112,  308 => 111,  304 => 110,  300 => 109,  296 => 108,  292 => 107,  288 => 106,  284 => 105,  280 => 104,  276 => 103,  272 => 102,  268 => 101,  264 => 100,  260 => 98,  258 => 97,  253 => 94,  245 => 91,  239 => 89,  233 => 87,  231 => 86,  226 => 84,  223 => 83,  219 => 82,  212 => 77,  204 => 74,  198 => 72,  192 => 70,  190 => 69,  185 => 67,  182 => 66,  178 => 65,  173 => 62,  170 => 61,  161 => 60,  147 => 55,  144 => 54,  142 => 53,  133 => 52,  122 => 49,  117 => 46,  111 => 44,  109 => 43,  105 => 42,  100 => 39,  94 => 36,  90 => 34,  88 => 33,  83 => 31,  76 => 27,  72 => 25,  70 => 24,  67 => 23,  61 => 21,  58 => 20,  55 => 19,  46 => 18,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% macro logo() %}
    <?xml version=\"1.0\" encoding=\"UTF-8\"?>
    <svg width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
        <title>Artboard</title>
        <desc>Created with Sketch.</desc>
        <defs></defs>
        <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
            <g id=\"Artboard\" fill=\"#FFFFFF\">
                <path d=\"M23.8841274,12.750735 C24.1025274,12.394735 24.0041274,11.902735 23.6665274,11.657135 L17.9913274,7.53393504 C17.6537274,7.28833504 17.3417274,6.74753504 17.2977274,6.33233504 L16.9009274,2.55153504 C16.8577274,2.13633504 16.4977274,1.90513504 16.1017274,2.03713504 L0.51612745,7.24913504 C0.12012745,7.38193504 -0.0942725502,7.81313504 0.0401274498,8.20913504 L2.99132745,16.899535 C3.12572745,17.294735 3.56972745,17.690735 3.97772745,17.778735 L18.0929274,20.830735 C18.5009274,20.918735 19.0137274,20.699535 19.2313274,20.343535 L23.8841274,12.750735 L23.8841274,12.750735 Z M11.0425274,8.89153504 C10.7961274,9.22913504 10.2609274,9.43153504 9.85292745,9.34193504 L3.22572745,7.88433504 C2.81772745,7.79473504 2.80812745,7.61313504 3.20412745,7.48033504 L14.2153274,3.79793504 C14.6113274,3.66513504 14.7337274,3.83313504 14.4881274,4.17073504 L11.0425274,8.89153504 L11.0425274,8.89153504 Z M15.5241274,4.56913504 C15.7705274,4.23153504 16.0073274,4.29553504 16.0513274,4.71073504 L17.4057274,17.626735 C17.4489274,18.041935 17.2841274,18.105135 17.0393274,17.766735 L11.9305274,10.717935 C11.6857274,10.379535 11.6865274,9.82753504 11.9329274,9.48993504 L15.5241274,4.56913504 L15.5241274,4.56913504 Z M1.53372745,9.27393504 C1.39932745,8.87873504 1.62332745,8.62833504 2.03132745,8.71793504 L9.76652745,10.419535 C10.1745274,10.509135 10.7089274,10.859535 10.9537274,11.197135 L16.5249274,18.882735 C16.7697274,19.221135 16.6369274,19.425135 16.2281274,19.336335 L4.79692745,16.860335 C4.38892745,16.771535 3.94492745,16.376335 3.81052745,15.980335 L1.53372745,9.27393504 L1.53372745,9.27393504 Z M17.6065274,9.27713504 C17.5633274,8.86193504 17.8041274,8.72273504 18.1417274,8.96833504 L22.2353274,11.942735 C22.5729274,12.188335 22.6713274,12.680335 22.4529274,13.036335 L19.0481274,18.601135 C18.8305274,18.957135 18.6161274,18.909135 18.5729274,18.493935 L17.6065274,9.27713504 L17.6065274,9.27713504 Z\" id=\"Shape\"></path>
            </g>
        </g>
    </svg>
{% endmacro %}

{% block toolbar %}
    {% import _self as self %}
    {% set icon %}
        {{ self.logo }}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Portal</b>
            <span>{{ collector.data('portal').name }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Webspace</b>
            <span>{{ collector.data('webspace').name }}</span>
        </div>
        {% if collector.data('structure') %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Structure</b>
            <span>{{ collector.data('structure').template }}</span>
        </div>
        {% endif %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Localization</b>
            <span>
                {{ collector.data('localization') }}
                {% if collector.data('structure') %}
                ({{ collector.data('structure').shadowOn ? collector.data('structure').shadowBaseLanguage : 'no shadow' }})
                {% endif %}
            </span>
        </div>
    {% endset %}
    {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url } %}
{% endblock %}

{% block menu %}
{% import _self as self %}
<span class=\"label\">
    <span class=\"icon\">{{ self.logo }}</span>
    <strong>Sulu</strong>
</span>
{% endblock %}

{% block panel %}
    {% import _self as self %}
    <h2>Webspace</h2>
    <table>
        <tbody>
            {% for field, value in collector.data('webspace') %}
            <tr>
                <th>{{ field }}</th>
                <td>
                {% if value is iterable %}
                    {{ value|json_encode }}
                {% else %}
                    {{ value }}
                {% endif %}
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
    <h2>Portal</h2>
    <table>
        <tbody>
            {% for field, value in collector.data('portal') %}
            <tr>
                <th>{{ field }}</th>
                <td>
                {% if value is iterable %}
                    {{ value|json_encode }}
                {% else %}
                    {{ value }}
                {% endif %}
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
    <h2>Structure</h2>
    {% if collector.data('structure') %}
    <table>
        <tbody>
            {{ self.table_row('id', collector.data('structure').id) }}
            {{ self.table_row('path', collector.data('structure').path) }}
            {{ self.table_row('nodeType', collector.data('structure').nodeType) }}
            {{ self.table_row('internal', collector.data('structure').internal ? 'yes' : 'no') }}
            {{ self.table_row('nodeState', collector.data('structure').nodeState) }}
            {{ self.table_row('published', collector.data('structure').published.format('Y-m-d H:i:s')) }}
            {{ self.table_row('nodeState', collector.data('structure').nodeState) }}
            {{ self.table_row('navContexts', collector.data('structure').navContexts) }}
            {{ self.table_row('enabledShadowLanguages', collector.data('structure').enabledShadowLanguages) }}
            {{ self.table_row('concreteLanguages', collector.data('structure').concreteLanguages) }}
            {{ self.table_row('shadowOn', collector.data('structure').shadowOn ? 'yes' : 'no') }}
            {{ self.table_row('shadowBaseLanguage', collector.data('structure').shadowBaseLanguage) }}
            {{ self.table_row('template', collector.data('structure').template) }}
            {{ self.table_row('has children', collector.data('structure').hasSub ? 'yes' : 'no') }}
            {{ self.table_row('creator', collector.data('structure').creator) }}
            {{ self.table_row('changer', collector.data('structure').changer) }}
            {{ self.table_row('created', collector.data('structure').created.format('Y-m-d H:i:s')) }}
            {{ self.table_row('changed', collector.data('structure').changed.format('Y-m-d H:i:s')) }}
        </tbody>
    </table>
    {% else %}
        No structure was found.
    {% endif %}
{% endblock %}

{% macro table_row(field, value) %}
    <tr>
        <th>{{ field }}</th>
        <td>
        {% if value is iterable %}
            {{ value | json_encode }}
        {% else %}
            {{ value }}
        {% endif %}
    </tr>
{% endmacro %}
", "SuluWebsiteBundle:Profiler:layout.html.twig", "C:\\Users\\imsyn\\Desktop\\MASSIVEART\\sulu2\\sulu-minimal\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\WebsiteBundle/Resources/views/Profiler/layout.html.twig");
    }
}
