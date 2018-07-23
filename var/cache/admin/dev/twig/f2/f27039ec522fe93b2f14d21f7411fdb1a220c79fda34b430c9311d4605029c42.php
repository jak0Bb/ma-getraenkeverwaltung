<?php

/* SuluContentBundle:Template:seo.html.twig */
class __TwigTemplate_64a5d0a372e8afd225b372137e4c2df2c5c26b7e9803e0ed9c7739be8696e50c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluContentBundle:Template:seo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluContentBundle:Template:seo.html.twig"));

        // line 1
        echo "<form id=\"seo-form\" class=\"grid\">
    <div class=\"grid-row\">
        <label for=\"seo-title\"><%=translate('sulu.content.seo.serp')%></label>

        <div class=\"seo-excerpt\">
            <div id=\"seo-excerpt-title\" class=\"title\"></div>
            <div class=\"url\"><%= siteUrl %></div>
            <div id=\"seo-excerpt-description\" class=\"description\"></div>
        </div>
    </div>
    <div class=\"grid-row form-group\">
        <label for=\"seo-title\"><%=translate('sulu.content.seo.title')%></label>
        <input type=\"text\" id=\"seo-title\" data-mapper-property=\"title\"
               class=\"form-element preview-update trigger-save-button\"/>

        <span class=\"smaller-font grey-font\">
            <%= sprintf(translate('sulu.content.seo.title.note'), options.maxTitleCharacters) %>
            <strong>
                <span id=\"title-left\"></span>
                <%= translate('sulu.content.seo.characters-left')%>
            </strong>
        </span>
    </div>
    <div class=\"grid-row form-group\">
        <label for=\"seo-description\"><%=translate('sulu.content.seo.description')%></label>
        <textarea id=\"seo-description\" data-mapper-property=\"description\"
                  class=\"form-element preview-update trigger-save-button\"></textarea>

        <span class=\"smaller-font grey-font\">
            <%= sprintf(translate('sulu.content.seo.descriptions.note'), options.maxDescriptionCharacters) %>
            <strong>
                <span id=\"description-left\"></span>
                <%= translate('sulu.content.seo.characters-left')%>
            </strong>
        </span>
    </div>
    <div class=\"grid-row form-group\">
        <label for=\"seo-keywords\"><%=translate('sulu.content.seo.keywords')%></label>
        <input type=\"text\" id=\"seo-keywords\" data-mapper-property=\"keywords\"
               class=\"form-element preview-update trigger-save-button\"/>
        <span class=\"smaller-font grey-font\">
            <%= sprintf(translate('sulu.content.seo.keywords.note'), options.maxKeywords) %>
            <strong>
                <span id=\"keywords-left\"></span>
                <%= translate('sulu.content.seo.keywords-left')%>
            </strong>
        </span>
    </div>
    <div class=\"grid-row form-group\">
        <label for=\"seo-canonical\"><%=translate('sulu.content.seo.canonical')%></label>
        <input type=\"text\" id=\"seo-canonical\" data-mapper-property=\"canonicalUrl\"
               class=\"form-element preview-update trigger-save-button\"/>
    </div>
    <div class=\"form-group grid-row\">
        <label><%=translate('sulu.content.seo.robots')%></label>

        <div class=\"form-group grid-row\">
            <label for=\"seo-no-index\">
                <div class=\"custom-checkbox\">
                    <input type=\"checkbox\" id=\"seo-no-index\" data-mapper-property=\"noIndex\"
                           class=\"form-element preview-update trigger-save-button\"/>
                    <span class=\"icon\"></span>
                </div>
                <span class=\"clickable\"><%=translate('sulu.content.seo.robots.no-index')%></span>
            </label>
        </div>
        <div class=\"form-group grid-row\">
            <label for=\"seo-no-follow\">
                <div class=\"custom-checkbox\">
                    <input type=\"checkbox\" id=\"seo-no-follow\" data-mapper-property=\"noFollow\"
                           class=\"form-element preview-update trigger-save-button\"/>
                    <span class=\"icon\"></span>
                </div>
                <span class=\"clickable\"><%=translate('sulu.content.seo.robots.no-follow')%></span>
            </label>
        </div>
    </div>

    <div class=\"form-group grid-row\">
        <label><%=translate('sulu.content.seo.sitemap')%></label>

        <div class=\"form-group grid-row\">
            <label for=\"seo-hide-in-sitemap\">
                <span class=\"custom-checkbox\">
                    <input type=\"checkbox\" id=\"seo-hide-in-sitemap\" data-mapper-property=\"hideInSitemap\"
                           class=\"form-element preview-update trigger-save-button\"/>
                    <span class=\"icon\"></span>
                </span>
                <span class=\"clickable\"><%=translate('sulu.content.seo.sitemap.hide')%></span>
            </label>
        </div>
    </div>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SuluContentBundle:Template:seo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form id=\"seo-form\" class=\"grid\">
    <div class=\"grid-row\">
        <label for=\"seo-title\"><%=translate('sulu.content.seo.serp')%></label>

        <div class=\"seo-excerpt\">
            <div id=\"seo-excerpt-title\" class=\"title\"></div>
            <div class=\"url\"><%= siteUrl %></div>
            <div id=\"seo-excerpt-description\" class=\"description\"></div>
        </div>
    </div>
    <div class=\"grid-row form-group\">
        <label for=\"seo-title\"><%=translate('sulu.content.seo.title')%></label>
        <input type=\"text\" id=\"seo-title\" data-mapper-property=\"title\"
               class=\"form-element preview-update trigger-save-button\"/>

        <span class=\"smaller-font grey-font\">
            <%= sprintf(translate('sulu.content.seo.title.note'), options.maxTitleCharacters) %>
            <strong>
                <span id=\"title-left\"></span>
                <%= translate('sulu.content.seo.characters-left')%>
            </strong>
        </span>
    </div>
    <div class=\"grid-row form-group\">
        <label for=\"seo-description\"><%=translate('sulu.content.seo.description')%></label>
        <textarea id=\"seo-description\" data-mapper-property=\"description\"
                  class=\"form-element preview-update trigger-save-button\"></textarea>

        <span class=\"smaller-font grey-font\">
            <%= sprintf(translate('sulu.content.seo.descriptions.note'), options.maxDescriptionCharacters) %>
            <strong>
                <span id=\"description-left\"></span>
                <%= translate('sulu.content.seo.characters-left')%>
            </strong>
        </span>
    </div>
    <div class=\"grid-row form-group\">
        <label for=\"seo-keywords\"><%=translate('sulu.content.seo.keywords')%></label>
        <input type=\"text\" id=\"seo-keywords\" data-mapper-property=\"keywords\"
               class=\"form-element preview-update trigger-save-button\"/>
        <span class=\"smaller-font grey-font\">
            <%= sprintf(translate('sulu.content.seo.keywords.note'), options.maxKeywords) %>
            <strong>
                <span id=\"keywords-left\"></span>
                <%= translate('sulu.content.seo.keywords-left')%>
            </strong>
        </span>
    </div>
    <div class=\"grid-row form-group\">
        <label for=\"seo-canonical\"><%=translate('sulu.content.seo.canonical')%></label>
        <input type=\"text\" id=\"seo-canonical\" data-mapper-property=\"canonicalUrl\"
               class=\"form-element preview-update trigger-save-button\"/>
    </div>
    <div class=\"form-group grid-row\">
        <label><%=translate('sulu.content.seo.robots')%></label>

        <div class=\"form-group grid-row\">
            <label for=\"seo-no-index\">
                <div class=\"custom-checkbox\">
                    <input type=\"checkbox\" id=\"seo-no-index\" data-mapper-property=\"noIndex\"
                           class=\"form-element preview-update trigger-save-button\"/>
                    <span class=\"icon\"></span>
                </div>
                <span class=\"clickable\"><%=translate('sulu.content.seo.robots.no-index')%></span>
            </label>
        </div>
        <div class=\"form-group grid-row\">
            <label for=\"seo-no-follow\">
                <div class=\"custom-checkbox\">
                    <input type=\"checkbox\" id=\"seo-no-follow\" data-mapper-property=\"noFollow\"
                           class=\"form-element preview-update trigger-save-button\"/>
                    <span class=\"icon\"></span>
                </div>
                <span class=\"clickable\"><%=translate('sulu.content.seo.robots.no-follow')%></span>
            </label>
        </div>
    </div>

    <div class=\"form-group grid-row\">
        <label><%=translate('sulu.content.seo.sitemap')%></label>

        <div class=\"form-group grid-row\">
            <label for=\"seo-hide-in-sitemap\">
                <span class=\"custom-checkbox\">
                    <input type=\"checkbox\" id=\"seo-hide-in-sitemap\" data-mapper-property=\"hideInSitemap\"
                           class=\"form-element preview-update trigger-save-button\"/>
                    <span class=\"icon\"></span>
                </span>
                <span class=\"clickable\"><%=translate('sulu.content.seo.sitemap.hide')%></span>
            </label>
        </div>
    </div>
</form>
", "SuluContentBundle:Template:seo.html.twig", "C:\\Users\\imsyn\\Desktop\\MASSIVEART\\sulu2\\sulu-minimal\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContentBundle/Resources/views/Template/seo.html.twig");
    }
}
