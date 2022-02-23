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

/* core/themes/olivero/templates/block/block--system-powered-by-block.html.twig */
class __TwigTemplate_2b15544028e376382f5f564c2a2120c3139a52e16a6a8f1310a333cc4a3e76cb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/olivero/templates/block/block--system-powered-by-block.html.twig"));

        $this->parent = $this->loadTemplate("block.html.twig", "core/themes/olivero/templates/block/block--system-powered-by-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/powered-by-block"), "html", null, true);
        echo "
  <span>
    ";
        // line 15
        echo t("Powered by", array());
        // line 16
        echo "    <a href=\"https://www.drupal.org\">";
        echo t("Drupal", array());
        echo "</a>
    <span class=\"drupal-logo\" aria-label=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Drupal Logo"));
        echo "\">
      <svg width=\"14\" height=\"19\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 42.15 55.08\" fill=\"none\" aria-label=\"";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Drupal Logo"));
        echo "\" role=\"img\">
        <path d=\"M29.75 11.73C25.87 7.86 22.18 4.16 21.08 0 20 4.16 16.28 7.86 12.4 11.73 6.59 17.54 0 24.12 0 34a21.08 21.08 0 1042.15 0c0-9.88-6.59-16.46-12.4-22.27zM10.84 35.92a14.13 14.13 0 00-1.65 2.62.54.54 0 01-.36.3h-.18c-.47 0-1-.92-1-.92-.14-.22-.27-.45-.4-.69l-.09-.19C5.94 34.25 7 30.28 7 30.28a17.42 17.42 0 012.52-5.41 31.53 31.53 0 012.28-3l1 1 4.72 4.82a.54.54 0 010 .72l-4.93 5.47zm10.48 13.81a7.29 7.29 0 01-5.4-12.14c1.54-1.83 3.42-3.63 5.46-6 2.42 2.58 4 4.35 5.55 6.29a3.08 3.08 0 01.32.48 7.15 7.15 0 011.3 4.12 7.23 7.23 0 01-7.23 7.25zM35 38.14a.84.84 0 01-.67.58h-.14a1.22 1.22 0 01-.68-.55 37.77 37.77 0 00-4.28-5.31l-1.93-2-6.41-6.65a54 54 0 01-3.84-3.94 1.3 1.3 0 00-.1-.15 3.84 3.84 0 01-.51-1v-.19a3.4 3.4 0 011-3c1.24-1.24 2.49-2.49 3.67-3.79 1.3 1.44 2.69 2.82 4.06 4.19a57.6 57.6 0 017.55 8.58A16 16 0 0135.65 34a14.55 14.55 0 01-.65 4.14z\"/>
      </svg>
    </span>
  </span>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/olivero/templates/block/block--system-powered-by-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  74 => 17,  69 => 16,  67 => 15,  61 => 13,  54 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Olivero's theme implementation for Powered by Drupal block.
 *
 * The Powered by Drupal block is an optional link to the home page of the
 * Drupal project.
 *
 */
#}
{% block content %}
  {{ attach_library('olivero/powered-by-block') }}
  <span>
    {% trans %}Powered by{% endtrans %}
    <a href=\"https://www.drupal.org\">{% trans %}Drupal{% endtrans %}</a>
    <span class=\"drupal-logo\" aria-label=\"{{ 'Drupal Logo'|t }}\">
      <svg width=\"14\" height=\"19\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 42.15 55.08\" fill=\"none\" aria-label=\"{{ 'Drupal Logo'|t }}\" role=\"img\">
        <path d=\"M29.75 11.73C25.87 7.86 22.18 4.16 21.08 0 20 4.16 16.28 7.86 12.4 11.73 6.59 17.54 0 24.12 0 34a21.08 21.08 0 1042.15 0c0-9.88-6.59-16.46-12.4-22.27zM10.84 35.92a14.13 14.13 0 00-1.65 2.62.54.54 0 01-.36.3h-.18c-.47 0-1-.92-1-.92-.14-.22-.27-.45-.4-.69l-.09-.19C5.94 34.25 7 30.28 7 30.28a17.42 17.42 0 012.52-5.41 31.53 31.53 0 012.28-3l1 1 4.72 4.82a.54.54 0 010 .72l-4.93 5.47zm10.48 13.81a7.29 7.29 0 01-5.4-12.14c1.54-1.83 3.42-3.63 5.46-6 2.42 2.58 4 4.35 5.55 6.29a3.08 3.08 0 01.32.48 7.15 7.15 0 011.3 4.12 7.23 7.23 0 01-7.23 7.25zM35 38.14a.84.84 0 01-.67.58h-.14a1.22 1.22 0 01-.68-.55 37.77 37.77 0 00-4.28-5.31l-1.93-2-6.41-6.65a54 54 0 01-3.84-3.94 1.3 1.3 0 00-.1-.15 3.84 3.84 0 01-.51-1v-.19a3.4 3.4 0 011-3c1.24-1.24 2.49-2.49 3.67-3.79 1.3 1.44 2.69 2.82 4.06 4.19a57.6 57.6 0 017.55 8.58A16 16 0 0135.65 34a14.55 14.55 0 01-.65 4.14z\"/>
      </svg>
    </span>
  </span>
{% endblock %}
", "core/themes/olivero/templates/block/block--system-powered-by-block.html.twig", "C:\\xampp\\htdocs\\management\\web\\core\\themes\\olivero\\templates\\block\\block--system-powered-by-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 15);
        static $filters = array("escape" => 13, "t" => 17);
        static $functions = array("attach_library" => 13);

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
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
