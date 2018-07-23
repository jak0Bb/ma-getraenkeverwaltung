<?php

/* DoctrinePHPCRBundle:Collector:phpcr.html.twig */
class __TwigTemplate_1557d457dc4bc3f51b4ef3a328241387f5581b70b5058ee7e95c9166b81fa8aa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "DoctrinePHPCRBundle:Collector:phpcr.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctrinePHPCRBundle:Collector:phpcr.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctrinePHPCRBundle:Collector:phpcr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->source); })()), "callcount", array()) > 0)) {
            // line 5
            echo "        ";
            $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 5, $this->source); })()), 1)) : (1));
            // line 6
            echo "
        ";
            // line 7
            ob_start();
            // line 8
            echo "            ";
            if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 8, $this->source); })()) == 1)) {
                // line 9
                echo "                <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAN5JREFUeNpiZAACe3v7+UAqgYF0kHjw4MEFyAJMUFqBgTyAoY+JgcqABUo3AvEHIBYgQe8DIF6ALsiISzUwXN9DLQBZpAgMqw9QcZA3z2OxvBGopgGflwWQaAO0cMPmE3uahiE2sAHmZaBXDiCJX0CSQwYTsYYhMIzWkxA5jWiWoboQaJgDkAogwYcHgfgATdMhuoEXoJgY8AHddYTS4XqkSAkk14XIABSW4DCFhi3FBlIlDNHDCEYTG65Y0yEoa9WjFU0foGnuAjk5JQFHYXuRGJfSJQwfEAhTvAAgwAArLzncFel3VAAAAABJRU5ErkJggg==\" />
                <span class=\"sf-toolbar-status";
                // line 10
                if ((50 < twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->source); })()), "callcount", array()))) {
                    echo " sf-toolbar-status-yellow";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->source); })()), "callcount", array()), "html", null, true);
                echo "</span>
                ";
                // line 11
                if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 11, $this->source); })()), "callcount", array()) > 0)) {
                    // line 12
                    echo "                    <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
                    echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 12, $this->source); })()), "time", array()) * 1000)), "html", null, true);
                    echo " ms</span>
                ";
                }
                // line 14
                echo "            ";
            } else {
                // line 15
                echo "                    ";
                $context["status"] = (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 15, $this->source); })()), "callcount", array()) > 50)) ? ("yellow") : (""));
                // line 16
                echo "
                    ";
                // line 17
                echo twig_include($this->env, $context, "@DoctrinePHPCR/Collector/icon.svg");
                echo "

                    <span class=\"sf-toolbar-value\">";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 19, $this->source); })()), "callcount", array()), "html", null, true);
                echo "</span>
                    <span class=\"sf-toolbar-info-piece-additional-detail\">
                        <span class=\"sf-toolbar-label\">in</span>
                        <span class=\"sf-toolbar-value\">";
                // line 22
                echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 22, $this->source); })()), "time", array()) * 1000)), "html", null, true);
                echo "</span>
                        <span class=\"sf-toolbar-label\">ms</span>
                    </span>
            ";
            }
            // line 26
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 27
            echo "
        ";
            // line 28
            ob_start();
            // line 29
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>PHPCR Calls</b>
                <span class=\"sf-toolbar-status\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 31, $this->source); })()), "callcount", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Call time</b>
                <span>";
            // line 35
            echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 35, $this->source); })()), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 38
            echo "
        ";
            // line 39
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 39, $this->source); })()), "status" => (((isset($context["status"]) || array_key_exists("status", $context))) ? (_twig_default_filter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new Twig_Error_Runtime('Variable "status" does not exist.', 39, $this->source); })()), "")) : (""))));
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 44
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 44, $this->source); })()), 1)) : (1));
        // line 45
        echo "
    ";
        // line 46
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 46, $this->source); })()) == 1)) {
            // line 47
            echo "        <span class=\"label\">
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
            <strong>PHPCR</strong>
            <span class=\"count\">
                <span>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 51, $this->source); })()), "callcount", array()), "html", null, true);
            echo "</span>
                <span>";
            // line 52
            echo twig_escape_filter($this->env, sprintf("%0.0f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 52, $this->source); })()), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
            </span>
        </span>
    ";
        } else {
            // line 56
            echo "        <span class=\"label ";
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 56, $this->source); })()), "callcount", array()) == 0)) ? ("disabled") : (""));
            echo "\">
            <span class=\"icon\">";
            // line 57
            echo twig_include($this->env, $context, "@DoctrinePHPCR/Collector/icon.svg");
            echo "</span>
            <strong>PHPCR</strong>
        </span>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_panel($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 64
        echo "    <h2>Calls</h2>

    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 66, $this->source); })()), "calls", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["connection"] => $context["calls"]) {
            // line 67
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 67, $this->source); })()), "connections", array())) > 1)) {
                // line 68
                echo "            <h3>Connection <em>";
                echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
                echo "</em></h3>
        ";
            }
            // line 70
            echo "
        ";
            // line 71
            if (twig_test_empty($context["calls"])) {
                // line 72
                echo "            <div class=\"empty\">
                <p>No calls.</p>
            </div>
        ";
            } else {
                // line 76
                echo "            <table class=\"alt\" id=\"callsPlaceholder-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo "\">
                <thead>
                <tr>
                    <th onclick=\"javascript:sortTable(this, 0, 'queries-";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span>&#9650;</span></th>
                    <th onclick=\"javascript:sortTable(this, 1, 'queries-";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo "')\" style=\"cursor: pointer;\">Time<span></span></th>
                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo "\">
                ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["calls"]);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["i"] => $context["call"]) {
                    // line 86
                    echo "                    <tr id=\"queryNo-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $context["i"]), "html", null, true);
                    echo "\">
                        <td>";
                    // line 87
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                    echo "</td>
                        <td class=\"nowrap\">";
                    // line 88
                    echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["call"], "executionMS", array()) * 1000)), "html", null, true);
                    echo "&nbsp;ms</td>
                        <td>
                            ";
                    // line 90
                    echo twig_get_attribute($this->env, $this->source, $context["call"], "method", array());
                    echo "<br>

                            <strong class=\"font-normal text-small\">Parameters:</strong>
                            ";
                    // line 93
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\YamlExtension']->encode(twig_get_attribute($this->env, $this->source, $context["call"], "params", array())), "html", null, true);
                    echo " <br>
                            <strong class=\"font-normal text-small\">Environment:</strong>
                            ";
                    // line 95
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\YamlExtension']->encode(twig_get_attribute($this->env, $this->source, $context["call"], "env", array())), "html", null, true);
                    echo " <br>
                            ";
                    // line 96
                    if (twig_get_attribute($this->env, $this->source, $context["call"], "caller", array(), "any", true, true)) {
                        // line 97
                        echo "                                <strong class=\"font-normal text-small\">Callers</strong>
                                <ul>
                                    ";
                        // line 99
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["call"], "caller", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["caller"]) {
                            // line 100
                            echo "                                        <li> - ";
                            echo twig_escape_filter($this->env, $context["caller"], "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caller'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 102
                        echo "                                </ul>
                            ";
                    }
                    // line 104
                    echo "                        </td>
                    </tr>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "                </tbody>
            </table>
        ";
            }
            // line 110
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['calls'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "
    <h2>Database Connections</h2>

    ";
        // line 114
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 114, $this->source); })()), "connections", array())) {
            // line 115
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:table.html.twig", "DoctrinePHPCRBundle:Collector:phpcr.html.twig", 115)->display(array("data" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 115, $this->source); })()), "connections", array())));
            // line 116
            echo "    ";
        } else {
            // line 117
            echo "        <div class=\"empty\">
            <p>No connections.</p>
        </div>
    ";
        }
        // line 121
        echo "
    <h2>Document Managers</h2>

    ";
        // line 124
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 124, $this->source); })()), "managers", array())) {
            // line 125
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:table.html.twig", "DoctrinePHPCRBundle:Collector:phpcr.html.twig", 125)->display(array("data" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 125, $this->source); })()), "managers", array())));
            // line 126
            echo "    ";
        } else {
            // line 127
            echo "        <div class=\"empty\">
            <p>No document managers.</p>
        </div>
    ";
        }
        // line 131
        echo "
    <h2>Document Mapping</h2>

    ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 134, $this->source); })()), "documents", array()));
        foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
            // line 135
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 135, $this->source); })()), "managers", array())) > 1)) {
                // line 136
                echo "            <h3>Manager <small>";
                echo twig_escape_filter($this->env, $context["manager"], "html", null, true);
                echo "</small></h3>
        ";
            }
            // line 138
            echo "
        ";
            // line 139
            if (twig_test_empty($context["classes"])) {
                // line 140
                echo "            <div class=\"empty\">
                <p>No loaded documents.</p>
            </div>
        ";
            } else {
                // line 144
                echo "            <table>
                <thead>
                    <tr>
                        <th scope=\"col\">Class</th>
                    </tr>
                </thead>

                <tbody>
                ";
                // line 152
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["classes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 153
                    echo "                    <tr>
                        <td>";
                    // line 154
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "</td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 157
                echo "                </tbody>
            </table>
        ";
            }
            // line 160
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "DoctrinePHPCRBundle:Collector:phpcr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 160,  483 => 157,  474 => 154,  471 => 153,  467 => 152,  457 => 144,  451 => 140,  449 => 139,  446 => 138,  440 => 136,  437 => 135,  433 => 134,  428 => 131,  422 => 127,  419 => 126,  416 => 125,  414 => 124,  409 => 121,  403 => 117,  400 => 116,  397 => 115,  395 => 114,  390 => 111,  376 => 110,  371 => 107,  355 => 104,  351 => 102,  342 => 100,  338 => 99,  334 => 97,  332 => 96,  328 => 95,  323 => 93,  317 => 90,  312 => 88,  308 => 87,  299 => 86,  282 => 85,  278 => 84,  271 => 80,  267 => 79,  260 => 76,  254 => 72,  252 => 71,  249 => 70,  243 => 68,  240 => 67,  223 => 66,  219 => 64,  210 => 63,  195 => 57,  190 => 56,  183 => 52,  179 => 51,  173 => 47,  171 => 46,  168 => 45,  165 => 44,  156 => 43,  143 => 39,  140 => 38,  134 => 35,  127 => 31,  123 => 29,  121 => 28,  118 => 27,  115 => 26,  108 => 22,  102 => 19,  97 => 17,  94 => 16,  91 => 15,  88 => 14,  82 => 12,  80 => 11,  72 => 10,  69 => 9,  66 => 8,  64 => 7,  61 => 6,  58 => 5,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% if collector.callcount > 0 %}
        {% set profiler_markup_version = profiler_markup_version|default(1) %}

        {% set icon %}
            {% if profiler_markup_version == 1 %}
                <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAN5JREFUeNpiZAACe3v7+UAqgYF0kHjw4MEFyAJMUFqBgTyAoY+JgcqABUo3AvEHIBYgQe8DIF6ALsiISzUwXN9DLQBZpAgMqw9QcZA3z2OxvBGopgGflwWQaAO0cMPmE3uahiE2sAHmZaBXDiCJX0CSQwYTsYYhMIzWkxA5jWiWoboQaJgDkAogwYcHgfgATdMhuoEXoJgY8AHddYTS4XqkSAkk14XIABSW4DCFhi3FBlIlDNHDCEYTG65Y0yEoa9WjFU0foGnuAjk5JQFHYXuRGJfSJQwfEAhTvAAgwAArLzncFel3VAAAAABJRU5ErkJggg==\" />
                <span class=\"sf-toolbar-status{% if 50 < collector.callcount %} sf-toolbar-status-yellow{% endif %}\">{{ collector.callcount }}</span>
                {% if collector.callcount > 0 %}
                    <span class=\"sf-toolbar-info-piece-additional-detail\">in {{ '%0.2f'|format(collector.time * 1000) }} ms</span>
                {% endif %}
            {% else %}
                    {% set status = collector.callcount > 50 ? 'yellow' %}

                    {{ include('@DoctrinePHPCR/Collector/icon.svg') }}

                    <span class=\"sf-toolbar-value\">{{ collector.callcount }}</span>
                    <span class=\"sf-toolbar-info-piece-additional-detail\">
                        <span class=\"sf-toolbar-label\">in</span>
                        <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.time * 1000) }}</span>
                        <span class=\"sf-toolbar-label\">ms</span>
                    </span>
            {% endif %}
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>PHPCR Calls</b>
                <span class=\"sf-toolbar-status\">{{ collector.callcount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Call time</b>
                <span>{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status|default('') }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if profiler_markup_version == 1 %}
        <span class=\"label\">
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
            <strong>PHPCR</strong>
            <span class=\"count\">
                <span>{{ collector.callcount }}</span>
                <span>{{ '%0.0f'|format(collector.time * 1000) }} ms</span>
            </span>
        </span>
    {% else %}
        <span class=\"label {{ collector.callcount == 0 ? 'disabled' }}\">
            <span class=\"icon\">{{ include('@DoctrinePHPCR/Collector/icon.svg') }}</span>
            <strong>PHPCR</strong>
        </span>
    {% endif %}
{% endblock %}

{% block panel %}
    <h2>Calls</h2>

    {% for connection, calls in collector.calls %}
        {% if collector.connections|length > 1 %}
            <h3>Connection <em>{{ connection }}</em></h3>
        {% endif %}

        {% if calls is empty %}
            <div class=\"empty\">
                <p>No calls.</p>
            </div>
        {% else %}
            <table class=\"alt\" id=\"callsPlaceholder-{{ loop.index }}\">
                <thead>
                <tr>
                    <th onclick=\"javascript:sortTable(this, 0, 'queries-{{ loop.index }}')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span>&#9650;</span></th>
                    <th onclick=\"javascript:sortTable(this, 1, 'queries-{{ loop.index }}')\" style=\"cursor: pointer;\">Time<span></span></th>
                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-{{ loop.index }}\">
                {% for i, call in calls %}
                    <tr id=\"queryNo-{{ i }}-{{ loop.parent.loop.index }}\" class=\"{{ cycle(['odd', 'even'], i) }}\">
                        <td>{{ loop.index }}</td>
                        <td class=\"nowrap\">{{ '%0.2f'|format(call.executionMS * 1000) }}&nbsp;ms</td>
                        <td>
                            {{ call.method|raw }}<br>

                            <strong class=\"font-normal text-small\">Parameters:</strong>
                            {{ call.params|yaml_encode }} <br>
                            <strong class=\"font-normal text-small\">Environment:</strong>
                            {{ call.env|yaml_encode }} <br>
                            {% if call.caller is defined %}
                                <strong class=\"font-normal text-small\">Callers</strong>
                                <ul>
                                    {% for caller in call.caller %}
                                        <li> - {{ caller }}</li>
                                    {% endfor %}
                                </ul>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor %}

    <h2>Database Connections</h2>

    {% if collector.connections %}
        {% include 'WebProfilerBundle:Profiler:table.html.twig' with {data: collector.connections} only %}
    {% else %}
        <div class=\"empty\">
            <p>No connections.</p>
        </div>
    {% endif %}

    <h2>Document Managers</h2>

    {% if collector.managers %}
        {% include 'WebProfilerBundle:Profiler:table.html.twig' with {data: collector.managers} only %}
    {% else %}
        <div class=\"empty\">
            <p>No document managers.</p>
        </div>
    {% endif %}

    <h2>Document Mapping</h2>

    {% for manager, classes in collector.documents %}
        {% if collector.managers|length > 1 %}
            <h3>Manager <small>{{ manager }}</small></h3>
        {% endif %}

        {% if classes is empty %}
            <div class=\"empty\">
                <p>No loaded documents.</p>
            </div>
        {% else %}
            <table>
                <thead>
                    <tr>
                        <th scope=\"col\">Class</th>
                    </tr>
                </thead>

                <tbody>
                {% for class in classes %}
                    <tr>
                        <td>{{ class }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor %}
{% endblock %}
", "DoctrinePHPCRBundle:Collector:phpcr.html.twig", "C:\\Users\\imsyn\\Desktop\\MASSIVEART\\sulu2\\sulu-minimal\\ma-getraenkeverwaltung\\vendor\\doctrine\\phpcr-bundle/Resources/views/Collector/phpcr.html.twig");
    }
}
