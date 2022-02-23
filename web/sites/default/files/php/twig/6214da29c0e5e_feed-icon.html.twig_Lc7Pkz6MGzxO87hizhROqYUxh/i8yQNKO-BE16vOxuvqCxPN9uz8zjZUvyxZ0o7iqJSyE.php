<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/olivero/templates/misc/feed-icon.html.twig */
class __TwigTemplate_71bd84882f877db0e0712db5646bae8df00421933c56f1dde623a244e0b0aeed extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/olivero/templates/misc/feed-icon.html.twig"));

        // line 14
        echo "
";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/feed"), "html", null, true);
        echo "

";
        // line 21
        if (( !array_key_exists("title", $context) || (null === ($context["title"] ?? null)))) {
            // line 22
            echo "  ";
            $context["title"] = t("RSS Feed");
        }
        // line 24
        echo "
<a href=\"";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 25, $this->source), "html", null, true);
        echo "\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "feed-icon"], "method", false, false, true, 25), 25, $this->source), "html", null, true);
        echo ">
  <span class=\"feed-icon__label\">
    ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 27, $this->source), "html", null, true);
        echo "
  </span>
  <span class=\"feed-icon__icon\" aria-hidden=\"true\">
    ";
        // line 30
        $this->loadTemplate("@olivero/../images/rss.svg", "core/themes/olivero/templates/misc/feed-icon.html.twig", 30)->display($context);
        // line 31
        echo "  </span>
</a>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/olivero/templates/misc/feed-icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 31,  72 => 30,  66 => 27,  59 => 25,  56 => 24,  52 => 22,  50 => 21,  45 => 15,  42 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a feed icon.
 *
 * Available variables:
 * - url: An internal system path or a fully qualified external URL of the feed.
 * - title: Title of the feed for describing the feed on the subscribe link.
 * - attributes: Remaining HTML attributes for the feed link.
 *   - title: A descriptive title of the feed link.
 *   - class: HTML classes to be applied to the feed link.
 */
#}

{{ attach_library('olivero/feed') }}

{#
  @todo - This works around https://www.drupal.org/project/drupal/issues/3156244,
  Title variable isn't set by Syndicate block.
 #}
{% if title is not defined or title is null %}
  {% set title = 'RSS Feed'|t %}
{% endif %}

<a href=\"{{ url }}\"{{ attributes.addClass('feed-icon') }}>
  <span class=\"feed-icon__label\">
    {{ title }}
  </span>
  <span class=\"feed-icon__icon\" aria-hidden=\"true\">
    {% include \"@olivero/../images/rss.svg\" %}
  </span>
</a>
", "core/themes/olivero/templates/misc/feed-icon.html.twig", "C:\\xampp\\htdocs\\management\\web\\core\\themes\\olivero\\templates\\misc\\feed-icon.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 21, "set" => 22, "include" => 30);
        static $filters = array("escape" => 15, "t" => 22);
        static $functions = array("attach_library" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
                ['escape', 't'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
