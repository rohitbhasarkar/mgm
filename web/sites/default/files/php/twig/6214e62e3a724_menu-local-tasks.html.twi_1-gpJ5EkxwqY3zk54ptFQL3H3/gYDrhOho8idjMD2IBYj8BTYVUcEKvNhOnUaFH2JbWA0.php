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

/* core/themes/olivero/templates/navigation/menu-local-tasks.html.twig */
class __TwigTemplate_94b22a269e9fbce2135f4d8e4f8cf6d58eb4e9653a67f2d0052821ecc6c5d403 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/olivero/templates/navigation/menu-local-tasks.html.twig"));

        // line 16
        echo "
";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/tabs"), "html", null, true);
        echo "

";
        // line 19
        if (($context["primary"] ?? null)) {
            // line 20
            echo "  <h2 id=\"primary-tabs-title\" class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Primary tabs"));
            echo "</h2>
  <nav role=\"navigation\" class=\"tabs-wrapper\" aria-labelledby=\"primary-tabs-title\" data-drupal-nav-primary-tabs>
    <ul class=\"tabs tabs--primary\">";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null), 22, $this->source), "html", null, true);
            echo "</ul>
  </nav>
";
        }
        // line 25
        if (($context["secondary"] ?? null)) {
            // line 26
            echo "  <h2 id=\"secondary-tabs-title\" class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Secondary tabs"));
            echo "</h2>
  <nav role=\"navigation\" class=\"tabs-wrapper\" aria-labelledby=\"secondary-tabs-title\">
    <ul class=\"tabs tabs--secondary\">";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary"] ?? null), 28, $this->source), "html", null, true);
            echo "</ul>
  </nav>
";
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/olivero/templates/navigation/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 28,  66 => 26,  64 => 25,  58 => 22,  52 => 20,  50 => 19,  45 => 17,  42 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Olivero theme implementation to display primary and secondary local tasks.
 *
 * Available variables:
 * - primary: HTML list items representing primary tasks.
 * - secondary: HTML list items representing secondary tasks.
 *
 * Each item in these variables (primary and secondary) can be individually
 * themed in menu-local-task.html.twig.
 *
 * @ingroup themeable
 */
#}

{{ attach_library('olivero/tabs') }}

{% if primary %}
  <h2 id=\"primary-tabs-title\" class=\"visually-hidden\">{{ 'Primary tabs'|t }}</h2>
  <nav role=\"navigation\" class=\"tabs-wrapper\" aria-labelledby=\"primary-tabs-title\" data-drupal-nav-primary-tabs>
    <ul class=\"tabs tabs--primary\">{{ primary }}</ul>
  </nav>
{% endif %}
{% if secondary %}
  <h2 id=\"secondary-tabs-title\" class=\"visually-hidden\">{{ 'Secondary tabs'|t }}</h2>
  <nav role=\"navigation\" class=\"tabs-wrapper\" aria-labelledby=\"secondary-tabs-title\">
    <ul class=\"tabs tabs--secondary\">{{ secondary }}</ul>
  </nav>
{% endif %}
", "core/themes/olivero/templates/navigation/menu-local-tasks.html.twig", "C:\\xampp\\htdocs\\management\\web\\core\\themes\\olivero\\templates\\navigation\\menu-local-tasks.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19);
        static $filters = array("escape" => 17, "t" => 20);
        static $functions = array("attach_library" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
