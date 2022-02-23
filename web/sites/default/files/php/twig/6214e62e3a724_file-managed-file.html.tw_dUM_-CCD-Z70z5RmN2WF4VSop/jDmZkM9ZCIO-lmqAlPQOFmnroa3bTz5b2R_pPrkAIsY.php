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

/* @claro/content-edit/file-managed-file.html.twig */
class __TwigTemplate_4a0afb895a420a8be3af8378076e3de73f99aeaf58a5433f7e01bf9da53b110d extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@claro/content-edit/file-managed-file.html.twig"));

        // line 25
        $context["classes"] = [0 => "js-form-managed-file", 1 => "form-managed-file", 2 => ((        // line 28
($context["multiple"] ?? null)) ? ("is-multiple") : ("is-single")), 3 => ((        // line 29
($context["upload"] ?? null)) ? ("has-upload") : ("no-upload")), 4 => ((        // line 30
($context["has_value"] ?? null)) ? ("has-value") : ("no-value")), 5 => ((        // line 31
($context["has_meta"] ?? null)) ? ("has-meta") : ("no-meta"))];
        // line 34
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 34), "removeClass", [0 => "clearfix"], "method", false, false, true, 34), 34, $this->source), "html", null, true);
        echo ">
  <div class=\"form-managed-file__main\">
    ";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["main_items"] ?? null), "filename", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "
    ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["main_items"] ?? null), 37, $this->source), "filename"), "html", null, true);
        echo "
  </div>

  ";
        // line 40
        if ((($context["has_meta"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "preview", [], "any", false, false, true, 40))) {
            // line 41
            echo "  <div class=\"form-managed-file__meta-wrapper\">
    <div class=\"form-managed-file__meta\">
      ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "preview", [], "any", false, false, true, 43)) {
                // line 44
                echo "        <div class=\"form-managed-file__image-preview image-preview\">
          <div class=\"image-preview__img-wrapper\">
            ";
                // line 46
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "preview", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                echo "
          </div>
        </div>
      ";
            }
            // line 50
            echo "
      ";
            // line 51
            if ((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "description", [], "any", false, false, true, 51) || ($context["display"] ?? null)) || twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "alt", [], "any", false, false, true, 51)) || twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "title", [], "any", false, false, true, 51))) {
                // line 52
                echo "        <div class=\"form-managed-file__meta-items\">
          ";
                // line 53
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "description", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                echo "
          ";
                // line 54
                if (($context["display"] ?? null)) {
                    // line 55
                    echo "            ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "display", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                    echo "
          ";
                }
                // line 57
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "alt", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                echo "
          ";
                // line 58
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "title", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 61
            echo "    </div>
  </div>
  ";
        }
        // line 64
        echo "
  ";
        // line 66
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["data"] ?? null), 66, $this->source), "preview", "alt", "title", "description", "display"), "html", null, true);
        echo "
</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@claro/content-edit/file-managed-file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 66,  119 => 64,  114 => 61,  108 => 58,  103 => 57,  97 => 55,  95 => 54,  91 => 53,  88 => 52,  86 => 51,  83 => 50,  76 => 46,  72 => 44,  70 => 43,  66 => 41,  64 => 40,  58 => 37,  54 => 36,  48 => 34,  46 => 31,  45 => 30,  44 => 29,  43 => 28,  42 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a file form widget.
 *
 * Available variables:
 * - main_items: Main render elements of the file or image widget:
 *   file name, upload input, upload and remove buttons and hidden inputs.
 * - data: Other render elements of the image widget like preview, alt or title,
 *   or the description input and the display checkbox of the file widget.
 * - display: A flag indicating whether the display field is visible.
 * - attributes: HTML attributes for the containing element.
 * - multiple: Whether this widget is the part of a multi-value file widget or
 *   not.
 * - upload: Whether the file upload input is displayed or not.
 * - has_value: true if the widget already contains a file.
 * - has_meta: true when the display checkbox or the description, alt or title
 *   inputs are enabled and at least one of them is visible.
 *
 * @see template_preprocess_file_managed_file()
 * @see claro_preprocess_file_managed_file()
 */
#}
{%
  set classes = [
    'js-form-managed-file',
    'form-managed-file',
    multiple ? 'is-multiple' : 'is-single',
    upload ? 'has-upload' : 'no-upload',
    has_value ? 'has-value' : 'no-value',
    has_meta ? 'has-meta' : 'no-meta',
  ]
%}
<div{{ attributes.addClass(classes).removeClass('clearfix') }}>
  <div class=\"form-managed-file__main\">
    {{ main_items.filename }}
    {{ main_items|without('filename') }}
  </div>

  {% if has_meta or data.preview %}
  <div class=\"form-managed-file__meta-wrapper\">
    <div class=\"form-managed-file__meta\">
      {% if data.preview %}
        <div class=\"form-managed-file__image-preview image-preview\">
          <div class=\"image-preview__img-wrapper\">
            {{ data.preview }}
          </div>
        </div>
      {% endif %}

      {% if data.description or display or data.alt or data.title %}
        <div class=\"form-managed-file__meta-items\">
          {{ data.description }}
          {% if display %}
            {{ data.display }}
          {% endif %}
          {{ data.alt }}
          {{ data.title }}
        </div>
      {% endif %}
    </div>
  </div>
  {% endif %}

  {# Every third-party addition will be rendered here. #}
  {{ data|without('preview', 'alt', 'title', 'description', 'display') }}
</div>
", "@claro/content-edit/file-managed-file.html.twig", "C:\\xampp\\htdocs\\management\\web\\core\\themes\\claro\\templates\\content-edit\\file-managed-file.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 25, "if" => 40);
        static $filters = array("escape" => 34, "without" => 37);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'without'],
                []
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
