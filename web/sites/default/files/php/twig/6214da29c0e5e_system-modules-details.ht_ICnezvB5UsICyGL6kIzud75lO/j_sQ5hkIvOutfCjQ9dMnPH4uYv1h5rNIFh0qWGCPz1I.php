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

/* core/themes/claro/templates/admin/system-modules-details.html.twig */
class __TwigTemplate_d812220cb3f0cf06f842606daeef1c78a6be25c8783b5719654e2fdd402636a3 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/claro/templates/admin/system-modules-details.html.twig"));

        // line 27
        echo "<table class=\"responsive-enabled module-list\">
  <thead>
    <tr>
      <th class=\"checkbox visually-hidden\">";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Installed"));
        echo "</th>
      <th class=\"name visually-hidden\">";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Name"));
        echo "</th>
      <th class=\"description visually-hidden priority-low\">";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Description"));
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 37
            echo "      <tr";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, true, 37), "addClass", [0 => "module-list__module"], "method", false, false, true, 37), 37, $this->source), "html", null, true);
            echo ">
        <td class=\"module-list__checkbox\">
          ";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["module"], "checkbox", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "
        </td>
        <td class=\"module-list__module\">
          <label id=\"";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["module"], "id", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "\" for=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["module"], "enable_id", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "\" class=\"module-list__module-name table-filter-text-source\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "</label>
        </td>
        <td class=\"expand priority-low module-list__description\">
          <details class=\"js-form-wrapper form-wrapper module-list__module-details claro-details\" id=\"";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["module"], "enable_id", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "-description\">
            <summary aria-controls=\"";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["module"], "enable_id", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "-description\" role=\"button\" aria-expanded=\"false\" class=\"claro-details__summary module-list__module-summary\"><span class=\"text module-description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["module"], "description", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "</span></summary>
            <div class=\"claro-details__wrapper module-details__wrapper\">
              <div class=\"module-details__description\">
                <div class=\"module-details__requirements\">
                  <div class=\"module-details__requirement\">";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Machine name: <span dir=\"ltr\" class=\"table-filter-text-source\">@machine-name</span>", ["@machine-name" => twig_get_attribute($this->env, $this->source, $context["module"], "machine_name", [], "any", false, false, true, 50)]));
            echo "</div>
                  ";
            // line 51
            if (twig_get_attribute($this->env, $this->source, $context["module"], "version", [], "any", false, false, true, 51)) {
                // line 52
                echo "                    <div class=\"module-details__requirement\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Version: @module-version", ["@module-version" => twig_get_attribute($this->env, $this->source, $context["module"], "version", [], "any", false, false, true, 52)]));
                echo "</div>
                  ";
            }
            // line 54
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, $context["module"], "requires", [], "any", false, false, true, 54)) {
                // line 55
                echo "                    <div class=\"module-details__requirement\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Requires: @module-list", ["@module-list" => twig_get_attribute($this->env, $this->source, $context["module"], "requires", [], "any", false, false, true, 55)]));
                echo "</div>
                  ";
            }
            // line 57
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, $context["module"], "required_by", [], "any", false, false, true, 57)) {
                // line 58
                echo "                    <div class=\"module-details__requirement\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Required by: @module-list", ["@module-list" => twig_get_attribute($this->env, $this->source, $context["module"], "required_by", [], "any", false, false, true, 58)]));
                echo "</div>
                  ";
            }
            // line 60
            echo "                </div>
                ";
            // line 61
            if (twig_get_attribute($this->env, $this->source, $context["module"], "links", [], "any", false, false, true, 61)) {
                // line 62
                echo "                  <div class=\"module-details__links\">
                    ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable([0 => "help", 1 => "permissions", 2 => "configure"]);
                foreach ($context['_seq'] as $context["_key"] => $context["link_type"]) {
                    // line 64
                    echo "                      ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["module"], "links", [], "any", false, false, true, 64)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["link_type"]] ?? null) : null), 64, $this->source), "html", null, true);
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link_type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "                  </div>
                ";
            }
            // line 68
            echo "              </div>
            </div>
          </details>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "  </tbody>
</table>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/admin/system-modules-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 74,  156 => 68,  152 => 66,  143 => 64,  139 => 63,  136 => 62,  134 => 61,  131 => 60,  125 => 58,  122 => 57,  116 => 55,  113 => 54,  107 => 52,  105 => 51,  101 => 50,  92 => 46,  88 => 45,  78 => 42,  72 => 39,  66 => 37,  62 => 36,  55 => 32,  51 => 31,  47 => 30,  42 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for the modules listing page.
 *
 * Displays a list of all packages in a project.
 *
 * Available variables:
 * - modules: Contains multiple module instances. Each module contains:
 *   - attributes: Attributes on the row.
 *   - checkbox: A checkbox for enabling the module.
 *   - name: The human-readable name of the module.
 *   - id: A unique identifier for interacting with the details element.
 *   - enable_id: A unique identifier for interacting with the checkbox element.
 *   - description: The description of the module.
 *   - machine_name: The module's machine name.
 *   - version: Information about the module version.
 *   - requires: A list of modules that this module requires.
 *   - required_by: A list of modules that require this module.
 *   - links: A list of administration links provided by the module.
 *
 * @see template_preprocess_system_modules_details()
 *
 * @ingroup themeable
 */
#}
<table class=\"responsive-enabled module-list\">
  <thead>
    <tr>
      <th class=\"checkbox visually-hidden\">{{ 'Installed'|t }}</th>
      <th class=\"name visually-hidden\">{{ 'Name'|t }}</th>
      <th class=\"description visually-hidden priority-low\">{{ 'Description'|t }}</th>
    </tr>
  </thead>
  <tbody>
    {% for module in modules %}
      <tr{{ module.attributes.addClass('module-list__module') }}>
        <td class=\"module-list__checkbox\">
          {{ module.checkbox }}
        </td>
        <td class=\"module-list__module\">
          <label id=\"{{ module.id }}\" for=\"{{ module.enable_id }}\" class=\"module-list__module-name table-filter-text-source\">{{ module.name }}</label>
        </td>
        <td class=\"expand priority-low module-list__description\">
          <details class=\"js-form-wrapper form-wrapper module-list__module-details claro-details\" id=\"{{ module.enable_id }}-description\">
            <summary aria-controls=\"{{ module.enable_id }}-description\" role=\"button\" aria-expanded=\"false\" class=\"claro-details__summary module-list__module-summary\"><span class=\"text module-description\">{{ module.description }}</span></summary>
            <div class=\"claro-details__wrapper module-details__wrapper\">
              <div class=\"module-details__description\">
                <div class=\"module-details__requirements\">
                  <div class=\"module-details__requirement\">{{ 'Machine name: <span dir=\"ltr\" class=\"table-filter-text-source\">@machine-name</span>'|t({'@machine-name': module.machine_name }) }}</div>
                  {% if module.version %}
                    <div class=\"module-details__requirement\">{{ 'Version: @module-version'|t({'@module-version': module.version }) }}</div>
                  {% endif %}
                  {% if module.requires %}
                    <div class=\"module-details__requirement\">{{ 'Requires: @module-list'|t({'@module-list': module.requires }) }}</div>
                  {% endif %}
                  {% if module.required_by %}
                    <div class=\"module-details__requirement\">{{ 'Required by: @module-list'|t({'@module-list': module.required_by }) }}</div>
                  {% endif %}
                </div>
                {% if module.links %}
                  <div class=\"module-details__links\">
                    {% for link_type in ['help', 'permissions', 'configure'] %}
                      {{ module.links[link_type] }}
                    {% endfor %}
                  </div>
                {% endif %}
              </div>
            </div>
          </details>
        </td>
      </tr>
    {% endfor %}
  </tbody>
</table>
", "core/themes/claro/templates/admin/system-modules-details.html.twig", "C:\\xampp\\htdocs\\management\\web\\core\\themes\\claro\\templates\\admin\\system-modules-details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 36, "if" => 51);
        static $filters = array("t" => 30, "escape" => 37);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['t', 'escape'],
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
