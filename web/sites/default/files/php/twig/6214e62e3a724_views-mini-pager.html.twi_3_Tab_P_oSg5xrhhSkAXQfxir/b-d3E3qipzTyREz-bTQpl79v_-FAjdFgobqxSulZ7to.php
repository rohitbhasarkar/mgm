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

/* core/themes/claro/templates/views/views-mini-pager.html.twig */
class __TwigTemplate_bfa5f00800152bcb92c3ea8b02cb853e96cb9ad988a5f61da3e156fc67a0f7f5 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/claro/templates/views/views-mini-pager.html.twig"));

        // line 14
        $context["pager_action_classes"] = [0 => "pager__link", 1 => "pager__link--mini", 2 => "pager__link--action-link"];
        // line 20
        if ((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 20) || twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 20))) {
            // line 21
            echo "  <nav";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "pager"], "method", false, false, true, 21), "setAttribute", [0 => "role", 1 => "navigation"], "method", false, false, true, 21), "setAttribute", [0 => "aria-labelledby", 1 => ($context["heading_id"] ?? null)], "method", false, false, true, 21), 21, $this->source), "html", null, true);
            echo ">
    <h4";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "visually-hidden"], "method", false, false, true, 22), "setAttribute", [0 => "id", 1 => ($context["heading_id"] ?? null)], "method", false, false, true, 22), 22, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h4>
    <ul";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "pager__items", 1 => "js-pager__items"], "method", false, false, true, 23), 23, $this->source), "html", null, true);
            echo ">
      ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 24)) {
                // line 25
                echo "        ";
                ob_start();
                // line 26
                echo "          <li class=\"pager__item pager__item--mini pager__item--action pager__item--previous\">
            <a";
                // line 27
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 27), "attributes", [], "any", false, false, true, 27), "addClass", [0 => ($context["pager_action_classes"] ?? null)], "method", false, false, true, 27), "setAttribute", [0 => "title", 1 => t("Go to previous page")], "method", false, false, true, 27), "setAttribute", [0 => "href", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 27), "href", [], "any", false, false, true, 27)], "method", false, false, true, 27), 27, $this->source), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 28
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "</span>
            </a>
          </li>
        ";
                $___internal_bbaa2d4610955e1140fecf590b098a1c344a19dc555895b06e44b1043e1f08c2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 25
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_bbaa2d4610955e1140fecf590b098a1c344a19dc555895b06e44b1043e1f08c2_));
                // line 32
                echo "      ";
            }
            // line 33
            echo "
      ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 34)) {
                // line 35
                echo "        <li class=\"pager__item pager__item--mini pager__item--current\">
          <span class=\"visually-hidden\">
            ";
                // line 37
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Current page"));
                echo "
          </span>
          ";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "
        </li>
      ";
            }
            // line 42
            echo "
      ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 43)) {
                // line 44
                echo "        ";
                ob_start();
                // line 45
                echo "          <li class=\"pager__item pager__item--mini pager__item--action pager__item--next\">
            <a";
                // line 46
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 46), "attributes", [], "any", false, false, true, 46), "addClass", [0 => ($context["pager_action_classes"] ?? null)], "method", false, false, true, 46), "setAttribute", [0 => "title", 1 => t("Go to next page")], "method", false, false, true, 46), "setAttribute", [0 => "href", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 46), "href", [], "any", false, false, true, 46)], "method", false, false, true, 46), 46, $this->source), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 47
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "</span>
            </a>
          </li>
        ";
                $___internal_c466edbe5a945187e961520c59318acbdf5afdec598a168969860ef025494320_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_c466edbe5a945187e961520c59318acbdf5afdec598a168969860ef025494320_));
                // line 51
                echo "      ";
            }
            // line 52
            echo "    </ul>
  </nav>
";
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/views/views-mini-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 52,  129 => 51,  127 => 44,  120 => 47,  116 => 46,  113 => 45,  110 => 44,  108 => 43,  105 => 42,  99 => 39,  94 => 37,  90 => 35,  88 => 34,  85 => 33,  82 => 32,  80 => 25,  73 => 28,  69 => 27,  66 => 26,  63 => 25,  61 => 24,  57 => 23,  51 => 22,  46 => 21,  44 => 20,  42 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a views mini-pager.
 *
 * Available variables:
 * - heading_id: Pagination heading ID.
 * - items: List of pager items.
 *
 * @see template_preprocess_views_mini_pager()
 */
#}
{%
  set pager_action_classes = [
    'pager__link',
    'pager__link--mini',
    'pager__link--action-link'
  ]
%}
{% if items.previous or items.next %}
  <nav{{ attributes.addClass('pager').setAttribute('role', 'navigation').setAttribute('aria-labelledby', heading_id) }}>
    <h4{{ title_attributes.addClass('visually-hidden').setAttribute('id', heading_id) }}>{{ 'Pagination'|t }}</h4>
    <ul{{ content_attributes.addClass('pager__items', 'js-pager__items') }}>
      {% if items.previous %}
        {% apply spaceless %}
          <li class=\"pager__item pager__item--mini pager__item--action pager__item--previous\">
            <a{{ items.previous.attributes.addClass(pager_action_classes).setAttribute('title', 'Go to previous page'|t).setAttribute('href', items.previous.href) }}>
              <span class=\"visually-hidden\">{{ 'Previous page'|t }}</span>
            </a>
          </li>
        {% endapply %}
      {% endif %}

      {% if items.current %}
        <li class=\"pager__item pager__item--mini pager__item--current\">
          <span class=\"visually-hidden\">
            {{ 'Current page'|t }}
          </span>
          {{ items.current }}
        </li>
      {% endif %}

      {% if items.next %}
        {% apply spaceless %}
          <li class=\"pager__item pager__item--mini pager__item--action pager__item--next\">
            <a{{ items.next.attributes.addClass(pager_action_classes).setAttribute('title', 'Go to next page'|t).setAttribute('href', items.next.href) }}>
              <span class=\"visually-hidden\">{{ 'Next page'|t }}</span>
            </a>
          </li>
        {% endapply %}
      {% endif %}
    </ul>
  </nav>
{% endif %}
", "core/themes/claro/templates/views/views-mini-pager.html.twig", "C:\\xampp\\htdocs\\management\\web\\core\\themes\\claro\\templates\\views\\views-mini-pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "if" => 20, "apply" => 25);
        static $filters = array("escape" => 21, "t" => 22, "spaceless" => 25);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'apply'],
                ['escape', 't', 'spaceless'],
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
